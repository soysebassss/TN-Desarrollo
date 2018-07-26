<div class="row justify-content-start">
	<div class="col-sm-3"><br>
		<!--Buscador-->
		<div class="input-group mb-2">
  		<span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
  		<input id="filtrar" type="text" class="form-control">
		</div>
	</div>
  <div class="col-sm-5 text-center"><br>
    <h3>Tabla Clientes</h3>
  </div>
	<div class="col-sm-4"><br>
    <div class="row">
      <div class="col-md-6">
      <a href="<?=site_url('Administrador/papeleraClientes')?>">
      <button class="btn btn-outline-primary pull-left" style="cursor:pointer"><i class="fa fa-plus"></i> Papelera </button>
      </a>
      </div>
      <div class="col-md-6">
      <a href="<?=site_url('Administrador/agregarCliente')?>">
      <button class="btn btn-outline-primary pull-right" style="cursor:pointer"><i class="fa fa-plus"></i> Agregar Cliente/a </button>
      </a>
      </div>
    </div>
	</div>
</div>

<!--== Tabla Clientes ==-->
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
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody class="buscar">
    <?php if(isset($dataClientes)):
      foreach ($dataClientes as $key => $clientes) {
        $clientes = $clientes->toArray();
        $cliente = $clientes['_columns'];
        if ($cliente['cli_estado'] == 1 || $cliente['cli_estado'] == 0):
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
      <td><?php switch ($cliente['cli_estado']) {
        case 0:
            echo 'Activo';      
          break;
        case 1:
            echo 'Inactivo';
          break;          
        case 2:
            echo 'Moroso';
          break;        
        default:
            echo 'Eliminado';
          break;
      }?>
      </td>
      <td>
        <a href="<?=site_url('Administrador/agregarCliente/'.$cliente['cli_id'])?>" type="submit" class="btn btn-outline-secondary pull-right" style="cursor:pointer"><i class="fa fa-pencil" aria-hidden="true"></i></a>
      </td>
    </tr>
    <?php endif;?>
    <?php }?>
    <?php endif;?>
  </tbody>
</table><hr>
<!--== Tabla Clientes Morosos ==-->
<div class="row justify-content-start">
  <div class="col-sm-3"><br>
    <!--Buscador-->
    <div class="input-group mb-2">
      <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
      <input id="filtrarmorosos" type="text" class="form-control">
    </div>
  </div>
  <div class="col-sm-6 text-center"><br>
    <h3>Tabla Clientes Morosos</h3>
  </div>
</div>
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
      <th scope="col">Estado</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody class="buscarmorosos">
    <?php if(isset($dataClientes)):
      foreach ($dataClientes as $key => $clientes) {
        $clientes = $clientes->toArray();
        $cliente = $clientes['_columns'];
        if ($cliente['cli_estado'] == 2):   
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
      <td><?php switch ($cliente['cli_estado']) {
        case 0:
            echo 'Activo';      
          break;
        case 1:
            echo 'Inactivo';
          break;          
        case 2:
            echo 'Moroso';
          break;        
        default:
            echo 'Eliminado';
          break;
      }?>
      </td>
      <td>
        <a href="<?=site_url('Administrador/agregarCliente/'.$cliente['cli_id'])?>" type="submit" class="btn btn-outline-secondary pull-right" style="cursor:pointer"><i class="fa fa-pencil" aria-hidden="true"></i></a>
      </td>
    </tr>
    <?php endif;?>
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