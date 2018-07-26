 <br>
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
        <label style="color: black;">Nombre Fantasia</label><br><input type="text" class="form-control" placeholder="Nombre.." name="">
      </div> 
      <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Rut</label><br><input type="text" class="form-control"  placeholder="Rut.." name="">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Razón Social</label><br><input type="text" class="form-control"  placeholder="Razón Social.." name="">
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Telefono</label><br><input type="text" class="form-control"  placeholder="Telefono.." name="">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-12 col-12" style="text-align: left;">
          <label style="color: black;">Correo Electronico</label><br><input type="email"  class="form-control" placeholder="Correo Electronico.." name="">
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
          <label style="color: black;">Trabajo</label><br><input type="text"  class="form-control" placeholder="Trabajo a realizar.." name="">
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Cantidad</label><br><input type="number" id="cantidad"  class="form-control" placeholder="Cantidad.." name="">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Valor Unitario</label><br><input type="text" id="valorUnitario"  class="form-control" placeholder="Valor Unitario.." name="">
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Medida</label><br><input type="text"  class="form-control" placeholder="Medida.." name="">
        </div>
    </div><br>
     <div class="row">
      <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Metros Rollo</label><br><input type="text" id="metrosRollo"  class="form-control" placeholder="Valor Rollo.." name="">
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Valor Rollo</label><br><input type="text" class="form-control valorRollo" placeholder="Valor Rollo.." name="">
        </div>
        <div class="col-md-12 col-12" style="text-align: left;">
          <label style="color: black;">Metros Utilizados</label><br><input type="text"  class="form-control cantidadMetros" placeholder="Cantidad Metros.." name="">
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Total CC</label><br>
          <select id="totalCC" class="form-control">
            <option value="220">220 CC</option>
            <option value="440">440 CC</option>
          </select>
        </div>
        <div class="col-md-6 col-6" style="text-align: left;">
          <label style="color: black;">Valor Tintas</label><br><input type="text" id="valorTintas"  class="form-control" placeholder="Valor Tintas.." name="">
        </div>
        <div class="col-md-12 col-12" style="text-align: left;">
          <label style="color: black;">CC Utilizados  </label><br><input type="text" id="ccTinta"  class="form-control" placeholder="CC Utilizados.." name="">
        </div>
    </div><br>
    <div class="row">
      <div class="col-md-12 col-12" style="text-align: left;">
          <label style="color: black;">Materia Prima</label><br><input type="text"  class="form-control" placeholder="Materia Prima.." name="">
        </div>
    </div><br>
    <div class="anotherJob"> 
      
    </div><br>
    <div class="row">
      <div class="col">
        
      </div>
      <div class="col">
        
      </div>
      <div class="col" >
        <button id="addJob" style="width: 100%;" class="btn btn-primary">Añadir otro trabajo</button>
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
          <label style="color: black;">Valor Hora</label><br><input type="text"  class="form-control" id="valorHora" placeholder="Horas Sub-contratación.." name="">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Horas Trabajadas</label><br><input type="text"  class="form-control" id="totalHoras" placeholder="Horas Trabajadas.." name="">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12">
          <label style="color: black;">Sub-Contratación</label><br><input type="text"  class="form-control" id="totalSub" placeholder="Total Sub-Contratación.." name="" readonly>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Valor Hora</label><br><input type="text"  class="form-control" id="valorHoraHom" placeholder="Valor Hora Hombre.." name="">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Horas Hombre</label><br><input type="text"  class="form-control" id="totalHoraHom" placeholder="Horas Hombre.." name="">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12">
          <label style="color: black;">Valor Horas Hombre</label><br><input type="text"  class="form-control" id="totalHomb" placeholder="Total Horas Hombre.." name="" readonly>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Costo Papel</label><br><input type="text" id="totalPapel"  class="form-control" placeholder="Costo Papel.." name="" readonly="">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Costo Tinta</label><br><input type="text" id="totalTinta"  class="form-control" placeholder="Costo Tinta.." name="" readonly="">
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
          <label style="color: black;">Arriendo</label><br><input type="text"  class="form-control" placeholder="Arriendo.." name="">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Servicios Basicos</label><br><input type="text"  class="form-control" placeholder="Servicios Basicos.." name="">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Telefono</label><br><input type="text"  class="form-control" placeholder="Telefono.." name="">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Valor Despacho</label><br><input type="text"  class="form-control" placeholder="Valor Despacho.." name="">
        </div>
      </div><br>
      <div id="ServicioAdd">
        
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12" style="text-align: right;">
          <button id="addSer" class="btn btn-primary">Añadir</button>
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
          <label style="color: black;">Proveedor</label><br><input type="text"  class="form-control" placeholder="Proveedor.." name="">
        </div>
        <div class="col-md-3 col-6">
          <label style="color: black;">Cod. Producto</label><br><input type="text"  class="form-control" placeholder="Cod. Producto.." name="">
        </div>
        <div class="col-md-3 col-6">
          <label style="color: black;">Neto</label><br><input type="text"  class="form-control" placeholder="Neto.." name="">
        </div>
        <div class="col-md-3 col-6">
          <label style="color: black;">Iva</label><br><input type="text"  class="form-control" placeholder="Iva.." name="">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Fac. Proveedor</label><br><input type="text"  class="form-control" placeholder="Fac. Proveedor.." name="">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">% Recargo</label><br><input type="text"  class="form-control" placeholder="% Recargo.." name="">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12" style="text-align: center;">
          <label style="color: black;">Forma de pago</label>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Forma de pago</label><br><select class="form-control">
            <option value="0">Transferencia</option>
            <option value="1">Cheque</option>
            <option value="2">Efectivo</option>
          </select>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Abonos</label><br><input type="text"  class="form-control" placeholder="Abonos.." name="">
        </div>
      </div><br>
            <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Fecha Doc.</label><br><input type="text"  class="form-control" placeholder="Fecha Documento.." name="">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">N° Documento</label><br><input type="text"  class="form-control" placeholder="N° Documento.." name="">
        </div>
      </div><br>
            <div class="row">
        <div class="col-md-12 col-12">
          <label style="color: black;">Banco</label><br><input type="text"  class="form-control" placeholder="Banco.." name="">
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
          <label style="color: black;">% Recargo</label><br><input type="text"  class="form-control" placeholder="% Recargo.." name="">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">% Descuento</label><br><input type="text"  class="form-control" placeholder="% Descuento.." name="">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12" style="text-align: center;">
          <label style="color: black;">Datos Factura</label>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Neto</label><br><input type="text"  class="form-control" placeholder="Neto.." name="">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Iva</label><br><input type="text"  class="form-control" placeholder="Iva.." name="">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Total</label><br><input type="text"  class="form-control" placeholder="Total.." name="">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">N° Factura</label><br><input type="text"  class="form-control" placeholder="N° Factura.." name="">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12">
          <label style="color: black;">Glosa</label><br><input type="text"  class="form-control" placeholder="Glosa.." name="">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-12 col-12" style="text-align: center;">
          <label style="color: black;">Forma de pago</label>
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">Forma de pago</label><br><select class="form-control">
            <option value="0">Transferencia</option>
            <option value="1">Cheque</option>
            <option value="2">Efectivo</option>
          </select>
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Fecha Doc.</label><br><input type="text"  class="form-control" placeholder="Fecha Doc..." name="">
        </div>
      </div><br>
      <div class="row">
        <div class="col-md-6 col-6">
          <label style="color: black;">N° Documento</label><br><input type="text"  class="form-control" placeholder="N° Documento.." name="">
        </div>
        <div class="col-md-6 col-6">
          <label style="color: black;">Banco</label><br><input type="text"  class="form-control" placeholder="Banco.." name="">
        </div>
      </div><br>
    </div>
  </div>
</div>
 