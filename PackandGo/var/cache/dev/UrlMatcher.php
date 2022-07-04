<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/showOffre' => [[['_route' => 'api_list_Offre', '_controller' => 'App\\Controller\\APIoffreController::getAllOffre'], null, null, null, false, false, null]],
        '/API/addOffre' => [[['_route' => 'APIaddOffre', '_controller' => 'App\\Controller\\APIoffreController::APIAddOffre'], null, null, null, false, false, null]],
        '/api/hotels/show' => [[['_route' => 'api_list_hotels', '_controller' => 'App\\Controller\\ApihotelsController::APIgetAllHotels'], null, null, null, false, false, null]],
        '/api/hotels/add' => [[['_route' => 'APIaddhotel', '_controller' => 'App\\Controller\\ApihotelsController::APIAddEHotel'], null, null, null, false, false, null]],
        '/apitransport' => [[['_route' => 'app_apitransport', '_controller' => 'App\\Controller\\ApitransportController::index'], null, null, null, false, false, null]],
        '/api/transport/show' => [[['_route' => 'api_list_transport', '_controller' => 'App\\Controller\\ApitransportController::getAllTransportmobile'], null, null, null, false, false, null]],
        '/api/transport/add' => [[['_route' => 'APIaddtransport', '_controller' => 'App\\Controller\\ApitransportController::APIAddTransport'], null, null, null, false, false, null]],
        '/guide' => [[['_route' => 'app_guide', '_controller' => 'App\\Controller\\GuideController::index'], null, null, null, false, false, null]],
        '/guide/showg' => [[['_route' => 'list_guide', '_controller' => 'App\\Controller\\GuideController::getAllClasses'], null, null, null, false, false, null]],
        '/guide/addg' => [[['_route' => 'add_guide', '_controller' => 'App\\Controller\\GuideController::addg'], null, null, null, false, false, null]],
        '/hotels' => [[['_route' => 'app_hotels', '_controller' => 'App\\Controller\\HotelsController::showHotels'], null, null, null, false, false, null]],
        '/hotels/show' => [
            [['_route' => 'list_hotels', '_controller' => 'App\\Controller\\HotelsController::getAllHotels'], null, null, null, false, false, null],
            [['_route' => 'searchname', '_controller' => 'App\\Controller\\HotelsController::SearchHotelByName'], null, null, null, false, false, null],
        ],
        '/hotels/add' => [[['_route' => 'add_hotel', '_controller' => 'App\\Controller\\HotelsController::addHotel'], null, null, null, false, false, null]],
        '/offre/view' => [[['_route' => 'app_offre_index', '_controller' => 'App\\Controller\\OffreController::index'], null, ['GET' => 0], null, false, false, null]],
        '/offre/listpdf' => [[['_route' => 'offre_list', '_controller' => 'App\\Controller\\OffreController::listp'], null, ['GET' => 0], null, false, false, null]],
        '/offre/add' => [[['_route' => 'app_offre_new', '_controller' => 'App\\Controller\\OffreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/packs' => [[['_route' => 'app_packs_index', '_controller' => 'App\\Controller\\PacksController::index'], null, ['GET' => 0], null, true, false, null]],
        '/packs/add2' => [[['_route' => 'app_packs_new', '_controller' => 'App\\Controller\\PacksController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/packs/view' => [[['_route' => 'app_packs_show', '_controller' => 'App\\Controller\\PacksController::show'], null, ['GET' => 0], null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment_index', '_controller' => 'App\\Controller\\PaymentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation' => [[['_route' => 'app_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reclamation/Mesreclamation' => [[['_route' => 'mes_reclamation_index', '_controller' => 'App\\Controller\\ReclamationController::reclamationUser'], null, ['GET' => 0], null, false, false, null]],
        '/reclamation/new' => [[['_route' => 'app_reclamation_new', '_controller' => 'App\\Controller\\ReclamationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservation/a' => [[['_route' => 'app_reservation_index', '_controller' => 'App\\Controller\\ReservationController::index'], null, null, null, false, false, null]],
        '/reservation/mesReservation' => [[['_route' => 'mes_reservation_index', '_controller' => 'App\\Controller\\ReservationController::reservationFront'], null, null, null, false, false, null]],
        '/reservation/front' => [[['_route' => 'front', '_controller' => 'App\\Controller\\ReservationController::test'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/back' => [[['_route' => 'back', '_controller' => 'App\\Controller\\ReservationController::back'], null, ['GET' => 0], null, false, false, null]],
        '/reservation/new' => [[['_route' => 'app_reservation_new', '_controller' => 'App\\Controller\\ReservationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reservationh/mesReservationHotel' => [[['_route' => 'mes_reservation_hotel', '_controller' => 'App\\Controller\\ReservationhController::reservationFront'], null, null, null, false, false, null]],
        '/reservationh' => [[['_route' => 'app_reservationh_index', '_controller' => 'App\\Controller\\ReservationhController::index'], null, ['GET' => 0], null, true, false, null]],
        '/reservationh/new' => [[['_route' => 'app_reservationh_new', '_controller' => 'App\\Controller\\ReservationhController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/services' => [[['_route' => 'app_services', '_controller' => 'App\\Controller\\ServicesController::index'], null, null, null, false, false, null]],
        '/services/showing' => [[['_route' => 'list_service', '_controller' => 'App\\Controller\\ServicesController::getAllServices'], null, null, null, false, false, null]],
        '/services/adding' => [[['_route' => 'add_service', '_controller' => 'App\\Controller\\ServicesController::addService'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\TransportController::index'], null, null, null, false, false, null]],
        '/transport/show' => [[['_route' => 'list_transport', '_controller' => 'App\\Controller\\TransportController::getAllTransport'], null, null, null, false, false, null]],
        '/transport/show1' => [[['_route' => 'list_transport1', '_controller' => 'App\\Controller\\TransportController::ShowTransport'], null, null, null, false, false, null]],
        '/transport/show2' => [[['_route' => 'list_transport2', '_controller' => 'App\\Controller\\TransportController::ShowTranspor2'], null, null, null, false, false, null]],
        '/transport/show3' => [[['_route' => 'list_transport3', '_controller' => 'App\\Controller\\TransportController::ShowTranspor3'], null, null, null, false, false, null]],
        '/transport/add' => [[['_route' => 'add_transporte', '_controller' => 'App\\Controller\\TransportController::add'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/API/(?'
                    .'|edit/([^/]++)(*:63)'
                    .'|deleteOffre/([^/]++)(*:90)'
                    .'|hotels/deleteHotel/([^/]++)(*:124)'
                    .'|transport/deletetransport/([^/]++)(*:166)'
                .')'
                .'|/guide/(?'
                    .'|edit/([^/]++)(*:198)'
                    .'|supp/([^/]++)(*:219)'
                .')'
                .'|/hotels/(?'
                    .'|de(?'
                        .'|tails/([^/]++)(*:258)'
                        .'|lete/([^/]++)(*:279)'
                    .')'
                    .'|update/([^/]++)(*:303)'
                    .'|pdf/([^/]++)(*:323)'
                .')'
                .'|/offre/(?'
                    .'|edit/([^/]++)(*:355)'
                    .'|delete/([^/]++)(*:378)'
                .')'
                .'|/pa(?'
                    .'|cks/(?'
                        .'|edit/([^/]++)(*:413)'
                        .'|delete/([^/]++)(*:436)'
                    .')'
                    .'|yment/(?'
                        .'|new/([^/]++)(*:466)'
                        .'|([^/]++)(?'
                            .'|(*:485)'
                            .'|/edit(*:498)'
                        .')'
                        .'|annuler/([^/]++)(*:523)'
                    .')'
                .')'
                .'|/re(?'
                    .'|clamation/(?'
                        .'|edit/([^/]++)(*:565)'
                        .'|([^/]++)(*:581)'
                        .'|delete/([^/]++)(*:604)'
                        .'|traiteReclamation/([^/]++)(*:638)'
                    .')'
                    .'|se(?'
                        .'|rvation(?'
                            .'|/(?'
                                .'|([^/]++)(?'
                                    .'|(*:677)'
                                    .'|/edit(*:690)'
                                .')'
                                .'|delete/([^/]++)(*:714)'
                                .'|accepter/([^/]++)(*:739)'
                                .'|refuser/([^/]++)(*:763)'
                            .')'
                            .'|h/(?'
                                .'|([^/]++)(?'
                                    .'|(*:788)'
                                    .'|/edit(*:801)'
                                .')'
                                .'|delete/([^/]++)(*:825)'
                                .'|accepterh/([^/]++)(*:851)'
                                .'|refuserh/([^/]++)(*:876)'
                            .')'
                        .')'
                        .'|t\\-password/reset(?:/([^/]++))?(*:917)'
                    .')'
                .')'
                .'|/services/(?'
                    .'|updating/([^/]++)(*:957)'
                    .'|deleting/([^/]++)(*:982)'
                .')'
                .'|/transport/(?'
                    .'|update/([^/]++)(*:1020)'
                    .'|delete/([^/]++)(*:1044)'
                    .'|showi/([^/]++)(*:1067)'
                .')'
                .'|/user/(?'
                    .'|blocker/([^/]++)(*:1102)'
                    .'|deblocker/([^/]++)(*:1129)'
                    .'|([^/]++)(?'
                        .'|(*:1149)'
                        .'|/edit(*:1163)'
                        .'|(*:1172)'
                    .')'
                .')'
                .'|/media/cache/resolve/(?'
                    .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:1237)'
                    .'|([A-z0-9_-]*)/(.+)(*:1264)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        63 => [[['_route' => 'editOffre', '_controller' => 'App\\Controller\\APIoffreController::editOffre'], ['idOf'], null, null, false, true, null]],
        90 => [[['_route' => 'deleteOffre', '_controller' => 'App\\Controller\\APIoffreController::delete'], ['idOf'], null, null, false, true, null]],
        124 => [[['_route' => 'API_delete_hotel', '_controller' => 'App\\Controller\\ApihotelsController::deleteReclamation'], ['idH'], null, null, false, true, null]],
        166 => [[['_route' => 'API_delete_transport', '_controller' => 'App\\Controller\\ApitransportController::deletetransport'], ['id'], null, null, false, true, null]],
        198 => [[['_route' => 'update_guide', '_controller' => 'App\\Controller\\GuideController::updateguide'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => 'delete_guide', '_controller' => 'App\\Controller\\GuideController::deleteGuide'], ['id'], null, null, false, true, null]],
        258 => [[['_route' => 'detail', '_controller' => 'App\\Controller\\HotelsController::details'], ['idh'], null, null, false, true, null]],
        279 => [[['_route' => 'delete_hotel', '_controller' => 'App\\Controller\\HotelsController::deleteHotel'], ['idh'], null, null, false, true, null]],
        303 => [[['_route' => 'update_hotel', '_controller' => 'App\\Controller\\HotelsController::updateHotel'], ['idh'], null, null, false, true, null]],
        323 => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\HotelsController::pdf'], ['idh'], null, null, false, true, null]],
        355 => [[['_route' => 'app_offre_edit', '_controller' => 'App\\Controller\\OffreController::edit'], ['idOf'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        378 => [[['_route' => 'app_offre_delete', '_controller' => 'App\\Controller\\OffreController::delete'], ['idOf'], ['POST' => 0], null, false, true, null]],
        413 => [[['_route' => 'app_packs_edit', '_controller' => 'App\\Controller\\PacksController::edit'], ['idPack'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        436 => [[['_route' => 'app_packs_delete', '_controller' => 'App\\Controller\\PacksController::delete'], ['idPack'], ['POST' => 0], null, false, true, null]],
        466 => [[['_route' => 'app_payment_new', '_controller' => 'App\\Controller\\PaymentController::new'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        485 => [[['_route' => 'app_payment_show', '_controller' => 'App\\Controller\\PaymentController::show'], ['idP'], ['GET' => 0], null, false, true, null]],
        498 => [[['_route' => 'app_payment_edit', '_controller' => 'App\\Controller\\PaymentController::edit'], ['idP'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        523 => [[['_route' => 'payment_annuler', '_controller' => 'App\\Controller\\PaymentController::delete'], ['id'], null, null, false, true, null]],
        565 => [[['_route' => 'reclamation_edit', '_controller' => 'App\\Controller\\ReclamationController::edit'], ['idReclamation'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        581 => [[['_route' => 'app_reclamation_show', '_controller' => 'App\\Controller\\ReclamationController::show'], ['idReclamation'], ['GET' => 0], null, false, true, null]],
        604 => [[['_route' => 'reclamation_delete', '_controller' => 'App\\Controller\\ReclamationController::delete'], ['id'], null, null, false, true, null]],
        638 => [[['_route' => 'reclamation_traiter', '_controller' => 'App\\Controller\\ReclamationController::traiter'], ['id'], null, null, false, true, null]],
        677 => [[['_route' => 'app_reservation_show', '_controller' => 'App\\Controller\\ReservationController::show'], ['idRes'], ['GET' => 0], null, false, true, null]],
        690 => [[['_route' => 'app_reservation_edit', '_controller' => 'App\\Controller\\ReservationController::edit'], ['idRes'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        714 => [[['_route' => 'reservation_delete', '_controller' => 'App\\Controller\\ReservationController::delete'], ['id'], null, null, false, true, null]],
        739 => [[['_route' => 'reservation_accepter', '_controller' => 'App\\Controller\\ReservationController::accepter'], ['id'], null, null, false, true, null]],
        763 => [[['_route' => 'reservation_refuser', '_controller' => 'App\\Controller\\ReservationController::refuser'], ['id'], null, null, false, true, null]],
        788 => [[['_route' => 'app_reservationh_show', '_controller' => 'App\\Controller\\ReservationhController::show'], ['idreh'], ['GET' => 0], null, false, true, null]],
        801 => [[['_route' => 'app_reservationh_edit', '_controller' => 'App\\Controller\\ReservationhController::edit'], ['idreh'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        825 => [[['_route' => 'app_reservationh_delete', '_controller' => 'App\\Controller\\ReservationhController::delete'], ['id'], null, null, false, true, null]],
        851 => [[['_route' => 'reservationH_accepter', '_controller' => 'App\\Controller\\ReservationhController::accepter'], ['id'], null, null, false, true, null]],
        876 => [[['_route' => 'reservationH_refuser', '_controller' => 'App\\Controller\\ReservationhController::refuser'], ['id'], null, null, false, true, null]],
        917 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        957 => [[['_route' => 'update_service', '_controller' => 'App\\Controller\\ServicesController::updateService'], ['idS'], null, null, false, true, null]],
        982 => [[['_route' => 'delete_service', '_controller' => 'App\\Controller\\ServicesController::deleteService'], ['idS'], null, null, false, true, null]],
        1020 => [[['_route' => 'update_transport', '_controller' => 'App\\Controller\\TransportController::updatetransport'], ['id'], null, null, false, true, null]],
        1044 => [[['_route' => 'delete_transport', '_controller' => 'App\\Controller\\TransportController::deleteHotel'], ['id'], null, null, false, true, null]],
        1067 => [[['_route' => 'details', '_controller' => 'App\\Controller\\TransportController::ShowparId'], ['id'], null, null, false, true, null]],
        1102 => [[['_route' => 'blocker', '_controller' => 'App\\Controller\\UserController::blocke'], ['id'], null, null, false, true, null]],
        1129 => [[['_route' => 'deblocker', '_controller' => 'App\\Controller\\UserController::deblocker'], ['id'], null, null, false, true, null]],
        1149 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['idC'], ['GET' => 0], null, false, true, null]],
        1163 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['idC'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1172 => [[['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['idC'], ['POST' => 0], null, false, true, null]],
        1237 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        1264 => [
            [['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
