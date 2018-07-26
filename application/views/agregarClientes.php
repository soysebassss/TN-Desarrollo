<div class="row justify-content-between">
  <div class="col-sm-3"><br>
    <a href="<?=site_url('Administrador/verClientes')?>">
      <button class="btn btn-outline-primary" style="cursor:pointer"><i class="fa fa-arrow-left"></i> Volver</button>
    </a>
  </div>
  <div class="col-sm-9"><br>
    <h3>Agregar Cliente/a</h3>
  </div>
</div><hr>

<form action="<?=site_url('Administrador/agregarCliente/'.$cliente->get('cli_id'));?>" method="post">
  <div class="form-row">
    <input type="hidden" value="<?=$cliente->get('cli_id')?>" name="cliente[cli_id]">
    <div class="form-group col-md-4">
      <label for="inputNombre">Nombre</label>
      <input type="text" value="<?=$cliente->get('cli_nombre')?>" name="cliente[cli_nombre]"  class="form-control" id="inputNombre" placeholder="Nombre" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="inputApellidos">Apellidos</label>
      <input type="text" value="<?=$cliente->get('cli_apellidos')?>" name="cliente[cli_apellidos]"  class="form-control" id="inputApellidos" placeholder="Apellidos" required="required">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputNombreFantasia">Nombre de Fantasía</label>
      <input type="text" value="<?=$cliente->get('cli_nombreFantasia')?>" name="cliente[cli_nombreFantasia]"  class="form-control" id="inputNombreFantasia" placeholder="Nombre de Fantasía" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="inputCorreo">Correo Electrónico</label>
      <input type="email" value="<?=$cliente->get('cli_correo')?>" name="cliente[cli_correo]"  class="form-control" id="inputCorreo" placeholder="Correo Electrónico" required="required">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-3 col-9">
      <label for="inputRut">RUT</label>
      <input type="text" value="<?=$cliente->get('cli_rut')?>" name="cliente[cli_rut]"  class="form-control" id="inputRut" placeholder="RUT" required="required">
    </div>
    <div class="form-group col-md-1 col-3">
      <label for="inputDv">DV</label>
      <input type="text" value="<?=$cliente->get('cli_dv')?>" name="cliente[cli_dv]"  class="form-control" id="inputDv" placeholder="DV" required="required">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputTelefono">Telefóno</label>
      <input type="text" value="<?=$cliente->get('cli_telefono')?>" name="cliente[cli_telefono]"  class="form-control" id="inputTelefono" placeholder="Telefóno" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="inputDireccion">Dirección</label>
      <input type="text" value="<?=$cliente->get('cli_direccion')?>" name="cliente[cli_direccion]"  class="form-control" id="inputDireccion" placeholder="1234 Main St" required="required">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputGiro">Giro</label>
      <input type="text" value="<?=$cliente->get('cli_giro')?>" name="cliente[cli_giro]"  class="form-control" id="inputGiro" placeholder="Giro" required="required">
    </div>
    <div class="form-group col-md-6">
      <label class="control-label col-md-2" for="selectEstado">Estado</label>
      <select name="cliente[cli_estado]" id="selectEstado" class="form-control">
        <option value="-">Seleccionar Estado</option>
        <option value="0">Activo</option>
        <option value="1">Inactivo</option> 
        <option value="2">Moroso</option>
        <option value="3">Eliminar</option>                    
      </select>
    </div>    
  </div><hr>
  <div class="row justify-content-center">
    <div class="col-md-2 col-5">
      <a href="<?=site_url('Administrador/verClientes')?>">
        <button type="button" class="btn btn-outline-danger" style="cursor:pointer">Cancelar</button>
      </a>
    </div>
    <div class="col-md-5 col-6">
      <button type="submit" class="btn btn-outline-success" style="cursor:pointer">Guardar</button>
    </div>
  </div>
</form>