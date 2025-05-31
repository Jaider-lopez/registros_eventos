<?php

$inc = include("conexion.bd.php");
if ($inc) { 
    $consulta = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
        while($row = $resultado->fetch_array()){
            $ID = $row ["ID"];
            $Usuario = $row ["Usuario"];
            $Contraseña = $row ["Contraseña"];
            
               }
    }
}

            ?>

            <div>
               <h2><?php echo $Usuario; ?></h2>
                <div>
                    <p>
                        <b>ID: </b> <?php echo $ID; ?><br>
                        <b>Contraseña: </b> <?php echo $Contraseña; ?> <br>
                        
                    </p>
                </div>
            </div>
     
