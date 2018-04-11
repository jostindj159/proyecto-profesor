<?php
error_reporting(0);
require_once('../model/conexion.php');
require_once('../model/valida_foto.php');

require_once('../controller/c_foto.php');


?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pagina Web</title>
    <link rel="stylesheet" href="../css/nivo-slider.css">
    <link rel="stylesheet" href="../css/mi-slider.css">

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+English" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="../css/creative.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">English.com</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#page-top">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">about</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Gallery</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="articulos.php">Blog</a>
            </li>

            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Admin1.php">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white d-flex">

      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Aceptalo!</strong>
            </h1>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Para aprender ingles se necesita mas que un proposito</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">¿Saber mas?</a>
          </div>
        </div>
      </div>

    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Tenemos lo que necesitas!</h2>
            <p class="text-faded mb-4">Te puedes proponer aprender inglés, dejar de fumar,comenzar el gimnasio y hasta tocar guitarra.
            Pero nada va a cambiar si no das el primer paso...!</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Empezar!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services" style="font-family: 'IM Fell English', serif;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Paquetes de Estudios 2018:</h2>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">

          <div class="col-md-3 text-center">
            <div class="service-box mt-5 mx-auto">
              <img src="../img/a11.jpg" width="90%" class="img-thumbnail">
              <h3 >Clase de Ingles Personalizado</h3>
              <p class="text-muted mb-0">Detalle</p>
            </div>
          </div>

          <div class="col-md-3 text-center">
            <div class="service-box mt-5 mx-auto">
              <img src="../img/a22.jpg" width="90%" class="img-thumbnail">
              <h3 class="mb-3">Clase de Reforzamientos</h3>
              <p class="text-muted mb-0">Detalle</p>
            </div>
          </div>

          <div class="col-md-3 text-center">
            <div class="service-box mt-5 mx-auto">
              <img src="../img/a33.jpg" width="90%" class="img-thumbnail">
              <h3 class="mb-3">P.Examenes Internacionales</h3>
              <p class="text-muted mb-0">Detalle</p>
            </div>
          </div>

          <div class="col-md-3 text-center">
            <div class="service-box mt-5 mx-auto">
              <img src="../img/a44.jpg" width="90%" class="img-thumbnail">
               <p></p><h3 class="mb-3">Conversacion</h3><br>
              <p class="text-muted mb-0">Detalle</p>
            </div>
          </div>

        </div>
      </div>
    </section>

<!-- -->
  <div class="slider-wrapper theme-mi-slider" id="portfolio">
    <div id="slider" class="nivoSlider">     
        <?php
              $consultas=new Foto();
              $filas=$consultas ->listarFotos();
                  foreach($filas as $fila){
                  echo "<img src='".$fila['foto']."' >";
              }
        ?>
    </div> 
  </div>
<!-- -->


    <section class="bg-dark text-white" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white"><span class="label label-default">Nuevo para usted!</span></h2>
            <p class="text-faded mb-4">AHORA nuestros programas individuales y grupales incluyen una suscripción gratuita a sesiones privadas para practicar tu conversación y mejorar tu fluidez en el idioma.
            20 min diarios
            Horarios a convenir de lunes a viernes</p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contactenos!</h2>
            <p class="mb-5">Si te inscribes antes del 28 de febrero recibe gratis
            la matrícula y un 50% de descuento en los materiales.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-2 ml-auto text-center">
            <i class="fa fa-facebook fa-3x mb-3 sr-contact"></i>
            <p><a href="#">Facebook</a></p>
          </div>
          <div class="col-lg-2 ml-auto text-center">
            <i class="fa fa-twitter fa-3x mb-3 sr-contact"></i>
            <p><a href="#">Twitter</a></p>
          </div>
          <div class="col-lg-2 ml-auto text-center">
            <i class="fa fa-linkedin fa-3x mb-3 sr-contact"></i>
            <p><a href="#">linkedin</a></p>
          </div>
          <div class="col-lg-3 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-3 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">sucorreo@.com</a>
            </p>
          </div>
        </div>
      </div> 

        <div class="row">
          <div class="col-md-12 mx-auto text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62421.69941318692!2d-77.0482552239571!3d-12.087748677279984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c887a0b0a70b%3A0x67415aa8b708c4c9!2sRaimundo+C%C3%A1rcamo+747%2C+Cercado+de+Lima+15034!5e0!3m2!1ses-419!2spe!4v1519072999123" width="100%" height="350%" frameborder="100" allowfullscreen>
            </iframe><br>
          </div>
        </div>
    </section>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <script src="../js/creative.min.js"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
  <script src="../js/jquery.nivo.slider.js"></script>

  <script type="text/javascript"> 
    $(window).on('load', function() {
        $('#slider').nivoSlider(); 
    }); 
  </script>
  </body>

</html>