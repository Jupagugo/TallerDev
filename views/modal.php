<!-- Modal -->
<!--Formulario Para enviar el Id y el metodo-->
<form action="" method="get">

<div class="modal fade" id="eliminar-modal" tabindex="" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Eliminar Docente</h4>
      </div>
      <div class="modal-body">
      Desea eliminar el docente con id <?php echo $va["id"]." y Identificacion No.".$va["documento_identidad"];?>?
      </div>
      <div class="modal-footer">
      <input type="hidden" name="id" value="<?php echo $va['id'] ?>">
<input type="hidden" name="m" value="eliminar">

        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger">Confirmar</button>
      </div>
    </div>
  </div>
</div>
</form>