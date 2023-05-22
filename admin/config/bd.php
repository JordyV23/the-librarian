<?php

$host = "localhost";
$bd = "theLibrarian";
$usuario = "jordy";
$password = "1234";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$bd", $usuario, $password);
    if ($conexion) {
        
    }
} catch (Exception $th) {
    echo "Error en la conexion" . $th->getMessage();
}


?>
