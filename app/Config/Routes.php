<?php

use App\Controllers\Home;
use App\Controllers\UserController;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/profile/(:any)/(:any)/(:any)', 'Home::profile/$1/$2/$3');
// $routes->get('/user/profile/(:any)/(:any)/(:any)', [UserController::class, 'profile']);
$routes->get('/user/profile', [UserController::class, 'profile']);
$routes->get('/user/create', [UserController::class, 'create']);
$routes->post('/user/store', [UserController::class, 'store']);
$routes->get('/user', [UserController::class, 'index']);