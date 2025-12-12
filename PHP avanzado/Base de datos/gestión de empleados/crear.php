<?php

require_once ('config.php');
require_once ('bd_pdo.php');

if($_SERVER['REQUEST_METHOD']=='post'){
    $empleados['nombre']=$_POST['nombre'];
    $empleados['apellidos']=$_POST['apellidos'];
    $empleados['dni']=$_POST['dni'];
    $empleados['gmail']=$_POST['gmail'];
    $empleados['puesto']=$_POST['puesto'];
}

$db=db_open();
if($db){
    $id=db_insert($db, 'empleados', $empleados);
    echo "se ha insertado un empleado con id $id";
    
    db_close($db);
}