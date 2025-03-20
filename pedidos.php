<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Pedidos</title>
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>

<?php require "includes/layouts/header.php"?>

    <div class="container">
        <h2>Mis Pedidos</h2>
        <table>
            <tr>
                <th>Número de Pedido</th>
                <th>Número de Rastreo</th>
                <th>Estado</th>
                <th>Dirección de Envío</th>
                <th>Fecha</th>
            </tr>
            <tr>
                <td>#1001</td>
                <td>ABC123456</td>
                <td>Enviado</td>
                <td>Calle 123, Ciudad, País</td>
                <td>2025-03-10</td>
            </tr>
            <tr>
                <td>#1002</td>
                <td>XYZ987654</td>
                <td>Pendiente</td>
                <td>Avenida 456, Ciudad, País</td>
                <td>2025-03-09</td>
            </tr>
        </table>

        <a href="perfil.html" class="button">Actualizar Datos</a>
    </div>
    <?php require "includes/layouts/footer.php"?>

</body>
</html>
