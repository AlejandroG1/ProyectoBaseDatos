<?php

$codigo = $_GET['codigo'];
require_once ("../../includes/_db.php");
$consulta = "SELECT * FROM productos WHERE codigo = codigo";
$resultado = mysqli_query($conexion, $consulta);
$productos = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>

<center><h1>Agregar Productos</h1></center>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../includes/_functions.php" method="POST">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" class="form-control"
value="<?php echo $productos ['nombre']; ?>">
</div>

<div class="container">
<div class=" mt-5">
<form action="../../includes/_functions.php" method="POST">
<div class="mb-3">
<label for="nombre" class="form-label">Descripcion *</label>
<input type="text"  id="descripcion" name="descripcion" class="form-control"
value="<?php echo $productos ['descripcion']; ?>">
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="color" class="form-label">Color *</label>
<input type="text"  id="color" name="color" class="form-control"
value="<?php echo $productos ['color']; ?>">
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="precio" class="form-label">precio *</label>
<input type="number"  id="precio" name="precio" class="form-control"
value="<?php echo $productos ['precio']; ?>">
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="cantidad" class="form-label">Cantidad *</label>
<input type="number"  id="cantidad" name="cantidad" class="form-control"
value="<?php echo $productos ['cantidad']; ?>">
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="categorias" class="form-label">Categorias *</label>
<input type="text"  id="categorias" name="categorias" class="form-control"
value="<?php echo $productos ['categorias']; ?>">
</div>
</div>
</div>

<div class="mb-3">
<label for="imagen" class="form-label">Imagen *</label>
<input type="text"  id="imagen" name="imagen" class="form-control"
value="<?php echo $productos['imagen']; ?>">
<input type="hidden" name="accion" value="editar_usuario">
<input type="hidden" name="id" value="<?php echo $codigo;?>">
</div>

<div class="mb-3">  
<button type="submit" class="btn btn-success">Editar</button>


</div>

</form>
</div>
</div>
<?php require '../../includes/_footer.php' ?>
</html>