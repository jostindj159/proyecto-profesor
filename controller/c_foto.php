<!DOCTYPE html>
<html lang="es">
<head>
    <title>Galeria</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
</head>
<body>

<?php
function verFotos(){
    $consultas=new Foto();
    $filas=$consultas ->listarFotos();
    
    echo "<table border='1' class='table table-hover'>
            <tr class='warning'>
                <th colspan='3'>Imagenes</th>
            </tr>
            <tr class='success'>
                <th>Codigo</th>
                <th>foto</th>
                <th>Opcion</th>
            </tr>";
    
    foreach($filas as $fila){
        echo "<tr class='success'>";
        echo "<td>".$fila['codigo']."</td>";
        echo "<td><img src='".$fila['foto']."' width='100px' heigth='100px' class='img-rounded' ></td>";
        echo "<td><button type='submit' class='btn btn-default' id='btnEliminar' name='btnEliminar'><a href='../controller/c_eliminar.php?codigo=".$fila['codigo']."'>Eliminar</button></a></td>";
        echo "</tr>";
    }
    echo "</table>";

}

?>
</body>
</html>