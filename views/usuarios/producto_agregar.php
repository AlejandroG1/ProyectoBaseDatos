<!DOCTYPE html>
<html lang="es-MX">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Producto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../includes/_functions.php" method="POST">
<div class="mb-3">
<label for="codigo" class="form-label">Codigo *</label>
<input type="number"  id="codigo" name="codigo" class="form-control">
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="nombre" class="form-label">Nombre *</label>
<input type="text"  id="nombre" name="nombre" class="form-control">
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="descripcion" class="form-label">Descripcion *</label>
<input type="text"  id="descripcion" name="decripcion" class="form-control">
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="color" class="form-label">Color *</label>
<input type="text"  id="color" name="color" class="form-control">
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="precio" class="form-label">Precio *</label>
<input type="number"  id="precio" name="precio" class="form-control">
</div>
</div>
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="cantidad" class="form-label">Cantidad *</label>
<input type="number"  id="cantidad" name="cantidad" class="form-control">
</div>
</div>

<div class="col-sm-6">
<div class="mb-3">
<label for="categorias" class="form-label">Categorias *</label>
<input type="text"  id="categorias" name="categorias" class="form-control">
</div>
</div>
</div>

<div class="mb-3">
<label for="imagen" class="form-label">Imagen *</label>
<input type="mediumblob"  id="imagen" name="imagen" class="form-control">
<input type="hidden" name="accion" value="insertar_productos">
</div>

<div class="mb-3">
<button type="submit" class="btn btn-success">Guardar</button>


</div>

</form>
</div>
</div>
</body>
<?php require '../../includes/_footer.php' ?>
</html>