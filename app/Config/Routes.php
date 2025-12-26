<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;
use Config\Services;

/**
 * @var RouteCollection $routes
 */
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->get('users', 'Users::index');

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */
$routes->get('/', 'Home::index');
$routes->get('dbtest', 'DbTest::index');
