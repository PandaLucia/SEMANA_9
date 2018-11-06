<?php
  class empleado_model{
    private $DB;
    private $empleados;

    function __construct(){
      $this->DB=conexion::getConnection();
      $this->empleados=array();

    }
      function get(){
        $query=$this->DB->query("SELECT * FROM empleado");
        while($fila=$query->fetch_assoc()){
          $this->empleados[]=$fila;
      }
      return $this->empleados;
      }

      function getId($_id){
        $query=$this->DB->query("SELECT * FROM empleado WHERE _id=$_id");
        while($fila=$query->fetch_assoc()) {
          $this->empleados=$fila;
        }
        return $this->empleados;
      }

    function add($data){
    $sql="INSERT INTO empleado (nombre,ap_paterno,ap_materno,edad,sexo,num_control,departamento_id) VALUES".
    "('".$data['nombre']."','".$data['ap_paterno']."','".$data['ap_materno']."','".$data['edad']."'".
    ",'".$data['sexo']."','".$data['num_control']."','".$data['departamento_id']."')";
    mysqli_query($this->DB,$sql) or die('error \n'.mysqli_error($this->DB));

      }
function edit($data,$_id){
$sql="UPDATE empleado SET nombre='".$data['nombre']."',
ap_paterno='".$data['ap_paterno']."',
ap_materno='".$data['ap_materno']."',
edad='".$data['edad']."',
sexo='".$data['sexo']."',
num_control='".$data['num_control']."',
departamento_id='".$data['departamento_id']."'
WHERE _id=$_id";
var_dump($sql);
mysqli_query($this->DB,$sql) or die('error \n'.mysqli_error($this->DB));
}
      function delete($_id){
        $sql="DELETE FROM empleado WHERE _id='$_id'";
        mysqli_query($this->DB,$sql) or die('error \n'.mysqli_error($this->DB));
      }
    }
 ?>
