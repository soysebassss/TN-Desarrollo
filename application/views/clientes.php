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
      <th scope="col">Username</th>
      <th scope="col">RUT</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">E-mail</th>
      <th scope="col">Celular</th>
      <th scope="col">Comuna</th>
      <th scope="col">Dirección</th>
      <th scope="col">Giro</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody class="buscar">
    <tr>
      <th scope="row">1</th>
      <td>Username1</td>
      <td>00000000-0</td>
      <td>Nombre 1</td>
      <td>Apellido 1</td>
      <td>correo@correo.com</td>
      <td>000000000</td>
      <td>Comuna 1</td>
      <td>Dirección 1</td>
      <td>Giro 1</td>
      <td>
      	<form method="post" action="<?=site_url('clienteController/editarCliente')?>">
      		<input type="hidden" name="clienteId" value="<?=''?>">
      		<button type="button" class="btn btn-outline-secondary pull-right" style="cursor:pointer"><i class="fa fa-pencil" aria-hidden="true"></i></button>
      	</form>
      </td>
      <td>
      	<button type="button" fakeid="<?=''?>" class="btn btn-outline-danger deleteUsr pull-right" data-toggle="modal" data-target="#delete_modal"><i class="fa fa-user-times" aria-hidden="true" style="cursor:pointer"></i></button>
      </td>
    </tr>

    <tr>
      <th scope="row">2</th>
      <td>Username2</td>
      <td>00000000-0</td>
      <td>Nombre 2</td>
      <td>Apellido 2</td>
      <td>correo@correo.com</td>
      <td>000000000</td>
      <td></td>
      <td></td>
      <td></td>
      <td>
      	<form method="post" action="<?=site_url('clienteController/editarCliente')?>">
      		<input type="hidden" name="clienteId" value="<?=''?>">
      		<button type="button" class="btn btn-outline-secondary pull-right" style="cursor:pointer"><i class="fa fa-pencil" aria-hidden="true"></i></button>
      	</form>
      </td>
      <td>
      	<button type="button" fakeid="<?=''?>" class="btn btn-outline-danger deleteUsr pull-right" data-toggle="modal" data-target="#delete_modal" style="cursor:pointer"><i class="fa fa-user-times" aria-hidden="true"></i></button>
      </td>
    </tr>
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