<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FC Mobile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Incluir la cabecera desde header.php -->
    <?php include 'header-fc-mobile.php'; ?>

    <main>
        <section>
            <h1>FC Mobile</h1>
            <p>Explora tutoriales, calificaciones y las mejores cartas de FC Mobile.</p>
            
            <!-- Imágenes clicables para tutoriales y calificaciones -->
            <div class="content">
                <div class="item">
                    <a href="tutoriales-fc-mobile.php">
                        <img src="img/tutoriales-fc-mobile.png" alt="Tutoriales FC Mobile">
                        <p class="text">Tutoriales FC Mobile</p>
                    </a>
                </div>
                <div class="item">
                    <a href="calificacion-fc-mobile.php">
                        <img src="img/calificacion-fc-mobile.png" alt="Calificación FC Mobile">
                        <p class="text">Calificación FC Mobile</p>
                    </a>
                </div>
                <div class="item">
                    <a href="mejores-cartas-fc.php">
                        <img src="img/mejores-cartas-fc.png" alt="Mejores Cartas FC Mobile">
                        <p class="text">Mejores Cartas FC Mobile</p>
                    </a>
                </div>
            </div>

            <style>
                .content {
                    display: flex;
                    justify-content: space-between;
                    width: 90%;
                    margin: 0 auto;
                }
                .item {
                    flex: 1;
                    margin: 0 10px;
                    transition: transform 0.3s ease, filter 0.3s ease;
                }
                .item img {
                    width: 100%;
                    height: auto;
                }
                .item:hover {
                    transform: scale(1.05);
                    filter: brightness(0.8);
                }
            </style>

        </section>
    </main>

    <style>
        .content {
            display: flex;
            justify-content: space-between;
            width: 90%;
            margin: 0 auto;
        }
        .item {
            flex: 1;
            margin: 0 10px;
        }
        .item img {
            width: 100%;
            height: auto;
        }
    </style>
    </main>

    <!-- Incluir el pie de página desde footer.php -->
    <?php include 'footer.php'; ?>
</body>
</html>
