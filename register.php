<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Screen</title>
    <script src="https://code.ionicframework.com/ionicons/5.5.2/ionicons.js"></script>
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&family=Qwitcher+Grypen:wght@400;700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dd1616d30f.js" crossorigin="anonymous"></script>   
</head>
<body>
<?php require "includes/layouts/header.php"?>
    
    <div class="main_container">
    <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h2>Crear Cuenta</h2>
        <form>
            <label for="name">Nombre Completo</label>
            <input type="text" id="name" name="name" placeholder="Tu nombre" required>

            <label for="email">Correo Electrónico</label>
            <input type="email" id="email" name="email" placeholder="Tu correo" required>

            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" placeholder="Tu contraseña" required>

            <button type="submit">Registrarse</button>
        </form>

        <p>¿Ya tienes cuenta? <a href="login.php">Inicia sesión</a></p>
    </div>

</body>
</html>

    </div>
    
    <?php require "includes/layouts/footer.php"?>

</body>
</html>
