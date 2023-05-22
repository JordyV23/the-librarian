<?php include("./template/header.php"); ?>

<?php
include("admin/config/bd.php");

$sentencia = $conexion->prepare("SELECT * FROM tbLibros");
$sentencia->execute();
$listaLibros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
?>
<?php foreach($listaLibros as $libro){ ?>
<div class="col-md-3">
    <div class="card">
        <img class="card-img-top" src="./img/<?php echo $libro['imagen'];?>" alt="">
        <div class="card-body">
            <h4 class="card-title"><?php $libro["nombre"]  ?></h4>
            <a class="btn btn-primary" href="#" role="button">Ver Mas</a>
        </div>
    </div>
</div>
<?php }?>


<?php include('./template/footer.php') ?>