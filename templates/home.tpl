
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


</head>
<body>
<div class="container"> 
    <h1>Agregar Empleado</h1>
                <form id="form-empl" action="insertarEmpleado" method="post">
                    <div class="form-group">
                        <label for="name">Nombre</label>
                        <input class="form-control" id="name" name="input_name" placeholder="Nombre" required>
                        
                    </div>
                     <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input class="form-control" id="apellido" name="input_apellido" placeholder="Apellido" required>
                        
                    </div>
                     <div class="form-group">
                        <label for="age">Edad</label>
                        <input type="number" class="form-control" id="age"  name="input_edad" required>
                     </div>
                     <div class="form-group">
                        <label for="dni">Dni</label>
                        <input type="number" class="form-control" id="dni"  name="input_dni" required>
                     </div>
                    <div class="form-group">
                     <label for="Rol">Rol</label>
                    <select name="input_rol" id="rol" required>
                        <option value="1">Programador</option>
                        <option value="2">Diseñador</option>
                    </select>
                     </div>
                    <div class="form-group">
                    <label for="tipo_diseniador">Tipo diseñador</label>
                    <select name="input_tipo" id="tipo_diseniador">
                        <option value="Web">Web</option>
                        <option value="Grafico">Grafico</option>
                    </select>
                     </div>
                     <div class="form-group">
                    <label for="empresa">Empresa</label>
                    <select name="input_empresa" id="rol">
                        {foreach $empresa_s as $empresa}
                        <option value="{$empresa.id}">{$empresa.nombre}</option>
                        {/foreach}
                    </select>
                     </div>
                    <div class="form-group">
                    <label for="lenguaje">Lenguaje Programacion</label>
                    <select name="input_lenguaje" id="rol">
                         
                        <option value="Php">Php</option>
                        <option value="Net">Net</option>
                        <option value="Python">Python</option>
                    </select>
                     </div>
            
                    <button type="submit" class="btn btn-primary">Agregar Empleado</button>
                    </form>

        <h2>Nomina de los empleados</h2>
<table >
  <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Edad</th>
    <th>Empresa</th>
  </tr>
   {foreach $empleados_s as $empleado}
  <tr>
    <td>{$empleado.nombre}</td>
    <td>{$empleado.apellido}</td>
    <td>{$empleado.edad}</td>
    <td>{$empleado.nombre_empresa}</td>
  </tr>
  {/foreach}
</table>

<h2>Calculo empresa 1(esto esta puesto asi a modo de ejemplo, si se ejecuta desde url y existe id de empresa devolvera promedio</h2>
<a href="promedio/1">Promedio empresa 1</a>
<a href="promedio/2">Promedio empresa 1</a>
<h2>Buscar empleado por un dni</h2>
 
<form action="buscarEmpleado" method="post">
<div class="form-group">
    <label for="apellido">Buscar</label>
    <input class="form-control" id="buscar" name="input_buscar" placeholder="Buscar por dni" required>  
                    
 </div>
 <button type="submit" class="btn btn-primary">Buscar</button>    
</form>
</div>
</body>