<?php
function mostrarEstrellas($calificacion) {
    $html = "";
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= floor($calificacion)) {
            $html .= '<i class="fa-solid fa-star" style="color: gold;"></i>'; // Estrella llena
        } elseif ($i == ceil($calificacion) && $calificacion - floor($calificacion) >= 0.5) {
            $html .= '<i class="fa-regular fa-star-half-stroke" style="color: gold;"></i>'; // Media estrella
        } else {
            $html .= '<i class="fa-regular fa-star" style="color: gold;"></i>'; // Estrella vacía
        }
    }
    return $html;
}

// Ejemplo de calificación (puedes obtenerla de la base de datos)
$calificacion = 3.5;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="build/css/app.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Quicksand:wght@300..700&family=Qwitcher+Grypen:wght@400;700&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dd1616d30f.js" crossorigin="anonymous"></script>    <title>Inicio</title>
</head>

<body>
<?php require "includes/layouts/header.php"?>

    <main class="main_store">
        <div class="main_store_container">
            <div class="store_container_filters">
                <h2>Filtrar Productos</h2>
                <form method="POST">
                    <div>
                        <label for="category">Categoría:</label>
                        <select id="category" name="category">
                            <option value="all">Todas</option>
                            <option value="ropa">Ropa</option>
                            <option value="electronica">Electrónica</option>
                        </select>
                    </div>

                    <div class="max_price">
                        <label for="price">Precio máximo:</label>
                        <input type="number" name="max<_precio" id="price" min="0">
                    </div>
                    
                    <div>
                        <label for="rating">Valoración mínima:</label>
                        <select id="rating" name="valoracion">
                            <option value="0">Todas</option>
                            <option value="1">1 estrella</option>
                            <option value="2">2 estrellas</option>
                            <option value="3">3 estrellas</option>
                            <option value="4">4 estrellas</option>
                            <option value="5">5 estrellas</option>
                        </select>
                    </div>
                    
                   <div>
                    <label for="date">Fecha de publicación</label>
                    <select id="date" name="fecha">
                        <option value="reciente">Más reciente</option>
                        <option value="antiguo">Más antiguo</option>
                    </select>
                   </div>

                    

                    <input type="submit" value="Filtrar"></input>
                </form>


            </div>



            <div class="store_container_products">
                <?php for($i = 0; $i < 10; $i++): ?>
                    <div class="grid_products_product">
                        <a href="producto.php?<?php echo "id=".$i ?>">
                            <img src="src/img/1-1.webp" alt="">
                            <h3>Cruz de Madera Roble</h3>
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse unde veniam, placeat dolorem molestias exerci
                            </p>

                            <p class="category">Cruces</p>

                            <div class="products_product_val">
                                
                                <p class="reseñas"><?php echo mostrarEstrellas($calificacion); ?> (<?php echo number_format($calificacion, 1); ?>)</p>

                                <p class="precio">$699</p>
                            </div>

                            
                            <button>Agregar al Carrito</button>
                        </a>
                    </div>


                <?php endfor ?>

                    
            </div>
        </div>
    </main>

    <?php require "includes/layouts/footer.php"?>
</body>