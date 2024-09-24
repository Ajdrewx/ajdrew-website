<?php
// list_tutorials.php

// Definir el directorio donde se guardan los archivos
$uploadFileDir = 'C:\Users\Usuario\Documents\AJDREW GAMEPLAY\Tutoriales';
$files = array_diff(scandir($uploadFileDir), array('.', '..'));

echo '<h1>Tutoriales de FC Mobile</h1>';
echo '<ul>';
foreach ($files as $file) {
    echo '<li><a href="' . $uploadFileDir . $file . '">' . $file . '</a></li>';
}
echo '</ul>';
?>
