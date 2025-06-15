<?php 

    $conexion= mysqli_connect("localhost", "root", "", "registros_la_ceja");
    if(!($conexion)) {
        echo "conexion no establecida";
    }

?>