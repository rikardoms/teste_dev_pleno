<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Posts::index');
$routes->get('/posts', 'Posts::index/');
$routes->get('/areacurso', 'Areacurso::index/');
$routes->get('/aluno', 'Aluno::index/');
$routes->get('/curso', 'Curso::index/$1');
$routes->get('/matricula', 'Matricula::index/');
$routes->get('/usuario', 'Usuario::index/');
//$routes->get('/posts(:any)', 'Posts::create/');

/*
$route['users'] = "users/index";
$route['usersCreate']['post'] = "users/store";
$route['usersEdit/(:any)'] = "users/edit/$1";
$route['usersUpdate/(:any)']['put'] = "users/update/$1";
$route['usersDelete/(:any)']['delete'] = "users/delete/$1";
*/
/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
