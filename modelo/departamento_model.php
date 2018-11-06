<?php
class departamento_model{
  private $DB;
  private $departamentos;

  function __construct(){
    $this->DB=conexion::getConnection();
    $this->departamentos=array();

  }
    function get(){
      $query=$this->DB->query("SELECT * FROM departamento");
      while($fila=$query->fetch_assoc()){
        $this->departamentos[]=$fila;
    }
    return $this->departamentos;

    }
  }

 ?>
