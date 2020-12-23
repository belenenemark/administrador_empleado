<?php 
require_once "../model/EmpleadoModel.php";
require_once "../view/EmpleadoView.php";
class EmpleadoController 
{
    private $model;
    private $view;

    function __construct(){
      
        $this->model=new EmpleadoModel();
        $this->view= new EmpleadoView();
    }

    function getEmpleados(){
        $empleados= $this->model->GetEmpleados(1);
        $this->view->getEmpleados($empleados);

    }

    function addEmpleados(){
        $nombre="Martin";
        $apellido="Perez";
        $edad=38;
        $tipo=1;
        $id_empresa=1;
        $this->model->addEmpleado($nombre,$apellido,$edad,$tipo,$id_empresa);
    }

}



    ?>