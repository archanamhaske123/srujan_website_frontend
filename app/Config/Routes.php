<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/mentors', 'Home::mentors');
$routes->get('/contact-us', 'Home::contact_us');
$routes->get('/events', 'Home::events');
$routes->get('/about-us', 'Home::about_us');
$routes->get('/about-us', 'Home::about_us');
$routes->get('/what-we-do', 'Home::what_we_do');
$routes->get('/startups', 'Home::startups');
$routes->get('/programs', 'Home::programs');
$routes->get('/facilities', 'Home::facilities');

