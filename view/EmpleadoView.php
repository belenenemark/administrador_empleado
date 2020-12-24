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
       echo "<p>El promedio de edad de los empleados es:".$promedio['promedio']."</p>";
   }

}



    ?>