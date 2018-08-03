<div class="row justify-content-between">
	<div class="col-sm-3"><br>
		<!--Buscador-->
		<div class="input-group mb-2">
  		<span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
  		<input id="filtrar" type="text" class="form-control">
		</div>
	</div>
	<div class="col sm-3 offset-sm-6"><br>
    <form method="post" action="<?=site_url('Administrador/trabajosCliente');?>">
    <div class="row">
      <div class="col sm 6">
        <?php foreach($dataClientes as $key => $clientes){
          $clientes = $clientes->toArray();
          $cliente = $clientes['_columns'];
          ?>
      <select name="idCliente" class="form-control">
          <option value='<?php echo $cliente['cli_id'] ;?>'><?php echo $cliente['cli_nombre'];?></option>
        <?php }?>
      </select>       
      </div>
      <div class="col sm 1">
      <input type="submit" class="btn btn-success" value="Buscar">     
    </form> 
      </div>
    </div>
		</a>
	</div>
</div>

<!--Tabla con los clientes-->
<table class="table table-bordered table-responsive" style="color:black;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descripción</th>
      <th scope="col">Cantidad</th>
      <th scope="col">Metros Utilizados</th>
      <th scope="col">Tinta Utilizada</th>
      <th scope="col">Valor Unitario</th>
      <th scope="col">Medidas</th>
      <!--<th scope="col">Editar</th>-->
    </tr>
  </thead>
  <tbody class="buscar">
    <?php if(isset($dataTrabajos)):
      foreach ($dataTrabajos as $key => $trabajos) {
        $trabajos = $trabajos->toArray();
        $trabajo = $trabajos['_columns'];
      ?>      
    <tr>
      <th scope="row"><?php echo $trabajo['tra_id'];?></th>
      <td><?php echo $trabajo['tra_nombre'];?></td>
      <td><?php echo $trabajo['tra_cantidad'].' Unidades';?></td>
      <td><?php echo $trabajo['tra_metrosLineales'].' Mts';?></td>
      <td><?php echo $trabajo['tra_ccUtilizados'].'cc';?></td>
      <td><?php echo '$ '.$trabajo['tra_precioUnitario'];?></td>
      <td><?php echo $trabajo['tra_medida'];?></td>
      <!-- <td>
          <a href="<?=site_url('Administrador/detallesTrabajo/'.$trabajo['tra_id'])?>" type="submit" class="btn btn-outline-secondary pull-right" style="cursor:pointer"><i class="fa fa-pencil" aria-hidden="true"></i></a>
      </td> -->
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
</script>