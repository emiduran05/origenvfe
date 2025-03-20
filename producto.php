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
    <script src="https://kit.fontawesome.com/dd1616d30f.js" crossorigin="anonymous"></script>   
    <title>Inicio</title>
</head>

<body>
<?php require "includes/layouts/header.php"?>

<main class="product_main">
    <div class="product_main_container">
        <div class="main_container_content">
            <div class="main_container_content_element">
                <div class="content_element_slider">
                    <img src="src/img/1-1.webp" alt="">
                    <img src="src/img/1-2.webp" alt="">
                    <img src="src/img/Logo-fondo-blanco-1.webp" alt="">
                </div>
            </div>

            <div class="main_container_content_gallery">
                <img class="gal-img first" src="src/img/1-1.webp" alt="">
                <img class="gal-img" src="src/img/1-2.webp" alt="">
                <img class="gal-img" src="src/img/Logo-fondo-blanco-1.webp" alt="">   
                   
            </div>
        </div>

        <div class="main_container_info">
            <h1>Producto de ejemplo</h1>
            <a href="#valoracion" class="reseñas"><?php echo mostrarEstrellas($calificacion); ?> (<?php echo number_format($calificacion, 1); ?>)</a>
            <p class="container_info_category">Cruces</p>
            <p class="container_info_desc">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus laborum magnam possimus tempore dolor odit illum nisi hic soluta voluptatem similique nam mollitia sint, officia accusantium vel. Officiis, laudantium laboriosam!
            </p>
            <div class="container_info_price">
                <p>Precio: <span>$399</span></p>
                <p>Stock: <span>3</span></p>
            </div>
            <p>Colores:</p>
            <form method="POST" action="" style="display: flex; gap: 10px;">
                <div class="colores">
                    <input style="background-color: #000 ;" name="color" type="radio" value="opcion" title="color" >
                    <input style="background-color: #fff;" name="color" type="radio" value="opcion1" title="color" >
                    <input style="background-color: #00f;" name="color" type="radio" value="opcion2" title="color" >
                    <input style="background-color: #f00;" name="color" type="radio" value="opcion3" title="color" >
                </div>

                
                <div class="tamanos">
                    <p>Selecciona un tamaño</p>
                    <select name="select" id="">
                        <option value="tamano1">Tamaño1</option>
                        <option value="tamaño2">Tamaño2</option>
                    </select>
                </div>
                
    
                <p class="container_info_quant">Cantidad:</p>
                <input type="number" id="cantidad" min="1" name="cantidad">

                <input type="submit" value="Añadir al carrito">
            </form>
        </div>
    </div>
</main>

<section class="product_extra">
    <div class="product_extra_container">
        <h2>Detalles Adicionales</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam dignissimos do
            lor nihil debitis consequuntur adipisci laudantium tenetur exercitationem eos explicabo aliquam facilis esse quod ad tempore ut fuga, alias beatae!7
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis itaque ipsa molestiae unde tempora ea quas architecto nisi ipsum, velit illum voluptatibus consectetur animi dolore omnis? Dicta qui ea animi.</p>
        
    </div>
</section>

<section class="product_coments">
    <div class="product_coments_container">
        <h2>Opiniones y valoraciones</h2>
        <?php for($i = 0; $i < 5; $i++): ?>
            <div class="coments_container_element">
                <div class="container_elemnt_user"> <!-- Aqui probablemente vaya yba imagen adentro del div -->
                    <h3>Usuario <?php echo $i ?></h3>
                </div>

                <?php echo mostrarEstrellas(5.0); ?> (<?php echo number_format(5.0, 1); ?>)

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam pariatur ducimus nesciunt quod, eum hic voluptas expedita, voluptatum, nulla reprehenderit beatae rem. Aliquam recusandae sed porro nostrum eligendi possimus exercitationem.</p>

            </div>
        <?php endfor ?>
    </div>
</section>

<section class="related_products">
    <h2>Productos Relacionados...</h2>
<div class="store_container_products">
                <?php for($i = 0; $i < 4; $i++): ?>
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

</section>

<?php require "includes/layouts/footer.php"?>

</body>
