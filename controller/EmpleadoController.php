<?php 
require_once "./model/EmpleadoModel.php";
require_once "./view/EmpleadoView.php";
class EmpleadoController 
{
    private $model;
    private $view;

    function __construct(){
      
        $this->model=new EmpleadoModel();
        $this->view= new EmpleadoView();
    }
    function Home(){
        $empleados= $this->model->GetEmpleados();
        $empresas= $this->model->getEmpresas();
        $this->view->getEmpleados($empresas,$empleados);
    }
    function Promedio($empresa){
        $promedio= $this->model->getPromedio($empresa);
        if($promedio){
            $this->view->getPromedio($promedio);
        } else{
            echo "La empresa no existe para calcular el promedio";
        }
         
 
    }

    function insertarEmpleado(){
        //nombre empleado
        $nombre=$_POST["input_name"];
        //apellido
        $apellido=$_POST["input_apellido"];
        //edad
        $edad=$_POST["input_edad"];
        // rol:Programador o diseñador
        $tipo=$_POST["input_rol"];
        //empresa
        $id_empresa=$_POST["input_empresa"];
        //dni
        $dni=$_POST["input_dni"];
        $tipo_diseniador=$_POST["input_tipo"];
        $lenguaje=$_POST["input_lenguaje"];
        //controla si existen los conjuntos
    if(isset($nombre)&& isset($apellido) && isset($edad) && isset($tipo) && isset($id_empresa) && isset($dni) && isset($tipo_diseniador) && isset($lenguaje))
    {
        $empleado=$this->model->getEmpleadoxDni($dni);
        //si el empleado aun no fue insertado con ese dni lo inserta
        if(!($empleado)){
        //Carga de empleado
        $this->model->addEmpleado($nombre,$apellido,$edad,$tipo,$id_empresa,$dni,$lenguaje,$tipo_diseniador);
        //voy a comprobar si el usuario ingresado fue exitoso
        $empleado=$this->model->getEmpleadoxDni($dni);
        $this->view->addEmpleado($empleado);

        }else{
            echo "El usuario ya existe";
        }
    }
        
        
    }

    function buscarEmpleado(){
        //busca al empleado en la base por numero de dni
       $empleado= $this->model->getEmpleadoxDni($_POST["input_buscar"]);
       if($empleado){
        var_dump($empleado);
       }else{
           echo "El dni no existe";
       }
       
        
    }

    
        

}



    ?>