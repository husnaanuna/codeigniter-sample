<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\StudentController;
use App\Controllers\Pages;


/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pages', [Pages::class, 'index']);
$routes->get('hello', [Pages::class, 'hello']);
$routes->get('registration', [StudentController::class, 'registration']);
$routes->post('register', [StudentController::class, 'register']);
$routes->get('profile/(:num)', [StudentController::class, 'profile']);

