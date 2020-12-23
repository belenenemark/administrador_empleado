<?php 
class EmpleadoModel 
{
    private $db;

    function __construct(){
      
        $this->db = new PDO('mysql:host=localhost;'.'dbname=adminempleados;charset=utf8', 'root', '');
    }
/** Consulta para traer todos los empleados de una empresa */
	public function GetEmpleados($empresa){
        $sentencia = $this->db->prepare( "select * from empleado where id_empresa=?");
        $sentencia->execute(array($empresa));
        $empleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        
        return $empleados;
    }

    /* Con las siguientes dos consultas cargaremos un empleado y le asignaremos el tipo de empleado(diseñador o programador)  */

    public function addEmpleado($nombre,$apellido,$edad,$tipo,$id_empresa){
        $sentencia = $this->db->prepare("INSERT INTO empleado ( nombre,apellido,edad,tipo_empleado,id_empresa) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($nombre,$apellido,$edad,$tipo,$id_empresa));
    }
    /**Soy consciente que aca las consultas hacen lo mismo pero si fueran tipos distintos lo que pide hay que reverlo se que hay una forma de abstraer este comportamiento
     * pero aun no la se. Si llego lo googleo y lo mejoro
     */
    public function addProgramador($id,$lenguaje){
        $sentencia = $this->db->prepare("INSERT INTO empleado (id,lenguaje_programacion) VALUES(?,?)");
        $sentencia->execute(array($id,$lenguaje));
    }
    public function addDiseñador($id,$tipo){
        $sentencia = $this->db->prepare("INSERT INTO diseñador (id,tipo_diseniador) VALUES(?,?)");
        $sentencia->execute(array($id,$tipo));
    }

    
  

}
?>