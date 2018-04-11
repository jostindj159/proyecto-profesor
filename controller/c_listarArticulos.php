<?php
function verArticulos(){
    $consultas=new Articulos();
    $filas=$consultas ->listarArticulos();
    foreach($filas as $fila){

        echo "<div class='col-lg-12 text-center'><hr>";
        echo "<div class='col-lg-10'><h2>".$fila['titulo']."</h2></div>";
        echo "</div>";

        echo "<div class='col-lg-1 '></div>";

        echo "<div class='col-lg-10'>";
        echo "<div class='col-md-8 '>";
        echo "<div>".$fila['area']."</div>";
        echo "</div>";

        echo "<div class='col-md-4 text-center'>";
        echo "<div><img src='".$fila['foto']."' width='80%' class='img-circle' ></div>";
        echo "</div>";

        
        echo "<div class='col-lg-1 '></div>";
        echo "</div>";
    }
}

?>
