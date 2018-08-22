 <br>
<form action="<?=site_url('Administrador/principal');?>" method="post">
  <div class="row">
  <div class="col-md-6 col-12" style="text-align: center;">
    <div  class="row" id="clickEnterprise"  style="background: gray; margin-left: 0.1%; margin-right: 0.1%;">
      <div class="col-md-12 col-12" >
        <h3  style="color: white;">Empresa</h3>
      </div>
    </div>
    <br>
    <div id="enterprise" style="margin-left: 1%; margin-right: 1%;">
      <div class="row">
      <div class="col-md-6 col-6" style="text-align: left;">
        <label style="color: black;">Nombre Fantasia</label><br><input type="text" class="form-control nameFantasia" placeholder="Nombre.." name="cliente['cli_nombreFantasia']" required>
        <div class="delayName"></div>
         <input type="text" hidden class="idCliente" name="trabajo[0][tra_cli_id]">
        <!--<input type="button" class="nameFantasia" value="ya" name=""> -->
        <!--<button class="nameFantasia">YA</button>-->
      </div> 
      <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Rut</label><br><input type="text" class="form-control clienteRut" maxlength="12"  placeholder="Rut.." name="cliente['cli_rut']" required>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Razón Social</label><br><input type="text" class="form-control razonSocial"  placeholder="Razón Social.." name="cliente['cli_giro']" required>
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Telefono</label><br><input type="text" class="form-control telefonoCliente"  placeholder="Telefono.." name="cliente['cli_telefono']" required>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-12 col-12" style="text-align: left;">
          <label style="color: black;">Correo Electronico</label><br><input type="email"  class="form-control correoCliente" placeholder="Correo Electronico.." name="cliente['cli_correo']" required>
        </div>
    </div><br>
    </div>
  </div><br>
   <div class="col-md-6 col-12" style="text-align: center;">
    <div  class="row" style="background: gray; margin-left: 0.1%; margin-right: 0.1%;">
      <div class="col-md-12 col-12" >
        <h3 id="clickService"  style="color: white;">Servicios</h3>
      </div>
    </div>
    <br>
    <input type="text"  class="totalTrab" name="totalTrab" hidden>
    <div id="service" style="margin-left: 1%; margin-right: 1%;">
      <div class="row">
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Trabajo</label><br><input type="text"  class="form-control" placeholder="Trabajo a realizar.." name="trabajo[0][tra_nombre]" required>
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Cantidad</label><br><input type="number"  class="form-control cantidad" placeholder="Cantidad.." name="trabajo[0][tra_cantidad]" required>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Valor Unitario</label><br><input type="number" class="form-control valorUnitario" placeholder="Valor Unitario.." name="trabajo[0][tra_precioUnitario]" required>
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Medida</label><br><input type="text"  class="form-control" placeholder="Medida.." name="trabajo[0][tra_medida]" required>
        </div>
    </div><br>
     <div class="row">
      <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Metros Rollo</label><br><input type="number" class="form-control metrosRollo" placeholder="Valor Rollo.." name="trabajo[0][tra_metrosTotalRollo]" required> 
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Valor Rollo</label><br><input type="number" class="form-control valorRollo" placeholder="Metros Rollo.." name="trabajo[0][tra_valorRollo]" required>
        </div>
        <div class="col-md-12 col-12" style="text-align: left;">
          <label style="color: black;">Metros Utilizados</label><br><input type="number"  class="form-control cantidadMetros" placeholder="Cantidad Metros.." name="trabajo[0][tra_metrosLineales]" required>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Total CC</label><br>
          <select class="form-control totalCC" name="trabajo[0][tra_totalTintasCC]" required>
            <option value="0">[SELECCIONE TOTAL CC...]</option>
            <option value="220">220 CC</option>
            <option value="440">440 CC</option>
          </select>
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Valor Tintas</label><br><input type="number"  class="form-control valorTintas" placeholder="Valor Tintas.." name="trabajo[0][tra_valorTintas]" required>
        </div>
        <div class="col-md-12 col-12" style="text-align: left;">
          <label style="color: black;">CC Utilizados  </label><br><input type="number" class="form-control ccTinta" placeholder="CC Utilizados.." name="trabajo[0][tra_ccUtilizados]" required>
        </div>
    </div><br>
    <div class="row">
      <div class="col-md-12 col-12" style="text-align: left;">
          <label style="color: black;">Materia Prima</label><br><input type="text"  class="form-control" placeholder="Materia Prima.." name="trabajo[0][tra_materiaPrima]" required>
        </div>
    </div><br>
    <div class="anotherJob"> 
      
    </div><br>
    <div class="row">
      <div class="col-md-6 col-5">
        <input type="button" id="CalcularDatos" disabled style="width: 100%; text-decoration: none; color: white; cursor:pointer;" class="btn btn-primary"   value="Calcular" name="">
        
      </div>
      <div class="col-md-6 col-7" >
        <input type="button" id="addJob" disabled style="width: 100%; text-decoration: none; color: white; cursor:pointer;" class="btn btn-primary"   value="Añadir trabajo" name="">
         
      </div>
    </div>
    </div>
  </div>
</div><br>
<div class="row" >
  <div class="col-md-6 col-12" style="text-align: center;">
    <div  class="row" style="background: gray; margin-left: 0.1%; margin-right: 0.1%;">
      <div class="col-md-12 col-12"  >
        <h3 id="clickCostosVar"  style="color: white;">Costos Variables</h3>
      </div>
    </div>
    <br>
    <input type="text" class="costosVariablesTotal" name="costosVariablesTotal" hidden>
    <div id="CostosVariables" style="margin-left: 1%; margin-right: 1%;">
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Valor Hora</label><br><input type="number"  class="form-control" id="valorHora" placeholder="Horas Sub-contratación.." name="horasTrabajo[hor_valorHorasSub]" required>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Horas Trabajadas</label><br><input type="number"  class="form-control" id="totalHoras" placeholder="Horas Trabajadas.." name="horasTrabajo[hor_horasTrabajadas]" required>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12">
          <label style="color: black;">Sub-Contratación</label><br><input type="text"  class="form-control cosVar" id="totalSub" placeholder="Total Sub-Contratación.." name=" " readonly required>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Valor Hora</label><br><input type="number"  class="form-control" id="valorHoraHom" placeholder="Valor Hora Hombre.." name="horasTrabajo[hor_valorHoraHombre]" required>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Horas Hombre</label><br><input type="number"  class="form-control getDataVar" id="totalHoraHom" placeholder="Horas Hombre.." name="horasTrabajo[hor_totalHoras]" required>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12">
          <label style="color: black;">Valor Horas Hombre</label><br><input type="text"  class="form-control cosVar" id="totalHomb" placeholder="Total Horas Hombre.." name="" readonly required>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Costo Papel</label><br><input type="text" id="totalPapel"  class="form-control cosVar" placeholder="Costo Papel.." name="costos[cos_papel]" readonly="" required>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Costo Tinta</label><br><input type="text" id="totalTinta"  class="form-control cosVar" placeholder="Costo Tinta.." name="costos[cos_tinta]" readonly="" required>
        </div>
      </div><br>
    </div>
  </div><br>
  <div class="col-md-6 col-12" style="text-align: center;">
    <div  class="row" style="background: gray; margin-left: 0.1%; margin-right: 0.1%;">
      <div class="col" >
        <h3 id="clickCostosFij"  style="color: white;">Otros gastos</h3>
      </div>
    </div>
    <br>
    <input type="text"  class="costosTotalFijo" name="costosTotalFijo" hidden>
    <div id="CostosFijos" style="margin-left: 1%; margin-right: 1%;">
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Gasto-1</label><br><input type="number"  class="form-control costosFijosVal" placeholder="Gasto adicional.. " name="costosFijos[0][cos_arriendo]" >
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Gasto-2</label><br><input type="number"  class="form-control costosFijosVal" placeholder="Gasto adicional.. " name="costosFijos[0][cos_servicio]" >
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Gasto-3</label><br><input type="number"  class="form-control costosFijosVal" placeholder="Gasto adicional.. " name="costosFijos[0][cos_telefono]" >
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Gasto-4</label><br><input type="number"  class="form-control costosFijosVal" placeholder="Gasto adicional.. " name="costosFijos[0][cos_valorDespacho]" >
        </div>
      </div><br>
      <div id="ServicioAdd">
        
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12" style="text-align: right;">
          <input type="button" id="addSer" style="text-decoration: none; color: white; width: 160px; cursor:pointer;" class="btn btn-primary" readonly value="Añadir" name="">
        </div>
      </div><br>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-12" style="text-align: center;">
      <div  class="row" style="background: gray; margin-left: 0.1%; margin-right: 0.1%;">
      <div class="col-md-12 col-12"  >
        <h3 id="clickProveedor"  style="color: white;">Proveedor</h3>
      </div>
    </div>
    <br>
   <input type="text" class="totalProveedor" name="compra[com_valorTotal]" hidden>
    <div id="detProveedor" style="margin-left: 1%; margin-right: 1%;">
      <div class="row">
        <div class="col-md-3 col-6">
          <label style="color: black;">Proveedor</label><br><input type="text"  class="form-control showData nameProveedor" placeholder="Proveedor.." name="proveedor[pro_nombre]" required>
          <div class="delayNameProveedor"></div>
         <input type="text" hidden class="idProveedor" name="proveedor[pro_id]">
        </div>
        <div class="col-md-3 col-6">
          <label style="color: black;">Cod. Producto</label><br><input type="text"  class="form-control" placeholder="Cod. Producto.." name="compra[com_codigoProducto]" required>
        </div>
        <div class="col-md-3 col-6">
          <label style="color: black;">Neto</label><br><input type="number"  class="form-control netoProveedor" placeholder="Neto.." name="compra[com_neto]" required>
        </div>
        <div class="col-md-3 col-6">
          <label style="color: black;">Iva</label><br><input type="number"  class="form-control ivaProveedor" readonly placeholder="Iva.." name="compra[com_iva]" required>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Fac. Proveedor</label><br><input type="text"  class="form-control" placeholder="Fac. Proveedor.." name="compra[com_numeroFactura]" required>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">% Recargo</label><br><input type="number"  class="form-control recargoProveedor" placeholder="% Recargo.." min="0" max="100" name="compra[com_recargo]" required>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12" style="text-align: center;">
          <label style="color: black;">Forma de pago</label>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Forma de pago</label><br><select class="form-control" name="formaPago[for_tipo]" required>
            <option value="0">Transferencia</option>
            <option value="1">Cheque</option>
            <option value="2">Efectivo</option>
          </select>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Abonos</label><br><input type="number"  class="form-control" placeholder="Abonos.." name="formaPago[for_abono]" required>
        </div>
      </div><br>
            <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Fecha Doc.</label><br><input type="date"  class="form-control" placeholder="Fecha Documento.." name="formaPago[for_fecha]" required>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">N° Documento</label><br><input type="text"  class="form-control checklife" placeholder="N° Documento.." name="formaPago[for_numero]" required>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12">
          <label style="color: black;">Banco</label><br><input type="text"  class="form-control  proveedorBanco" placeholder="Banco.." name="proveedor[pro_banco]" required>
        </div>
      </div><br>
      <div class="proveedoresExtras" hidden>
        
      </div>
      <div class="row" hidden>
        <div class="col-md-12 col-12">
          <input type="button" id="addProv" class="btn btn-primary form-control" style="width: 100%; background: #0069d9; text-decoration: none; color: white; cursor:pointer;" value="añadir Prov." name="">
        </div>
      </div><br>
    </div>
  </div>
  <div class="col-md-6 col-12" style="text-align: center;">
    <div  class="row" style="background: gray; margin-left: 0.1%; margin-right: 0.1%;">
      <div class="col-md-12 col-12"  >
        <h3 id="clickFactura"  style="color: white;">Factura</h3>
      </div>
    </div>
    <br>
    <input type="text" hidden class="totalCliente" name="totalCliente">
    <div id="detFactura" style="margin-left: 1%; margin-right: 1%;">
      <div class="row" hidden>
        <div class="col-md-12 col-12" style="text-align: center;">
          <label style="color: black;">Descuentos Cliente</label>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-6" hidden>
          <label style="color: black;">% Recargo</label><br><input type="number"  class="form-control" placeholder="% Recargo.." name="factura[fac_recargo]" value="0" required>
        </div>
        <div class="col-md-6 col-6" hidden>
          <label style="color: black;">% Descuento</label><br><input type="number"  class="form-control" placeholder="% Descuento.." name="factura[fac_descuento]" value="0" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-12" style="text-align: center;">
          <label style="color: black;">Datos Factura</label>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Neto</label><br><input type="number" readonly  class="form-control netoFac" placeholder="Neto.." name="factura[fac_valorNeto]" required>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Iva</label><br><input type="number" class="form-control ivaFac" readonly placeholder="Iva.." name="factura[fac_iva]" required>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Total</label><br><input type="number" readonly  class="form-control totalFac" placeholder="Total.." name="factura[fac_total]" required>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">N° Factura</label><br><input type="text"  class="form-control" placeholder="N° Factura.." name="factura[fac_numero]" required>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12">
          <label style="color: black;">Glosa</label><br><input type="text"  class="form-control" placeholder="Glosa.." name="factura[fac_glosa]" required>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12" style="text-align: center;">
          <label style="color: black;">Forma de pago</label>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Forma de pago</label><br><select class="form-control" name="formaPagoFac[for_tipo]" required>
            <option value="0">Transferencia</option>
            <option value="1">Cheque</option>
            <option value="2">Efectivo</option>
          </select>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Fecha Doc.</label><br><input type="date"  class="form-control" placeholder="Fecha Doc..." name="formaPagoFac[for_fecha]" required>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">N° Documento</label><br><input type="text"  class="form-control" placeholder="N° Documento.." name="formaPagoFac[for_numero]" required>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Banco</label><br><input type="text"  class="form-control" placeholder="Banco.." name="formaPagoFac[for_banco]" required>
        </div>
      </div><br>
    </div>
  </div>
</div>
<button type="submit" class="btn btn-primary " style="cursor:pointer;">Enviar Datos</button>
</form>
 