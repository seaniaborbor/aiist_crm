<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/', 'Home::index');
$routes->get('logout', 'Home::logout');


$routes->group('admin', ['filter' => 'admin'], function($routes) {

    $routes->get('', 'Admin\DashboardController::index');

    // manage users routes
    $routes->get("users", 'Admin\UsersController::index');
    $routes->get("add_users", 'Admin\UsersController::add_user');
    $routes->post("add_users", 'Admin\UsersController::add_user');
    $routes->get("user_profile/(:num)", 'Admin\UsersController::user_profile/$1');
    $routes->post("user_profile/(:num)", 'Admin\UsersController::user_profile/$1');
    $routes->post("personal_profile/(:num)", 'Admin\DashboardController::personal_profile/$1');
    $routes->get("personal_profile/(:num)", 'Admin\DashboardController::personal_profile/$1');


    //marketing manager
    $routes->get('marketing_manager', 'Admin\MarketingManagerController::index');


});



$routes->group('marketing', ['filter' => 'contactlogger'], function($routes) {

    $routes->get('', 'Marketing\DashboardController::index');


    $routes->get('log_form_sale', 'Marketing\FormSaleController::index');
    $routes->post('log_form_sale', 'Marketing\FormSaleController::index');
    $routes->get('log_form_sale/details/(:num)', 'Marketing\FormSaleController::view/$1');// view
    $routes->post('log_form_sale/details/(:num)', 'Marketing\FormSaleController::view/$1'); // update
    $routes->get('log_form_sale/delete/(:num)', 'Marketing\FormSaleController::delete/$1');// delete
    $routes->get('log_form_sale/change_status/(:num)/(:any)', 'Marketing\FormSaleController::change_status/$1/$2'); // change status 

    
    $routes->get('log_online_inquiry_form', 'Marketing\OnlineInquiryController::index'); 
    $routes->post('log_online_inquiry_form', 'Marketing\OnlineInquiryController::index');
    $routes->get('online_inquiry/detail/(:num)', 'Marketing\OnlineInquiryController::detail/$1');
    $routes->post('online_inquiry/detail/(:num)', 'Marketing\OnlineInquiryController::detail/$1');
    $routes->post('online_inquiry/edit/(:num)', 'Marketing\OnlineInquiryController::edit/$1');
    $routes->get('online_inquiry/delete/(:num)', 'Marketing\OnlineInquiryController::delete/$1');
    $routes->get('online_inquiry/change_status/(:num)/(:any)', 'Marketing\OnlineInquiryController::update/$1/$2');

    $routes->post("personal_profile/(:num)", 'Marketing\DashboardController::personal_profile/$1');
    $routes->get("personal_profile/(:num)", 'Marketing\DashboardController::personal_profile/$1');

    


});

