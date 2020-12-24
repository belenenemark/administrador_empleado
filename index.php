
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador empleados</title>
</head>
<body>
    <h1>Administrador de empleados</h1>
    <!-- <form action="" method="get">
    </form> -->
</body>
</html>

<?php
require_once "controller/EmpleadoController.php";
$empleados= new EmpleadoController();
$empleados->getPromedio(1);
?>