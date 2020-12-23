<?php 
class EmpleadoModel 
{
    private $db;

    function __construct(){
      
        $this->db = new PDO('mysql:host=localhost;'.'dbname=adminempleados;charset=utf8', 'root', '');
    }

	public function GetEmpleados(){
        $sentencia = $this->db->prepare( "select * from empleado");
        $sentencia->execute();
        $empleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        
        return $empleados;
    }

    // function InsertarRepartidor($repartidor,$numero){   
        
    

    //     $sentencia = $this->db->prepare("INSERT INTO trepartidor ( nombre_repartidor,telefono) VALUES(?,?)");
    //     $sentencia->execute(array($repartidor,$numero));
    // }
    
  

}
?>