<?php 
require_once "./libs/smarty/Smarty.class.php";
class EmpleadoView
{
    private $Smarty;

    function __construct(){
        $this->Smarty = new Smarty();

    }

    function getEmpleados($empresa,$empleados){
        $this->Smarty->assign('empresa_s', $empresa);
        $this->Smarty->assign('empleados_s', $empleados);
        $this->Smarty->display('templates/home.tpl');

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