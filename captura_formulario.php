<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Captura</title>
</head>
<body>
    
</body>
</html>


<?php

$servidor="localhost";
$usuario="root";
$password="";
$db="ajijic";

$conectar=mysqli_connect($servidor, $usuario, $password, $db);

$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];

if (!$conectar){
    echo "No sea podido conectar con el servidor" . mysql_error();
}else{
    echo "<b><h4>Conexion exitosa</h4></b>";
}

$db="ajijic";
$daba=mysqli_select_db($conectar, $db);

if (!$db){
    echo "No sea podido encontrar la tabla" . mysql_error();
}else{
    echo "<b><h4>Tabla encontrada</h4></b>";
}

$consulta="insert into datos values('$name','$mail','$phone','$message')";

$resultado=mysqli_query($conectar, $consulta);

header("Location: index.html");

mysqli_close($conectar);
echo '<a href= "index.html"> regresar </a>';

?>