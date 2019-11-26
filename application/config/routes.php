<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Pages
$route['registers'] = 'pages/register';
$route['logins'] = 'pages/login';
$route['profile'] = 'pages/profile';
$route['create_post'] = 'pages/create_post';

