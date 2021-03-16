<?php
$host="localhost";
$db="myebook";
$user="root";
$passwd="";
$usuario = $_POST["usuario"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$contra = md5($_POST["contra"]);
$sql = "INSERT INTO usuarios (usuario, telefono, correo, contrasena) VALUES ('".$usuario."', '".$telefono."', '".$correo."', '".$contra."')";
$con=new mysqli($host, $user, $passwd, $db);
if($resultado=$con->query($sql)){
    echo"<html>
    <head>
    <meta http-equiv='Refresh' content='0;url=\"./index.php\"'>
    </head>
    <body>
    </body>
    </html>";
    
}

?>