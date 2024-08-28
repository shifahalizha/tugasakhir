<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('indo/downloadExcel', 'Indo::downloadExcel');
$routes->get('jawabarat/downloadExcel', 'jawabarat::downloadExcel');
$routes->resource('home');
$routes->resource('Indo');
$routes->resource('jawabarat');
$routes->resource('login');
$routes->resource('register');
$routes->group('', ['filter' => 'authMiddleware'], function($routes) {
    $routes->resource('admin');
    $routes->resource('adminjakarta');
    $routes->resource('history');
    $routes->resource('adminjabar');
});
$routes->resource('logout');