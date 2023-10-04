<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/Index', 'process::index', ['filter' => 'authGuard']);
$routes->get('/Category/(:any)', 'process::category/$1', ['filter' => 'authGuard']);
$routes->get('/View/(:any)', 'process::view_product/$1', ['filter' => 'authGuard']);
$routes->get('/Admin', 'process::admin', ['filter' => 'authGuard']);
$routes->get('/Search', 'process::Search', ['filter' => 'authGuard']);
$routes->post('/Save', 'process::Save', ['filter' => 'authGuard']);
$routes->get('/Delete/(:any)', 'process::Delete/$1', ['filter' => 'authGuard']);
$routes->get('/Edit/(:any)', 'process::Edit/$1', ['filter' => 'authGuard']);
$routes->get('/Login', 'UserController::Login');
$routes->get('/Logout', 'UserController::Logout');
$routes->get('/Register', 'UserController::Signup');
$routes->post('/Registering', 'UserController::register');
$routes->post('/LoginAuth', 'UserController::LoginAuth');

