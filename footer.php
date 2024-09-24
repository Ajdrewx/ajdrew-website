<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Horizontal</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
        }
        .site-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .content {
            flex: 1;
        }
        .footer-container {
            background-color: #1a1a1a;
            padding: 20px;
        }
        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .footer-column {
            flex: 1;
            margin: 10px;
            min-width: 200px; /* Ajusta el valor según tus necesidades */
        }
        .footer-column h1, .footer-column h2 {
            margin-top: 0;
        }
        .footer-menu ul {
            list-style: none;
            padding: 0;
        }
        .footer-menu ul li {
            margin-bottom: 10px;
        }
        .footer-menu ul li a {
            text-decoration: none;
            color: #ffff;
        }
        .social-media a {
            margin-right: 10px;
        }
        .social-icon {
            width: 40px; /* Adjust size as needed */
            height: 40px; /* Adjust size as needed */
            filter: brightness(0) invert(1); /* Make icons white */
            transition: transform 0.3s ease; /* Smooth transition for hover effect */
        }
        .social-icon:hover {
            transform: scale(1.2); /* Scale up on hover */
        }
    </style>
</head>
<body>
    <div class="site-wrapper">
        <div class="content">
            <!-- Aquí va el contenido de tu página -->
        </div>
        <footer class="footer-container">
            <div class="footer-content footer-columns">
                <!-- Nombre de la página y descripción -->
                <div class="footer-column page-info">
                    <h1>Mi Sitio Web</h1>
                    <p>Explora los mejores tutoriales, calificaciones y más sobre eFootball y FC Mobile.</p>
                </div>
                
                <!-- Sección de contacto -->
                <div class="footer-column contact">
                    <h2>Contacto</h2>
                    <p>Para cualquier consulta, contáctanos a través de nuestras redes sociales o por correo electrónico.</p>
                    <a href="contacto.php">Contacto</a>
                </div>
                
                <!-- Menú de navegación -->
                <div class="footer-column footer-menu">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="juegos.php">Juegos</a></li>
                        <li><a href="sorteos.php">Sorteos</a></li>
                        <li><a href="informacion.php">Información</a></li>
                    </ul>
                </div>
                
                <!-- Redes sociales -->
                <div class="footer-column social-media">
                    <a href="#"><img src="img/icono-facebook.png" alt="Facebook" class="social-icon"></a>
                    <a href="#"><img src="img/icono-twitter.png" alt="Twitter" class="social-icon"></a>
                    <a href="#"><img src="img/icono-instagram.png" alt="Instagram" class="social-icon"></a>
                    <a href="#"><img src="img/icono-discord.png" alt="Discord" class="social-icon"></a>
                    <a href="#"><img src="img/icono-tiktok.png" alt="TikTok" class="social-icon"></a>
                    <a href="#"><img src="img/icono-youtube.png" alt="YouTube" class="social-icon"></a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>
