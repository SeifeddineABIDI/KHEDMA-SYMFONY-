<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/annonce' => [[['_route' => 'app_annonce_index', '_controller' => 'App\\Controller\\AnnonceController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/annonce/admin' => [[['_route' => 'app_annonce_admin', '_controller' => 'App\\Controller\\AnnonceController::indexAdmin'], null, ['GET' => 0], null, false, false, null]],
        '/annonce/new' => [[['_route' => 'app_annonce_new', '_controller' => 'App\\Controller\\AnnonceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/annonce/annonce/search' => [[['_route' => 'annonce_search', '_controller' => 'App\\Controller\\AnnonceController::searchAnnonces'], null, null, null, false, false, null]],
        '/annonce/annonce/export/all' => [[['_route' => 'export_all_pdf', '_controller' => 'App\\Controller\\AnnonceController::exportAllPdfAction'], null, null, null, false, false, null]],
        '/homepage' => [[['_route' => 'app_home_page', '_controller' => 'App\\Controller\\AppController::index'], null, null, null, false, false, null]],
        '/alternate-page' => [[['_route' => 'app_alterpage', '_controller' => 'App\\Controller\\AppController::alternate'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/loginM' => [[['_route' => 'app_auth_loginm', '_controller' => 'App\\Controller\\AuthController::loginM'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chart' => [[['_route' => 'chart', '_controller' => 'App\\Controller\\ChartController::categoriesEvenements'], null, null, null, false, false, null]],
        '/classification' => [[['_route' => 'app_classification_index', '_controller' => 'App\\Controller\\ClassificationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/classification/new' => [[['_route' => 'app_classification_new', '_controller' => 'App\\Controller\\ClassificationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/evenement/freelancer' => [[['_route' => 'app_event_freelancer', '_controller' => 'App\\Controller\\EvenementController::indexFreelancer'], null, null, null, false, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/favoris' => [[['_route' => 'app_favori', '_controller' => 'App\\Controller\\FavorisController::index'], null, null, null, true, false, null]],
        '/metier' => [[['_route' => 'app_metier_index', '_controller' => 'App\\Controller\\MetierController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/metier/new' => [[['_route' => 'app_metier_new', '_controller' => 'App\\Controller\\MetierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/metier/metier/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\MetierController::Front'], null, null, null, false, false, null]],
        '/metier/metier/affichagefront' => [[['_route' => 'app_affichage_metier_front', '_controller' => 'App\\Controller\\MetierController::affichage_front'], null, null, null, false, false, null]],
        '/metier/stat/sta' => [[['_route' => 'app_cons_statt', '_controller' => 'App\\Controller\\MetierController::yourAction'], null, ['GET' => 0], null, false, false, null]],
        '/pdf/generator' => [[['_route' => 'app_pdf_generator', '_controller' => 'App\\Controller\\PdfGeneratorController::pdf'], null, null, null, false, false, null]],
        '/projet/new' => [[['_route' => 'app_projet_new', '_controller' => 'App\\Controller\\ProjetController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/raiting' => [[['_route' => 'app_raiting_index', '_controller' => 'App\\Controller\\RaitingController::index'], null, ['GET' => 0], null, true, false, null]],
        '/raiting/new' => [[['_route' => 'app_raiting_new', '_controller' => 'App\\Controller\\RaitingController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/sousmetier' => [[['_route' => 'app_sous_metier_index', '_controller' => 'App\\Controller\\SousMetierController::index'], null, null, null, true, false, null]],
        '/sousmetier/new' => [[['_route' => 'app_sous_metier_new', '_controller' => 'App\\Controller\\SousMetierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/sousmetier/stat/stat' => [[['_route' => 'app_cons_stat', '_controller' => 'App\\Controller\\SousMetierController::yourAction'], null, ['GET' => 0], null, false, false, null]],
        '/users/admin' => [[['_route' => 'app_user_list', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/users/all' => [[['_route' => 'app_user_allusers', '_controller' => 'App\\Controller\\UserController::AllUsers'], null, null, null, false, false, null]],
        '/users/create' => [[['_route' => 'app_user_create', '_controller' => 'App\\Controller\\UserController::new'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/annonce/export/all' => [[['_route' => 'export_pdf', '_controller' => 'App\\Controller\\AnnonceController::exportAllPdfAction'], null, null, null, false, false, null]],
        '/projet' => [[['_route' => 'app_projet_index', '_controller' => 'App\\Controller\\ProjetController::index'], null, null, null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|nnonce/(?'
                        .'|([^/]++)(*:30)'
                        .'|admin/([^/]++)(*:51)'
                        .'|([^/]++)(?'
                            .'|/edit(*:74)'
                            .'|(*:81)'
                        .')'
                        .'|admin/([^/]++)(*:103)'
                        .'|rechercheadmin(*:125)'
                    .')'
                    .'|utocomplete/([^/]++)(*:154)'
                .')'
                .'|/c(?'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:188)'
                        .'|/edit(*:201)'
                        .'|(*:209)'
                    .')'
                    .'|lassification/([^/]++)(?'
                        .'|(*:243)'
                        .'|/edit(*:256)'
                        .'|(*:264)'
                    .')'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|/(?'
                        .'|showQr(*:306)'
                        .'|edit(*:318)'
                        .'|addRating(*:335)'
                    .')'
                    .'|(*:344)'
                .')'
                .'|/favoris/favoris/(?'
                    .'|add/([^/]++)(*:385)'
                    .'|remove/([^/]++)(*:408)'
                .')'
                .'|/metier/(?'
                    .'|([^/]++)(?'
                        .'|(*:439)'
                        .'|/edit(*:452)'
                        .'|(*:460)'
                    .')'
                    .'|front/sous_metier/front/([^/]++)(*:501)'
                    .'|map/show_in_map/([^/]++)(*:533)'
                    .'|([^/]++)/qrcode(*:556)'
                .')'
                .'|/projet/([^/]++)(?'
                    .'|(*:584)'
                    .'|/(?'
                        .'|edit(*:600)'
                        .'|tache(*:613)'
                        .'|files(*:626)'
                    .')'
                    .'|(*:635)'
                .')'
                .'|/r(?'
                    .'|aiting/([^/]++)(?'
                        .'|(*:667)'
                        .'|/(?'
                            .'|edit(*:683)'
                            .'|rate(*:695)'
                        .')'
                        .'|(*:704)'
                    .')'
                    .'|eset\\-password/reset(?:/([^/]++))?(*:747)'
                .')'
                .'|/sousmetier/([^/]++)(?'
                    .'|(*:779)'
                    .'|/edit(*:792)'
                    .'|(*:800)'
                .')'
                .'|/tache/(?'
                    .'|projet/([^/]++)/tache/add(*:844)'
                    .'|([^/]++)(?'
                        .'|(*:863)'
                        .'|/edit(*:876)'
                        .'|(*:884)'
                    .')'
                    .'|update_tache_status/([^/]++)(*:921)'
                .')'
                .'|/users/(?'
                    .'|([^/]++)(*:948)'
                    .'|by/([^/]++)(*:967)'
                    .'|([^/]++)/(?'
                        .'|profile(*:994)'
                        .'|edit(?'
                            .'|/admin(*:1015)'
                            .'|(*:1024)'
                        .')'
                        .'|archive(*:1041)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1080)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1120)'
                    .'|wdt/([^/]++)(*:1141)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1188)'
                            .'|router(*:1203)'
                            .'|exception(?'
                                .'|(*:1224)'
                                .'|\\.css(*:1238)'
                            .')'
                        .')'
                        .'|(*:1249)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'app_annonce_show', '_controller' => 'App\\Controller\\AnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        51 => [[['_route' => 'app_annonce_show_admin', '_controller' => 'App\\Controller\\AnnonceController::showByAdmin'], ['id'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'app_annonce_edit', '_controller' => 'App\\Controller\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        81 => [[['_route' => 'app_annonce_delete_client', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        103 => [[['_route' => 'app_annonce_delete_admin', '_controller' => 'App\\Controller\\AnnonceController::deleteByAdmin'], ['id'], ['POST' => 0], null, false, true, null]],
        125 => [[['_route' => 'app_liste_ordonne', '_controller' => 'App\\Controller\\AnnonceController::listOrdonne'], [], null, null, false, false, null]],
        154 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        188 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        201 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        209 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        243 => [[['_route' => 'app_classification_show', '_controller' => 'App\\Controller\\ClassificationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        256 => [[['_route' => 'app_classification_edit', '_controller' => 'App\\Controller\\ClassificationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        264 => [[['_route' => 'app_classification_delete', '_controller' => 'App\\Controller\\ClassificationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        306 => [[['_route' => 'app_evenement_qr', '_controller' => 'App\\Controller\\EvenementController::showQr'], ['id'], ['GET' => 0], null, false, false, null]],
        318 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        335 => [[['_route' => 'app_evenement_rating', '_controller' => 'App\\Controller\\EvenementController::addRating'], ['id'], null, null, false, false, null]],
        344 => [
            [['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        385 => [[['_route' => 'favoris_add', '_controller' => 'App\\Controller\\FavorisController::add'], ['id'], null, null, false, true, null]],
        408 => [[['_route' => 'favoris_remove', '_controller' => 'App\\Controller\\FavorisController::remove'], ['id'], null, null, false, true, null]],
        439 => [[['_route' => 'app_metier_show', '_controller' => 'App\\Controller\\MetierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        452 => [[['_route' => 'app_metier_edit', '_controller' => 'App\\Controller\\MetierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        460 => [[['_route' => 'app_metier_delete', '_controller' => 'App\\Controller\\MetierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        501 => [[['_route' => 'app_front_metierrrrr', '_controller' => 'App\\Controller\\MetierController::SousMetier'], ['id'], null, null, false, true, null]],
        533 => [[['_route' => 'app_local_map', '_controller' => 'App\\Controller\\MetierController::Map'], ['id'], null, null, false, true, null]],
        556 => [[['_route' => 'app_metier_qr', '_controller' => 'App\\Controller\\MetierController::getQrCodeForProduct'], ['id'], null, null, false, false, null]],
        584 => [[['_route' => 'app_projet_show', '_controller' => 'App\\Controller\\ProjetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        600 => [[['_route' => 'app_projet_edit', '_controller' => 'App\\Controller\\ProjetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        613 => [[['_route' => 'app_tache_index', '_controller' => 'App\\Controller\\TacheController::index'], ['projetId'], null, null, false, false, null]],
        626 => [[['_route' => 'app_upload_file', '_controller' => 'App\\Controller\\ProjetController::uploadFile'], ['projetId'], null, null, false, false, null]],
        635 => [[['_route' => 'app_projet_delete', '_controller' => 'App\\Controller\\ProjetController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        667 => [[['_route' => 'app_raiting_show', '_controller' => 'App\\Controller\\RaitingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        683 => [[['_route' => 'app_raiting_edit', '_controller' => 'App\\Controller\\RaitingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        695 => [[['_route' => 'Rate', '_controller' => 'App\\Controller\\RaitingController::addRaiting'], ['id'], null, null, false, false, null]],
        704 => [[['_route' => 'app_raiting_delete', '_controller' => 'App\\Controller\\RaitingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        747 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        779 => [[['_route' => 'app_sous_metier_show', '_controller' => 'App\\Controller\\SousMetierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        792 => [[['_route' => 'app_sous_metier_edit', '_controller' => 'App\\Controller\\SousMetierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        800 => [[['_route' => 'app_sous_metier_delete', '_controller' => 'App\\Controller\\SousMetierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        844 => [[['_route' => 'app_tache_new', '_controller' => 'App\\Controller\\TacheController::add'], ['projetId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        863 => [[['_route' => 'app_tache_show', '_controller' => 'App\\Controller\\TacheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        876 => [[['_route' => 'app_tache_edit', '_controller' => 'App\\Controller\\TacheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        884 => [[['_route' => 'app_tache_delete', '_controller' => 'App\\Controller\\TacheController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        921 => [[['_route' => 'app_update_tache_status', '_controller' => 'App\\Controller\\TacheController::updateTacheStatus'], ['tache_id'], ['POST' => 0], null, false, true, null]],
        948 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], null, null, false, true, null]],
        967 => [[['_route' => 'app_user_getuserbyid', '_controller' => 'App\\Controller\\UserController::GetUserById'], ['id'], null, null, false, true, null]],
        994 => [[['_route' => 'app_user_show_na', '_controller' => 'App\\Controller\\UserController::show_user'], ['id'], null, null, false, false, null]],
        1015 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, false, null]],
        1024 => [[['_route' => 'app_user_edit_na', '_controller' => 'App\\Controller\\UserController::edit_user'], ['id'], null, null, false, false, null]],
        1041 => [[['_route' => 'app_user_archive', '_controller' => 'App\\Controller\\UserController::archive'], ['id'], null, null, false, false, null]],
        1080 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1120 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1141 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1188 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1203 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1224 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1238 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1249 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
