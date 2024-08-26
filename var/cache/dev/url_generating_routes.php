<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'user_registration' => [[], ['_controller' => 'App\\Controller\\QuestionnaireController::register'], [], [['text', '/']], [], [], []],
    'questionnaire_step' => [['step', 'userId'], ['_controller' => 'App\\Controller\\QuestionnaireController::questionnaire'], [], [['variable', '/', '[^/]++', 'userId', true], ['variable', '/', '[^/]++', 'step', true], ['text', '/questionnaire']], [], [], []],
    'questionnaire_result' => [['userId'], ['_controller' => 'App\\Controller\\QuestionnaireController::result'], [], [['variable', '/', '[^/]++', 'userId', true], ['text', '/result']], [], [], []],
    'App\Controller\QuestionnaireController::register' => [[], ['_controller' => 'App\\Controller\\QuestionnaireController::register'], [], [['text', '/']], [], [], []],
    'App\Controller\QuestionnaireController::questionnaire' => [['step', 'userId'], ['_controller' => 'App\\Controller\\QuestionnaireController::questionnaire'], [], [['variable', '/', '[^/]++', 'userId', true], ['variable', '/', '[^/]++', 'step', true], ['text', '/questionnaire']], [], [], []],
    'App\Controller\QuestionnaireController::result' => [['userId'], ['_controller' => 'App\\Controller\\QuestionnaireController::result'], [], [['variable', '/', '[^/]++', 'userId', true], ['text', '/result']], [], [], []],
];
