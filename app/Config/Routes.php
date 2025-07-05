<?php

use CodeIgniter\Router\RouteCollection;
use Config\Services;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

$routes->get('/home', 'Home::index');
$routes->get('/', 'Home::default');
$routes->get('task', 'TaskController::index');
$routes->get('task/add_task', 'TaskController::form');
$routes->post('task/task_add', 'TaskController::task_add');
$routes->get('task/(:num)', 'TaskController::task_details/$1');

