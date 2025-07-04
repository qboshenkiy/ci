<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'Home::index');
$routes->get('/', 'Home::default');
$routes->get('task', 'TaskController::index');
$routes->get('task/(:segment)', 'TaskController::task/$1');

