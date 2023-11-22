<?php
function conectarse(){
$servidor="localhost";
$usuario="root";
$password="";
$db="ajijic";
$conectar=new mysqli($servidor, $usuario, $password, $db) or die ("No se puede conectar a la base de datos");
return $conectar;
}
$conexion=conectarse();
?>