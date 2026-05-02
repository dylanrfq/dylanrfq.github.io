<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');

$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::loginProcess');
$routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::registerProcess');
$routes->get('/logout', 'AuthController::logout');

$routes->get('/pengalaman', 'PengalamanController::index', ['filter' => 'auth']);
$routes->get('/karya', 'KaryaController::index', ['filter' => 'auth']);
$routes->get('/jasa', 'JasaController::index', ['filter' => 'auth']);
$routes->get('/sertifikat', 'SertifikatController::index', ['filter' => 'auth']);
