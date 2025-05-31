<?php

$inc = include("con_bd_tabla");
if ($inc) { 
    $consulta = "SELECT * FROM registro_de_eventos";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
        while($row = $resultado->fetch_array()){
            $ID = $row ["ID"];
            $Nombre = $row ["Nombre"];
            $Telefono = $row ["Telefono"];
            $Seleccione_Novedad = $row ["Seleccione_Novedad"];
            $Fecha = $row ["Fecha"];
            $Hora_Recepcion = $row ["Hora_Recepcion"];
            $Hora_atencion = $row ["Hora_Atencion"];
            $Direccion = $row ["Direccion"];
            $Descripcion = $row ["Descripcion"];
            $Entidad = $row ["Entidad"];
            $Operador_Responsable = $row ["Operador_Responsable"];
               }
    }
}

            ?>

            <div>
               <h2><?php echo $NOMBRE; ?></h2>
                <div>
                    <p>
                        <b>ID: </b> <?php echo $ID; ?><br>
                        <b>Telefono : </b> <?php echo $Telefono; ?> <br>
                        <b>Seleccione_Novedad: </b> <?php echo $Seleccione_Novedad; ?> <br>
                        <b>Fecha: </b> <?php echo $Fecha; ?> <br>
                        <b>Hora_Recepcion: </b> <?php echo $Hora_Recepcion; ?><br>
                        <b>Hora_atencion: </b> <?php echo $Hora_atencion; ?> <br>
                        <b>Direccion: </b> <?php echo $Direccion; ?> <br>
                        <b>Descripcion: </b> <?php echo $Descripcion; ?> <br>
                        <b>Entidad: </b> <?php echo $Entidad; ?> <br>
                        <b>Operador_Responsable: </b> <?php echo $Operador_Responsable; ?> <br>
                    </p>
                </div>
            </div>
     
