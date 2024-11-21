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
        '/application' => [[['_route' => 'application_submit', '_controller' => 'App\\Controller\\ApplicationController::submit'], null, null, null, false, false, null]],
        '/club' => [[['_route' => 'club_index', '_controller' => 'App\\Controller\\GClubsController::index'], null, null, null, true, false, null]],
        '/club/new' => [[['_route' => 'club_new', '_controller' => 'App\\Controller\\GClubsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/events' => [[['_route' => 'app_g_events', '_controller' => 'App\\Controller\\GEventsController::index'], null, null, null, true, false, null]],
        '/events/add' => [[['_route' => 'app_g_events_add', '_controller' => 'App\\Controller\\GEventsController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/g/recrutements' => [[['_route' => 'app_g_recrutements', '_controller' => 'App\\Controller\\GRecrutementsController::index'], null, null, null, false, false, null]],
        '/g/ressources' => [[['_route' => 'app_g_ressources', '_controller' => 'App\\Controller\\GRessourcesController::index'], null, null, null, false, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\GUsersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/users' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\GUsersController::index'], null, ['GET' => 0], null, false, false, null]],
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
                .'|/club/(?'
                    .'|([^/]++)(?'
                        .'|(*:222)'
                        .'|/(?'
                            .'|a(?'
                                .'|cceptApplication/([^/]++)(*:263)'
                                .'|pplications(*:282)'
                            .')'
                            .'|rejectApplication/([^/]++)(*:317)'
                            .'|edit(*:329)'
                        .')'
                    .')'
                    .'|club/([^/]++)(*:352)'
                    .'|delete/([^/]++)(*:375)'
                .')'
                .'|/events/(?'
                    .'|show/([^/]++)(*:408)'
                    .'|update/([^/]++)(*:431)'
                    .'|delete/([^/]++)(*:454)'
                .')'
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
        222 => [[['_route' => 'club_show', '_controller' => 'App\\Controller\\GClubsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        263 => [[['_route' => 'club_accept_application', '_controller' => 'App\\Controller\\GClubsController::acceptApplication'], ['id', 'applicationId'], ['POST' => 0], null, false, true, null]],
        282 => [[['_route' => 'club_applications', '_controller' => 'App\\Controller\\GClubsController::showClubApplications'], ['clubId'], null, null, false, false, null]],
        317 => [[['_route' => 'club_reject_application', '_controller' => 'App\\Controller\\GClubsController::rejectApplication'], ['id', 'applicationId'], ['POST' => 0], null, false, true, null]],
        329 => [[['_route' => 'club_edit', '_controller' => 'App\\Controller\\GClubsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        352 => [[['_route' => 'club_details', '_controller' => 'App\\Controller\\GClubsController::clubDetails'], ['id'], null, null, false, true, null]],
        375 => [[['_route' => 'club_delete', '_controller' => 'App\\Controller\\GClubsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        408 => [[['_route' => 'app_g_events_show', '_controller' => 'App\\Controller\\GEventsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        431 => [[['_route' => 'app_g_events_update', '_controller' => 'App\\Controller\\GEventsController::update'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        454 => [
            [['_route' => 'app_g_events_delete', '_controller' => 'App\\Controller\\GEventsController::delete'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
