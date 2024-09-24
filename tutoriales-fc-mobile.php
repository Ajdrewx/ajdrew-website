<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutoriales FC Mobile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'header-fc-mobile.php'; ?>

    <main>
        <section>
            <h1>Tutoriales de FC Mobile</h1>
            <p>Aquí encontrarás una lista de tutoriales para FC Mobile.</p>

            <!-- Mostrar tutoriales -->
            <?php include 'list_tutorials.php'; ?>
        </section>

        <!-- Formulario para subir tutoriales -->
        <section>
            <h2>Subir un Nuevo Tutorial</h2>
            <form action="upload_tutorial.php" method="post" enctype="multipart/form-data">
                <label for="title">Título del Tutorial:</label>
                <input type="text" id="title" name="title" required>
                <br>
                <label for="content">Contenido del Tutorial:</label>
                <textarea id="content" name="content" rows="10" cols="30" required></textarea>
                <br>
                <label for="file">Subir Archivo:</label>
                <input type="file" id="file" name="file">
                <br>
                <input type="submit" value="Subir Tutorial">
            </form>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
