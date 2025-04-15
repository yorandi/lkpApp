<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/forgot-password.html', 'Home::forgotPassword');
$routes->get('/register.html', 'Home::register');
$routes->post('/proses-registrasi', 'Home::proses');
