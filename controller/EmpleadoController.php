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
        $empleados= $this->model->GetEmpleados();
        $this->view->getEmpleados($empleados);

    }

}



    ?>