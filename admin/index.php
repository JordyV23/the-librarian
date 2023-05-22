<?php

session_start();
if ($_POST) {

    if (($_POST['usuario'] == 'Jordy') && $_POST['contrasenia'] == '1234') {
        $_SESSION['usuario'] = 'ok';
        $_SESSION['nombreUsuario'] = "Jordy";
        header('Location:inicio.php');
    } else {
        $mensaje = "Error: Usuario y/o contraseña no validos";
    }

}

?>

<!doctype html>
<html lang="en">

<head>
    <title>WebAdmin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row">

            <div class="col-md-4">

            </div>

            <div class="col-md-4">
                <br />
                <br />
                <br />
                <div class="card">
                    <div class="card-header">
                        Inicio de Sesion
                    </div>
                    <div class="card-body">

                        <?php if (isset($mensaje)) { ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>
                                    <?php echo $mensaje ?>
                                </strong>
                            </div>
                        <?php } ?>

                        <form method="POST">
                            <div class="form-group">
                                <label><i class="fa-solid fa-user"></i> Usuario</label=>
                                    <input type="text" class="form-control" -describedby="emailHelp"
                                        placeholder="Username" name="usuario">
                            </div>

                            <div class="form-group">
                                <label><i class="fa-solid fa-key"></i> Contraseña</label>
                                <input type="password" class="form-control" placeholder="Contraseña" name="contrasenia">
                            </div>
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-user-check"></i> Iniciar
                                Sesion</button>
                        </form>


                    </div>
                    <div class="card-footer text-muted">

                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://kit.fontawesome.com/8633cf8400.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>