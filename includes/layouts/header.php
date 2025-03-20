<header class="header">

        <div class="header_div">

        

            <!-- Div que contiene la imagen -->

            <div class="header_img">
                <picture>
                    <source srcset="build/img/Captura_de_pantalla_2025-01-27_175038-removebg-preview.webp" type="image/webp">
                    <source srcset="build/img/Captura_de_pantalla_2025-01-27_175038-removebg-preview.avif" type="image/avif">
                    <img src="build/img/Captura_de_pantalla_2025-01-27_175038-removebg-preview.png" alt="OrigenVFE Logo" loading="lazy" >
                </picture>
            </div> <!-- Fin del div que contiene la imagen -->

            <!-- Navegacion (links internos) de la pagina --->
            <nav class="header_nav">
                <a href="index.php">Inicio</a>
                <a href="tienda.php">Tienda</a>
                <a href="">Sobre Nosotros</a>
                <a href="">Contacto</a>
            </nav> <!-- Fin de la navegacion -->

            <!-- Contenido de Usuario (carrito, cuenta, busqueda) -->
            <div class="header_divUser">

                <div class="divUser_cart" data-cart="<?php echo "0"; ?>"> <!-- Div que contiene icono del carrito -->
                    <svg class="cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path> <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path> <path d="M17 17h-11v-14h-2"></path> <path d="M6 5l14 1l-1 7h-13"></path> </svg> 
                </div> 

                <div class="divUser_login" > <!-- Div que contiene icono del usuario -->
                    <div class="login_icon" ><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" width="24" height="24" stroke-width="2" stroke-linejoin="round" stroke-linecap="round" stroke="currentColor">
                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                        </svg>

                        <a href="login.php">Iniciar Sesion</a>
                    </div>

                </div>

                <!-- boton de busqueda -->
                <button class="divUser_search"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0"></path> <path d="M21 21l-6 -6"></path> </svg> </button>
            </div> <!-- Fin del divUser -->
        </div>


    <!-- Inicio de div, para la navegacion responsiva -->
     <div class="header_mobile">

        <button class="header_mobile_menu">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2">
            <path d="M4 6l16 0"></path>
            <path d="M4 12l16 0"></path>
            <path d="M4 18l16 0"></path>
            </svg>
        </button>

        

        <!-- Div que contiene la imagen -->

        <div class="header_img">
            <picture>
                <source srcset="build/img/Captura_de_pantalla_2025-01-27_175038-removebg-preview.webp" type="image/webp">
                <source srcset="build/img/Captura_de_pantalla_2025-01-27_175038-removebg-preview.avif" type="image/avif">
                <img src="build/img/Captura_de_pantalla_2025-01-27_175038-removebg-preview.png" alt="OrigenVFE Logo" loading="lazy" >
            </picture>
        </div> <!-- Fin del div que contiene la imagen -->

        <div class="divUser_cart" data-cart="<?php echo "0"; ?>"> <!-- Div que contiene icono del carrito -->
            <svg class="cart" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="24" height="24" stroke-width="2"> <path d="M6 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path> <path d="M17 19m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path> <path d="M17 17h-11v-14h-2"></path> <path d="M6 5l14 1l-1 7h-13"></path> </svg> 
        </div> 

     </div>
     <!-- Fin de la navegacion responsiva -->

    </header>

     <!-- Fin del header -->

    <!--navegacion responsive escondida -->
    <div class="header_mobile_hidden">
    <button class="close">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" width="30" height="30" stroke-width="2"> <path d="M10 10l4 4m0 -4l-4 4"></path> <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"></path> </svg> 

    </button>

        <nav class="header_mobile_nav">
            <a href="index.php">Inicio</a>
            <a href="tienda.php">Tienda</a>
            <a href="">Sobre Nosotros</a>
            <a href="">Contacto</a>
            <a href="">Iniciar Sesion</a>
        </nav> <!-- Fin de la navegacion -->
    </div>

    <div class="index_cart">
        <header class="index_cart_header">
            <h3>Mi Carrito</h3>
            <i class="fa-solid fa-xmark x_mark"></i>

        </header>

        <main class="index_cart_main">
            <div class="cart_main_info">
                <p>No has agregado Ningun Producto al carrito</p>
            </div>
        </main>

        <footer class="index_cart_footer">
            <button class="callta">Ir a Carrito</button>
            <button class="callta">Ir al Pago</button>
        </footer>
    </div>