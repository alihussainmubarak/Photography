<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Default
//$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// gallery
//$route['gallery/create'] = 'gallery/create';
//$route['gallery/update'] = 'gallery/update';
//$route['gallery/dashboard'] = 'gallery/dashboard';
//$route['gallery/(:any)'] = 'gallery/view/$1';
//$route['gallery'] = 'gallery';

// Gallery
$route['gallery'] = 'gallery';

$route['signup'] = 'signup';
$route['login'] = 'login';

$route['default_controller'] = 'gallery';

// Page
$route['(:any)'] = 'pages/view/$1';
//$route['default_controller'] = 'pages/view';