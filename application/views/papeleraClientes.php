<div class="row justify-content-start">
	<div class="col-sm-3"><br>
		<!--Buscador-->
		<div class="input-group mb-2">
  		<span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
  		<input id="filtrar" type="text" class="form-control">
		</div>
	</div>
  <div class="col-sm-5 text-center"><br>
    <h3>Papelera de Clientes</h3>
  </div>
	 
    <div class="row">
      <div class="col-md-6 col-6">
      <a href="<?=site_url('Administrador/verClientes')?>">
      <button class="btn btn-outline-primary pull-left" style="cursor:pointer"><i class="fa fa-arrow-left"></i> Volver </button>
      </a>
      </div>
      <div class="col-md-6 col-6">
      <a href="<?=site_url('Administrador/agregarCliente')?>">
      <button class="btn btn-outline-primary pull-right" style="cursor:pointer"><i class="fa fa-plus"></i> Agregar Cliente/a </button>
      </a>
      </div>
    </div><br>
 
</div>

<!--== Papelera de Clientes ==-->
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
      <th scope="col">Recuperar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody class="buscar">
    <?php if(isset($dataClientes)):
      foreach ($dataClientes as $key => $clientes) {
        $clientes = $clientes->toArray();
        $cliente = $clientes['_columns'];
        if ($cliente['cli_estado'] == 3):
      ?>      
    <tr>
      <th scope="row"><?php echo $cliente['cli_id'];?></th>
      <td><?php echo $cliente['cli_nombreFantasia'];?></td>
      <td><?php echo $cliente['cli_rut']?></td>
      <td><?php echo $cliente['cli_nombre'];?></td>
      <td><?php echo $cliente['cli_apellidos'];?></td>
      <td><?php echo $cliente['cli_correo'];?></td>
      <td><?php echo $cliente['cli_telefono'];?></td>
      <td><?php echo $cliente['cli_direccion'];?></td>
      <td><?php echo $cliente['cli_giro'];?></td>
      <td>
        <a href="<?=site_url('Administrador/recuperarCliente/'.$cliente['cli_id'])?>" type="submit" class="btn btn-outline-success pull-right" style="cursor:pointer"><i class="fa fa-check" aria-hidden="true"></i></a>
      </td>
      <td>
        <a href="<?=site_url('Administrador/eliminarCliente/'.$cliente['cli_id'])?>" type="submit" class="btn btn-outline-danger pull-right" style="cursor:pointer"><i class="fa fa-trash" aria-hidden="true"></i></a>
      </td>
    </tr>
    <?php endif;?>
    <?php }?>
    <?php endif;?>
  </tbody>
</table><hr>

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

/* Buscador de clientes morosos */
$(document).ready(function () {
  (function ($) {
    $('#filtrarmorosos').keyup(function () { 
      var rex = new RegExp($(this).val(), 'i');
      $('.buscarmorosos tr').hide();
      $('.buscarmorosos tr').filter(function () {
        return rex.test($(this).text());
      }).show(); 
    }) 
  }(jQuery)); 
});
/* Fin Buscador de clientes morosos */

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