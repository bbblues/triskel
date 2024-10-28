<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['sistema/(:any)'] = 'welcome/sistema/$1';
$route['cenario/(:any)'] = 'welcome/cenario/$1';
$route['sistema'] = 'welcome/sistema';
$route['cenario'] = 'welcome/cenario';
$route['bestiario'] = 'welcome/bestiario';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
