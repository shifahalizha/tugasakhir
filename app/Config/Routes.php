<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('indo/downloadExcel', 'Indo::downloadExcel');
$routes->get('indo/filter', 'indo::filter');
$routes->resource('home');
$routes->resource('Indo');
$routes->resource('login');
$routes->resource('register');
$routes->resource('admin');
$routes->resource('logout');
$routes->resource('history');
$routes->resource('adminjakarta');