<?php
    require_once 'Controller/EmpleadoController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');


    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "EmpleadoController", "Home");
    $r->addRoute("promedio/:ID", "GET", "EmpleadoController", "Promedio");
    $r->addRoute("insertarEmpleado", "POST", "EmpleadoController", "insertarEmpleado");
    $r->addRoute("buscarEmpleado", "POST", "EmpleadoController", "buscarEmpleado");

   

    //Ruta por defecto.
    $r->setDefaultRoute("EmpleadoController", "Home");

    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
