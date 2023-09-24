<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/prueba', 'principal::index');
$routes->get('/miestilo', 'principal::miestilo');
