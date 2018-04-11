<?php
function cargar2(){
    $consultas=new Usuario();
    $filas=$consultas ->usuario();
    
    echo "<table border='1' class='table'>
            <tr>
                
                <th>Nombre del usuario</th>
                <th>Clave del usuario</th>
            </tr>";
    
    foreach($filas as $fila){
        echo "<tr class='warning'>";
       
        echo "<td>".$fila['nombre_usuario']."</td>";
        echo "<td>".$fila['clave']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>