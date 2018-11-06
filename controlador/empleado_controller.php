<?php
//incluir archivos del php modelo
require_once 'modelo/empleado_model.php';
require_once 'modelo/departamento_model.php';
  class empleado_controller{
    private $model_e;
    private $model_d;

    function __construct(){
      $this->model_e=new empleado_model();
      $this->model_d=new departamento_model();
    }
    function index(){
      $title="Empleados";
      $query=$this->model_e->get();
      require_once 'vista/header.php';
      require_once 'vista/index.php';
      require_once 'vista/footer.php';
    }
    function empleado() {
      $data=NULL;
      if(isset($_REQUEST['_id'])){
        $data=$this->model_e->getId($_REQUEST['_id']);
      }
      $title="Empleados";
      $query=$this->model_d->get();
      require_once 'vista/header.php';
      require_once 'vista/empleado.php';
      require_once 'vista/footer.php';
      }
function save(){
      $data['num_control']=$_REQUEST['txt_num_control'];
      $data['nombre']=$_REQUEST['txt_nombre'];
      $data['ap_paterno']=$_REQUEST['txt_ap_paterno'];
      $data['ap_materno']=$_REQUEST['txt_ap_materno'];
      $data['edad']=$_REQUEST['txt_edad'];
      $data['sexo']=$_REQUEST['rd_sexo'];
      $data['departamento_id']=$_REQUEST['sel_departamento'];

      $_id=$_REQUEST['txt_id'];
      $_id > 0 ?
      $this->model_e->edit($data,$_id):
      $this->model_e->add($data);

      header('Location: index.php');
  }
    function delete(){
      $_id=$_REQUEST['_id'];
      $this->model_e->delete($_id);
      header('Location: index.php');
    }

    function edit(){
      $_id=$_REQUEST['_id'];
      $this->model_e->edit($_id);
      header('Location: index.php');
    }
  }
?>
