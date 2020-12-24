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

    // function getEmpleados(){
    //     $empleados= $this->model->GetEmpleados(1);
    //     $this->view->getEmpleados($empleados);

    // }

    function Home(){
        $empleados= $this->model->GetEmpleados(1);
        $this->view->getEmpleados($empleados);
    }
    function Promedio($empresa){
        $promedio= $this->model->getPromedio($empresa);
         $this->view->getPromedio($promedio);
 
    }

    function insertarEmpleado(){
        $nombre="Lucas";
        $apellido="Gonzalez";
        $edad=38;
        $tipo=1;
        $id_empresa=1;
        $dni=3899997;
        $tipo_diseniador="web";
        $lenguaje="php";
        //Carga de empleado
        $this->model->addEmpleado($nombre,$apellido,$edad,$tipo,$id_empresa,$dni,$lenguaje,$tipo_diseniador);
        //voy a comprobar si el usuario ingresado fue exitoso
        $empleado=$this->model->getEmpleadoxDni($dni);
        $this->view->addEmpleado($empleado);
        }

    
        

}



    ?>