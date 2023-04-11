<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Editar Docente</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
<h1>Editar Docente</h1>
<hr>
<form action="">
<?php foreach ($dato as $key => $value)
foreach ($value as $v ): ?>

<div class="form-group">
<label>Nombre</label>
<input type="text" name="nombre" value="<?php echo $v['nombre'] ?>"
class="form-control" placeholder="Ingrese su Nombre" data-validacion-tipo="requerido|min:7" />
</div>

<div class="form-group">
<label>Apellido</label>
<input type="text" name="apellido" value="<?php echo $v['apellido'] ?>"
class="form-control" placeholder="Ingrese sus Apellidos" data-validacion-tipo="requerido|date" />
</div>

<div class="form-group">
<label>Documento Identidad</label>
<input type="text" name="documento_identidad" value="<?php echo
$v['documento_identidad'] ?>" class="form-control" placeholder="Ingrese su 
numero de Indentificación" data-validacion-tipo="requerido|min:3" />
</div>

<div class="form-group">
<label>Genero</label>
<input type="text" name="genero" value="<?php echo $v['genero'] ?>"
class="form-control" placeholder="Ingrese su Genero" data-validacion-tipo="requerido|min:7" />
</div>

<div class="form-group">
<label>Telefono</label>
<input type="text" name="telefono" value="<?php echo $v['telefono'] ?>"
class="form-control" placeholder="Ingrese su Telefono" data-validacion-tipo="requerido|min:8" />
</div>

<div class="form-group">
<label>Direccion</label>
<input type="text" name="direccion" value="<?php echo $v['direccion'] ?>"
class="form-control" placeholder="Ingrese su Direccion" data-validacion-tipo="requerido|min:8" />
</div>

<div class="form-group">
<label>Email</label>
<input type="text" name="email" value="<?php echo $v['email'] ?>"
class="form-control" placeholder="Ingrese su Email" data-validacion-tipo="requerido|min:8" />
</div>

<input type="hidden" name="id" value="<?php echo $v['id'] ?>">
<input type="hidden" name="m" value="update">
<hr />
<div class="text-right">
<button class="btn btn-success">Guardar</button>
</div>
<?php endforeach ?>
</form>
<hr />
</div>
</body>
</html>