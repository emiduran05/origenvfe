<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="build/css/app.css">
    <script defer src="script.js"></script>
</head>
<body>

    <div class="container">
        <h1>Carrito de Compras</h1>

        <div class="cart">
            <table>
                <thead>
                    <tr>
                        <th>Imagen</th>
                        <th>Producto</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody id="cart-items">
                    <!-- Los productos se agregarán aquí dinámicamente -->
                </tbody>
            </table>
        </div>

        <div class="cart-summary">
            <h2>Total: $<span id="total-price">0.00</span></h2>
            <button id="checkout-btn">Finalizar Compra</button>
        </div>
    </div>

</body>
</html>
