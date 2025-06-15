<?php

$inc = include("con_bd_tabla.php");
if ($inc) { 
    $consulta = "SELECT * FROM INCIDENTES_LA_CEJA";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
        while($row = $resultado->fetch_array()){
            $ID = $row ["ID"];
            $NOMBRE = $row ["NOMBRE"];
            $TELEFONO = $row ["TELEFONO"];
            $EVENTO = $row ["EVENTO"];
            $FECHA = $row ["FECHA"];
            $HORA_RECEPCION = $row ["HORA_RECEPCION"];
            $HORA_ATENCION = $row ["HORA_ATENCION"];
            $DIRECCION = $row ["DIRECCION"];
            $DESCRIPCION = $row ["DESCRIPCION"];
            $ENTIDAD = $row ["ENTIDAD"];
            $OPERADOR_RESPONSABLE = $row ["OPERADOR_RESPONSABLE"];
               }
    }
}

            ?>

            <div>
               <h2><?php echo $NOMBRE; ?></h2>
                <div>
                    <p>
                        <b>ID: </b> <?php echo $ID; ?><br>
                        <b>Telefono : </b> <?php echo $TELEFONO; ?> <br>
                        <b>Evento: </b> <?php echo $EVENTO; ?> <br>
                        <b>Fecha: </b> <?php echo $FECHA; ?> <br>
                        <b>Hora_Recepcion: </b> <?php echo $HORA_RECEPCION; ?><br>
                        <b>Hora_atencion: </b> <?php echo $HORA_ATENCION; ?> <br>
                        <b>Direccion: </b> <?php echo $DIRECCION; ?> <br>
                        <b>Descripcion: </b> <?php echo $DESCRIPCION; ?> <br>
                        <b>Entidad: </b> <?php echo $ENTIDAD; ?> <br>
                        <b>Operador_Responsable: </b> <?php echo $OPERADOR_RESPONSABLE; ?> <br>
                    </p>
                </div>
            </div>
