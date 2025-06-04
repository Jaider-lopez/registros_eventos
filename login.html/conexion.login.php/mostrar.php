<?php

include("conexion.bd.php");

    $Usuario = $_POST ["USUARIO"];
    $Contrasena = $_POST ["CONTRASENA"];

    $consulta = "SELECT * FROM usuarios where USUARIO = '$Usuario' and CONTRASENA = '$Contrasena' ";
    $resultado = mysqli_query($conex,$consulta);

    $filas=mysqli_query($resultado);

    if($filas) {
        header("location:inicio.html");
    } else {
        include("index.html");
        ?>
        <h1>ERROR DE AUTENTIFICACION</h1>
        <?php
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
