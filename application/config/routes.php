<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//$route['product']='product/index';
$route['default_controller'] = 'page/index';
$route['(:any)']='page/index/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
