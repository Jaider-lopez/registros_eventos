<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form action="/registros_eventos/login.html/conexion.login.php/mostrar.php" method="post">
    <h1>Bienvenido</h1>

    <div class="input-box">
        <input type="text" name="USUARIO" placeholder="Usuario">
        <i class="bx bx-user"></i>
    </div>

    <div class="input-box">
        <input type="password" name="CONTRASENA" placeholder="Contraseña">
        <i class="bx bx-lock"></i>
    </div>

    <?php if (isset($error)): ?>
        <div class="error-msg"><?php echo $error; ?></div>
    <?php endif; ?>

    <input name="btningresar" class="btn" type="submit" value="Iniciar Sesión">
    <button type="submit" class="btn">Registrarse</button>

    <div class="remember">
        <a href="#">¿Olvidaste tu contraseña?</a>
    </div>
</form>

    </div>
</body>

</html>