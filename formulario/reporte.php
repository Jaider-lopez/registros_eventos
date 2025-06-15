<?php
include("../conexion.php/novedades/con_bd_tabla.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nombre = $_POST['NOMBRE'] ?? '';
    $telefono = $_POST['TELEFONO'] ?? '';
    $evento = ($_POST['EVENTO'] ?? '') == "Otro" ? ($_POST["eventoManual"] ?? '') : ($_POST["EVENTO"] ?? '');
    $fecha = $_POST['FECHA'] ?? '';
    $hora_recepcion = $_POST['HORA_RECEPCION'] ?? '';
    $hora_atencion = $_POST['HORA_ATENCION'] ?? '';
    $direccion = $_POST['DIRECCION'] ?? '';
    $descripcion = $_POST['DESCRIPCION'] ?? '';
    $entidad = $_POST['ENTIDAD'] ?? '';
    $operador_responsable = $_POST['OPERADOR_RESPONSABLE'] ?? '';

    $sql = "INSERT INTO registro_de_eventos 
        (NOMBRE, TELEFONO, EVENTO, FECHA, `HORA_RECEPCION`, `HORA_ATENCION`, DIRECCION, DESCRIPCION, ENTIDAD, `OPERADOR_RESPONSABLE`)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conexion, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ssssssssss", $nombre, $telefono, $evento, $fecha, $hora_recepcion, $hora_atencion, $direccion, $descripcion, $entidad, $operador_responsable);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        mysqli_close($conexion);
        header("Location: /registros_eventos/conexion.php/novedades/inicio.php");
        exit();
    } else {
        echo "Error al preparar la consulta: " . mysqli_error($conexion);
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novedades La Ceja</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <form class= "wrapper" method="post">
        <div>
            <H1>REPORTE DIARIO CMC LA CEJA</H1>
            <div class="Novedades">
                <input type="text" name="NOMBRE" placeholder="Nombre">
                <input type="number" name="TELEFONO" placeholder="TELEFONO" required>
                <div class="TipoNovedad">
                    <select id="SeleccioneNovedad" name="EVENTO" style="margin: 50px;"
                        onchange="MostrarCampo()">
                        <option value="evento">SELECCIONA LA NOVEDAD</option>
                        <!--codigos policiales-->
                        <option value="901 - Homicidio">901 - Homicidio</option>
                        <option value="902 - secuestro">902 - secuestro</option>
                        <option value="904 - Hurto">904 - Hurto</option>
                        <option value="906 - Violacion carnal">906 - Violacion carnal</option>
                        <option value="909 - Exhibiciones obsenas">909 - Exhibiciones obsenas</option>
                        <option value="910 - Herido o Lesionado">910 - Herido o Lesionado</option>
                        <option value="911 - Disparos">911 - Disparos</option>
                        <option value="912 - Daños en propiedad publica">912 - Daños en propiedad publica</option>
                        <option value="913 - Vehiculo hurtado/Moto-Carro">913 - Vehiculo hurtado/Moto-Carro</option>
                        <option value="914 - Vehiculo abandonado">914 - Vehiculo abandonado</option>
                        <option value="915 - Persona tratando de ingresar">915 - Persona tratando de ingresar</option>
                        <option value="916 - Persona sospechosa">916 - Persona sospechosa</option>
                        <option value="917 - Suicidio">917 - Suicidio</option>
                        <option value="918 - Intento de Suicidio">918 - Intento de Suicidio</option>
                        <option value="919 - Persona pidiendo auxilio">919 - Persona pidiendo auxilio</option>
                        <option value="921 - Violacion de domicilio">921 - Violacion de domicilio</option>
                        <option value="922 - Estupefacientes">922 - Estupefacientes</option>
                        <option value="923 - Vagancia">923 - Vagancia</option>
                        <option value="924 - Enfermo">924 - Enfermo</option>
                        <option value="926 - Embriaguez">926 - Embriaguez</option>
                        <option value="927 - Quemas">927 - Quemas</option>
                        <option value="928 - Inundacíon">928 - Inundacíon</option>
                        <option value="930 - Derrumbe">930 - Derrumbe</option>
                        <option value="931 - Incendio">931 - Incendio</option>
                        <option value="932 - Alteracion a tranquilidad publica">932 - Alteracion a tranquilidad publica</option>
                        <option value="934 - Riña">934 - Riña </option>
                        <option value="936 - Persona tendida en la vía">936 - Persona tendida en la vía</option>
                        <option value="937 - Animales extraviados">937 - Animales extraviados</option>
                        <option value="940 - Actos peligrosos en la via">940 - Actos peligrosos en la via</option>
                        <option value="941 - Demencia">941 - Demencia</option>
                        <option value="942 - Accidente de transito">942 - Accidente de transito</option>
                        <option value="947 - Alarma">947 - Alarma</option>
                        <option value="953 - Muerte natural">953 - Muerte natural</option>
                        <option value="954 - Persona capturada">954 - Persona capturada</option>
                        <option value="955 - Abuso de confianza">955 - Abuso de confianza</option>
                        <option value="959 - Asonada">959 - Asonada</option>
                        <option value="962 - Estafa">962 - Estafa</option>
                        <option value="965 - Fuga de presos o retenidos">965 - Fuga de presos o retenidos</option>
                        <option value="969 - Porte de armas">969 - Porte de armas</option>
                        <option value="976 - Persona desaparecida">976 - Persona desaparecida</option>
                        <option value="977 - Vehiculo recuperado/Carro-Moto">977 - Vehiculo recuperado/Carro-Moto</option>
                        <option value="979 - Recuperacion de elementos">979 - Recuperacion de elementos</option>
                        <option value="Otro">Otro</option>
                    </select>
                    <div id="eventoManualContainer">
                        <label for="eventoManual">Escribe el evento:</label>
                        <input type="text" id="eventoManual" name="eventoManual"
                            style="width: auto; margin: auto; width: 400px;" placeholder="Nombre del evento">
                    </div>
                    <br>
                    <input type="date" name="FECHA">
                    <p>Hora Recepcion De Llamada</p>
                    <input type="time" name="HORA_RECEPCION">
                    <p>Hora Atencion Del Evento</p>
                    <input type="time" name="HORA_ATENCION">
                    <p>Direccion</p>
                    <input type="text" name="DIRECCION" placeholder="Direccion" required>
                    <p>Descripcion</p>
                    <div class="form input"> <textarea name="DESCRIPCION" placeholder="Describe El Caso" required></textarea></div>
                    <input type="text" name="ENTIDAD" placeholder="Atendido Por" required>
                    <input type="text" name="OPERADOR_RESPONSABLE" placeholder="Operador Responsable" required>

                </div>
            </div>
        </div>
        <button type=submit class="buttonguardar">GUARDAR</button>
    </form>
    <script>
        function MostrarCampo() {
            const seleccion = document.getElementById('SeleccioneNovedad').value;
            const contenedor = document.getElementById('eventoManualContainer');
            //contenedor.style.display = (seleccion === 'Otro') ? 'block' : 'none';


            if (seleccion == "Otro") {
                contenedor.style.display = "block"
            } else {
                contenedor.style.display = "none"
            }


        }
    </script>

</body>