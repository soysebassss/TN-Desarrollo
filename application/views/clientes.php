<div class="row justify-content-between">
	<div class="col-sm-3"><br>
		<!--Buscador-->
		<div class="input-group mb-2">
  		<span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
  		<input id="filtrar" type="text" class="form-control">
		</div>
	</div>
	<div class="col sm-3 offset-sm-6"><br>
		<a href="<?=site_url('ClienteController/agregarCliente')?>">
			<button class="btn btn-outline-primary" style="cursor:pointer"><i class="fa fa-plus"></i> Agregar Cliente/a </button>
		</a>
	</div>
</div>

<!--Tabla con los clientes-->
<table class="table table-bordered table-responsive" style="color:black;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Fantasia</th>
      <th scope="col">RUT</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">E-mail</th>
      <th scope="col">Celular</th>
      <th scope="col">Dirección</th>
      <th scope="col">Giro</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody class="buscar">
    <?php if(isset($dataClientes)):
      foreach ($dataClientes as $key => $clientes) {
        $clientes = $clientes->toArray();
        $cliente = $clientes['_columns'];
      ?>      
    <tr>
      <th scope="row"><?php echo $cliente['cli_id'];?></th>
      <td><?php echo $cliente['cli_nombreFantasia'];?></td>
      <td><?php echo $cliente['cli_rut'].'-'.$cliente['cli_dv'];?></td>
      <td><?php echo $cliente['cli_nombre'];?></td>
      <td><?php echo $cliente['cli_apellidos'];?></td>
      <td><?php echo $cliente['cli_correo'];?></td>
      <td><?php echo $cliente['cli_telefono'];?></td>
      <td><?php echo $cliente['cli_direccion'];?></td>
      <td><?php echo $cliente['cli_giro'];?></td>
      <td>
        <form method="post" action="<?=site_url('Administrador/agregarCliente')?>">
          <input type="hidden" name="idCliente" value='<?= $cliente['cli_id']?>'>
          <button type="submit" class="btn btn-outline-secondary pull-right" style="cursor:pointer"><i class="fa fa-pencil" aria-hidden="true"></i></button>
        </form>
      </td>
      <td>
        <form method="post" action="<?=site_url('Administrador/eliminarCliente')?>">
          <input type="hidden" name="idCliente" value="<?= $cliente['cli_id']?>">
          <button type="submit"  class="btn btn-outline-danger deleteUsr pull-right"><i class="fa fa-user-times" aria-hidden="true" style="cursor:pointer"></i></button>
        </form>
      </td>
    </tr>
    <?php }?>
    <?php endif;?>
 </tbody>
</table>

<!-- Modal Eliminar -->
<div id="delete_modal" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" >Eliminar Cliente/a</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <h4>¿Seguro/a que desea eliminar al Cliente/a?</h4><h3 id="modal_name"></h3>
        <div class="modal-footer">
          <div class="col-md-4">
            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancelar</button>
          </div>
          <div class="col-md-8">
            <button id="btnDel" type="button" class="btn btn-danger">Eliminar</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Fin Modal Eliminar -->

<script>
/* Buscador de clientes */
$(document).ready(function () {
  (function ($) {
  	$('#filtrar').keyup(function () { 
      var rex = new RegExp($(this).val(), 'i');
      $('.buscar tr').hide();
      $('.buscar tr').filter(function () {
        return rex.test($(this).text());
      }).show(); 
    }) 
  }(jQuery)); 
});
/* Fin Buscador de clientes */

/* Eliminar Cliente */
var iddelete = 0;
$(".deleteUsr").click(function (){
  iddelete = $(this).attr('fakeid');
});        

$('#btnDel').click(function (){
 	if (iddelete != 0) {
   	$('#delete_modal').modal('hide');
    $.ajax({
      type: "POST",
      url: "<?=site_url('ClienteController/eliminarCliente')?>",
      dataType: "json",
      data: {"idpro": iddelete},
      beforeSend: function (){
        $('#carga_modal').modal('show');
      },
      success: function (data){
        $('#carga_modal').modal('hide');
      },
      complete: function (xhr, status){
        $('#carga_modal').modal('hide');
        location.reload();
      }
    });
  }else{
    alert("No se ha seleccionado ninguna publicación a eliminar");
  }
});
/* Fin Eliminar Cliente */
</script>