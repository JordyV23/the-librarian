<?php include("../template/header.php") ?>


<div class="col-md-5">

    <div class="card">
        <div class="card-header">
            <i class="fa-solid fa-book"></i> Datos de Libro
        </div>

        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtId"><i class="fa-solid fa-hashtag"></i> Id:</label>
                    <input type="test" class="form-control" name="txtId" id="txtId" placeholder="ID">
                </div>

                <div class="form-group">
                    <label for="txtNombre"><i class="fa-solid fa-file-pen"></i> Nombre:</label>
                    <input type="password" class="form-control" name="txtNombre" id="txtNombre"
                        placeholder="Nombre del Libro">
                </div>

                <div class="form-group">
                    <label for="txtImage"><i class="fa-solid fa-image"></i> Image:</label>
                    <input type="file" class="form-control" name="txtNombre" id="txtNombre"
                        placeholder="Nombre del Libro">
                </div>

                <div class="btn-group" role="group" aria-label="">
                    <button type="button" class="btn btn-success">Agregar <i class="fa-solid fa-plus"></i></button>
                    <button type="button" class="btn btn-warning">Modificar <i
                            class="fa-solid fa-pen-to-square"></i></button>
                    <button type="button" class="btn btn-info">Cancelar <i class="fa-solid fa-ban"></i></button>
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
            <tr>
                <td>2</td>
                <td>Aprende php</td>
                <td>Imagen </td>
                <td>Seleccionar | Borrar</td>
            </tr>
        </tbody>
    </table>
</div>


<?php include("../template/footer.php") ?>