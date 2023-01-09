<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('inicio', 'Home::inicio');
$routes->post('/login', 'Home::login');


$routes->get('/servicios/listar', 'Servicios::index');
$routes->get('/servicios/crear', 'Servicios::crear');
$routes->post('/servicios/guardar', 'Servicios::guardar');
$routes->get('/servicios/borrar/(:num)', 'Servicios::borrar/$1');
$routes->get('/servicios/editar/(:num)', 'Servicios::editar/$1');
$routes->post('/servicios/actualizar', 'Servicios::actualizar');
//citas
$routes->get('/citas/listar', 'Citas::index');
$routes->get('/citas/crear', 'Citas::crear');
$routes->post('/citas/guardar', 'Citas::guardar');
$routes->get('/citas/borrar/(:num)', 'Citas::borrar/$1');
$routes->get('/citas/editar/(:num)', 'Citas::editar/$1');
$routes->post('/citas/actualizar', 'Citas::actualizar');
//pacientes
$routes->get('/pacientes/listar', 'Pacientes::index');
$routes->get('/pacientes/crear', 'Pacientes::crear');
$routes->post('/pacientes/guardar', 'Pacientes::guardar');
$routes->get('/pacientes/borrar/(:num)', 'Pacientes::borrar/$1');
$routes->get('/pacientes/editar/(:num)', 'Pacientes::editar/$1');
$routes->post('/pacientes/actualizar', 'Pacientes::actualizar');
//Pagos
$routes->get('/pagos/listar', 'Pagos::index');
$routes->get('/pagos/crear', 'Pagos::crear');
$routes->post('/pagos/guardar', 'Pagos::guardar');
$routes->get('/pagos/borrar/(:num)', 'Pagos::borrar/$1');
$routes->get('/pagos/editar/(:num)', 'Pagos::editar/$1');
$routes->post('/pagos/actualizar', 'Pagos::actualizar');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
