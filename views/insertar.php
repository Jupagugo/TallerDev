<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Personas</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>NUEVO</h1>
        <hr>
        <form action="">
            <div class="form-group">
                <label>Documento Identidad</label>
                <input type="text" name="documento_identidad" value="" class="form-control" placeholder="Ingrese su documento de identidad" data-validacion-tipo="requerido|min:3" />
            </div>
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" name="nombre" value="" class="form-control" placeholder="Ingrese sus Nombres" data-validacion-tipo="requerido|min:7" />
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input type="text" name="apellido" value="" class="form-control" placeholder="Ingrese sus apellidos" data-validacion-tipo="requerido|min:8" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" value="" class="form-control" placeholder="Ingrese su email" data-validacion-tipo="requerido|min:8" />
            </div>
            <div class="form-group">
                <label>Telefono</label>
                <input type="text" name="telefono" value="" class="form-control" placeholder="Ingrese su telefono" data-validacion-tipo="requerido|min:8" />
            </div>
            <input type="hidden" name="m" value="guardar">
            <hr />
            <div class="text-right">
                <button class="btn btn-success">Guardar</button>
            </div>
        </form>
        <hr />
    </div>
</body>

</html>