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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/comment/add' => [[['_route' => 'comment_add', '_controller' => 'App\\Controller\\CommentaryController::addComment'], null, ['POST' => 0], null, false, false, null]],
        '/club' => [[['_route' => 'club_index', '_controller' => 'App\\Controller\\GClubsController::index'], null, null, null, true, false, null]],
        '/club/allClubs' => [[['_route' => 'club_manage', '_controller' => 'App\\Controller\\GClubsController::showClubs'], null, null, null, false, false, null]],
        '/club/listallClubs' => [[['_route' => 'club_list', '_controller' => 'App\\Controller\\GClubsController::list'], null, null, null, false, false, null]],
        '/club/new' => [[['_route' => 'club_new', '_controller' => 'App\\Controller\\GClubsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/events' => [
            [['_route' => 'app_g_events', '_controller' => 'App\\Controller\\GEventsController::index'], null, null, null, true, false, null],
            [['_route' => 'app_events', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null],
            [['_route' => 'user_dashboard'], null, null, null, false, false, null],
        ],
        '/events/events' => [[['_route' => 'app_event_list', '_controller' => 'App\\Controller\\GEventsController::search'], null, null, null, false, false, null]],
        '/events/show' => [[['_route' => 'app_g_events_show', '_controller' => 'App\\Controller\\GEventsController::show'], null, null, null, false, false, null]],
        '/g/recrutements' => [[['_route' => 'app_show_all_user', '_controller' => 'App\\Controller\\GRecrutementsController::show_alluser'], null, null, null, true, false, null]],
        '/g/recrutements/search' => [[['_route' => 'recruitment_search', '_controller' => 'App\\Controller\\GRecrutementsController::search'], null, null, null, false, false, null]],
        '/g/ressourcess' => [[['_route' => 'app_g_ressourcess', '_controller' => 'App\\Controller\\GRessourcesController::indexxx'], null, null, null, false, false, null]],
        '/dashboard/ressources/new' => [[['_route' => 'ressource_new', '_controller' => 'App\\Controller\\GRessourcesController::new'], null, null, null, false, false, null]],
        '/dashboard/ressources' => [[['_route' => 'app_g_ressources', '_controller' => 'App\\Controller\\GRessourcesController::index'], null, null, null, false, false, null]],
        '/demande/ressource' => [[['_route' => 'demande_ressource', '_controller' => 'App\\Controller\\GRessourcesController::demandeRessource'], null, null, null, false, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\GUsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\GUsersController::index'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\GusersController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/event/add' => [[['_route' => 'app_g_events_add', '_controller' => 'App\\Controller\\AdminController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/event/backoffice' => [[['_route' => 'app_event_dashboard_backoffice', '_controller' => 'App\\Controller\\AdminController::dashboardevents'], null, null, null, false, false, null]],
        '/admin/dash' => [[['_route' => 'app_show_all', '_controller' => 'App\\Controller\\AdminController::show_all'], null, null, null, false, false, null]],
        '/admin/add' => [[['_route' => 'recruitment_add', '_controller' => 'App\\Controller\\AdminController::recruitmentAdd'], null, null, null, false, false, null]],
        '/admin/dashboard1' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard1'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|pplication/submit/([^/]++)(*:233)'
                    .'|dmin/(?'
                        .'|e(?'
                            .'|vent/(?'
                                .'|update/([^/]++)(*:276)'
                                .'|delete/([^/]++)(*:299)'
                            .')'
                            .'|dit/([^/]++)(*:320)'
                        .')'
                        .'|de(?'
                            .'|lete/([^/]++)(*:347)'
                            .'|tails/([^/]++)(*:369)'
                        .')'
                        .'|application(?'
                            .'|s/([^/]++)(*:402)'
                            .'|/(?'
                                .'|decision/([^/]++)/([^/]++)(*:440)'
                                .'|([^/]++)/details(*:464)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/c(?'
                    .'|omment/reply/([^/]++)(*:502)'
                    .'|lub/(?'
                        .'|rating/([^/]++)(*:532)'
                        .'|([^/]++)(?'
<<<<<<< HEAD
                            .'|(*:551)'
                            .'|/(?'
                                .'|a(?'
                                    .'|cceptApplication/([^/]++)(*:592)'
                                    .'|pplications(*:611)'
                                .')'
                                .'|search(*:626)'
                                .'|rejectApplication/([^/]++)(*:660)'
                                .'|edit(*:672)'
                            .')'
                        .')'
                        .'|club/(\\d+)(*:692)'
                        .'|delete/([^/]++)(*:715)'
                    .')'
                .')'
                .'|/events/(?'
                    .'|participate/([^/]++)(*:756)'
                    .'|([^/]++)/cancel(*:779)'
                    .'|event/([^/]++)(?'
                        .'|(*:804)'
                        .'|/discussion(?'
                            .'|(*:826)'
                            .'|/post(*:839)'
=======
                            .'|(*:378)'
                            .'|/remove\\-member/([^/]++)(*:410)'
                        .')'
                        .'|club/([^/]++)/manage\\-members(*:448)'
                        .'|([^/]++)/(?'
                            .'|search(*:474)'
                            .'|rejectApplication/([^/]++)(*:508)'
                            .'|acceptApplication/([^/]++)(*:542)'
                            .'|edit(*:554)'
                            .'|pending\\-applications(*:583)'
                        .')'
                        .'|club/([^/]++)/applications\\-statistics(*:630)'
                        .'|([^/]++)/applications(*:659)'
                        .'|club/(\\d+)(*:677)'
                        .'|delete/([^/]++)(*:700)'
                    .')'
                .')'
                .'|/events/(?'
                    .'|participate/([^/]++)(*:741)'
                    .'|([^/]++)/cancel(*:764)'
                    .'|event/([^/]++)(?'
                        .'|(*:789)'
                        .'|/discussion(?'
                            .'|(*:811)'
                            .'|/post(*:824)'
>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31
                        .')'
                    .')'
                .')'
                .'|/g(?'
                    .'|/re(?'
                        .'|crutements/(?'
<<<<<<< HEAD
                            .'|recruitment/(?'
                                .'|details/([^/]++)(*:906)'
                                .'|([^/]++)/check(*:928)'
                            .')'
                            .'|appl(?'
                                .'|y/([^/]++)(*:954)'
                                .'|ication/delete/([^/]++)(*:985)'
                            .')'
                        .')'
                        .'|ssources/delete/(?'
                            .'|([^/]++)(*:1022)'
                            .'|confirm/([^/]++)(*:1047)'
                        .')'
                    .')'
                    .'|_ressources/backOffice/edit/([^/]++)(*:1094)'
                .')'
                .'|/uploads/(.+)(*:1117)'
=======
                            .'|de(?'
                                .'|tails/([^/]++)(*:879)'
                                .'|lete/([^/]++)(*:900)'
                            .')'
                            .'|edit/([^/]++)(*:922)'
                            .'|appl(?'
                                .'|y/([^/]++)(*:947)'
                                .'|ication(?'
                                    .'|s/([^/]++)(*:975)'
                                    .'|/(?'
                                        .'|decision/([^/]++)/([^/]++)(*:1013)'
                                        .'|([^/]++)/details(*:1038)'
                                    .')'
                                .')'
                            .')'
                        .')'
                        .'|ssources/delete/(?'
                            .'|([^/]++)(*:1078)'
                            .'|confirm/([^/]++)(*:1103)'
                        .')'
                    .')'
                    .'|_ressources/backOffice/edit/([^/]++)(*:1150)'
                .')'
                .'|/uploads/(.+)(*:1173)'
>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        233 => [[['_route' => 'application_submit_club', '_controller' => 'App\\Controller\\ApplicationController::submitForClub'], ['clubId'], ['POST' => 0], null, false, true, null]],
<<<<<<< HEAD
        276 => [[['_route' => 'app_g_events_update', '_controller' => 'App\\Controller\\AdminController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        299 => [[['_route' => 'app_g_events_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        320 => [[['_route' => 'recruitment_edit', '_controller' => 'App\\Controller\\AdminController::edit'], ['id'], null, null, false, true, null]],
        347 => [[['_route' => 'Recruitment_delete', '_controller' => 'App\\Controller\\AdminController::authorDelete1'], ['id'], null, null, false, true, null]],
        369 => [[['_route' => 'recruitment_details', '_controller' => 'App\\Controller\\AdminController::showDetails'], ['id'], null, null, false, true, null]],
        402 => [[['_route' => 'recruitment_applications', '_controller' => 'App\\Controller\\AdminController::listApplications'], ['id'], null, null, false, true, null]],
        440 => [[['_route' => 'application_decision', '_controller' => 'App\\Controller\\AdminController::applicationDecision'], ['id', 'decision'], null, null, false, true, null]],
        464 => [[['_route' => 'application_details', '_controller' => 'App\\Controller\\AdminController::showApplicationDetails'], ['id'], null, null, false, false, null]],
        502 => [[['_route' => 'comment_reply', '_controller' => 'App\\Controller\\CommentaryController::addReply'], ['commentId'], ['POST' => 0], null, false, true, null]],
        532 => [[['_route' => 'rate_club', '_controller' => 'App\\Controller\\GClubsController::rateClub'], ['id'], null, null, false, true, null]],
        551 => [[['_route' => 'club_show', '_controller' => 'App\\Controller\\GClubsController::showMembers'], ['id'], ['GET' => 0], null, false, true, null]],
        592 => [[['_route' => 'club_accept_application', '_controller' => 'App\\Controller\\GClubsController::acceptApplication'], ['id', 'applicationId'], ['POST' => 0], null, false, true, null]],
        611 => [[['_route' => 'club_applications', '_controller' => 'App\\Controller\\GClubsController::showClubApplications'], ['clubId'], null, null, false, false, null]],
        626 => [[['_route' => 'club_search_by_id', '_controller' => 'App\\Controller\\GClubsController::searchById'], ['id'], ['GET' => 0], null, false, false, null]],
        660 => [[['_route' => 'club_reject_application', '_controller' => 'App\\Controller\\GClubsController::rejectApplication'], ['id', 'applicationId'], ['POST' => 0], null, false, true, null]],
        672 => [[['_route' => 'club_edit', '_controller' => 'App\\Controller\\GClubsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        692 => [[['_route' => 'club_details', '_controller' => 'App\\Controller\\GClubsController::clubDetails'], ['id'], null, null, false, true, null]],
        715 => [[['_route' => 'club_delete', '_controller' => 'App\\Controller\\GClubsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        756 => [[['_route' => 'app_event_participate', '_controller' => 'App\\Controller\\GEventsController::participate'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        779 => [[['_route' => 'app_event_cancel_participation', '_controller' => 'App\\Controller\\GEventsController::cancelParticipation'], ['id'], null, null, false, false, null]],
        804 => [[['_route' => 'event_details', '_controller' => 'App\\Controller\\GEventsController::showev'], ['id'], null, null, false, true, null]],
        826 => [[['_route' => 'event_discussion', '_controller' => 'App\\Controller\\GEventsController::eventDiscussion'], ['id'], null, null, false, false, null]],
        839 => [[['_route' => 'event_post_message', '_controller' => 'App\\Controller\\GEventsController::postMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        906 => [[['_route' => 'user_recruitment_details', '_controller' => 'App\\Controller\\GRecrutementsController::showDetailsForUser'], ['id'], null, null, false, true, null]],
        928 => [[['_route' => 'check_application_status', '_controller' => 'App\\Controller\\GRecrutementsController::checkApplicationStatus'], ['id'], null, null, false, false, null]],
        954 => [[['_route' => 'recruitment_apply', '_controller' => 'App\\Controller\\GRecrutementsController::apply'], ['id'], null, null, false, true, null]],
        985 => [[['_route' => 'application_delete', '_controller' => 'App\\Controller\\GRecrutementsController::deleteApplication'], ['id'], null, null, false, true, null]],
        1022 => [[['_route' => 'ressource_delete', '_controller' => 'App\\Controller\\GRessourcesController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        1047 => [[['_route' => 'ressource_delete_confirm', '_controller' => 'App\\Controller\\GRessourcesController::confirmDelete'], ['id'], null, null, false, true, null]],
        1094 => [[['_route' => 'ressource_edit', '_controller' => 'App\\Controller\\GRessourcesController::edit'], ['id'], null, null, false, true, null]],
        1117 => [
=======
        270 => [[['_route' => 'app_g_events_update', '_controller' => 'App\\Controller\\AdminController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        293 => [[['_route' => 'app_g_events_delete', '_controller' => 'App\\Controller\\AdminController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        329 => [[['_route' => 'comment_reply', '_controller' => 'App\\Controller\\CommentaryController::addReply'], ['commentId'], ['POST' => 0], null, false, true, null]],
        359 => [[['_route' => 'rate_club', '_controller' => 'App\\Controller\\GClubsController::rateClub'], ['id'], null, null, false, true, null]],
        378 => [[['_route' => 'club_show', '_controller' => 'App\\Controller\\GClubsController::showMembers'], ['id'], ['GET' => 0], null, false, true, null]],
        410 => [[['_route' => 'remove_member', '_controller' => 'App\\Controller\\GClubsController::removeMember'], ['clubId', 'memberId'], ['POST' => 0], null, false, true, null]],
        448 => [[['_route' => 'club_manage_members', '_controller' => 'App\\Controller\\GClubsController::manageMembers'], ['id'], null, null, false, false, null]],
        474 => [[['_route' => 'club_search_by_id', '_controller' => 'App\\Controller\\GClubsController::searchById'], ['id'], ['GET' => 0], null, false, false, null]],
        508 => [[['_route' => 'club_reject_application', '_controller' => 'App\\Controller\\GClubsController::rejectApplication'], ['id', 'applicationId'], ['POST' => 0], null, false, true, null]],
        542 => [[['_route' => 'club_accept_application', '_controller' => 'App\\Controller\\GClubsController::acceptApplication'], ['id', 'applicationId'], ['POST' => 0], null, false, true, null]],
        554 => [[['_route' => 'club_edit', '_controller' => 'App\\Controller\\GClubsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        583 => [[['_route' => 'club_pending_applications', '_controller' => 'App\\Controller\\GClubsController::pendingApplications'], ['id'], ['GET' => 0], null, false, false, null]],
        630 => [[['_route' => 'club_applications_statistics', '_controller' => 'App\\Controller\\GClubsController::applicationsStatistics'], ['id'], null, null, false, false, null]],
        659 => [[['_route' => 'club_applications', '_controller' => 'App\\Controller\\GClubsController::showClubApplications'], ['clubId'], null, null, false, false, null]],
        677 => [[['_route' => 'club_details', '_controller' => 'App\\Controller\\GClubsController::clubDetails'], ['id'], null, null, false, true, null]],
        700 => [[['_route' => 'club_delete', '_controller' => 'App\\Controller\\GClubsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        741 => [[['_route' => 'app_event_participate', '_controller' => 'App\\Controller\\GEventsController::participate'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        764 => [[['_route' => 'app_event_cancel_participation', '_controller' => 'App\\Controller\\GEventsController::cancelParticipation'], ['id'], null, null, false, false, null]],
        789 => [[['_route' => 'event_details', '_controller' => 'App\\Controller\\GEventsController::showev'], ['id'], null, null, false, true, null]],
        811 => [[['_route' => 'event_discussion', '_controller' => 'App\\Controller\\GEventsController::eventDiscussion'], ['id'], null, null, false, false, null]],
        824 => [[['_route' => 'event_post_message', '_controller' => 'App\\Controller\\GEventsController::postMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        879 => [[['_route' => 'recruitement_details', '_controller' => 'App\\Controller\\GRecrutementsController::authorDetails'], ['id'], null, null, false, true, null]],
        900 => [[['_route' => 'Recruitment_delete', '_controller' => 'App\\Controller\\GRecrutementsController::authorDelete1'], ['id'], null, null, false, true, null]],
        922 => [[['_route' => 'recruitment_edit', '_controller' => 'App\\Controller\\GRecrutementsController::edit'], ['id'], null, null, false, true, null]],
        947 => [[['_route' => 'recruitment_apply', '_controller' => 'App\\Controller\\GRecrutementsController::apply'], ['id'], null, null, false, true, null]],
        975 => [[['_route' => 'recruitment_applications', '_controller' => 'App\\Controller\\GRecrutementsController::listApplications'], ['id'], null, null, false, true, null]],
        1013 => [[['_route' => 'application_decision', '_controller' => 'App\\Controller\\GRecrutementsController::applicationDecision'], ['id', 'decision'], null, null, false, true, null]],
        1038 => [[['_route' => 'application_details', '_controller' => 'App\\Controller\\GRecrutementsController::showApplicationDetails'], ['id'], null, null, false, false, null]],
        1078 => [[['_route' => 'ressource_delete', '_controller' => 'App\\Controller\\GRessourcesController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        1103 => [[['_route' => 'ressource_delete_confirm', '_controller' => 'App\\Controller\\GRessourcesController::confirmDelete'], ['id'], null, null, false, true, null]],
        1150 => [[['_route' => 'ressource_edit', '_controller' => 'App\\Controller\\GRessourcesController::edit'], ['id'], null, null, false, true, null]],
        1173 => [
>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31
            [['_route' => 'uploads', '_public' => true], ['path'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
