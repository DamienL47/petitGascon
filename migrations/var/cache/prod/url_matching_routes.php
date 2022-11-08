<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/admin/categories' => [[['_route' => 'admin_app_category_index', '_controller' => 'App\\Controller\\AdminCategoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/admin/new_category' => [[['_route' => 'admin_app_category_new', '_controller' => 'App\\Controller\\AdminCategoryController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard/listeContact' => [[['_route' => 'liste_demande_contact', '_controller' => 'App\\Controller\\AdminContactController::listeContact'], null, null, null, false, false, null]],
        '/admin/create_admin' => [[['_route' => 'admin_create_admin', '_controller' => 'App\\Controller\\AdminController::createAdmin'], null, null, null, false, false, null]],
        '/admin/admins_list' => [[['_route' => 'admin_list', '_controller' => 'App\\Controller\\AdminController::listAdmin'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\AdminHomeController::adminHome'], null, null, null, false, false, null]],
        '/admin/admin/menus' => [[['_route' => 'admin_app_menu_index', '_controller' => 'App\\Controller\\AdminMenuController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/admin/new' => [[['_route' => 'admin_app_menu_new', '_controller' => 'App\\Controller\\AdminMenuController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/admin/mets' => [[['_route' => 'admin_app_met_index', '_controller' => 'App\\Controller\\AdminMetController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/admin/new_met' => [[['_route' => 'admin_app_met_new', '_controller' => 'App\\Controller\\AdminMetController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reservation/editadmin/reservation/list' => [[['_route' => 'app_admin_reservation_edit_index', '_controller' => 'App\\Controller\\AdminReservationEditController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reservation/editadmin/reservation/new' => [[['_route' => 'app_admin_reservation_edit_new', '_controller' => 'App\\Controller\\AdminReservationEditController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'admin_dashboard', '_controller' => 'App\\Controller\\DashboardController::dashboard'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::home'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/menu/menu' => [[['_route' => 'app_menu_index', '_controller' => 'App\\Controller\\MenuController::index'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/reservationOnline' => [[['_route' => 'reservationOnline', '_controller' => 'App\\Controller\\ReservationController::newReservation'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|admin/(?'
                        .'|category/([^/]++)(?'
                            .'|(*:46)'
                            .'|/edit(*:58)'
                        .')'
                        .'|delete(?'
                            .'|_(?'
                                .'|category/([^/]++)(*:96)'
                                .'|met/([^/]++)(*:115)'
                            .')'
                            .'|Menu/([^/]++)(*:137)'
                        .')'
                        .'|me(?'
                            .'|nu/(?'
                                .'|([^/]++)(?'
                                    .'|(*:168)'
                                    .'|/edit(*:181)'
                                .')'
                                .'|pdf/([^/]++)(*:202)'
                            .')'
                            .'|t(?'
                                .'|([^/]++)(*:223)'
                                .'|/([^/]++)/edit(*:245)'
                            .')'
                        .')'
                    .')'
                    .'|d(?'
                        .'|ashboard/contact/([^/]++)(*:285)'
                        .'|elete_admin([^/]++)(*:312)'
                    .')'
                    .'|update_admin/([^/]++)(*:342)'
                    .'|reservation/editadmin/reservation/([^/]++)/(?'
                        .'|show(*:400)'
                        .'|edit(*:412)'
                        .'|delete(*:426)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'admin_app_category_show', '_controller' => 'App\\Controller\\AdminCategoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        58 => [[['_route' => 'admin_app_category_edit', '_controller' => 'App\\Controller\\AdminCategoryController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        96 => [[['_route' => 'admin_app_category_delete', '_controller' => 'App\\Controller\\AdminCategoryController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        115 => [[['_route' => 'admin_app_met_delete', '_controller' => 'App\\Controller\\AdminMetController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        137 => [[['_route' => 'admin_app_menu_delete', '_controller' => 'App\\Controller\\AdminMenuController::delete'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        168 => [[['_route' => 'admin_app_menu_show', '_controller' => 'App\\Controller\\AdminMenuController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        181 => [[['_route' => 'admin_app_menu_edit', '_controller' => 'App\\Controller\\AdminMenuController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        202 => [[['_route' => 'admin_menu_pdf', '_controller' => 'App\\Controller\\AdminMenuController::toPdf'], ['id'], null, null, false, true, null]],
        223 => [[['_route' => 'admin_app_met_show', '_controller' => 'App\\Controller\\AdminMetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        245 => [[['_route' => 'admin_app_met_edit', '_controller' => 'App\\Controller\\AdminMetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        285 => [[['_route' => 'admin_dashboard_contact', '_controller' => 'App\\Controller\\AdminContactController::setContact'], ['id'], null, null, false, true, null]],
        312 => [[['_route' => 'admin_delete', '_controller' => 'App\\Controller\\AdminController::deleteAdmin'], ['id'], null, null, false, true, null]],
        342 => [[['_route' => 'admin_update', '_controller' => 'App\\Controller\\AdminController::updateAdmin'], ['id'], null, null, false, true, null]],
        400 => [[['_route' => 'app_admin_reservation_edit_show', '_controller' => 'App\\Controller\\AdminReservationEditController::show'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        412 => [[['_route' => 'app_admin_reservation_edit_edit', '_controller' => 'App\\Controller\\AdminReservationEditController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        426 => [
            [['_route' => 'app_admin_reservation_edit_delete', '_controller' => 'App\\Controller\\AdminReservationEditController::delete'], ['id'], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
