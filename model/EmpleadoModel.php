<?php 
class EmpleadoModel 
{
    private $db;

    function __construct(){
      
        $this->db = new PDO('mysql:host=localhost;'.'dbname=adminempleados;charset=utf8', 'root', '');
    }
/** Consulta para traer todos los empleados de una empresa */
	 function getEmpleados($empresa){
        $sentencia = $this->db->prepare( "SELECT * FROM empleado WHERE id_empresa=?");
        $sentencia->execute(array($empresa));
        $empleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        
        return $empleados;
    }
    /**Consulta de un empleado por dni, tome esta consulta en vez de por id porque es mas intuitivo, la consulta por id seria lo mismo que por dni si reemplazas el campo del where*/
     function getEmpleadoxDni($dni){
        $sentencia = $this->db->prepare( "SELECT * FROM empleado WHERE dni=?");
        $sentencia->execute(array($dni));
        $empleados = $sentencia->fetch(PDO::FETCH_ASSOC);
        
        return $empleados;
    }

    /* Con las siguientes dos consultas cargaremos un empleado y le asignaremos el tipo de empleado(diseñador o programador)  */

    function addEmpleado($nombre,$apellido,$edad,$tipo,$id_empresa,$dni,$lenguaje,$tipo_diseniador){
        $sentencia = $this->db->prepare("INSERT INTO empleado ( nombre,apellido,edad,tipo_empleado,id_empresa,dni) VALUES(?,?,?,?,?,?)");
        $sentencia->execute(array($nombre,$apellido,$edad,$tipo,$id_empresa,$dni));
        //esta agregacion se hace en el model porque no tiene que ver con logica de programacion sino es un tema de insercion 
        //en la bd
        if($tipo==1){
            $id=$this->db->lastInsertId();
            $this->addProgramador($id,$dni,$lenguaje);
        }else if($tipo==2){
            $id=$this->db->lastInsertId();
            $this->addDiseñador($id,$dni,$tipo);
        }
    }
    /**Soy consciente que aca las consultas tienen una estructura parecida y coinciden en tipo pero si fueran tipos distintos 
     * y exigencias de mas datos se puede hacer extensible el agregar empleado solo haciendo la consulta especifica para 
     * lo adicional. 
       */
    function addProgramador($id,$dni,$lenguaje){
        $sentencia = $this->db->prepare("INSERT INTO empleado (id,dni,lenguaje_programacion) VALUES(?,?,?)");
        $sentencia->execute(array($id,$dni,$lenguaje));
    }
   function addDiseñador($id,$dni,$tipo){
        $sentencia = $this->db->prepare("INSERT INTO diseñador (id,dni,tipo_diseniador) VALUES(?,?,?)");
        $sentencia->execute(array($id,$dni,$tipo));
    }

    /** Consulta para obtener el promedio de empleados por edad y por las dudas por empresa. */
     function getPromedio($empresa){
        $sentencia = $this->db->prepare( "SELECT AVG(edad) AS 'promedio' FROM empleado WHERE id_empresa=?");
        $sentencia->execute(array($empresa));
        $empleados = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $empleados;
    }

}
?>