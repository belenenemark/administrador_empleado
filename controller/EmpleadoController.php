<?php 
require_once "model/EmpleadoModel.php";
require_once "view/EmpleadoView.php";
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

    function addEmpleado(){
        $nombre="Martin";
        $apellido="Perez";
        $edad=38;
        $tipo=2;
        $id_empresa=1;
        $dni=3899999;
        $tipo_diseniador="web";
        $lenguaje=null;
        //Carga de empleado
        $this->model->addEmpleado($nombre,$apellido,$edad,$tipo,$id_empresa,$dni,$lenguaje,$tipo_diseniador);
        //voy a comprobar si el usuario ingresado fue exitoso
        $empleado=$this->model->getEmpleadoxDni($dni);
        $this->view->addEmpleado($empleado);
        }

    function getPromedio($empresa){
       $promedio= $this->model->getPromedio($empresa);
        $this->view->getPromedio($promedio);

    }
        

}



    ?>