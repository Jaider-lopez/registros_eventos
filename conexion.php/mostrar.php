<?php

$inc = include("con_bd_tabla");
if ($inc) { 
    $consulta = "SELECT * FROM registro_de_eventos";
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
                        <b>TELEFONO: </b> <?php echo $TELEFONO; ?> <br>
                        <b>EVENTO: </b> <?php echo $EVENTO; ?> <br>
                        <b>FECHA: </b> <?php echo $FECHA; ?> <br>
                        <b>HORA_RECEPCION: </b> <?php echo $HORA_RECEPCION; ?><br>
                        <b>HORA_ATENCION: </b> <?php echo $HORA_ATENCION; ?> <br>
                        <b>DIRECCION: </b> <?php echo $DIRECCION; ?> <br>
                        <b>DESCRIPCION: </b> <?php echo $DESCRIPCION; ?><br>
                        <b>ENTIDAD: </b> <?php echo $ENTIDAD; ?> <br>
                        <b>OPERADOR_RESPONSABLE: </b> <?php echo $OPERADOR_RESPONSABLE; ?> <br>
                    </p>
                </div>
            </div>
     
