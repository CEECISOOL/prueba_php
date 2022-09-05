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
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->post('login', 'Home::login');
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
$routes->get('comercios', 'Comercios::index');
$routes->get('alta', 'Comercios::alta');
$routes->post('guardar/(:num)', 'Comercios::guardar/$1');
$routes->get('borrar/(:num)', 'Comercios::borrar/$1');
$routes->get('editar/(:num)', 'Comercios::editar/$1');
$routes->post('actualizar/(:num)', 'Comercios::actualizar/$1');
$routes->get('cbu/(:num)', 'Cbus::indexCbu/$1');
$routes->get('altaCbu/(:num)', 'Cbus::altaCbu/$1');
$routes->get('borrarCbu/(:num)', 'Cbus::borrarCbu/$1');
$routes->post('guardarCbu/(:num)', 'Cbus::guardarCbu/$1');
$routes->get('editarCbu/(:num)', 'Cbus::editarCbu/$1');
$routes->post('actualizarCbu/(:num)', 'Cbus::actualizarCbu/$1');

