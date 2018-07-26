 <br>
<form action="mostrar.php" method="post">
  <div class="row" >
  <div class="col-md-6 col-12" style="text-align: center;">
    <div  class="row"  style="background: gray; margin-left: 0.1%; margin-right: 0.1%;">
      <div class="col-md-12 col-12" >
        <h3 id="clickEnterprise" style="color: white;">Empresa</h3>
      </div>
    </div>
    <br>
    <div id="enterprise" style="margin-left: 1%; margin-right: 1%;">
      <div class="row">
      <div class="col-md-6 col-6" style="text-align: left;">
        <label style="color: black;">Nombre Fantasia</label><br><input type="text" class="form-control" placeholder="Nombre.." name="cliente['cli_nombreFantasia']">
      </div> 
      <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Rut</label><br><input type="text" class="form-control"  placeholder="Rut.." name="cliente['cli_rut']">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Razón Social</label><br><input type="text" class="form-control"  placeholder="Razón Social.." name="cliente['cli_giro']">
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Telefono</label><br><input type="text" class="form-control"  placeholder="Telefono.." name="cliente['cli_telefono']">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-12 col-12" style="text-align: left;">
          <label style="color: black;">Correo Electronico</label><br><input type="email"  class="form-control" placeholder="Correo Electronico.." name="cliente['cli_correo']">
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
    <div id="service" style="margin-left: 1%; margin-right: 1%;">
      <div class="row">
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Trabajo</label><br><input type="text"  class="form-control" placeholder="Trabajo a realizar.." name="trabajo[0]['tra_nombre']">
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Cantidad</label><br><input type="number" id="cantidad"  class="form-control" placeholder="Cantidad.." name="trabajo[0][tra_cantidad]">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Valor Unitario</label><br><input type="text" id="valorUnitario"  class="form-control" placeholder="Valor Unitario.." name="trabajo[0][tra_precioUnitario]">
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Medida</label><br><input type="text"  class="form-control" placeholder="Medida.." name="trabajo[0]['tra_medida']">
        </div>
    </div><br>
     <div class="row">
      <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Metros Rollo</label><br><input type="text" class="form-control metrosRollo" placeholder="Valor Rollo.." name="trabajo[0][tra_metrosTotalRollo]"> 
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Valor Rollo</label><br><input type="text" class="form-control valorRollo" placeholder="Metros Rollo.." name="trabajo[0]['tra_valorRollo']">
        </div>
        <div class="col-md-12 col-12" style="text-align: left;">
          <label style="color: black;">Metros Utilizados</label><br><input type="text"  class="form-control cantidadMetros" placeholder="Cantidad Metros.." name="trabajo[0]['tra_metrosLineales']">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Total CC</label><br>
          <select class="form-control totalCC" name="trabajo[0][tra_totalTintaCC]">
            <option value="220">220 CC</option>
            <option value="440">440 CC</option>
          </select>
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Valor Tintas</label><br><input type="text"  class="form-control valorTintas" placeholder="Valor Tintas.." name="trabajo[0][tra_valorTintas]">
        </div>
        <div class="col-md-12 col-12" style="text-align: left;">
          <label style="color: black;">CC Utilizados  </label><br><input type="text" class="form-control ccTinta" placeholder="CC Utilizados.." name="trabajo[0][tra_ccUtilizados]">
        </div>
    </div><br>
    <div class="row">
      <div class="col-md-12 col-12" style="text-align: left;">
          <label style="color: black;">Materia Prima</label><br><input type="text"  class="form-control" placeholder="Materia Prima.." name="trabajo[0]['tra_materiaPrima']">
        </div>
    </div><br>
    <div class="anotherJob"> 
      
    </div><br>
    <div class="row">
      <div class="col-md-6 col-5">
        <input type="button" id="CalcularDatos" style="width: 100%; text-decoration: none; color: white; cursor:pointer;" class="btn btn-primary" disabled value="Calcular" name="">
        
      </div>
      <div class="col-md-6 col-7" >
        <input type="button" id="addJob" style="width: 100%; text-decoration: none; color: white; cursor:pointer;" class="btn btn-primary" disabled value="Añadir trabajo" name="">
         
      </div>
    </div>
    </div>
  </div>
</div><br>
<div class="row" >
  <div class="col-md-6 col-12" style="text-align: center;">
    <div  class="row" style="background: gray; margin-left: 0.1%; margin-right: 0.1%;">
      <div class="col-md-12 col-12"  >
        <h3 id="clickService"  style="color: white;">Costos Variables</h3>
      </div>
    </div>
    <br>
    <div id="CostosVariables" style="margin-left: 1%; margin-right: 1%;">
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Valor Hora</label><br><input type="text"  class="form-control" id="valorHora" placeholder="Horas Sub-contratación.." name="horas['hor_valorHorasSub']">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Horas Trabajadas</label><br><input type="text"  class="form-control" id="totalHoras" placeholder="Horas Trabajadas.." name="horas['hor_horasTrabajadas']">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12">
          <label style="color: black;">Sub-Contratación</label><br><input type="text"  class="form-control" id="totalSub" placeholder="Total Sub-Contratación.." name="horas[hor_totalHorasSub]" readonly>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Valor Hora</label><br><input type="text"  class="form-control" id="valorHoraHom" placeholder="Valor Hora Hombre.." name="horas['hor_valorHorasHombre']">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Horas Hombre</label><br><input type="text"  class="form-control" id="totalHoraHom" placeholder="Horas Hombre.." name="horas[hor_horasTrabajadasHomb]">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12">
          <label style="color: black;">Valor Horas Hombre</label><br><input type="text"  class="form-control" id="totalHomb" placeholder="Total Horas Hombre.." name="horas[hor_totalHorasHomb]" readonly>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Costo Papel</label><br><input type="text" id="totalPapel"  class="form-control" placeholder="Costo Papel.." name="costos[cos_papel]" readonly="">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Costo Tinta</label><br><input type="text" id="totalTinta"  class="form-control" placeholder="Costo Tinta.." name="costos[cos_tinta]" readonly="">
        </div>
      </div><br>
    </div>
  </div><br>
  <div class="col-md-6 col-12" style="text-align: center;">
    <div  class="row" style="background: gray; margin-left: 0.1%; margin-right: 0.1%;">
      <div class="col" >
        <h3 id="clickService"  style="color: white;">Costos Fijos</h3>
      </div>
    </div>
    <br>
    <div id="CostosFijos" style="margin-left: 1%; margin-right: 1%;">
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Arriendo</label><br><input type="text"  class="form-control" placeholder="Arriendo.." name="costosFijos[0[cos_arriendo]">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Servicios Basicos</label><br><input type="text"  class="form-control" placeholder="Servicios Basicos.." name="costosFijos[0[cos_servicio]">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Telefono</label><br><input type="text"  class="form-control" placeholder="Telefono.." name="costosFijos[0[cos_telefono]">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Valor Despacho</label><br><input type="text"  class="form-control" placeholder="Valor Despacho.." name="costosFijos[0[cos_valorDespacho]">
        </div>
      </div><br>
      <div id="ServicioAdd">
        
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12" style="text-align: right;">
          <input type="button " id="addSer" style="text-decoration: none; color: white; width: 160px; cursor:pointer;" class="btn btn-primary" value="Añadir" name="">
        </div>
      </div><br>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-12" style="text-align: center;">
      <div  class="row" style="background: gray; margin-left: 0.1%; margin-right: 0.1%;">
      <div class="col-md-12 col-12"  >
        <h3 id="clickService"  style="color: white;">Proveedor</h3>
      </div>
    </div>
    <br>
    <div id="detProveedor" style="margin-left: 1%; margin-right: 1%;">
      <div class="row">
        <div class="col-md-3 col-6">
          <label style="color: black;">Proveedor</label><br><input type="text"  class="form-control" placeholder="Proveedor.." name="proveedor['pro_nombre']">
        </div>
        <div class="col-md-3 col-6">
          <label style="color: black;">Cod. Producto</label><br><input type="text"  class="form-control" placeholder="Cod. Producto.." name="compra['com_codigoProducto']">
        </div>
        <div class="col-md-3 col-6">
          <label style="color: black;">Neto</label><br><input type="text"  class="form-control" placeholder="Neto.." name="compra['com_neto']">
        </div>
        <div class="col-md-3 col-6">
          <label style="color: black;">Iva</label><br><input type="text"  class="form-control" placeholder="Iva.." name="compra['com_iva']">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Fac. Proveedor</label><br><input type="text"  class="form-control" placeholder="Fac. Proveedor.." name="compra['com_numeroFactura']">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">% Recargo</label><br><input type="text"  class="form-control" placeholder="% Recargo.." name="compra['com_recargo']">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12" style="text-align: center;">
          <label style="color: black;">Forma de pago</label>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Forma de pago</label><br><select class="form-control" name="formaPago['for_tipo']">
            <option value="0">Transferencia</option>
            <option value="1">Cheque</option>
            <option value="2">Efectivo</option>
          </select>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Abonos</label><br><input type="text"  class="form-control" placeholder="Abonos.." name="formaPago['for_abono']">
        </div>
      </div><br>
            <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Fecha Doc.</label><br><input type="text"  class="form-control" placeholder="Fecha Documento.." name="formaPago['for_fecha']">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">N° Documento</label><br><input type="text"  class="form-control" placeholder="N° Documento.." name="formaPago['for_numero']">
        </div>
      </div><br>
            <div class="row">
        <div class="col-md-12 col-12">
          <label style="color: black;">Banco</label><br><input type="text"  class="form-control" placeholder="Banco.." name="proveedor['pro_banco']">
        </div>
      </div><br>
    </div>
  </div>
  <div class="col-md-6 col-12" style="text-align: center;">
    <div  class="row" style="background: gray; margin-left: 0.1%; margin-right: 0.1%;">
      <div class="col-md-12 col-12"  >
        <h3 id="clickService"  style="color: white;">Factura</h3>
      </div>
    </div>
    <br>
    <div id="detFactura" style="margin-left: 1%; margin-right: 1%;">
      <div class="row">
        <div class="col-md-12 col-12" style="text-align: center;">
          <label style="color: black;">Descuentos Cliente</label>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">% Recargo</label><br><input type="text"  class="form-control" placeholder="% Recargo.." name="factura['fac_recargo']">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">% Descuento</label><br><input type="text"  class="form-control" placeholder="% Descuento.." name="factura['fac_descuento']">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12" style="text-align: center;">
          <label style="color: black;">Datos Factura</label>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Neto</label><br><input type="text"  class="form-control" placeholder="Neto.." name="factura['fac_valorNeto']">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Iva</label><br><input type="text"  class="form-control" placeholder="Iva.." name="factura['fac_iva']">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Total</label><br><input type="text"  class="form-control" placeholder="Total.." name="factura['fac_total']">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">N° Factura</label><br><input type="text"  class="form-control" placeholder="N° Factura.." name="factura['fac_numFactura']">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12">
          <label style="color: black;">Glosa</label><br><input type="text"  class="form-control" placeholder="Glosa.." name="factura['fac_glosa']">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12" style="text-align: center;">
          <label style="color: black;">Forma de pago</label>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Forma de pago</label><br><select class="form-control" name="formaPagoFac['for_tipo']">
            <option value="0">Transferencia</option>
            <option value="1">Cheque</option>
            <option value="2">Efectivo</option>
          </select>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Fecha Doc.</label><br><input type="text"  class="form-control" placeholder="Fecha Doc..." name="formaPagoFac['for_fecha']">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">N° Documento</label><br><input type="text"  class="form-control" placeholder="N° Documento.." name="formaPagoFac['for_numero']">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Banco</label><br><input type="text"  class="form-control" placeholder="Banco.." name="formaPagoFac['for_banco']">
        </div>
      </div><br>
    </div>
  </div>
</div>
<button type="submit" class="btn btn-primary" style="cursor:pointer;">Enviar Datos</button>
</form>
 