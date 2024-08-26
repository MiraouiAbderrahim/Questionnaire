<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'user_registration', '_controller' => 'App\\Controller\\QuestionnaireController::register'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/questionnaire/([^/]++)/([^/]++)(*:74)'
                .'|/result/([^/]++)(*:97)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        74 => [[['_route' => 'questionnaire_step', '_controller' => 'App\\Controller\\QuestionnaireController::questionnaire'], ['step', 'userId'], null, null, false, true, null]],
        97 => [
            [['_route' => 'questionnaire_result', '_controller' => 'App\\Controller\\QuestionnaireController::result'], ['userId'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
