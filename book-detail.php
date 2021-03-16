<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css" />
  <!-- Glidejs -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css" />
  <title>Detail Book</title>
</head>

<body>
  <header id="header" class="header-">
    <!-- Navigation -->
    <div class="navigation">
      <div class="container">
        <nav class="nav__center">
          <div class="nav__header">
            <div class="nav__logo">
              <h1>My<span>EBook</span></h1>
            </div>


          </div>

          <div class="nav__menu">
            <div class="menu__top">
              <h1 class="nav__category">My<span>EBook</span></h1>
              <div class="close__toggle">

              </div>
            </div>
            <ul class="nav__list">
              <li class="nav__item">
                <a href="./index.php" class="nav__link scroll-link">Inicio</a>
              </li>

              <li class="nav__item">
                <a href="#" class="nav__link scroll-link">Accesorios</a>
              </li>

              <li class="nav__item">
                <a href="./about.html" class="nav__link scroll-link">Quiénes somos?</a>
              </li>

              <li class="nav__item">
                <a href="#newsletter" class="nav__link scroll-link">Contacto</a>
              </li>

              <li class="nav__item">
                <a href="./login.php" class="nav__link">Iniciar sesión</a>
              </li>

              <li class="nav__item">
                <a href="./registration.php" class="nav__link">Registro</a>

              </li>

            </ul>
          </div>
        </nav>
      </div>
    </div>

  </header>
  <section class="section product-detail">
    <div class="details container-md">
      <div class="left">
      <?php
          $host="localhost";
          $db="myebook";
          $user="root";
          $passwd="";
          $columna = 0;
          $libro=$_GET["libro"];
          $sql="SELECT id, nombre, autor, descripcion, precio from libro where id=".$libro;
          $conexion=new mysqli($host, $user, $passwd, $db);
          if($resultado=$conexion->query($sql)){
            while($fila=$resultado->fetch_row()){
              echo"<div class='main'>
              <img src='img/books/todos/".$fila[0].".jpg' >
            </div>
            <div class='thumbnails'>
              <div class='thumbnail'>
                <img src='img/books/todos/".$fila[0].".jpg'>
              </div>
              <div class='thumbnail'>
                <img src='img/books/todos/".$fila[0].".jpg'>
              </div>
              <div class='thumbnail'>
                <img src='img/books/todos/".$fila[0].".jpg'>
              </div>
              <div class='thumbnail'>
                <img src='img/books/todos/".$fila[0].".jpg'>
              </div>
            </div>";
            }
          }   
        ?>
      </div>
      <div class="right">
      <?php
          $host="localhost";
          $db="myebook";
          $user="root";
          $passwd="";
          $columna = 0;
          $cate=$_GET["cat"];
          $sql="SELECT id, nombre from categoria where id=".$cate;
          $con=new mysqli($host, $user, $passwd, $db);
          if($resultado=$con->query($sql)){
            while($fila=$resultado->fetch_row()){
              echo"<span>Inicio/".$fila[1]."</span>";
            }
          }   
        ?>
        <?php
          $host="localhost";
          $db="myebook";
          $user="root";
          $passwd="";
          $columna = 0;
          $libro=$_GET["libro"];
          $sql="SELECT id, nombre, autor, descripcion, precio from libro where id=".$libro;
          $conexion=new mysqli($host, $user, $passwd, $db);
          if($resultado=$conexion->query($sql)){
            while($fila=$resultado->fetch_row()){
              echo"<h1>".$fila[1]."</h1>
                <label for='author'>Autor:</label>
                <span class='author'>
                  ".$fila[2]."
                </span> <br>";
            }
          }   
        ?>
        <div class="ratings">
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bxs-star"></i>
          <i class="bx bx-star"></i>
        </div>
        <br>


        <h3 class="detail_product">Detalles del Producto:</h3>
        <?php
          $host="localhost";
          $db="myebook";
          $user="root";
          $passwd="";
          $columna = 0;
          $libro=$_GET["libro"];
          $sql="SELECT id, nombre, autor, descripcion, precio from libro where id=".$libro;
          $conexion2=new mysqli($host, $user, $passwd, $db);
          if($resultado=$conexion2->query($sql)){
            while($fila=$resultado->fetch_row()){
              echo"<p class='description'>".substr($fila[3],0,500)."
              <span id='dots'>...</span><span id='more'>";
            }
          }   
        ?>
        <?php
          $host="localhost";
          $db="myebook";
          $user="root";
          $passwd="";
          $columna = 0;
          $libro=$_GET["libro"];
          $sql="SELECT id, nombre, autor, descripcion, precio from libro where id=".$libro;
          $conexion3=new mysqli($host, $user, $passwd, $db);
          if($resultado=$conexion3->query($sql)){
            while($fila=$resultado->fetch_row()){
              echo"".substr($fila[3],500,1500)."</span></p>";
            }
          }   
        ?>
          <a onclick="myFunction()" id="myBtn" class="readMore">Leer mas</a>
     
        <form>
          <div>
            <?php
              $host="localhost";
              $db="myebook";
              $user="root";
              $passwd="";
              $columna = 0;
              $libro=$_GET["libro"];
              $sql="SELECT id, nombre, autor, descripcion, precio from libro where id=".$libro;
              $conexion4=new mysqli($host, $user, $passwd, $db);
              if($resultado=$conexion4->query($sql)){
                while($fila=$resultado->fetch_row()){
                  echo"<div class='price'><p>Precio:</p>".$fila[4]."</div>";
                }
              }   
            ?>
            <p>Cantidad</p>
            <input type="number" name="" id="quantity" placeholder="1" min="1">
          </div>
        </form>

        <form class="form">

          <a href="cart-list.html" class="addCart">Añadir al carrito</a>
        </form>

      </div>
    </div>
  </section>
  <footer id="footer" class="section footer">
        <div class="container">
            <div class="footer__top">
                <div class="footer-top__box">
                    <h3>MyEBook</h3>
                    <a href="about.html">Acerca de nosotros</a> <br>


                </div>
                <div class="footer-top__box">
                    <h3>Terminos y Condiociones</h3>
                    <a href="#">Privacidad</a>

                </div>
                <div class="footer-top__box">
                    <h3>Mi cuenta</h3>
                    <a href="#">Mi canasta</a>

                </div>

                &copy; Copyright 2020 MyEbook


            </div>
        </div>

    </footer>
    

  <!-- End Footer -->

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <script src="./js/main.js"></script>


</body>

</html>