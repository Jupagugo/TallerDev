<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Docentes</title>

<link rel="stylesheet" type="text/css" href="css/estilo.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">


    
<h1 class="page-header">Docentes</h1>
<div class="well well-sm text-right">
<a class="btn btn-primary btn-lg" data-toggle="modal" data-target="#insertar-modal">Agregar Docente</a>
</div>
<table class="tabla">
<thead>
<tr>

<th >Nombres</th>
<th>Apellido</th>
<th>Numero Identificación</th>
<th >Genero</th>
<th >Telefono</th>
<th >Direccion</th>
<th >Correo Electronico</th>
<th >Acción</th>
<th ></th>
</tr>
</thead>
<tbody>
<?php foreach ($dato as $key => $value)
foreach ($value as $va ): ?>
<tr>

<td><?php echo $va["nombre"];?></td>
<td><?php echo $va["apellido"]; ?></td>
<td><?php echo $va["documento_identidad"]; ?></td>
<td><?php echo $va["genero"]; ?></td>
<td><?php echo $va["telefono"]; ?></td>
<td><?php echo $va["direccion"]; ?></td>
<td><?php echo $va["email"]; ?></td>
<td>
    
 <a class="btn btn-primary btn-lg" href="?m=editar&id=<?php echo $va["id"]; ?>"> Editar</a>

</td>
<td>

 
<button type="button" class="btn btn-danger btn-lg" data-toggle="modal" data-target="#eliminar-modal">
  Eliminar
</button>
</td>

<?php

require_once("views/modal.php");
require_once("views/modal-insertar.php");
?>

</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</body>
</html>
