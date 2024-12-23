<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'FrontendController::index');
$routes->get('/about', 'FrontendController::about');
$routes->get('/courses', 'FrontendController::courses');
$routes->get('/trainers', 'FrontendController::trainers');
$routes->get('/events', 'FrontendController::events');
$routes->get('/pricing', 'FrontendController::pricing');
$routes->get('/contact', 'FrontendController::contact');
$routes->get('/courses/one', 'FrontendController::coursedata');

#admin url
$routes->get('/admin/login', 'Admin\AdminController::index');
$routes->get('/admin/register', 'Admin\AdminController::register');
$routes->post('/admin/adduser', 'Admin\AdminController::adduser');
$routes->post('/admin/authenticate', 'Admin\AdminController::login');

$routes->group('/admin', ['filter' => 'auth'], function($routes) {
$routes->get('dashboard', 'Admin\AdminController::dashboard');

$routes->get('logout', 'Admin\AdminController::logout');
});