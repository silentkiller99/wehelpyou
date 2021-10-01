<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'UserHome/index';
$route['404_override'] = 'CustomPages/error404';
$route['error_403'] = 'CustomPages/error403';
$route['error_500'] = 'CustomPages/error500';
$route['translate_uri_dashes'] = FALSE;

///////////// /     admin   ///////////////////
$route['adminLogin'] = 'Login/adminLogin';
$route['user'] = 'admin/HomePage/user';
$route['hospital'] = 'admin/HomePage/hospital';


//////////  user   //////////////////////
$route['userRegister'] = 'Login/userResister';
$route['userLogin'] = 'Login/userLogin';
$route['userLogout'] = 'Login/userLogout';

$route['home'] = 'UserHome/index';
$route['allHospital'] = 'UserHome/all_hospital';
$route['vSHospital/(:any)'] = 'UserHome/viewSingleHospital/$1';
$route['checkoutPage'] = 'UserHome/checkoutPage';
$route['history'] = 'UserHome/history';


$route['getCity'] = 'Login/getCity';
$route['getMachine'] = 'vendorHome/getMachine';


///////////////      hospital   ///////////////////////

$route['vendorResister'] = 'Login/vendorResister';
$route['vendorLogin'] = 'Login/vendorLogin';
$route['vendorLogout'] = 'Login/logout';

$route['hDashboard'] = 'HospitalData/home';
$route['hProfile'] = 'HospitalData/profile';
$route['addName'] = 'HospitalData/addName';
$route['allName'] = 'HospitalData/allName';
$route['addMedicine'] = 'HospitalData/addMedicine';
$route['allMedicine'] = 'HospitalData/allMedicine';
$route['updateQuantity'] = 'HospitalData/updateQuantity';

$route['allVaccine'] = 'HospitalData/allVaccine';
$route['addVeccine'] = 'HospitalData/addVeccine';
$route['appoDetails'] = 'HospitalData/appointmentDetails';
$route['acceptStatus'] = 'HospitalData/acceptStatus';









