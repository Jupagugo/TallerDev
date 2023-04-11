<!-- Modal -->
<!--Formulario Para enviar el Id y el metodo-->
<form action="" method="get">

<div class="modal fade" id="insertar-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Agregar Docente</h4>
      </div>
      <div class="modal-body">


<div class="form-group">
<label>Nombre</label>
<input type="text" name="nombre" value="" class="form-control"
placeholder="Ingrese sus Nombres" data-validacion-tipo="requerido|min:7" />
</div>

<div class="form-group">
<label>Apellido</label>
<input type="text" name="apellido" value="" class="form-control"
placeholder="Ingrese sus apellidos" data-validacion-tipo="requerido|date" />
</div>

<div class="form-group">
<label>Documento Identidad</label>
<input type="text" name="documento_identidad" value="" class="form-control" placeholder="Ingrese su documento de identidad" data-validacion-tipo="requerido|min:3" />
</div>

<div class="form-group">
<label>Genero</label>
<input type="text" name="genero" value="" class="form-control"
placeholder="Ingrese su genero" data-validacion-tipo="requerido|min:7" />
</div>

<div class="form-group">
<label>Telefono</label>
<input type="text" name="telefono" value="" class="form-control"
placeholder="Ingrese su telefono" data-validacion-tipo="requerido|min:8" />
</div>

<div class="form-group">
<label>Direccion</label>
<input type="text" name="direccion" value="" class="form-control"
placeholder="Ingrese su direccion" data-validacion-tipo="requerido|min:7" />
</div>

<div class="form-group">
<label>Email</label>
<input type="text" name="email" value="" class="form-control"
placeholder="Ingrese su email" data-validacion-tipo="requerido|min:8" />
</div>



<input type="hidden" name="m" value="guardar">
      </div>
      <div class="modal-footer">
    

        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger">Confirmar</button>
      </div>
    </div>
  </div>
</div>
</form>