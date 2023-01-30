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


//ROUTE UNTUK KELOLA PROFILE
$route['profile'] = 'profile/c_profile/index';
$route['kelola_data_user'] = 'manager/kelola_user/c_data_user/index';
$route['kelola_data_user/tambah'] = 'manager/kelola_user/c_data_user/tambah';

//ROUTE KELOLA PENGAJUAN
$route['user/kelola_data_pengajuan'] = 'user/c_data_pengajuan/index';
$route['user/kelola_data_pengajuan/tambah'] = 'user/c_data_pengajuan/tambah';
$route['user/kelola_data_pengajuan/hapus'] = 'user/c_data_pengajuan/hapus';
$route['user/kelola_data_pengajuan/ambil_jenis'] = 'user/c_data_pengajuan/ambil_jenis';

//ROUTE UNTUK KELOLA MANAGER
$route['manager/kelola_data_kategori'] = 'manager/kelola_kategori/c_data_kategori/index';
$route['manager/kelola_data_kategori/tambah'] = 'manager/kelola_kategori/c_data_kategori/tambah';
$route['manager/kelola_data_kategori/ubah'] = 'manager/kelola_kategori/c_data_kategori/ubah';
$route['manager/kelola_data_kategori/hapus'] = 'manager/kelola_kategori/c_data_kategori/hapus';

$route['kelola_user'] = 'manager/kelola_user/c_dashboard/index';
$route['kelola_data_user'] = 'manager/kelola_user/c_data_user/index';
$route['kelola_data_user/tambah'] = 'manager/kelola_user/c_data_user/tambah';