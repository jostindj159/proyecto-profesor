<?php
error_reporting(0);
require_once('../model/conexion.php');
require_once('../model/valida_foto.php');

require_once('../controller/c_listarArticulos.php');
?>
<html>
    <head>
        <title>Articulos</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<body>
        <?php
            verArticulos();
        ?>
</body>
</html>
