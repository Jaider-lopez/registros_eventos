<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros de Novedades</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1 class="text-center mb-4">REGISTRO DE NOVEDADES MUNICIPIO DE LA CEJA</h1>

        <div class="mb-3 d-flex justify-content-between">
            <a href="../../formulario/reporte.php" class="btn btn-success">+ Añadir Novedad</a>
            <a href="../../login.html/conexion.login.php/index.php" class="btn btn-danger">Cerrar sesión</a>
        </div>

        <table id="tablaNovedades" class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Teléfono</th>
                    <th>Evento</th>
                    <th>Fecha</th>
                    <th>Hora Recepción</th>
                    <th>Hora Atención</th>
                    <th>Dirección</th>
                    <th>Descripción</th>
                    <th>Entidad</th>
                    <th>Operador Responsable</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include("con_bd_tabla.php");
            $consulta = "SELECT * FROM registro_de_eventos";
            $resultado = mysqli_query($conexion, $consulta);
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['ID']) . "</td>";
                echo "<td>" . htmlspecialchars($row['NOMBRE']) . "</td>";
                echo "<td>" . htmlspecialchars($row['TELEFONO']) . "</td>";
                echo "<td>" . htmlspecialchars($row['EVENTO']) . "</td>";
                echo "<td>" . htmlspecialchars($row['FECHA']) . "</td>";
                echo "<td>" . htmlspecialchars($row['HORA_RECEPCION']) . "</td>";
                echo "<td>" . htmlspecialchars($row['HORA_ATENCION']) . "</td>";
                echo "<td>" . htmlspecialchars($row['DIRECCION']) . "</td>";
                echo "<td>" . htmlspecialchars($row['DESCRIPCION']) . "</td>";
                echo "<td>" . htmlspecialchars($row['ENTIDAD']) . "</td>";
                echo "<td>" . htmlspecialchars($row['OPERADOR_RESPONSABLE']) . "</td>";
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function () {
            $('#tablaNovedades').DataTable({
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json'
                }
            });
        });
    </script>
</body>
</html>
