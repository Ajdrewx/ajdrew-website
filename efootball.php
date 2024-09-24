<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eFootball</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Incluir la cabecera desde header.php -->
    <?php include 'header-efootball.php'; ?>

    <main>
        <section>
            <h1>eFootball</h1>
            <p>Explora tutoriales, calificaciones y las mejores cartas de eFootball.</p>
            
            <!-- Imágenes clicables para tutoriales y calificaciones -->
            <div class="content-wrapper">
                <div class="tutorials">
                    <a href="tutoriales-efootball.php">
                        <img src="img/tutoriales-efootball.png" alt="Tutoriales eFootball">
                        <p>Tutoriales eFootball</p>
                    </a>
                </div>
                <div class="ratings">
                    <a href="calificacion-efootball.php">
                        <img src="img/calificacion-efootball.png" alt="Calificación eFootball">
                        <p>Calificación eFootball</p>
                    </a>
                </div>
                <div class="mejores-cartas">
                    <a href="mejores-cartas-efootball.php">
                        <img src="img/mejores-cartas-efootball.png" alt="Mejores Cartas eFootball">
                        <p>Mejores Cartas eFootball</p>
                    </a>
                </div>
            </div>

            <style>
                .content-wrapper img {
                    width: 100%;
                    height: auto;
                    transition: transform 0.3s ease, filter 0.3s ease;
                }
                .content-wrapper img:hover {
                    transform: scale(1.1);
                    filter: blur(2px);
                }
            </style>

        </section>
    </main>

    <style>
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            width: 90%;
            margin: 0 auto;
        }
        .content-wrapper div {
            flex: 1;
            margin: 0 10px;
        }
        .content-wrapper img {
            width: 100%;
            height: auto;
        }
    </style>
    </main>

    <!-- Incluir el pie de página desde footer.php -->
    <?php include 'footer.php'; ?>
</body>
</html>
