<div class="row justify-content-between">
	<div class="col-sm-3"><br>
		<!--Buscador-->
		<div class="input-group mb-2">
  		<span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
  		<input id="filtrar" type="text" class="form-control">
		</div>
	</div>
	<div class="col sm-3 offset-sm-6"><br>
		<a href="<?=site_url('Administrador/agregarProveedor')?>">
			<button class="btn btn-outline-primary pull-right" style="cursor:pointer"><i class="fa fa-plus"></i> Agregar Proveedor/a </button>
		</a>
	</div>
</div>

<!--Tabla con los clientes-->
<table class="table table-bordered table-responsive" style="color:black;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">RUT</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Dirección</th>
      <th scope="col">Comuna</th>
      <th scope="col">Banco</th>
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody class="buscar">
    <?php if(isset($dataProveedores)):
      foreach ($dataProveedores as $key => $proveedores) {
        $proveedores = $proveedores->toArray();
        $proveedor = $proveedores['_columns'];
      ?>      
    <tr>
      <th scope="row"><?php echo $proveedor['pro_id'];?></th>
      <td><?php echo $proveedor['pro_rut'];?></td>
      <td><?php echo $proveedor['pro_nombre'];?></td>
      <td><?php echo $proveedor['pro_apellidos'];?></td>
      <td><?php echo $proveedor['pro_direccion'];?></td>
      <td><?php echo $proveedor['pro_comuna'];?></td>
      <td><?php echo $proveedor['pro_banco'];?></td>
      <td>
          <a href="<?=site_url('Administrador/agregarProveedor/'.$proveedor['pro_id'])?>" type="submit" class="btn btn-outline-secondary pull-right" style="cursor:pointer"><i class="fa fa-pencil" aria-hidden="true"></i></a>
      </td>
    </tr>
    <?php }?>
    <?php endif;?>
 </tbody>
</table>

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