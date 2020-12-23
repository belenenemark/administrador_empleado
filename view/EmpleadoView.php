<?php 

class EmpleadoView
{
    

    function __construct(){
      
    }

    function getEmpleados($empleados){
        var_dump($empleados);

    }

}
$empleados= new EmpleadoController();
$empleados->getEmpleados();


    ?>