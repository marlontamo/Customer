<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['register'] = 'Login_ctrl/register';
$route['login'] = 'login_ctrl/login';
$route['logout'] = 'login_ctrl/logout';
$route['install'] = 'user/install';
$route['home'] = 'home';
$route['test'] = 'home/test';
$route['getdata'] = 'home/get_data';

$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
//store routes
$route['storelist'] = 'store/storelist';
$route['create'] = 'store/index';
$route['addmyproduct'] = 'store/createproduct_for_store';
//Product
$route['add_product'] = 'home/add_product';
$route['productlist'] = 'home/list_products';
$route['template'] = 'home/template';
//customers
$route['profile'] = 'user/user_profile';
$route['addcustomer'] = "CustomerController/add_customer";
$route['customeredit/(:num)'] = "CustomerController/customeredit/$1";
$route['customers'] ="CustomerController/customersview";
$route['customer/(:num)'] = "CustomerController/customer_view/$1";
//$route['modify/(:num)'] = "CustomerController/modify/$1";
$route['update/(:num)'] = "CustomerController/update_customer/$1";
$route['addview/(:num)/(:any)'] ="CustomerController/cust_add_edit_page/$1/$2";
// view all registered customers
$route['customers'] ="CustomerController/customersview";
//view single customer
$route['customer/(:num)'] = "CustomerController/customer_view/$1";
//edit single customer
$route['update'] = "CustomerController/update_customer";
/*
form uses hidden field then the method checks if the request
 is edit or add this will also check the customer id to update
 */
$route['addview'] ="CustomerController/cust_add_edit_page";

/*add new customer use*/
$route['newcust'] = "CustomerController/template";
/*"customer/customer id/edit" will return auto filled form*/
$route['customer/(:num)/(:any)'] ="CustomerController/cust_add_edit_page/$1/$2";
// view all registered customers
$route['customers'] ="CustomerController/customersview";
//view single customer
$route['customer/(:num)'] = "CustomerController/customer_view/$1";
//delete or remove customer
$route['remove/(:num)'] = "CustomerController/destroy/$1";
//$route['edit/(:num)'] = "CustomerController/edit/$1";
$route['index']= "Home/index";
$route['view'] = "Home/view_cart";
$route['clear'] ="Home/clear_cart";
//user profile
$route['profile/(:num)'] = "CustomerController/profile/$1";
$route['addproduct'] = "Product/create";