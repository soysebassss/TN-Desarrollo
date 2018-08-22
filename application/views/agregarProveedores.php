<div class="row justify-content-between">
  <div class="col-sm-3"><br>
    <a href="<?=site_url('Administrador/verProveedores')?>">
      <button class="btn btn-outline-primary" style="cursor:pointer"><i class="fa fa-arrow-left"></i> Volver</button>
    </a>
  </div>
  <div class="col-sm-9"><br>
    <h3>Agregar Proveedor/a</h3>
  </div>
</div><hr>

<form action="<?=site_url('Administrador/agregarProveedor/'.$proveedor->get('pro_id'));?>" method="post">
  <div class="form-row">
    <input type="hidden" value="<?=$proveedor->get('pro_id')?>" name="proveedor[pro_id]">
    <div class="form-group col-md-4">
      <label for="inputNombre">Nombre</label>
      <input type="text" value="<?=$proveedor->get('pro_nombre')?>" name="proveedor[pro_nombre]"  class="form-control" id="inputNombre" placeholder="Nombre" required="required">
    </div>
    <div class="form-group col-md-6">
      <label for="inputApellidos">Apellidos</label>
      <input type="text" value="<?=$proveedor->get('pro_apellidos')?>" name="proveedor[pro_apellidos]"  class="form-control" id="inputApellidos" placeholder="Apellidos" required="required">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-4 col-12">
      <label for="inputRut">RUT</label>
      <input type="text" value="<?=$proveedor->get('pro_rut')?>" name="proveedor[pro_rut]"  class="form-control" id="inputRut" placeholder="RUT"  maxlength="12" required="required">
    </div>
     <div class="form-group col-md-6 col-12">
      <label for="inputDireccion">Direccion</label>
      <input type="text" value="<?=$proveedor->get('pro_direccion')?>" name="proveedor[pro_direccion]"  class="form-control" id="inputTelefono" placeholder="123 Seynt Seya" required="required">
    </div>
    <!--<div class="form-group col-md-1 col-3">
      <label for="inputDv">DV</label>
      <input type="text" value="1" name=" "  class="form-control" id="inputDv" placeholder="DV" >
    </div>-->
  </div>
  <div class="form-row">
   
    <div class="form-group col-md-4 col-12">
      <label for="inputComuna">Comuna</label>
      <input type="text" value="<?=$proveedor->get('pro_comuna')?>" name="proveedor[pro_comuna]"  class="form-control" id="inputDireccion" placeholder="Comuna" required="required">
    </div>
    <div class="form-group col-md-6 col-12">
      <label for="inputBanco">Banco</label>
      <input type="text" value="<?=$proveedor->get('pro_banco')?>" name="proveedor[pro_banco]"  class="form-control" id="inputGiro" placeholder="Banco" required="required">
    </div> 
  </div>
  <hr>
  <div class="row justify-content-center">
    <div class="col-md-2 col-5">
      <a href="<?=site_url('Administrador/verProveedores')?>">
        <button type="button" class="btn btn-outline-danger" style="cursor:pointer">Cancelar</button>
      </a>
    </div>
    <div class="col-md-5 col-6">
      <button type="submit" class="btn btn-outline-success" style="cursor:pointer">Guardar</button>
    </div>
  </div>
</form>