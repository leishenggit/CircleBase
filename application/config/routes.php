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
|	https://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//forbidden access resource files
//$route['resource/(:any)/(:any)'] = 'validate/index';
//route to search
$route['search/cancer/(:any)'] = 'search/cancer_type/$1'; 
$route['search/gene/symbol/(:any)'] = 'search/gene_symbol/$1';
$route['search/mutation/detail/(:any)/(:any)/(:any)/(:any)'] = 'search/mutation_detail/$1/$2/$3/$4';
$route['search/gene/(:any)/(:any)/(:any)/(:any)'] = 'search/gene_mutation/$1/$2/$3/$4';
$route['search/pathway/(:any)/(:any)/(:any)/(:any)'] = 'search/pathway_gene/$1/$2/$3/$4';
$route['search/variant/symbol/(.*)'] = 'search/variant_symbol/$1';
$route['search/drug/(:any)'] = 'search/drug/$1';
//fix the js window.location.href bug
$route['search/(:any)/(:num)/(:num)/(:any)/(:any)'] = 'search/dag_annotation/$1/$2/$3/$4/$5';

