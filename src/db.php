<?php
    $conn = new mysqli('database','root','root','cisi');

    if(!$conn) {
        die("No se pudo conectar a la base de datos");
    }

?>
