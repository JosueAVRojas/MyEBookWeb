<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;500;600;700;800&display=swap"
    rel="stylesheet" />
    <script src="https://kit.fontawesome.com/1c2c2462bf.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-books">
    <div class="row">
            <table>
                <?php
                    $host="localhost";
                    $db="myebook";
                    $user="root";
                    $passwd="";
                    $columna = 0;
                    $sql="SELECT id, nombre, autor, descripcion, precio, categoria_id from libro where destacado=3";
                    $conexion=new mysqli($host, $user, $passwd, $db);
                    if($resultado=$conexion->query($sql)){
                        //convirtiendo la informacion en filas
                        while($fila=$resultado->fetch_row()){
                            switch ($columna){
                                case 0:
                                    echo"<tr><td>";
                                    $columna=1;
                                break;
                                case 1:
                                    echo"</td><td>";
                                    $columna=2;
                                break;
                                case 2:
                                    echo"</td><td>";
                                    $columna=3;
                                break;
                                case 3:
                                    echo"</td><td>";
                                    $columna=4;
                                break;
                                case 4:
                                    echo"</td></tr><tr><td>";
                                    $columna=1;
                                break; 
                            }
                            echo"<table>
                                <div class='card'>
                                <div class='content-1'>
                                    <span class='like'>
                                        <i class='fas fa-heart' aria-hidden='true'></i>
                                    </span>
                                    <div class='main-image'>
                                        <img src='img/books/nuevo/".$fila[0].".jpg' alt='libro' srcset=''>
                                    </div>
                                    </div>
                                        <div class='content-3' > 
                                            <div class='branding'>
                                                <span>".substr($fila[1],0,15)." ...</span>
                                                <h4>Autor: ".$fila[2]."</h4>
                                            </div>
                                            <div class='ratings'>
                                                <span><i class='fas fa-star'></i></span>
                                                <span><i class='fas fa-star'></i></span>
                                                <span><i class='fas fa-star'></i></span>
                                                <span><i class='fas fa-star'></i></span>
                                                <span><i class='fas fa-star'></i></span>
                                            </div>
                                            <div class='paragraph'>
                                                <p>".substr($fila[3], 0, 160)."<span><a Target='Blank' href='./book-detail.php?libro=".$fila[0]."&cat=".$fila[5]."'> Read More</a></span>
                                                </p>
                                            </div>
                                            <div class='price'>
                                                <div class='space'></div>
                                                <a>".$fila[4]." MXN</a>
                                            </div>
                                        </div>
                                    </div>
                             </table>";
                        }
                        $resultado->close();
                        if($columna>0){
                            echo"</td><tr>";
                        }
                    }
                    else{
                        //mandar no conexion
                    }
                ?>
            </table>
    </main>
</body>
</html>