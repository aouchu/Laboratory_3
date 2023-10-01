<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/index', 'process::index');
$routes->get('/category/(:any)', 'process::category/$1');
$routes->get('/view/(:any)', 'process::view_product/$1');
$routes->get('/admin', 'process::admin',['filter' => 'authGuard']);
$routes->get('/Login', 'UserController::Login');
$routes->get('/Register', 'UserController::Signup');
$routes->post('/Registering', 'UserController::register');
$routes->get('/LoginAuthentication', 'UserController::LoginAuth');

