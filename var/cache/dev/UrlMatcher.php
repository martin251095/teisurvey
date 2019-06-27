<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/users/login' => [[['_route' => 'users_login', '_controller' => 'App\\Controller\\AccountController::login'], null, null, null, false, false, null]],
        '/users/logout' => [[['_route' => 'users_logout', '_controller' => 'App\\Controller\\AccountController::logout'], null, null, null, false, false, null]],
        '/resetting/check-email' => [
            [['_route' => 'check_email', '_controller' => 'App\\Controller\\RedirectController::redirectRequest'], null, null, null, false, false, null],
            [['_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null],
        ],
        '/profile' => [
            [['_route' => 'profile', '_controller' => 'App\\Controller\\RedirectController::redirectReset'], null, null, null, false, false, null],
            [['_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'], null, ['GET' => 0], null, true, false, null],
        ],
        '/resetting/request' => [
            [['_route' => 'request', '_controller' => 'App\\Controller\\RedirectController::blockAccess'], null, null, null, false, false, null],
            [['_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'], null, ['GET' => 0], null, false, false, null],
        ],
        '/admin/answer/add' => [[['_route' => 'admin_answer_add', '_controller' => 'App\\Controller\\Admin\\AdminAnswerController::add'], null, null, null, false, false, null]],
        '/admin/category/add' => [[['_route' => 'admin_category_add', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::add'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_homepage', '_controller' => 'App\\Controller\\Admin\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\Admin\\AdminController::dashboard'], null, null, null, false, false, null]],
        '/admin/question/add' => [[['_route' => 'admin_question_add', '_controller' => 'App\\Controller\\Admin\\AdminQuestionController::add'], null, null, null, false, false, null]],
        '/admin/quiz/add' => [[['_route' => 'admin_quiz_add', '_controller' => 'App\\Controller\\Admin\\AdminQuizController::add'], null, null, null, false, false, null]],
        '/admin/survey/add' => [[['_route' => 'admin_survey_add', '_controller' => 'App\\Controller\\Admin\\AdminSurveyController::add'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_list', '_controller' => 'App\\Controller\\Admin\\AdminUsersController::list'], null, null, null, false, false, null]],
        '/admin/user/add' => [[['_route' => 'admin_user_add', '_controller' => 'App\\Controller\\Admin\\AdminUsersController::add'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login_check' => [[['_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'], null, ['POST' => 0], null, false, false, null]],
        '/logout' => [[['_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/edit' => [[['_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile/change-password' => [[['_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/resetting/send-email' => [[['_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'], null, ['POST' => 0], null, false, false, null]],
        '/registration' => [[['_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/registration/check-email' => [[['_route' => 'fos_user_registration_check_email', '_controller' => 'fos_user.registration.controller:checkEmailAction'], null, ['GET' => 0], null, false, false, null]],
        '/registration/confirmed' => [[['_route' => 'fos_user_registration_confirmed', '_controller' => 'fos_user.registration.controller:confirmedAction'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|answer(?'
                        .'|(?:/(\\d+))?(*:199)'
                        .'|/([^/]++)/(?'
                            .'|edit(*:224)'
                            .'|delete(*:238)'
                        .')'
                    .')'
                    .'|category(?'
                        .'|(?:/(\\d+))?(*:270)'
                        .'|/([^/]++)/(?'
                            .'|edit(*:295)'
                            .'|delete(*:309)'
                        .')'
                    .')'
                    .'|qu(?'
                        .'|estion(?'
                            .'|(?:/(\\d+))?(*:344)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:369)'
                                .'|delete(*:383)'
                            .')'
                        .')'
                        .'|iz(?'
                            .'|(?:/(\\d+))?(*:409)'
                            .'|/([^/]++)/(?'
                                .'|edit(*:434)'
                                .'|delete(*:448)'
                            .')'
                        .')'
                    .')'
                    .'|survey(?'
                        .'|answer(?'
                            .'|(?:/(\\d+))?(*:488)'
                            .'|/([^/]++)/de(?'
                                .'|tails(*:516)'
                                .'|lete(*:528)'
                            .')'
                        .')'
                        .'|(?:/(\\d+))?(*:549)'
                        .'|/([^/]++)/(?'
                            .'|edit(*:574)'
                            .'|delete(*:588)'
                        .')'
                    .')'
                    .'|user/([^/]++)/(?'
                        .'|edit(*:619)'
                        .'|delete(*:633)'
                    .')'
                .')'
                .'|/(en|fr|nl)/(?'
                    .'|contact(*:665)'
                    .'|home(*:677)'
                    .'|admin/(?'
                        .'|quizanswer(?'
                            .'|(?:/(\\d+))?(*:718)'
                            .'|/([^/]++)/details(*:743)'
                        .')'
                        .'|surveyanswer/([^/]++)/delete(*:780)'
                    .')'
                    .'|quiz(?'
                        .'|answer/([^/]++)/details(*:819)'
                        .'|(?:/(\\d+))?(*:838)'
                        .'|/(?'
                            .'|create(*:856)'
                            .'|([^/]++)(*:872)'
                        .')'
                    .')'
                    .'|thanks(?'
                        .'|(*:891)'
                    .')'
                    .'|survey(?'
                        .'|(?:/(\\d+))?(*:920)'
                        .'|/(?'
                            .'|create(*:938)'
                            .'|([^/]++)(*:954)'
                        .')'
                    .')'
                .')'
                .'|/(en|fr|nl)?(*:977)'
                .'|/re(?'
                    .'|setting/reset/([^/]++)(*:1013)'
                    .'|gistration/confirm/([^/]++)(*:1049)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        199 => [[['_route' => 'admin_answer_list', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\AdminAnswerController::list'], ['page'], null, null, false, true, null]],
        224 => [[['_route' => 'admin_answer_edit', '_controller' => 'App\\Controller\\Admin\\AdminAnswerController::edit'], ['id'], null, null, false, false, null]],
        238 => [[['_route' => 'admin_answer_delete', '_controller' => 'App\\Controller\\Admin\\AdminAnswerController::delete'], ['id'], null, null, false, false, null]],
        270 => [[['_route' => 'admin_category_list', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::list'], ['page'], null, null, false, true, null]],
        295 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::edit'], ['id'], null, null, false, false, null]],
        309 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\AdminCategoryController::delete'], ['id'], null, null, false, false, null]],
        344 => [[['_route' => 'admin_question_list', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\AdminQuestionController::list'], ['page'], null, null, false, true, null]],
        369 => [[['_route' => 'admin_question_edit', '_controller' => 'App\\Controller\\Admin\\AdminQuestionController::edit'], ['id'], null, null, false, false, null]],
        383 => [[['_route' => 'admin_question_delete', '_controller' => 'App\\Controller\\Admin\\AdminQuestionController::delete'], ['id'], null, null, false, false, null]],
        409 => [[['_route' => 'admin_quiz_list', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\AdminQuizController::list'], ['page'], null, null, false, true, null]],
        434 => [[['_route' => 'admin_quiz_edit', '_controller' => 'App\\Controller\\Admin\\AdminQuizController::edit'], ['id'], null, null, false, false, null]],
        448 => [[['_route' => 'admin_quiz_delete', '_controller' => 'App\\Controller\\Admin\\AdminQuizController::delete'], ['id'], null, null, false, false, null]],
        488 => [[['_route' => 'admin_surveyanswer_list', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\AdminSurveyAnswerController::list'], ['page'], null, null, false, true, null]],
        516 => [[['_route' => 'admin_surveyanswer_details', '_controller' => 'App\\Controller\\Admin\\AdminSurveyAnswerController::details'], ['id'], null, null, false, false, null]],
        528 => [[['_route' => 'admin_surveyanswer_delete', '_controller' => 'App\\Controller\\Admin\\AdminSurveyAnswerController::delete'], ['id'], null, null, false, false, null]],
        549 => [[['_route' => 'admin_survey_list', 'page' => '1', '_controller' => 'App\\Controller\\Admin\\AdminSurveyController::list'], ['page'], null, null, false, true, null]],
        574 => [[['_route' => 'admin_survey_edit', '_controller' => 'App\\Controller\\Admin\\AdminSurveyController::edit'], ['id'], null, null, false, false, null]],
        588 => [[['_route' => 'admin_survey_delete', '_controller' => 'App\\Controller\\Admin\\AdminSurveyController::delete'], ['id'], null, null, false, false, null]],
        619 => [[['_route' => 'admin_user_edit', '_controller' => 'App\\Controller\\Admin\\AdminUsersController::edit'], ['id'], null, null, false, false, null]],
        633 => [[['_route' => 'admin_user_delete', '_controller' => 'App\\Controller\\Admin\\AdminUsersController::delete'], ['id'], null, null, false, false, null]],
        665 => [[['_route' => 'contact', '_controller' => 'App\\Controller\\Site\\Contact\\ContactController::home'], ['_locale'], null, null, false, false, null]],
        677 => [[['_route' => 'home', '_controller' => 'App\\Controller\\Site\\Home\\HomeController::home'], ['_locale'], null, null, false, false, null]],
        718 => [[['_route' => 'admin_quizanswer_list', 'page' => '1', '_controller' => 'App\\Controller\\Site\\Quiz\\QuizAnswerController::listadmin'], ['_locale', 'page'], null, null, false, true, null]],
        743 => [[['_route' => 'admin_quizanswer_details', '_controller' => 'App\\Controller\\Site\\Quiz\\QuizAnswerController::detailsadmin'], ['_locale', 'id'], null, null, false, false, null]],
        780 => [[['_route' => 'admin_quizanswer_delete', '_controller' => 'App\\Controller\\Site\\Quiz\\QuizAnswerController::delete'], ['_locale', 'id'], null, null, false, false, null]],
        819 => [[['_route' => 'quizanswer_details', '_controller' => 'App\\Controller\\Site\\Quiz\\QuizAnswerController::detailsfront'], ['_locale', 'id'], null, null, false, false, null]],
        838 => [[['_route' => 'quiz_list', 'page' => '1', '_controller' => 'App\\Controller\\Site\\Quiz\\QuizController::list'], ['_locale', 'page'], null, null, false, true, null]],
        856 => [[['_route' => 'quiz_create', '_controller' => 'App\\Controller\\Site\\Quiz\\QuizController::create'], ['_locale'], null, null, false, false, null]],
        872 => [[['_route' => 'quiz_show', '_controller' => 'App\\Controller\\Site\\Quiz\\QuizController::show'], ['_locale', 'slug'], null, null, false, true, null]],
        891 => [
            [['_route' => 'quiz_thanks', '_controller' => 'App\\Controller\\Site\\Quiz\\QuizController::thanks'], ['_locale'], null, null, false, false, null],
            [['_route' => 'survey_thanks', '_controller' => 'App\\Controller\\Site\\Survey\\SurveyController::thanks'], ['_locale'], null, null, false, false, null],
        ],
        920 => [[['_route' => 'survey_list', 'page' => '1', '_controller' => 'App\\Controller\\Site\\Survey\\SurveyController::list'], ['_locale', 'page'], null, null, false, true, null]],
        938 => [[['_route' => 'survey_create', '_controller' => 'App\\Controller\\Site\\Survey\\SurveyController::create'], ['_locale'], null, null, false, false, null]],
        954 => [[['_route' => 'survey_show', '_controller' => 'App\\Controller\\Site\\Survey\\SurveyController::show'], ['_locale', 'slug'], null, null, false, true, null]],
        977 => [[['_route' => 'homepage', '_locale' => 'en', '_controller' => 'App\\Controller\\Site\\Home\\HomeController::home'], ['_locale'], null, null, false, true, null]],
        1013 => [[['_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1049 => [
            [['_route' => 'fos_user_registration_confirm', '_controller' => 'fos_user.registration.controller:confirmAction'], ['token'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
