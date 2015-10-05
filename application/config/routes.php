<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['control'] = 'dashboard';
$route['control/logout'] = 'dashboard/logout';
$route['migrate/(:num)'] = 'migrate/index/$';
$route['control/productos/(:num)'] = 'control/productos/index/$';
/* append */
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
