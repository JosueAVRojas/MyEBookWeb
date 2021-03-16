<?php
    $host="localhost";
    $db="myebook";
    $user="root";
    $passwd="";
    $correo=$_POST["correo"];
    $contra=$_POST["contra"];
    $contra1=md5($contra);
    $sql="SELECT id from usuarios where correo='".$correo."' and contrasena='".$contra1."'";
    $con=new mysqli($host, $user, $passwd, $db);
    if($resultado=$con->query($sql)){
        if($fila=$resultado->fetch_row()){
            echo"<html>
            <head>
                <meta http-equiv='Refresh' content='0;url=\"./index.php\"'>
            </head>
            <body>
            </body>
            </html>";
        }
        else{
            //dar alertas y pedir que se registre
            echo"<html>
            <head>
                <meta http-equiv='Refresh' content='5;url=\"./login.php\"'>
            </head>
            <body>
                <h1>Usuario o Contraseña incorrecta, espere para intentarlo de nuevo</h1>
            </body>
            </html>";
        }
    }
    else{
        //dar alertas y pedir que se registre
        echo"<html>
        <head>
            <meta http-equiv='Refresh' content='5;url=\"./login.php\"'>
        </head>
        <body>
            <h1>Usuario o Contraseña incorrecta, espere para intentarlo de nuevo</h1>
        </body>
        </html>";
    }
?>