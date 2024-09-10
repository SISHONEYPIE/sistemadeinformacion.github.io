<?php 
include "header.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honey Pie Cakes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="resolucion">
        <div class="desktop">

        </div>
        <div class="tablet">
            
        </div>
        <div class="movil">
            
        </div>
    </div>
    
    <header class="header">
        <div class="menu container">
        <img class="logo" src="Img/logoact.png" alt="logoact">
        
            <input type="checkbox" id="menu" />
            <label for="menu">
                <img src="Img/menu.png" class="menu-icono" alt="Menú">
                
            </label>

            <nav class="navbar">

                <ul>
                    
                    <li><a href="#Contáctano">Contáctanos</a></li>
                    <li><a href="#Historia">Historia</a></li>
                    <li><a href="#Piezas en exhibición">Pasteles</a></li>
                    <li><a href="#Salas y Galerias">Cupcakes</a></li>
                    <li><a href="#Ubicación y Horarios">Ubicación</a></li>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <h1>Honey Pie Cakes</h1>
            
            <p>
                
            </p>
            
        </div>
    </header>

    <section class="Historia container">
        <div class="historia-content">
            <img class="historia-img" src="Img/historia img principal.png" alt="Imagen principal de historia">
            <div id="Historia" class="text-content">
                <h2>HISTORIA</h2>
                <p class="txt-p">
                Honey Pie Cakes es una pastelería ubicada en Huehuetoca, reconocida por sus productos artesanales y su enfoque en ingredientes frescos y locales. Desde su apertura, ha sido un lugar de referencia para quienes buscan postres de calidad y decoraciones personalizadas. El local ofrece una amplia variedad de pasteles, tartas, y galletas, destacándose por sus recetas únicas que combinan tradición con innovación.

La pastelería ha ganado popularidad no solo por el sabor de sus productos, sino también por su compromiso con el servicio al cliente. Mariana, la fundadora, comenzó este negocio con el objetivo de crear un espacio donde cada cliente pudiera sentirse especial al recibir postres que no solo fueran deliciosos, sino también visualmente atractivos.
                </p>
                <a href="#" class="btn-1">Inicio</a>
            </div>
        </div>

        <div class="coffee-group">
            <div class="coffee-1">
                <h3>Ubicación</h3>
                <div id="Ubicación y Horarios" class="text-content"> </div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.8896529773892!2d-99.20838322569458!3d19.844621427395683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d22762d43e5af5%3A0x9b52c65eb2eb46b!2sHoney%20Pie%20Cakes!5e0!3m2!1ses!2smx!4v1725757101768!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p>
                
                </p>
            </div>
        </div>
        <a href="#" class="btn-1">Inicio</a>
    </section>

    <main class="services container">
        <h2>Pasteles</h2>
        <div class="services-group">
            <div id="Piezas en exhibición" class="text-content"></div>
            <div class="service-item">
                <img src="Img/pastb1.webp" alt="Servicio 1">
                <h3>$500</h3>
            </div>
            <div class="service-item">
                <img src="Img/pastb2.webp" alt="Servicio 2">
                <h3>$540</h3>
            </div>
            <div class="service-item">
                <img src="Img/pastb3.webp" alt="Servicio 3">
                <h3>$750</h3>
            </div>
            <div class="service-item">
                <img src="Img/pastb4.webp" alt="Servicio 3">
                <h3>$480</h3>
            </div>
            <div class="service-item">
                <img src="Img/pastc2.webp" alt="Servicio 3">
                <h3>$800</h3>
            </div>
            <div class="service-item">
                <img src="Img/pastelc.webp" alt="Servicio 3">
                <h3>$566</h3>
            </div>
        </div>
        </div>
        <a href="#" class="btn-1">Inicio</a>
    
    </main>    
            </div>
           
        </div>
    </section>

    <section class="general container">
        <div id="Salas y Galerias" class="text-content"></div>
        <div class="general-1">
            <h2>Cupcakes</h2>
            <div class="services-group">
                <div class="service-item">
                    <img src="Img/cupv2.webp" alt="Servicio 1">
                    <h3></h3>
                </div>
                <div class="service-item">
                    <img src="Img/cupv3.webp" alt="Servicio 2">
                    <h3></h3>
                </div>
                <div class="service-item">
                    <img src="Img/cupv4.webp" alt="Servicio 3">
                    <h3></h3>
                </div>
                <div class="service-item">
                    <img src="Img/cupv5.webp" alt="Servicio 4">
                    <h3></h3>
                </div>
                
            </div>
            <a href="#" class="btn-1">Inicio</a>
        </div>
    </section>


    <footer class="footer">
        <div class="footer-content container">
            
            <div class="link">
                <h3>Correo</h3>
                <ul>
                    <li><a href="">honeypie@gmail.com</a></li>   
                </ul>
            </div>
            <p>
      <?php 
        include "modal_reserva.php";
        #include "metodos/form_insert.php";
      ?>

      
            </p>
            <div class="link">
                <h3>Número Telefónico</h3>
                <ul>
                    <li><a href="tel:5635666209">5635666209</a></li> 
                </ul>
            </div>
        </div>
        <div id="Contáctano" class="text-content"></div>
    </footer>

</body>
</html>









<?php include "footer.php";?>