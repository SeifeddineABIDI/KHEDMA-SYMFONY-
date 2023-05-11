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
        '/annonce/all/Allannonces' => [[['_route' => 'app_annonce_getannonces', '_controller' => 'App\\Controller\\AnnonceController::getannonces'], null, null, null, false, false, null]],
        '/annonce/addannonceJSON/new' => [[['_route' => 'addannonceJSON', '_controller' => 'App\\Controller\\AnnonceController::addannonceJSON'], null, null, null, false, false, null]],
        '/homepage' => [[['_route' => 'app_home_page', '_controller' => 'App\\Controller\\AppController::index'], null, null, null, false, false, null]],
        '/alternate-page' => [[['_route' => 'app_alterpage', '_controller' => 'App\\Controller\\AppController::alternate'], null, null, null, false, false, null]],
        '/addoneone' => [[['_route' => 'app_auth_newuser', '_controller' => 'App\\Controller\\AuthController::newUser'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthController::login'], null, null, null, false, false, null]],
        '/loginM' => [[['_route' => 'app_auth_loginm', '_controller' => 'App\\Controller\\AuthController::loginM'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthController::logout'], null, null, null, false, false, null]],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chart' => [[['_route' => 'chart', '_controller' => 'App\\Controller\\ChartController::categoriesEvenements'], null, null, null, false, false, null]],
        '/classification' => [[['_route' => 'app_classification_index', '_controller' => 'App\\Controller\\ClassificationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/classification/new' => [[['_route' => 'app_classification_new', '_controller' => 'App\\Controller\\ClassificationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/classification/addclassificationJSON/new' => [[['_route' => 'addclassificationJSON', '_controller' => 'App\\Controller\\ClassificationController::addclassificationJSON'], null, null, null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/evenement/freelancer' => [[['_route' => 'app_event_freelancer', '_controller' => 'App\\Controller\\EvenementController::indexFreelancer'], null, null, null, false, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/favoris' => [[['_route' => 'app_favori', '_controller' => 'App\\Controller\\FavorisController::index'], null, null, null, true, false, null]],
        '/metier' => [[['_route' => 'app_metier_index', '_controller' => 'App\\Controller\\MetierController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/metier/new' => [[['_route' => 'app_metier_new', '_controller' => 'App\\Controller\\MetierController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/metier/metier/front' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\MetierController::Front'], null, null, null, false, false, null]],
        '/metier/metier/affichagefront' => [[['_route' => 'app_affichage_metier_front', '_controller' => 'App\\Controller\\MetierController::affichage_front'], null, null, null, false, false, null]],
        '/metier/stat/sta' => [[['_route' => 'app_cons_statt', '_controller' => 'App\\Controller\\MetierController::yourAction'], null, ['GET' => 0], null, false, false, null]],
        '/metier/affichage/mobile' => [[['_route' => 'app_metier_allapp', '_controller' => 'App\\Controller\\MetierController::allApp'], null, null, null, false, false, null]],
        '/metier/ajout/mobile' => [[['_route' => 'app_metier_ajoutApp', '_controller' => 'App\\Controller\\MetierController::AjoutMobil'], null, null, null, false, false, null]],
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
        '/sousmetier/affichage/mobile' => [[['_route' => 'app_sousmetier_allapp', '_controller' => 'App\\Controller\\SousMetierController::allApp'], null, null, null, false, false, null]],
        '/sousmetier/ajout/mobile' => [[['_route' => 'app_sousmetier_ajoutApp', '_controller' => 'App\\Controller\\SousMetierController::AjoutMobil'], null, null, null, false, false, null]],
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
        '/projetmobile' => [[['_route' => 'app_projet_mobile', '_controller' => 'App\\Controller\\ProjetController::indexmobile'], null, null, null, false, false, null]],
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
                        .'|a(?'
                            .'|dmin/([^/]++)(*:106)'
                            .'|nnonce1/([^/]++)(*:130)'
                        .')'
                        .'|rechercheadmin(*:153)'
                        .'|updateannonceJSON/([^/]++)(*:187)'
                        .'|deleteannonceJSON/([^/]++)(*:221)'
                    .')'
                    .'|utocomplete/([^/]++)(*:250)'
                .')'
                .'|/c(?'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:284)'
                        .'|/edit(*:297)'
                        .'|(*:305)'
                    .')'
                    .'|lassification/(?'
                        .'|([^/]++)(?'
                            .'|(*:342)'
                            .'|/edit(*:355)'
                            .'|(*:363)'
                        .')'
                        .'|Allclassifications(*:390)'
                        .'|classification1/([^/]++)(*:422)'
                        .'|updateclassificationJSON/([^/]++)(*:463)'
                        .'|deleteclassificationJSON/([^/]++)(*:504)'
                    .')'
                .')'
                .'|/evenement/([^/]++)(?'
                    .'|/(?'
                        .'|showQr(*:546)'
                        .'|edit(*:558)'
                        .'|addRating(*:575)'
                    .')'
                    .'|(*:584)'
                .')'
                .'|/favoris/favoris/(?'
                    .'|add/([^/]++)(*:625)'
                    .'|remove/([^/]++)(*:648)'
                .')'
                .'|/metier/(?'
                    .'|([^/]++)(?'
                        .'|(*:679)'
                        .'|/edit(*:692)'
                        .'|(*:700)'
                    .')'
                    .'|front/sous_metier/front/([^/]++)(*:741)'
                    .'|map/show_in_map/([^/]++)(*:773)'
                    .'|([^/]++)/qrcode(*:796)'
                    .'|Update/mobile/([^/]++)(*:826)'
                    .'|delete/mobile/([^/]++)(*:856)'
                .')'
                .'|/projet/(?'
                    .'|([^/]++)(?'
                        .'|(*:887)'
                        .'|/edit(*:900)'
                        .'|(*:908)'
                    .')'
                    .'|projetadd(*:926)'
                    .'|([^/]++)/(?'
                        .'|tache(*:951)'
                        .'|files(*:964)'
                    .')'
                .')'
                .'|/r(?'
                    .'|aiting/([^/]++)(?'
                        .'|(*:997)'
                        .'|/(?'
                            .'|edit(*:1013)'
                            .'|rate(*:1026)'
                        .')'
                        .'|(*:1036)'
                    .')'
                    .'|eset\\-password/reset(?'
                        .'|(?:/([^/]++))?(*:1083)'
                        .'|(*:1092)'
                    .')'
                .')'
                .'|/sousmetier/(?'
                    .'|([^/]++)(?'
                        .'|(*:1129)'
                        .'|/edit(*:1143)'
                        .'|(*:1152)'
                    .')'
                    .'|Update/mobile/([^/]++)(*:1184)'
                    .'|delete/mobile/([^/]++)(*:1215)'
                .')'
                .'|/tache/(?'
                    .'|projet/([^/]++)/tache/add(*:1260)'
                    .'|([^/]++)(?'
                        .'|(*:1280)'
                        .'|/edit(*:1294)'
                        .'|(*:1303)'
                    .')'
                    .'|update_tache_status/([^/]++)(*:1341)'
                .')'
                .'|/users/(?'
                    .'|([^/]++)(*:1369)'
                    .'|by/([^/]++)(*:1389)'
                    .'|([^/]++)/(?'
                        .'|profile(*:1417)'
                        .'|edit(?'
                            .'|/admin(*:1439)'
                            .'|(*:1448)'
                            .'|Json(*:1461)'
                        .')'
                        .'|archive(*:1478)'
                    .')'
                .')'
                .'|/qr\\-code/([^/]++)/([\\w\\W]+)(*:1517)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1557)'
                    .'|wdt/([^/]++)(*:1578)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1625)'
                            .'|router(*:1640)'
                            .'|exception(?'
                                .'|(*:1661)'
                                .'|\\.css(*:1675)'
                            .')'
                        .')'
                        .'|(*:1686)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'app_annonce_show', '_controller' => 'App\\Controller\\AnnonceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        51 => [[['_route' => 'app_annonce_show_admin', '_controller' => 'App\\Controller\\AnnonceController::showByAdmin'], ['id'], ['GET' => 0], null, false, true, null]],
        74 => [[['_route' => 'app_annonce_edit', '_controller' => 'App\\Controller\\AnnonceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        81 => [[['_route' => 'app_annonce_delete_client', '_controller' => 'App\\Controller\\AnnonceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        106 => [[['_route' => 'app_annonce_delete_admin', '_controller' => 'App\\Controller\\AnnonceController::deleteByAdmin'], ['id'], ['POST' => 0], null, false, true, null]],
        130 => [[['_route' => 'annonce', '_controller' => 'App\\Controller\\AnnonceController::annonceId'], ['id'], null, null, false, true, null]],
        153 => [[['_route' => 'app_liste_ordonne', '_controller' => 'App\\Controller\\AnnonceController::listOrdonne'], [], null, null, false, false, null]],
        187 => [[['_route' => 'updateannonceJSON', '_controller' => 'App\\Controller\\AnnonceController::updateannonceJSON'], ['id'], null, null, false, true, null]],
        221 => [[['_route' => 'deleteannonceJSON', '_controller' => 'App\\Controller\\AnnonceController::deleteannonceJSON'], ['id'], null, null, false, true, null]],
        250 => [[['_route' => 'ux_entity_autocomplete', '_controller' => 'ux.autocomplete.entity_autocomplete_controller'], ['alias'], null, null, false, true, null]],
        284 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        297 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        305 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        342 => [[['_route' => 'app_classification_show', '_controller' => 'App\\Controller\\ClassificationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        355 => [[['_route' => 'app_classification_edit', '_controller' => 'App\\Controller\\ClassificationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        363 => [[['_route' => 'app_classification_delete', '_controller' => 'App\\Controller\\ClassificationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        390 => [[['_route' => 'app_classification_getclassifications', '_controller' => 'App\\Controller\\ClassificationController::getclassifications'], [], null, null, false, false, null]],
        422 => [[['_route' => 'app_classification_classificationid', '_controller' => 'App\\Controller\\ClassificationController::classificationId'], ['id'], null, null, false, true, null]],
        463 => [[['_route' => 'updateclassificationJSON', '_controller' => 'App\\Controller\\ClassificationController::updateclassificationJSON'], ['id'], null, null, false, true, null]],
        504 => [[['_route' => 'deleteclassificationJSON', '_controller' => 'App\\Controller\\ClassificationController::deleteclassificationJSON'], ['id'], null, null, false, true, null]],
        546 => [[['_route' => 'app_evenement_qr', '_controller' => 'App\\Controller\\EvenementController::showQr'], ['id'], ['GET' => 0], null, false, false, null]],
        558 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        575 => [[['_route' => 'app_evenement_rating', '_controller' => 'App\\Controller\\EvenementController::addRating'], ['id'], null, null, false, false, null]],
        584 => [
            [['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        625 => [[['_route' => 'favoris_add', '_controller' => 'App\\Controller\\FavorisController::add'], ['id'], null, null, false, true, null]],
        648 => [[['_route' => 'favoris_remove', '_controller' => 'App\\Controller\\FavorisController::remove'], ['id'], null, null, false, true, null]],
        679 => [[['_route' => 'app_metier_show', '_controller' => 'App\\Controller\\MetierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        692 => [[['_route' => 'app_metier_edit', '_controller' => 'App\\Controller\\MetierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        700 => [[['_route' => 'app_metier_delete', '_controller' => 'App\\Controller\\MetierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        741 => [[['_route' => 'app_front_metierrrrr', '_controller' => 'App\\Controller\\MetierController::SousMetier'], ['id'], null, null, false, true, null]],
        773 => [[['_route' => 'app_local_map', '_controller' => 'App\\Controller\\MetierController::Map'], ['id'], null, null, false, true, null]],
        796 => [[['_route' => 'app_metier_qr', '_controller' => 'App\\Controller\\MetierController::getQrCodeForProduct'], ['id'], null, null, false, false, null]],
        826 => [[['_route' => 'app_metier_editApp', '_controller' => 'App\\Controller\\MetierController::UpdateMobile'], ['id'], null, null, false, true, null]],
        856 => [[['_route' => 'app__deleteApp21', '_controller' => 'App\\Controller\\MetierController::deleteMobile'], ['id'], null, null, false, true, null]],
        887 => [[['_route' => 'app_projet_show', '_controller' => 'App\\Controller\\ProjetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        900 => [[['_route' => 'app_projet_edit', '_controller' => 'App\\Controller\\ProjetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        908 => [[['_route' => 'app_projet_delete', '_controller' => 'App\\Controller\\ProjetController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        926 => [[['_route' => 'app_projet_add', '_controller' => 'App\\Controller\\ProjetController::add'], [], ['POST' => 0], null, false, false, null]],
        951 => [[['_route' => 'app_tache_index', '_controller' => 'App\\Controller\\TacheController::index'], ['projetId'], null, null, false, false, null]],
        964 => [[['_route' => 'app_upload_file', '_controller' => 'App\\Controller\\ProjetController::uploadFile'], ['projetId'], null, null, false, false, null]],
        997 => [[['_route' => 'app_raiting_show', '_controller' => 'App\\Controller\\RaitingController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1013 => [[['_route' => 'app_raiting_edit', '_controller' => 'App\\Controller\\RaitingController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1026 => [[['_route' => 'Rate', '_controller' => 'App\\Controller\\RaitingController::addRaiting'], ['id'], null, null, false, false, null]],
        1036 => [[['_route' => 'app_raiting_delete', '_controller' => 'App\\Controller\\RaitingController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1083 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1092 => [[['_route' => 'app_resetpassword_qreset', '_controller' => 'App\\Controller\\ResetPasswordController::qreset'], [], null, null, false, false, null]],
        1129 => [[['_route' => 'app_sous_metier_show', '_controller' => 'App\\Controller\\SousMetierController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1143 => [[['_route' => 'app_sous_metier_edit', '_controller' => 'App\\Controller\\SousMetierController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1152 => [[['_route' => 'app_sous_metier_delete', '_controller' => 'App\\Controller\\SousMetierController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1184 => [[['_route' => 'app_sousmetier_editApp', '_controller' => 'App\\Controller\\SousMetierController::UpdateMobile'], ['id'], null, null, false, true, null]],
        1215 => [[['_route' => 'app__deleteApp', '_controller' => 'App\\Controller\\SousMetierController::deleteMobile'], ['id'], null, null, false, true, null]],
        1260 => [[['_route' => 'app_tache_new', '_controller' => 'App\\Controller\\TacheController::add'], ['projetId'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1280 => [[['_route' => 'app_tache_show', '_controller' => 'App\\Controller\\TacheController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1294 => [[['_route' => 'app_tache_edit', '_controller' => 'App\\Controller\\TacheController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1303 => [[['_route' => 'app_tache_delete', '_controller' => 'App\\Controller\\TacheController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1341 => [[['_route' => 'app_update_tache_status', '_controller' => 'App\\Controller\\TacheController::updateTacheStatus'], ['tache_id'], ['POST' => 0], null, false, true, null]],
        1369 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], null, null, false, true, null]],
        1389 => [[['_route' => 'app_user_getuserbyid', '_controller' => 'App\\Controller\\UserController::GetUserById'], ['id'], null, null, false, true, null]],
        1417 => [[['_route' => 'app_user_show_na', '_controller' => 'App\\Controller\\UserController::show_user'], ['id'], null, null, false, false, null]],
        1439 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], null, null, false, false, null]],
        1448 => [[['_route' => 'app_user_edit_na', '_controller' => 'App\\Controller\\UserController::edit_user'], ['id'], null, null, false, false, null]],
        1461 => [[['_route' => 'app_edit', '_controller' => 'App\\Controller\\UserController::editJSON'], ['id'], null, null, false, false, null]],
        1478 => [[['_route' => 'app_user_archive', '_controller' => 'App\\Controller\\UserController::archive'], ['id'], null, null, false, false, null]],
        1517 => [[['_route' => 'qr_code_generate', '_controller' => 'Endroid\\QrCodeBundle\\Controller\\GenerateController'], ['builder', 'data'], null, null, false, true, null]],
        1557 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1578 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1625 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1640 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1661 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1675 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1686 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
