<?php
include("conexion.bd.php");

if (isset($_POST['USUARIO']) && isset($_POST['CONTRASENA'])) {
    $usuario = $_POST['USUARIO'];
    $contrasena = $_POST['CONTRASENA'];

    // Consulta del usuario
    $sql = "SELECT contrasena FROM usuarios WHERE usuario = ?";
    $stmt = $conexion->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $usuario);
        $stmt->execute();
        $result = $stmt->get_result();

        // Verificar si existe y comparar contraseñas
        if ($result->num_rows === 1) {
            $row = $result->fetch_assoc();
            if ($contrasena === $row['contrasena']) {
                // Autenticación exitosa
                header("Location: /registros_eventos/conexion.php/novedades/inicio.php");
                exit();
            } else {
                $error = "⚠️ Contraseña incorrecta.";
            }
        } else {
            $error = "⚠️ Usuario no encontrado.";
        }

        $stmt->close();
    } else {
        $error = "❌ Error en la consulta SQL.";
    }
} else {
    $error = "⚠️ Todos los campos son obligatorios.";
}

mysqli_close($conexion);

// Mostrar mensaje de error si hay
if (isset($error)) {
    include("index.php");
    }
    
?>
