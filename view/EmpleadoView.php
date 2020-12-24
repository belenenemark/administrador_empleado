<?php 

class EmpleadoView
{
    

    function __construct(){
      
    }

    function getEmpleados($empleados){
        var_dump($empleados);

    }
   function addEmpleado($empleado){
       if(!(empty($empleado))){
           echo "<p>Se cargo el empleado";

       }else{
           echo "<p>Fallo la carga del empleado</p>";
       }
   }
   function getPromedio($promedio){
       var_dump($promedio);
   }

}
$empleados= new EmpleadoController();
$empleados->getPromedio(1);


    ?>