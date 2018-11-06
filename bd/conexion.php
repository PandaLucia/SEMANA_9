<?php
class conexion {
public static function getconnection(){
  $conn=new mysqli("localhost","root","","empresa");
  $conn->query("SET NAMES 'utf8'");
  return $conn;
  }
}
?>
