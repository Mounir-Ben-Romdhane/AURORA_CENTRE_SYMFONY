<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/evenement' => [[['_route' => 'app_evenement', '_controller' => 'App\\Controller\\EvenementController::index'], null, null, null, false, false, null]],
        '/evenementAffichage' => [[['_route' => 'app_evenementAffichage', '_controller' => 'App\\Controller\\EvenementController::affichage'], null, null, null, false, false, null]],
        '/evenementAffichageFront' => [[['_route' => 'app_evenementAffichageFront', '_controller' => 'App\\Controller\\EvenementController::affichageFront'], null, null, null, false, false, null]],
        '/evenementAdd' => [[['_route' => 'app_addevenement', '_controller' => 'App\\Controller\\EvenementController::addEvenement'], null, null, null, false, false, null]],
        '/trierevenementtitreev' => [[['_route' => 'app_triertitreev_evenement', '_controller' => 'App\\Controller\\EvenementController::triertitreev'], null, null, null, false, false, null]],
        '/trierevenementtypeev' => [[['_route' => 'app_triertypeev_evenement', '_controller' => 'App\\Controller\\EvenementController::triertypeev'], null, null, null, false, false, null]],
        '/trierevenementdateev' => [[['_route' => 'app_trierdateev_evenement', '_controller' => 'App\\Controller\\EvenementController::trierdateev'], null, null, null, false, false, null]],
        '/searchevenement' => [[['_route' => 'app_evenement_search', '_controller' => 'App\\Controller\\EvenementController::searchOffre'], null, null, null, false, false, null]],
        '/stat' => [[['_route' => 'app_stat', '_controller' => 'App\\Controller\\EvenementController::stat'], null, null, null, false, false, null]],
        '/get' => [[['_route' => 'app_api_getallevenement', '_controller' => 'App\\Controller\\EvenementController::getevenement'], null, null, null, false, false, null]],
        '/create' => [[['_route' => 'app_addevenementjson', '_controller' => 'App\\Controller\\EvenementController::addEvenementjson'], null, null, null, false, false, null]],
        '/deleteEvenementjson' => [[['_route' => 'app_delete_evenement_json', '_controller' => 'App\\Controller\\EvenementController::deleteEvenementJSON'], null, null, null, false, false, null]],
        '/modifieEvenementJson' => [[['_route' => 'app_modifier_evenement_json', '_controller' => 'App\\Controller\\EvenementController::modifieUserJSON'], null, null, null, false, false, null]],
        '/evenementdownload' => [[['_route' => 'app_evenement_download', '_controller' => 'App\\Controller\\EvenementController::indexdownload'], null, null, null, false, false, null]],
        '/evenement/data/download' => [[['_route' => 'app_evenement_data_download', '_controller' => 'App\\Controller\\EvenementController::indexdownloaddata'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'app_calendar', '_controller' => 'App\\Controller\\EvenementController::indexcalendar'], null, null, null, false, false, null]],
        '/participationns' => [[['_route' => 'app_participationns', '_controller' => 'App\\Controller\\ParticipationnsController::index'], null, null, null, false, false, null]],
        '/participationnAffichage' => [[['_route' => 'app_participationnAffichage', '_controller' => 'App\\Controller\\ParticipationnsController::affichage'], null, null, null, false, false, null]],
        '/participationns/pdf' => [[['_route' => 'generator_service', '_controller' => 'App\\Controller\\ParticipationnsController::pdfService'], null, null, null, false, false, null]],
        '/participationnsdownload' => [[['_route' => 'app_participationns_download', '_controller' => 'App\\Controller\\ParticipationnsController::indexdownload'], null, null, null, false, false, null]],
        '/participationns/data/download' => [[['_route' => 'app_participationns_data_download', '_controller' => 'App\\Controller\\ParticipationnsController::indexdownloaddata'], null, null, null, false, false, null]],
        '/profilAdmin' => [[['_route' => 'app_profil', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/profilClient' => [[['_route' => 'app_profilClient', '_controller' => 'App\\Controller\\ProfilController::profilClient'], null, null, null, false, false, null]],
        '/reclamation/ajouter' => [[['_route' => 'ajouter_reclamation', '_controller' => 'App\\Controller\\ReclamationController::ajouter'], null, null, null, false, false, null]],
        '/reclamation/affiche' => [[['_route' => 'affiche_reclamation', '_controller' => 'App\\Controller\\ReclamationController::affiche'], null, null, null, false, false, null]],
        '/reclamation/orderbytype' => [[['_route' => 'reclamation_orderbytype', '_controller' => 'App\\Controller\\ReclamationController::orderByType'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/orderbytypeDESC' => [[['_route' => 'reclamation_orderbytypeDESC', '_controller' => 'App\\Controller\\ReclamationController::orderByTypeDESC'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/orderbynom' => [[['_route' => 'reclamation_orderbynom', '_controller' => 'App\\Controller\\ReclamationController::orderByNom'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/orderbynomDESC' => [[['_route' => 'reclamation_orderbynomDESC', '_controller' => 'App\\Controller\\ReclamationController::orderByNomDESC'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/orderbydate' => [[['_route' => 'reclamation_orderbydate', '_controller' => 'App\\Controller\\ReclamationController::orderByDate'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/orderbydateDESC' => [[['_route' => 'reclamation_orderbydateDESC', '_controller' => 'App\\Controller\\ReclamationController::orderByDateDESC'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/affichebyemail' => [[['_route' => 'affiche_reclamation_byemail', '_controller' => 'App\\Controller\\ReclamationController::affichebyemail'], null, null, null, false, false, null]],
        '/reclamation/afficheback' => [[['_route' => 'afficheback_reclamation', '_controller' => 'App\\Controller\\ReclamationController::afficheback'], null, null, null, false, false, null]],
        '/api/getreclamation' => [[['_route' => 'app_api_getallreclamation', '_controller' => 'App\\Controller\\ReclamationController::getreclamation'], null, ['GET' => 0], null, false, false, null]],
        '/api/addreclamation' => [[['_route' => 'app_api_addreclamation', '_controller' => 'App\\Controller\\ReclamationController::addreclamationapi'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegisterController::registerUser'], null, null, null, false, false, null]],
        '/renvoiverif' => [[['_route' => 'resend_verif', '_controller' => 'App\\Controller\\RegisterController::resendVerif'], null, null, null, false, false, null]],
        '/reservation' => [[['_route' => 'app_reservation', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/reservationAffichage' => [[['_route' => 'app_reservationAffichage', '_controller' => 'App\\Controller\\ReservationController::affichage'], null, null, null, false, false, null]],
        '/reservationService' => [[['_route' => 'app_addreservation', '_controller' => 'App\\Controller\\ReservationController::addReservation'], null, null, null, false, false, null]],
        '/reservationList' => [[['_route' => 'app_reservationList', '_controller' => 'App\\Controller\\ReservationController::reservationList'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'app_service', '_controller' => 'App\\Controller\\ServiceController::index'], null, null, null, false, false, null]],
        '/serviceAffichage' => [[['_route' => 'app_serviceAffichage', '_controller' => 'App\\Controller\\ServiceController::affichage'], null, null, null, false, false, null]],
        '/serviceAffichageFront' => [[['_route' => 'app_serviceAffichageFront', '_controller' => 'App\\Controller\\ServiceController::affichageFront'], null, null, null, false, false, null]],
        '/serviceAdd' => [[['_route' => 'app_addservice', '_controller' => 'App\\Controller\\ServiceController::addService'], null, null, null, false, false, null]],
        '/serviceShow' => [[['_route' => 'app_serviceShow', '_controller' => 'App\\Controller\\ServiceController::showSevice'], null, null, null, false, false, null]],
        '/serviceDetails' => [[['_route' => 'app_serviceDetails', '_controller' => 'App\\Controller\\ServiceController::serviceDetails'], null, null, null, false, false, null]],
        '/api/getService' => [[['_route' => 'app_api_getService', '_controller' => 'App\\Controller\\ServiceController::getService'], null, ['GET' => 0], null, false, false, null]],
        '/api/addServiceApi' => [[['_route' => 'app_api_addService', '_controller' => 'App\\Controller\\ServiceController::addServiceApi'], null, ['GET' => 0], null, false, false, null]],
        '/api/updateService' => [[['_route' => 'app_api_updateService', '_controller' => 'App\\Controller\\ServiceController::updateServiceApi'], null, ['GET' => 0], null, false, false, null]],
        '/serviceTrier' => [[['_route' => 'app_trierservice', '_controller' => 'App\\Controller\\ServiceController::trierService'], null, null, null, false, false, null]],
        '/serviceTrier2' => [[['_route' => 'app_trierservice2', '_controller' => 'App\\Controller\\ServiceController::trierService2'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'app_front', '_controller' => 'App\\Controller\\UserController::frontEnd'], null, null, null, false, false, null],
            [['_route' => 'app_homepage', '_controller' => 'App\\Controller\\NotificationService::getnotif'], null, null, null, false, false, null],
        ],
        '/front' => [[['_route' => 'app_front_front', '_controller' => 'App\\Controller\\UserController::front'], null, null, null, false, false, null]],
        '/backEnd' => [[['_route' => 'app_back', '_controller' => 'App\\Controller\\UserController::backEnd'], null, null, null, false, false, null]],
        '/listClients' => [[['_route' => 'app_list_clients', '_controller' => 'App\\Controller\\UserController::listClients'], null, null, null, false, false, null]],
        '/addClient' => [[['_route' => 'app_add_client', '_controller' => 'App\\Controller\\UserController::addClient'], null, null, null, false, false, null]],
        '/trierParName' => [[['_route' => 'app_trier_name_client', '_controller' => 'App\\Controller\\UserController::triertitreev'], null, null, null, false, false, null]],
        '/trierParEmail' => [[['_route' => 'app_trier_email_client', '_controller' => 'App\\Controller\\UserController::trierEmail'], null, null, null, false, false, null]],
        '/trierParTel' => [[['_route' => 'app_trier_tel_client', '_controller' => 'App\\Controller\\UserController::trierTel'], null, null, null, false, false, null]],
        '/trierParAddress' => [[['_route' => 'app_trier_address_client', '_controller' => 'App\\Controller\\UserController::trierAddress'], null, null, null, false, false, null]],
        '/trierParStatus' => [[['_route' => 'app_trier_status_client', '_controller' => 'App\\Controller\\UserController::trierStatus'], null, null, null, false, false, null]],
        '/trierParEtat' => [[['_route' => 'app_trier_etat_client', '_controller' => 'App\\Controller\\UserController::trierEtat'], null, null, null, false, false, null]],
        '/editClient' => [[['_route' => 'app_edit_client', '_controller' => 'App\\Controller\\UserController::editClients'], null, null, null, false, false, null]],
        '/oubli-pass' => [[['_route' => 'app_oublie_pass', '_controller' => 'App\\Controller\\UserController::forgetPass'], null, null, null, false, false, null]],
        '/addClientjson' => [[['_route' => 'app_add_client_json', '_controller' => 'App\\Controller\\UserController::addClientJSON'], null, null, null, false, false, null]],
        '/deleteClientjson' => [[['_route' => 'app_delete_client_json', '_controller' => 'App\\Controller\\UserController::deleteClientJSON'], null, null, null, false, false, null]],
        '/modifieUserJson' => [[['_route' => 'app_modifier_client_json', '_controller' => 'App\\Controller\\UserController::modifieUserJSON'], null, null, null, false, false, null]],
        '/modifieAdminJson' => [[['_route' => 'app_modifier_admin_json', '_controller' => 'App\\Controller\\UserController::modifieAdminJSON'], null, null, null, false, false, null]],
        '/displayUserJson' => [[['_route' => 'app_display_client_json', '_controller' => 'App\\Controller\\UserController::displayUserJSON'], null, null, null, false, false, null]],
        '/userJson/signUp' => [[['_route' => 'app_signup_client_json', '_controller' => 'App\\Controller\\UserController::SignUpUserJSON'], null, null, null, false, false, null]],
        '/userJson/signIn' => [[['_route' => 'app_signin_client_json', '_controller' => 'App\\Controller\\UserController::SignInUserJSON'], null, null, null, false, false, null]],
        '/userJson/editProfil' => [[['_route' => 'app_modifier_profil_json', '_controller' => 'App\\Controller\\UserController::modifieProfilJSON'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/evenement(?'
                    .'|Delete/([^/]++)(*:35)'
                    .'|Update/([^/]++)(*:57)'
                .')'
                .'|/Participationns(?'
                    .'|Add(?'
                        .'|/([^/]++)(*:99)'
                        .'|back/([^/]++)(*:119)'
                    .')'
                    .'|Delete(?'
                        .'|/([^/]++)(*:146)'
                        .'|Front/([^/]++)(*:168)'
                    .')'
                    .'|Update(?'
                        .'|/([^/]++)(*:195)'
                        .'|Back/([^/]++)(*:216)'
                    .')'
                .')'
                .'|/AccepterReclamation/([^/]++)(*:255)'
                .'|/RefuseReclamation/([^/]++)(*:290)'
                .'|/re(?'
                    .'|clamation(?'
                        .'|/(?'
                            .'|delete(?'
                                .'|/([^/]++)(*:338)'
                                .'|back/([^/]++)(*:359)'
                            .')'
                            .'|update(?'
                                .'|/([^/]++)(*:386)'
                                .'|back/([^/]++)(*:407)'
                            .')'
                        .')'
                        .'|pdf/([^/]++)(*:429)'
                    .')'
                    .'|ponse/(?'
                        .'|a(?'
                            .'|jouter(?'
                                .'|back/([^/]++)(*:473)'
                                .'|/([^/]++)(*:490)'
                            .')'
                            .'|ffiche(?'
                                .'|back/([^/]++)(*:521)'
                                .'|/([^/]++)(*:538)'
                            .')'
                        .')'
                        .'|delete/([^/]++)(*:563)'
                        .'|update(?'
                            .'|/([^/]++)(*:589)'
                            .'|back/([^/]++)(*:610)'
                        .')'
                    .')'
                    .'|se(?'
                        .'|rvation(?'
                            .'|Update/([^/]++)(*:650)'
                            .'|Delete/([^/]++)(*:673)'
                        .')'
                        .'|t\\-pass/([^/]++)(*:698)'
                    .')'
                .')'
                .'|/api(?'
                    .'|/(?'
                        .'|deletereclamation/([^/]++)(*:745)'
                        .'|updatereclamation/([^/]++)(*:779)'
                        .'|\\.well\\-known/genid/([^/]++)(*:815)'
                    .')'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:852)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:883)'
                        .'|contexts/([^.]+)(?:\\.(jsonld))?(*:922)'
                    .')'
                .')'
                .'|/verif/([^/]++)(*:947)'
                .'|/s(?'
                    .'|ervice(?'
                        .'|Delete/([^/]++)(*:984)'
                        .'|Update/([^/]++)(*:1007)'
                    .')'
                    .'|howClient/([^/]++)(*:1035)'
                .')'
                .'|/bloqueClient/([^/]++)(*:1067)'
                .'|/de(?'
                    .'|bloqueClient/([^/]++)(*:1103)'
                    .'|leteClient/([^/]++)(*:1131)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1172)'
                    .'|wdt/([^/]++)(*:1193)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1240)'
                            .'|router(*:1255)'
                            .'|exception(?'
                                .'|(*:1276)'
                                .'|\\.css(*:1290)'
                            .')'
                        .')'
                        .'|(*:1301)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'app_deleteevenement', '_controller' => 'App\\Controller\\EvenementController::deleteEvenement'], ['id'], null, null, false, true, null]],
        57 => [[['_route' => 'app_updateevenement', '_controller' => 'App\\Controller\\EvenementController::editEvenement'], ['id'], null, null, false, true, null]],
        99 => [[['_route' => 'app_addParticipationns', '_controller' => 'App\\Controller\\ParticipationnsController::addParticipationns'], ['id'], null, null, false, true, null]],
        119 => [[['_route' => 'app_addParticipationnsback', '_controller' => 'App\\Controller\\ParticipationnsController::addParticipationnsback'], ['id'], null, null, false, true, null]],
        146 => [[['_route' => 'app_deleteParticipationns', '_controller' => 'App\\Controller\\ParticipationnsController::deleteEvenement'], ['id'], null, null, false, true, null]],
        168 => [[['_route' => 'app_deleteParticipationnsFront', '_controller' => 'App\\Controller\\ParticipationnsController::deleteEvenementFront'], ['id'], null, null, false, true, null]],
        195 => [[['_route' => 'app_updateParticipationns', '_controller' => 'App\\Controller\\ParticipationnsController::editParticipationns'], ['id'], null, null, false, true, null]],
        216 => [[['_route' => 'app_updateParticipationnsBack', '_controller' => 'App\\Controller\\ParticipationnsController::editParticipationnsBack'], ['id'], null, null, false, true, null]],
        255 => [[['_route' => 'app_accepter_reclamation', '_controller' => 'App\\Controller\\ReclamationController::AccepterReclamation'], ['id'], null, null, false, true, null]],
        290 => [[['_route' => 'app_refuser_reclamation', '_controller' => 'App\\Controller\\ReclamationController::RefuserReclamation'], ['id'], null, null, false, true, null]],
        338 => [[['_route' => 'delete_reclamation', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], null, null, false, true, null]],
        359 => [[['_route' => 'deleteback_reclamation', '_controller' => 'App\\Controller\\ReclamationController::deleteback'], ['id'], null, null, false, true, null]],
        386 => [[['_route' => 'update_reclamation', '_controller' => 'App\\Controller\\ReclamationController::update'], ['id'], null, null, false, true, null]],
        407 => [[['_route' => 'updateback_reclamation', '_controller' => 'App\\Controller\\ReclamationController::updateback'], ['id'], null, null, false, true, null]],
        429 => [[['_route' => 'app_reclamationpdf', '_controller' => 'App\\Controller\\ReclamationController::pdfreser'], ['id'], null, null, false, true, null]],
        473 => [[['_route' => 'ajouterback_reponse', '_controller' => 'App\\Controller\\ReponseController::ajouterBack'], ['id'], null, null, false, true, null]],
        490 => [[['_route' => 'ajouter_reponse', '_controller' => 'App\\Controller\\ReponseController::ajouter'], ['id'], null, null, false, true, null]],
        521 => [[['_route' => 'afficheback_reponse', '_controller' => 'App\\Controller\\ReponseController::afficheback'], ['id'], null, null, false, true, null]],
        538 => [[['_route' => 'affiche_reponse', '_controller' => 'App\\Controller\\ReponseController::affiche'], ['id'], null, null, false, true, null]],
        563 => [[['_route' => 'delete_reponse', '_controller' => 'App\\Controller\\ReponseController::delete'], ['id'], null, null, false, true, null]],
        589 => [[['_route' => 'update_reponse', '_controller' => 'App\\Controller\\ReponseController::update'], ['id'], null, null, false, true, null]],
        610 => [[['_route' => 'updateback_reponse', '_controller' => 'App\\Controller\\ReponseController::updateback'], ['id'], null, null, false, true, null]],
        650 => [[['_route' => 'app_updatereservation', '_controller' => 'App\\Controller\\ReservationController::editReservation'], ['id'], null, null, false, true, null]],
        673 => [[['_route' => 'app_deletereservation', '_controller' => 'App\\Controller\\ReservationController::deleteReservation'], ['id'], null, null, false, true, null]],
        698 => [[['_route' => 'reset_pass', '_controller' => 'App\\Controller\\UserController::resetPass'], ['token'], null, null, false, true, null]],
        745 => [[['_route' => 'app_api_deletereclamation', '_controller' => 'App\\Controller\\ReclamationController::deletereclamationapi'], ['id'], ['GET' => 0], null, false, true, null]],
        779 => [[['_route' => 'app_api_updatereclamation', '_controller' => 'App\\Controller\\ReclamationController::updatereclamationapi'], ['id'], ['PUT' => 0], null, false, true, null]],
        815 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        852 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        883 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        922 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        947 => [[['_route' => 'verify_user', '_controller' => 'App\\Controller\\RegisterController::verifyUser'], ['token'], null, null, false, true, null]],
        984 => [[['_route' => 'app_deleteservice', '_controller' => 'App\\Controller\\ServiceController::deleteService'], ['id'], null, null, false, true, null]],
        1007 => [[['_route' => 'app_updateservice', '_controller' => 'App\\Controller\\ServiceController::editService'], ['id'], null, null, false, true, null]],
        1035 => [[['_route' => 'app_show_client', '_controller' => 'App\\Controller\\UserController::showClients'], ['id'], null, null, false, true, null]],
        1067 => [[['_route' => 'app_block_client', '_controller' => 'App\\Controller\\UserController::bloqueClients'], ['id'], null, null, false, true, null]],
        1103 => [[['_route' => 'app_deblock_client', '_controller' => 'App\\Controller\\UserController::debloqueClients'], ['id'], null, null, false, true, null]],
        1131 => [[['_route' => 'app_delete_client', '_controller' => 'App\\Controller\\UserController::deleteClients'], ['id'], null, null, false, true, null]],
        1172 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1193 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1240 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1255 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1276 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1290 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1301 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
