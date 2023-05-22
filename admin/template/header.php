<?php

session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location:../index.php");
} else {
    if ($_SESSION['usuario'] == "ok") {
        $nombreUsuario = $_SESSION["nombreUsuario"];
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php $url = "http://" . $_SERVER['HTTP_HOST'] . "/the-librarian"; ?>

    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link" href="#">Administrador</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/inicio.php"> <i
                    class="fa-solid fa-house-user"></i> Home</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/section/productos.php"> <i
                    class="fa-solid fa-book-bookmark"></i> Libros</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>"> <i class="fa-solid fa-table-columns"></i> Ver
                Sitio</a>
            <a class="nav-item nav-link" href="<?php echo $url; ?>/admin/section/cerrar.php"> <i
                    class="fa-solid fa-right-from-bracket"></i> Cerrar Sesion</a>
        </div>
    </nav>

    <div class="container">
        <br />
        <div class="row">