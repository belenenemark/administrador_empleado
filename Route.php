<?php
    require_once 'Controller/EmpleadoController.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');


    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "EmpleadoController", "Home");
    $r->addRoute("promedio/:ID", "GET", "EmpleadoController", "Promedio");
    $r->addRoute("insertarEmpleado", "GET", "EmpleadoController", "insertarEmpleado");

   


    //Esto lo veo en TasksView
    // $r->addRoute("insert", "POST", "TasksController", "InsertTask");

    // $r->addRoute("delete/:ID", "GET", "TasksController", "BorrarLaTaskQueVienePorParametro");
    // $r->addRoute("completar/:ID", "GET", "TasksController", "MarkAsCompletedTask");
    // $r->addRoute("edit/:ID", "GET", "TasksController", "EditTask");

    //Ruta por defecto.
    $r->setDefaultRoute("EmpleadoController", "Home");

    //Advance
    // $r->addRoute("autocompletar", "GET", "TasksAdvanceController", "AutoCompletar");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
