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
//overview
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['register'] = 'home/register_';
$route['agencysignin'] = 'home/agencysignin_';
$route['signin'] = 'home/signin_';
$route['resetpassword'] = 'home/resetpassword_';
$route['contactus'] = 'home/contactus_';
$route['aboutus'] = 'home/aboutus_';

//to sale module 
$route['sale/commercial-properties'] = 'forsale/commercialproperties_';
$route['sale/flats-apartment'] = 'forsale/flatsapartment_';
$route['sale/houses'] = 'forsale/houses_';
$route['sale/land'] = 'forsale/land_';

//to rent module 
$route['rent/affordable-rentals'] = 'forrent/affordablerentals_';
$route['rent/flats-apartment'] = 'forrent/flatsapartment_';
$route['rent/houses'] = 'forrent/houses_';
$route['rent/commercial-properties'] = 'forrent/commercialproperties_';
$route['rent/bedsitter'] = 'forrent/bedsitter_';


//advice module 
$route['advice/blog'] = 'foradvice/blog_';
$route['advice/ideas'] = 'foradvice/ideas_';
$route['advice/places'] = 'foradvice/places_';


//new project module 
$route['projects/residential'] = 'newprojects/residential_';
$route['projects/commercial'] = 'newprojects/commercial_';

//add property module 
$route['addproperty/add-property'] = 'newproperty/addproperty_';


//account setting  module 
$route['account/my-requests'] = 'account/requests_';
$route['account/my-favourites'] = 'account/favourites_';
$route['account/my-properties'] = 'account/myproperties_';
$route['account/my-profile'] = 'account/myprofile_';
$route['account/account-setting'] = 'account/accountsetting_';
$route['account/change-password'] = 'account/changepassword_';
$route['account/dashboard'] = 'account/dashboard_';
$route['account/payment'] = 'account/payment_';
$route['account/invoice'] = 'account/invoice_';



