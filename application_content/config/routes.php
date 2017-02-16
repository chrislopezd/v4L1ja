<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
####LOGIN###############################
$route['default_controller'] = "acceso";
$route['(:any)'] = 'acceso';

$route['mail'] = 'correo';


$route['cerrarSession'] = 'acceso/logout';
$route['errorCsrf'] = 'acceso/errorCsrf';
####END LOGIN############################

$route['nuevaSolicitud'] = 'inicio/newSolicitud';
$route['editaSolicitud'] = 'inicio/editSolicitud';
$route['ajax/guardarDatos'] = 'inicio/saveDataSolicitud';
$route['ajax/editarDatos'] = 'inicio/editDataSolicitud';
$route['ajaX/verificarEstatus'] = 'inicio/verEstatus';

$route['listadoSolicitudes'] = 'inicio/loadDataGrid';
$route['listadoSubGrid'] = 'inicio/listadoDetail';
$route['ajax/verDetalle'] = 'inicio/viewDetalle';
$route['ajax/descargarPdf'] = 'inicio/downPdf';
$route['ajax/reportePdf'] = 'inicio/downReportPdf';


$route['loggin'] = 'acceso';
$route['captcha'] = 'acceso/verCaptcha';
$route['iniciarSession'] = 'acceso/validarInicioSession';
$route['cerrarSession'] = 'acceso/logout';
$route['ajax/optionHtml'] = 'inicio/getOption';
$route['ajax/optionHtmlUsuario'] = 'inicio/getOptionUsuario';

$route['pdf'] = 'pdf/generarPdf';


$route['inicio'] = 'acceso/inicio';
$route['404_override'] = '';
/* End of file routes.php */
/* Location: ./application/config/routes.php */