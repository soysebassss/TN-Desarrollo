<!-- HOLAAAA-->
<div id="content">
<div class="container">
<div class="row">
<div class="content-wrapper">
<div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Principal</a>
        </li>
        <li class="breadcrumb-item active">Clientes</li>
      </ol>
      <!-- Example DataTables Card-->
      <!-- Estoy usando esta tabla para ordenar el listado de contratos-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Clientes</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellido Paterno</th>
                  <th>Apellido Materno</th>
                  <th>Rut</th>
                  <th>Nombre fantasia</th>
                  <th>Dirección</th>
                  <th>Telefono</th>
                  <th>Email</th>
                  <th>Giro</th>
                  <th>Actualizar datos</th>
                </tr>
              </thead>              
              <tbody>
                <?php
                  $this->load->model('Client_model');
                  $clientes = $this->Client_model->findAll();
                  foreach ($clientes as $key => $clientes) {
                    $cliente = $clientes->toArray();
                    $datosCliente = $cliente['_columns'];
                    echo "<tr>";
                    echo "<td>".$datosCliente['cli_nombre']."</td>";
                    echo "<td>".$datosCliente['cli_apellidoPaterno']."</td>";
                    echo "<td>".$datosCliente['cli_apellidoMaterno']."</td>";
                    echo "<td>".$datosCliente['cli_rut']."-".$datosCliente['cli_dv']."</td>";
                    echo "<td>".$datosCliente['cli_nombrefantasia']."</td>";
                    echo "<td>".$datosCliente['cli_direccion']."</td>";
                    echo "<td>".$datosCliente['cli_telefono']."</td>";
                    echo "<td>".$datosCliente['cli_email']."</td>";
                    echo "<td>".$datosCliente['cli_giro']."</td>";
                    echo "<td><button type='submit' value='".$datosCliente['cli_id']."' href='".site_url('Registro/actualizarDatos')."'>Boton</td>";
                  }       
                ?>
              </tbody>
            </table>            
          </div>
        </div>
        <div class="card-footer small text-muted"> </div>
      </div>
    </div>  
</div>
</div>
</div>
</div>