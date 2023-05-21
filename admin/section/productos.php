<?php include("../template/header.php"); ?>

<?php

$txtId = (isset($_POST['txtId'])) ? $_POST['txtId'] : "";
$txtNombre = (isset($_POST['txtNombre'])) ? $_POST['txtNombre'] : "";
$txtImage = (isset($_FILES['txtImage']['name'])) ? $_FILES['txtImage']['name'] : "";
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";

$host = "localhost";
$bd = "theLibrarian";
$usuario = "jordy";
$password = "1234";

include("../config/bd.php");


switch ($accion) {
    case "Agregar":
        $sentencia = $conexion->prepare("INSERT INTO `tbLibros` (`id`,`nombre`, `imagen`) VALUES (null, ?, ?);");
        $sentencia->bindParam(1, $txtNombre);
        $sentencia->bindParam(2, $txtImage);
        $sentencia->execute();
        break;
    case "Modificar":
        break;

    case "Cancelar":
        break;
    case "Seleccionar":
        break;
    case "Borrar":
        $sentencia = $conexion->prepare("DELETE FROM tbLibros WHERE id=?");
        $sentencia->bindParam(1, $txtId);
        $sentencia->execute();
        break;
}

$sentencia = $conexion->prepare("SELECT * FROM tbLibros");
$sentencia->execute();
$listaLibros = $sentencia->fetchAll(PDO::FETCH_ASSOC);


?>

<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            <i class="fa-solid fa-book"></i> Datos de Libro
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtId"><i class="fa-solid fa-hashtag"></i> Id:</label>
                    <input type="text" class="form-control" name="txtId" id="txtId" placeholder="ID">
                </div>

                <div class="form-group">
                    <label for="txtNombre"><i class="fa-solid fa-file-pen"></i> Nombre:</label>
                    <input type="text" class="form-control" name="txtNombre" id="txtNombre"
                        placeholder="Nombre del Libro">
                </div>

                <div class="form-group">
                    <label for="txtImage"><i class="fa-solid fa-image"></i> Image:</label>
                    <input type="file" class="form-control" name="txtImage" id="txtImage"
                        placeholder="Nombre del Libro">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar <i
                            class="fa-solid fa-plus"></i></button>
                    <button type="submit" name="accion" value="Modificar" class="btn btn-warning">Modificar <i
                            class="fa-solid fa-pen-to-square"></i></button>
                    <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar <i
                            class="fa-solid fa-ban"></i></button>
                </div>

            </form>

        </div>

    </div>
</div>
<div class="col-md-7">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaLibros as $libro) { ?>

                <tr>
                    <td>
                        <?php echo $libro['id']; ?>
                    </td>
                    <td>
                        <?php echo $libro['nombre']; ?>
                    </td>
                    <td>
                        <?php echo $libro['imagen']; ?>
                    </td>
                    <td>
                        <form method="POST">
                            <input type="text" name="txtId" id="txtId" value="<?php echo $libro['id']; ?>" hidden />
                            <input type="submit" name="accion" id="accion" value="Seleccionar" class="btn btn-primary">
                            <input type="submit" name="accion" id="accion" value="Borrar" class="btn btn-danger">
                        </form>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>


<?php include("../template/footer.php") ?>