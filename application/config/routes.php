<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
#
$route['save_tooth_chart'] = 'pages/save_tooth_chart';
$route['admit_chart/(:any)/(:any)'] = 'pages/admit_chart/$1/$2';
$route['change_password'] = 'pages/change_password';
$route['print_dental_records/(:any)'] = 'pages/print_dental_records/$1';
$route['save_balance_payment'] = 'pages/save_balance_payment';
$route['view_patient_account/(:any)'] = 'pages/view_patient_account/$1';
$route['discharge_patient/(:any)'] = 'pages/discharge_patient/$1';
$route['save_partial_payment'] = 'pages/save_partial_payment';
$route['view_proof/(:any)'] = 'pages/view_proof/$1';
$route['save_payment'] = 'pages/save_payment';
$route['edit_unitcost'] = 'pages/edit_unitcost';
$route['add_discount'] = 'pages/add_discount';
$route['delete_charges/(:any)/(:any)'] = 'pages/delete_charges/$1/$2';
$route['add_charges'] = 'pages/add_charges';
$route['view_billing/(:any)'] = 'pages/view_billing/$1';
$route['save_admission'] = 'pages/save_admission';
$route['view_admission_history/(:any)'] = 'pages/view_admission_history/$1';
$route['view_profile/(:any)'] = 'pages/view_profile/$1';
$route['update_patient'] = 'pages/update_patient';
$route['save_patient'] = 'pages/save_patient';
$route['manage_patient'] = 'pages/manage_patient';
$route['delete_services/(:any)'] = 'pages/delete_services/$1';
$route['save_services'] = 'pages/save_services';
$route['services'] = 'pages/services';
$route['main'] = 'pages/main';
$route['logout'] = 'pages/logout';
$route['authenticate'] = 'pages/authenticate';
$route['default_controller'] = 'pages/index';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
