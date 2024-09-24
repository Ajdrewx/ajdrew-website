<?php
// Directorio de destino para los archivos subidos
$uploadFileDir = './uploaded_files/';

// Verifica si el directorio de destino existe
if (!is_dir($uploadFileDir)) {
    echo 'El directorio de destino no existe. Creando directorio...<br>';
    if (mkdir($uploadFileDir, 0755, true)) {
        echo 'Directorio creado con éxito.<br>';
    } else {
        echo 'Error al crear el directorio.<br>';
    }
} else {
    echo 'El directorio de destino existe.<br>';
}

// Verifica los permisos del directorio
if (is_writable($uploadFileDir)) {
    echo 'El directorio de destino es escribible.<br>';
} else {
    echo 'El directorio de destino no es escribible. Ajustando permisos...<br>';
    if (chmod($uploadFileDir, 0755)) {
        echo 'Permisos ajustados con éxito.<br>';
    } else {
        echo 'Error al ajustar los permisos.<br>';
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    
    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileSize = $_FILES['file']['size'];
        $fileType = $_FILES['file']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));
        
        // Define el archivo destino
        $dest_path = $uploadFileDir . $fileName;
        
        // Mueve el archivo al directorio de destino
        if (move_uploaded_file($fileTmpPath, $dest_path)) {
            echo 'Archivo subido con éxito.';
        } else {
            echo 'Error al subir el archivo.';
        }
    } else {
        echo 'No se ha subido ningún archivo.';
    }

    echo 'Tutorial subido con éxito.';
}
?>
