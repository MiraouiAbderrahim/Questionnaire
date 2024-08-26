<?php

namespace App\Controller;

use App\Entity\Questionnaire;
use App\Entity\User;
use App\Form\QuestionnaireType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionnaireController extends AbstractController
{
    #[Route('/', name: 'user_registration')]
    public function register(Request $request, EntityManagerInterface $em): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('questionnaire_step', ['step' => 1, 'userId' => $user->getId()]);
        }

        return $this->render('questionnaire/register.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/questionnaire/{step}/{userId}', name: 'questionnaire_step')]
    public function questionnaire(int $step, int $userId, Request $request, EntityManagerInterface $em): Response
    {
        $user = $em->getRepository(User::class)->find($userId);
    
        if (!$user) {
            throw $this->createNotFoundException('User not found');
        }
    
        $form = $this->createForm(QuestionnaireType::class, null, ['step' => $step]);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $score = $this->calculateScore($data, $step);
    
            $questionnaire = new Questionnaire();
            $questionnaire->setUser($user);
            $questionnaire->setScore($score);
            $em->persist($questionnaire);
            $em->flush();
    
            $nextStep = $this->getNextStep($step, $data);
    
            if ($nextStep > 5) {
                return $this->redirectToRoute('questionnaire_result', ['userId' => $userId]);
            } else {
                return $this->redirectToRoute('questionnaire_step', ['step' => $nextStep, 'userId' => $userId]);
            }
        }
    
        return $this->render('questionnaire/questionnaire.html.twig', [
            'form' => $form->createView(),
            'step' => $step,
            'userId' => $userId, 
        ]);
    }
    
    #[Route('/result/{userId}', name: 'questionnaire_result')]
    public function result(int $userId, EntityManagerInterface $em): Response
    {
        $user = $em->getRepository(User::class)->find($userId);
        $questionnaires = $em->getRepository(Questionnaire::class)->findBy(['user' => $user]);
    
        $totalScore = array_sum(array_map(fn($q) => $q->getScore(), $questionnaires));
    
        $result = $this->determineResult($totalScore);
        $rotationAngle = $this->calculateRotationAngle($totalScore);
    
        return $this->render('questionnaire/result.html.twig', [
            'user' => $user,
            'totalScore' => $totalScore,
            'result' => $result,
            'rotationAngle' => $rotationAngle, 
        ]);
    }
    
    
    private function calculateScore(array $data, int $step): int
    {
        $score = 0;
        switch ($step) {
            case 2:
                if ($data['q2'] === 'VMC Simple flux') $score = 5;
                if ($data['q2'] === 'VMC double flux') $score = 10;
                if ($data['q2'] === 'Extracteur') $score = 2;
                if ($data['q2'] === 'Je n’en ai pas') $score = -1;
                if ($data['q2'] === 'Je ne sais pas') $score = -3;
                break;

            case 3:
                if ($data['q3'] === 'Oui') $score = 5;
                if ($data['q3'] === 'Non') $score = -5;
                break;

            case 4:
                if ($data['q4'] === 'Oui') $score = -5;
                if ($data['q4'] === 'Non') $score = 1;
                break;

            case 5:
                if ($data['q5_1'] === 'Oui') $score -= 4;
                if ($data['q5_1'] === 'Non') $score += 1;

                if ($data['q5_2'] === 'Oui') $score -= 1;
                if ($data['q5_2'] === 'Non') $score += 1;

                if ($data['q5_3'] === 'Oui') $score -= 1;
                if ($data['q5_3'] === 'Non') $score += 1;

                if ($data['q5_4'] === 'Oui') $score -= 1;
                if ($data['q5_4'] === 'Non') $score += 1;

                if ($data['q5_5'] === 'Oui') $score += 3;
                if ($data['q5_5'] === 'Non') $score += 0;
                break;
        }

        return $score;
    }

    private function getNextStep(int $step, array $data): int
    {
        if ($step === 2) {
            if (in_array($data['q2'], ['VMC Simple flux', 'VMC double flux'])) {
                return 3;
            } else {
                return 4;
            }
        }

        if ($step === 3) {
            return 4;
        }

        if ($step === 4) {
            return 5;
        }

        return $step + 1;
    }


    private function determineResult(int $totalScore): string
    {
        if ($totalScore > 15) {
            return 'Excellent';
        } elseif ($totalScore >= 10) {
            return 'Très bonne';
        } elseif ($totalScore >= 5) {
            return 'Bonne';
        } elseif ($totalScore >= -1) {
            return 'Peut être amélioré';
        } else {
            return 'Mauvaise';
        }
    }
    private function calculateRotationAngle(int $totalScore): int
    {
        if ($totalScore > 15) {
            return 25; 
        } elseif ($totalScore >= 10) {
            return -25; 
        } elseif ($totalScore >= 5) {
            return 155;
        } elseif ($totalScore >= -1) {
            return 205; 
        } else {
            return 250;
        }
    }
    
}
