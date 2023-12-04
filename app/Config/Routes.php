<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\StudentController;
use App\Controllers\SubjectController;
use App\Controllers\Pages;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');$routes->get('/', 'Home::index');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('hello', [Pages::class, 'hello']);
$routes->get('registration', [StudentController::class, 'registration']);
$routes->post('register', [StudentController::class, 'register']);
$routes->get('edit/(:num)', [StudentController::class, 'edit']);
$routes->post('update/(:num)', [StudentController::class, 'update']);
$routes->get('profile/(:num)', [StudentController::class, 'profile']);

////########### API RESPONSE ###########////
$routes->get('/api/get-user', [StudentController::class, 'apiGetUser']);
$routes->get('/api/get-user/(:num)', [StudentController::class, 'apiGetUserById']);
////########### API RESPONSE ###########////

