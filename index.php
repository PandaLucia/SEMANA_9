<?php
require_once "bd/conexion.php";
//require_once "controlador/empleado_controller.php";

$controller='empleado';
//Toda esta lógica hará el papel de un FrontController
if(!isset($_REQUEST['c']))
{
  require_once "controlador/$controller"."_controller.php";
  $controller=ucwords($controller).'_controller';
  $controller=new $controller;
  $controller->Index();
}
else
{
  //Obtenemos el controlador que queremos cargar
  $controller=strtolower($_REQUEST['c']);
  $accion = isset($_REQUEST['a']) ? $_REQUEST['a']:'index';

  //Instanciamos el controlador
  require_once "controlador/$controller"."_controller.php";
  $controller = ucwords($controller).'_controller';
  $controller = new $controller;

  //Llama la acción
  call_user_func(array($controller,$accion));

}
?>
