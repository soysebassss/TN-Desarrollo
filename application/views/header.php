<!DOCTYPE html>
<html lang="en">
<head>
<title>Sublime</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= base_url('resources/styles/css/bootstrap4/bootstrap.min.css')?>">
<link href="<?=base_url('resources/plugins/font-awesome-4.7.0/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/plugins/OwlCarousel2-2.2.1/owl.carousel.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/plugins/OwlCarousel2-2.2.1/animate.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/styles/css/main_styles.css')?>">
<link rel="stylesheet" type="text/css" href="<?=base_url('resources/styles/css/responsive.css')?>">.<script src="<?=base_url('resources/js/jquery-3.2.1.min.js')?>"></script>
<script src="<?=base_url('resources/styles/css/bootstrap4/popper.js')?>"></script>
<script src="<?=base_url('resources/styles/css/bootstrap4/bootstrap.min.js')?>"></script>
<script src="<?=base_url('resources/plugins/greensock/TweenMax.min.js')?>"></script>
<script src="<?=base_url('resources/plugins/greensock/TimelineMax.min.js')?>"></script>
<script src="<?=base_url('resources/plugins/scrollmagic/ScrollMagic.min.js')?>"></script>
<script src="<?=base_url('resources/plugins/greensock/animation.gsap.min.js')?>"></script>
<script src="<?=base_url('resources/plugins/greensock/ScrollToPlugin.min.js')?>"></script>
<script src="<?=base_url('resources/plugins/OwlCarousel2-2.2.1/owl.carousel.js')?>"></script>
<script src="<?=base_url('resources/plugins/Isotope/isotope.pkgd.min.js')?>"></script>
<script src="<?=base_url('resources/plugins/easing/easing.js')?>"></script>
<script src="<?=base_url('resources/plugins/parallax-js-master/parallax.min.js')?>"></script>
<script src="<?=base_url('resources/js/custom.js')?>"></script>
<script type="text/javascript">
  
  $(document).ready(function(){
    $("#verClientes").click(function(){
      $.ajax({
                url: "<?=site_url('Administrador/detallesCliente')?>",
                type: "POST",
                dataType: "text",
                data:{"nombre" : 'Seloco'},
                beforeSend:function(){
                  
                },
                success: function(data) {
                    alert(data);
                    //console.log(data);  
                },complete:function(){
                  
                }
            });
    });

    var total =0;
    var pruebaC = 0;
    var pruebaT = 0;
    var metrosRollo = 0; 
    var valorRollo = 0;
    var cantidadMetros = 0;
    var resultado = 0;
    var cont = 0;
    var totalCC = 0;
    var valorTintas = 0;
    var utilizados = 0;
    var total = 0;
    var tra = 0;
    var cantidadTrabajo = 0;
    var valorUnitario=0;
    var totalTrabajo=0;
    var costosFijosValor = 0;
    var netoProveedor = 0;
    var ivaProveedor = 0;
    var totalProveedor=  0;
    var recargoProv = 0;
    var totalFinal = 0;
    var totalCosVar = 0 ;
    var stringCor = "";
    var newString = "";
    $("#addJob").click(function(){
      //alert("Alerta");
      cont = cont+1;
      $(".anotherJob").append('<div class="row"><div class="col" style="text-align: left; color: #ED1919;" id="DeleteJob" tripa='+cont+'>'+cont+') </div></div><div class="delete-'+cont+'"><div class="row"><div class="col-md-6 col-6" style="text-align: left;"><label style="color: black;">Trabajo</label><br><input type="text"  class="form-control" placeholder="Trabajo a realizar.." name="trabajo['+cont+'][tra_nombre]" required></div><div class="col-md-6 col-6" style="text-align: left;"><label style="color: black;">Cantidad</label><br><input type="number" class="form-control cantidad" placeholder="Cantidad.." name="trabajo['+cont+'][tra_cantidad]" required></div></div><br><div class="row"><div class="col-md-6 col-6" style="text-align: left;"><label style="color: black;">Valor Unitario</label><br><input type="number" class="form-control valorUnitario" placeholder="Valor Unitario.." name="trabajo['+cont+'][tra_precioUnitario]" required></div><div class="col-md-6 col-6" style="text-align: left;"><label style="color: black;">Medida</label><br><input type="text"  class="form-control" placeholder="Medida.." name="trabajo['+cont+'][tra_medida]" required></div></div><br><div class="row"><div class="col-md-6 col-6" style="text-align: left;"><label style="color: black;">Metros Rollo</label><br><input type="number" class="form-control metrosRollo" placeholder="Metros Rollo.." name="trabajo['+cont+'][tra_metrosTotalRollo]" required></div><div class="col-md-6 col-6" style="text-align: left;"><label style="color: black;">Valor Rollo</label><br><input type="number"  class="form-control valorRollo" placeholder="Valor Rollo.." name="trabajo['+cont+'][tra_valorRollo]" required></div><div class="col-md-12 col-12" style="text-align: left;"><label style="color: black;">Metros Utilizados</label><br><input type="number"  class="form-control cantidadMetros" placeholder="Cantidad Metros.." name="trabajo['+cont+'][tra_metrosLineales]" required></div></div><br><div class="row"><div class="col-md-6 col-6" style="text-align: left;"><label style="color: black;">Total CC</label><br><select class="form-control totalCC" name="trabajo['+cont+'][tra_totalTintaCC]" required><option value="0">[SELECCIONE TOTAL CC...]</option><option value="220">220 CC</option><option value="440">440 CC</option></select></div><div class="col-md-6 col-6" style="text-align: left;"><label style="color: black;">Valor Tintas</label><br><input type="number"  class="form-control valorTintas" placeholder="Valor Tintas.." name="trabajo['+cont+'][tra_valorTintas]" required></div><div class="col-md-12 col-12" style="text-align: left;"><label style="color: black;">CC Utilizados  </label><br><input type="number" class="form-control ccTinta" placeholder="CC Utilizados.." name="trabajo['+cont+'][tra_ccUtilizados]" required></div></div><br><div class="row"><div class="col-md-12 col-12" style="text-align: left;"><label style="color: black;">Materia Prima</label><br><input type="text"  class="form-control" placeholder="Materia Prima.." name="trabajo['+cont+'][tra_materiaPrima]" required></div></div><br></div>');
      $("#addJob").attr('disabled','true');

    });

    var contador = 4;
    $("#addSer").click(function(){
     // alert("Juan");
      contador = contador+1;
      $("#ServicioAdd").append('<div class="row"><div class="col" style="text-align: left; color: #ED1919;" id="DeleteSer" trip='+contador+'>'+contador+')</div></div><div class="del-'+contador+'"><div class="row "><div class="col"><label style="color: black;">Nuevo-'+contador+'</label><br><input type="number"  class="form-control costosFijosVal" placeholder=Nuevo-'+contador+'... name="costosFijos['+contador+'][cos_otherCos]" required></div></div><br></div>')
    });
    $(document).on('click','#DeleteJob',function(){
      $(this).remove();
      $(".delete-"+$(this).attr('tripa')).remove();
    });
    $(document).on('click','#DeleteSer',function(){
      $(this).remove();
      $(".del-"+$(this).attr('trip')).remove();
    });
    $("#clickEnterprise").click(function(){
      $("#enterprise").hide();
    });
    $("#clickEnterprise").dblclick(function(){
      $("#enterprise").show();
    });
    $("#clickService").click(function(){
      $("#service").hide();
    });
    $("#clickService").dblclick(function(){
      $("#service").show();
    });
    $("#clickCostosVar").click(function(){
      $("#CostosVariables").hide();
    });
    $("#clickCostosVar").dblclick(function(){
      $("#CostosVariables").show();
    });
    $("#clickCostosFij").click(function(){
      $("#CostosFijos").hide();
    });
    $("#clickCostosFij").dblclick(function(){
      $("#CostosFijos").show();
    });
     $("#clickProveedor").click(function(){
      $("#detProveedor").hide();
    });
    $("#clickProveedor").dblclick(function(){
      $("#detProveedor").show();
    });
    $("#clickFactura").click(function(){
      $("#detFactura").hide();
    });
    $("#clickFactura").dblclick(function(){
      $("#detFactura").show();
    });
    /*$(document).on('keyup','.cantidadMetros',function(){
       
    });*/
    
      $(document).on('keyup','.metrosRollo',function(){
         if ($(this).val() != "" && $(".valorRollo").val() != "" && $(".cantidadMetros").val() != "" && $(".totalCC").val() != "" && $('.valorTintas').val() != "" && $('.ccTinta').val() != "") {
      $("#CalcularDatos").removeAttr("disabled");
    }else{
      $("#CalcularDatos").attr('disabled','true');
        $("#addJob").attr('disabled','true');
    }
      
     });
     $(document).on('keyup','.valorRollo',function(){
         if ($(".metrosRollo").val() != "" && $(this).val() != "" && $(".cantidadMetros").val() != "" && $(".totalCC").val() != "" && $('.valorTintas').val() != "" && $('.ccTinta').val() != "") {
      $("#CalcularDatos").removeAttr("disabled");
    }else{
      $("#CalcularDatos").attr('disabled','true');
        $("#addJob").attr('disabled','true');
    }
      
     });
     $(document).on('keyup','.cantidadMetros',function(){
       if ($(".metrosRollo").val() != "" && $(".valorRollo").val() != "" && $(this).val() != "" && $(".totalCC").val() != "" && $('.valorTintas').val() != "" && $('.ccTinta').val() != "") {
      $("#CalcularDatos").removeAttr("disabled");
    }else{
      $("#CalcularDatos").attr('disabled','true');
        $("#addJob").attr('disabled','true');
    }
     });
     $(document).on('click','.totalCC',function(){
         if ($(".metrosRollo").val() != "" && $(".valorRollo").val() != "" && $(".cantidadMetros").val() != "" && $(this).val() != "" && $('.valorTintas').val() != "" && $('.ccTinta').val() != "") {
      $("#CalcularDatos").removeAttr("disabled");
    }else{
      $("#CalcularDatos").attr('disabled','true');
        $("#addJob").attr('disabled','true');
    }
     });
     $(document).on('keyup','.valorTintas',function(){
          if ($(".metrosRollo").val() != "" && $(".valorRollo").val() != "" && $(".cantidadMetros").val() != "" && $(".totalCC").val() != "" && $(this).val() != "" && $('.ccTinta').val() != "") {
      $("#CalcularDatos").removeAttr("disabled");
    }else{
      $("#CalcularDatos").attr('disabled','true');
        $("#addJob").attr('disabled','true');
    }
      
     });
     $(document).on('keyup','.ccTinta',function(){
        //exit = uno+dos+tres+cuatro+cinco+seis;
        if ($(".metrosRollo").val() != "" && $(".valorRollo").val() != "" && $(".cantidadMetros").val() != "" && $(".totalCC").val() != "" && $(".valorTintas").val() != "" && $(this).val() != "") {
      $("#CalcularDatos").removeAttr("disabled");
    }else{
      $("#CalcularDatos").attr('disabled','true');
        $("#addJob").attr('disabled','true');
    }
      
     });

      
     $(document).on('keyup','.cantidadMetros',function(){
      $('.metrosRollo').each(function( index ) {
        //console.log( index + ": " + $( this ).val() );
        pruebaC= parseInt($( this ).val());
      });
       if ($(this).val()>pruebaC) {
     alert("Supero el limite de los metros del rollo!");
        $(this).val("-");
      } 
      pruebaC = 0;
     });
     $(document).on('keyup','.ccTinta',function(){
      $('.totalCC').each(function( index ) {
        //console.log( index + ": " + $( this ).val() );
        pruebaT= parseInt($( this ).val());
      });
      if ($(this).val()>pruebaT) {
     alert("Supero el limite de los CC de tinta!");
        $(this).val("-");
      }
      pruebaT = 0; 
     });

    $("#CalcularDatos").click(function(){
      $('.cantidadMetros').each(function( index ) {
        //console.log( index + ": " + $( this ).val() );
        cantidadMetros= parseInt($( this ).val());
      });
      $('.metrosRollo').each(function( index ) {
        //console.log( index + ": " + $( this ).val() );
        metrosRollo= parseInt($( this ).val());
      });
      $('.valorRollo').each(function( index ) {
        //console.log( index + ": " + $( this ).val() );
        valorRollo=parseInt($( this ).val());
      });
       resultado += parseInt((valorRollo/metrosRollo)*cantidadMetros);
      console.log("MetrosTotal: "+metrosRollo+" valorRollo: "+valorRollo+" cantMetros: "+cantidadMetros);

      console.log("resultado: "+resultado);
      $("#totalPapel").val("$ "+resultado);
      valorRollo=0;
      metrosRollo=0;
      cantidadMetros=0; 
     

      //resultado=0;
      ////////////// TINTAS
      $('.totalCC').each(function( index ) {
        //console.log( index + ": " + $( this ).val() );
        totalCC= parseInt($( this ).val());
      });
      $('.valorTintas').each(function( index ) {
        //console.log( index + ": " + $( this ).val() );
        valorTintas= parseInt($( this ).val());
      });
      $('.ccTinta').each(function( index ) {
        //console.log( index + ": " + $( this ).val() );
        utilizados= parseInt($( this ).val());
      });
       total = ((valorTintas/totalCC)*utilizados);
      tra += parseInt(total, 10);
      console.log("ccTotales: "+totalCC+" valorTinta: "+valorTintas+" cantTinta: "+utilizados);

      console.log("resultadoTinta: "+tra);
      $("#totalTinta").val("$ "+tra);
        totalCC = 0;
        valorTintas = 0;
        utilizados = 0; 
      
      
        //total = 0;
        //tra = 0;
            /*valorRollo += parseInt($(".valorRollo").val());
         cantidadMetros += parseInt($('.cantidadMetros').val());
          metrosRollo += parseInt($(".metrosRollo").val());
        console.log("valRollo: "+valorRollo);
        console.log("Metro: "+metrosRollo);
          console.log("cantM: "+cantidadMetros); 
          resultado = (valorRollo/metrosRollo)*cantidadMetros;
          console.log(resultado);
          total += resultado;*/
      /*$('.cantidadMetros').each(function( index ) {
        
      });*/
      // 
        
        $('.cantidad').each(function( index ) {
        //console.log( index + ": " + $( this ).val() );
        cantidadTrabajo= parseInt($( this ).val());
      });
        $('.valorUnitario').each(function( index ) {
        //console.log( index + ": " + $( this ).val() );
        valorUnitario= parseInt($( this ).val());
      });
        totalTrabajo += parseInt(valorUnitario*cantidadTrabajo);
        alert("Cantidad: "+cantidadTrabajo+" valorUnitario: "+valorUnitario+" totalTrabajo: "+totalTrabajo);
        $(".totalTrab").val(totalTrabajo);
        cantidadTrabajo=0;
        valorUnitario=0;
        $(this).attr('disabled', 'true'); 
        $("#addJob").removeAttr("disabled");
    });
    /*$(".cantidadMetros").keyup(function(){
      alert("Hola");
      $( ".valorRollo" ).each(function( index ) {
        console.log( index + ": " + $( this ).val() );
      });
      /*var metrosRollo = $("#metrosRollo").val();
      var valorRollo = $("#valorRollo").val();
      var cantidadMetros = $(this).val();
      var total = (valorRollo/metrosRollo)*cantidadMetros;
      $("#totalPapel").val(total);
      console.log("Valor total: "+total);
    });*/
    /*$("#ccTinta").keyup(function() {
      var totalCC = $("#totalCC").val();
      var valorTintas = $("#valorTintas").val();
      var utilizados = $(this).val();
      var total = (valorTintas/totalCC)*utilizados;
      var tra = parseInt(total, 10);
      $("#totalTinta").val(tra);
    });*/
    $("#totalHoras").keyup(function() {
       var valorHora = $("#valorHora").val();
       var totalHoras = $(this).val();
       var totalSub = valorHora*totalHoras;
       $("#totalSub").val("$ "+totalSub); 
    });
    $("#totalHoraHom").keyup(function() {
       var valorHora = $("#valorHoraHom").val();
       var totalHoras = $(this).val();
       var totalHomb = valorHora*totalHoras;
       $("#totalHomb").val("$ "+totalHomb); 
    });
    $(".clienteRut").keyup(function() {
    var actual = $(this).val().replace(/^0+/, "");
    if (actual != '' && actual.length > 1) {
        var sinPuntos = actual.replace(/\./g, "");
        var actualLimpio = sinPuntos.replace(/-/g, "");
        var inicio = actualLimpio.substring(0, actualLimpio.length - 1);
        var rutPuntos = "";
        var i = 0;
        var j = 1;
        for (i = inicio.length - 1; i >= 0; i--) {
            var letra = inicio.charAt(i);
            rutPuntos = letra + rutPuntos;
            if (j % 3 == 0 && j <= inicio.length - 1) {
                rutPuntos = "." + rutPuntos;
            }
            j++;
        }
        var dv = actualLimpio.substring(actualLimpio.length - 1);
        rutPuntos = rutPuntos + "-" + dv;
        $(this).val(rutPuntos);
    }

     
});
    $(".showData").keyup(function(){
       $('.costosFijosVal').each(function( index ) {
        //console.log( index + ": " + $( this ).val() );
        costosFijosValor += parseInt($( this ).val());
      });
       //alert("ValorCostosFijos: "+costosFijosValor);
       $(".costosTotalFijo").val(costosFijosValor);
       costosFijosValor=0;
    });
    $(".recargoProveedor").keyup(function(){
      if ($(this).val() >= 0 && $(this).val()<=100 ) {
        netoProveedor = parseInt($(".netoProveedor").val());
      $(".ivaProveedor").val(netoProveedor*0.19);
      ivaProveedor = parseInt($(".ivaProveedor").val());
      totalProveedor = parseInt(netoProveedor+ivaProveedor);
       recargoProv = ((totalProveedor* parseInt($(this).val()))/100);
       totalFinal = parseInt(totalProveedor+recargoProv, 10);
      console.log("TOTAL: "+totalFinal);
      $(".totalProveedor").val(totalFinal);
    }else{
      alert("Supero el maximo que es 100%");
      $(this).val("-");
    }
      
    });
    $(".getDataVar").keyup(function(event) {
      $('.cosVar').each(function( index ) {
        //console.log( index + ": " + $( this ).val() );
        stringCor = $(this).val();
        newString = stringCor.split("$");
         totalCosVar += parseInt(newString[1]);
      });
       console.log("Total variables: "+totalCosVar)
        $(".costosVariablesTotal").val(totalCosVar);
        totalCosVar = 0;
    });
    $(".checklife").keyup(function(event) {
          
    $(".totalCliente").val(parseInt($(".totalTrab").val())+parseInt($(".costosVariablesTotal").val())+parseInt($(".costosTotalFijo").val())+parseInt($(".totalProveedor").val()));
    $(".netoFac").val(parseInt($(".totalTrab").val())+parseInt($(".costosVariablesTotal").val())+parseInt($(".costosTotalFijo").val())+parseInt($(".totalProveedor").val()));
    $(".ivaFac").val(parseInt(((parseInt($(".totalTrab").val())+parseInt($(".costosVariablesTotal").val())+parseInt($(".costosTotalFijo").val())+parseInt($(".totalProveedor").val()))*0.19),10));
    $(".totalFac").val(parseInt((parseInt($(".totalTrab").val())+parseInt($(".costosVariablesTotal").val())+parseInt($(".costosTotalFijo").val())+parseInt($(".totalProveedor").val()))+((parseInt($(".totalTrab").val())+parseInt($(".costosVariablesTotal").val())+parseInt($(".costosTotalFijo").val())+parseInt($(".totalProveedor").val()))*0.19),10));
   // alert("TRABAJO: "+$(".totalTrab").val()+" VARIABLES: "+$(".costosVariablesTotal").val()+" FIJOS: "+$(".costosTotalFijo").val()+" PROVEEDOR: "+$(".totalProveedor").val());
    });
    $(".nameFantasia").keyup(function(){
       var parametros = {
                "nombre" : $(this).val()
        };
        $.ajax({
                data:  parametros,
                url:   '<?=site_url('mostrar')?>',
                type:  'post',
                dataType: 'json',
                beforeSend: function () {
                       
                },
                success:  function (response) {
                  console.log(response);
                   
                  
               
                     $(".clienteRut").val(response.rut+"-"+response.dv);
                  $(".razonSocial").val(response.giro);
                  $(".telefonoCliente").val(response.telefono);
                  $(".correoCliente").val(response.correo);
                   $(".idCliente").val(response['id']);
                    $(".delayName").text("");
                       // $("#resultado").html(response["rut"]);
                },
              error: function(jqXHR, textStatus, errorThrown){
                console.log("error");
                   $(".clienteRut").val("-");
                  $(".razonSocial").val("-");
                  $(".telefonoCliente").val("-");
                  $(".correoCliente").val("-@X.cl");
                  $(".idCliente").val("0");
                 $(".delayName").text("¡No hay coincidencias!");
                  
                }
        });
    });
  });
</script>
<style type="text/css">
  h1, h2, h3, h4, h5, h6, label{
    -webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
  }
</style>
</head>
<body>

<div class="super_container">

  <!-- Header -->

  <header class="header">
    <div class="header_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header_content d-flex flex-row align-items-center justify-content-start">
              <div class="logo"><a href="<?= site_url('#')?>"><img src="<?=base_url('resources/imagenes/Logo.jpg')?>" width="140" height="40"></a></div>
              <nav class="main_nav">
                <ul>
                  <li>
                    <a href="<?= site_url('Administrador/index')?>">Servicios</a>
                  </li>
                  <li >
                    <a href="<?= site_url('Administrador/verRevista')?>">Revista</a>
                  </li>
                  <li><a href="<?= site_url('Administrador/verSemaforo')?>">Semaforo</a></li>
                  <li><button id="verClientes" type="button">verClientes</button></li>
                  <li><a href="<?= site_url('Administrador/verEstadisticas')?>">Estadisticas</a></li>
                  <li><a href="<?=site_url('Administrador/verClientes')?>">Clientes / A-Z</a></li>
                  <li><a href="<?=site_url('Administrador/verProveedores')?>">Proveedores / A-Z</a></li>
                  <li><a href="<?=site_url('Login/logout')?>">Desconectar</a></li>
                </ul>
              </nav>
              <div class="header_extra ml-auto">
                <div class="search">
                  <div class="search_icon">
                    <svg version="1.1" id="Capa_1" xmlns="<?=site_url('http://www.w3.org/2000/svg')?>" xmlns:xlink="<?=site_url('http://www.w3.org/1999/xlink')?>" x="0px" y="0px"
                    viewBox="0 0 475.084 475.084" style="enable-background:new 0 0 475.084 475.084;"
                     xml:space="preserve">
                    <g>
                      <path d="M464.524,412.846l-97.929-97.925c23.6-34.068,35.406-72.047,35.406-113.917c0-27.218-5.284-53.249-15.852-78.087
                        c-10.561-24.842-24.838-46.254-42.825-64.241c-17.987-17.987-39.396-32.264-64.233-42.826
                        C254.246,5.285,228.217,0.003,200.999,0.003c-27.216,0-53.247,5.282-78.085,15.847C98.072,26.412,76.66,40.689,58.673,58.676
                        c-17.989,17.987-32.264,39.403-42.827,64.241C5.282,147.758,0,173.786,0,201.004c0,27.216,5.282,53.238,15.846,78.083
                        c10.562,24.838,24.838,46.247,42.827,64.234c17.987,17.993,39.403,32.264,64.241,42.832c24.841,10.563,50.869,15.844,78.085,15.844
                        c41.879,0,79.852-11.807,113.922-35.405l97.929,97.641c6.852,7.231,15.406,10.849,25.693,10.849
                        c9.897,0,18.467-3.617,25.694-10.849c7.23-7.23,10.848-15.796,10.848-25.693C475.088,428.458,471.567,419.889,464.524,412.846z
                         M291.363,291.358c-25.029,25.033-55.148,37.549-90.364,37.549c-35.21,0-65.329-12.519-90.36-37.549
                        c-25.031-25.029-37.546-55.144-37.546-90.36c0-35.21,12.518-65.334,37.546-90.36c25.026-25.032,55.15-37.546,90.36-37.546
                        c35.212,0,65.331,12.519,90.364,37.546c25.033,25.026,37.548,55.15,37.548,90.36C328.911,236.214,316.392,266.329,291.363,291.358z
                        "/>
                    </g>
                  </svg>
                  </div>
                </div>
                <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Search Panel -->
    <div class="search_panel trans_300">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
              <form action="<?=site_url('#')?>">
                <input type="text" class="search_input" placeholder="Search" required="required">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Social -->
    <div class="header_social">
      <ul>
        <li><a href="<?=site_url('#')?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
        <li><a href="<?=site_url('#')?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="<?=site_url('#')?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="<?=site_url('#')?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </header>

  <div class="menu menu_mm trans_300">
    <div class="menu_container menu_mm">
      <div class="page_menu_content">
              
        <div class="page_menu_search menu_mm">
          <form action="<?=site_url('#')?>">
            <input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
          </form>
        </div>
        <ul class="page_menu_nav menu_mm">
          <li class="page_menu_item menu_mm">
            <a href="<?=site_url('Welcome/index')?>">Servicios</a>
          </li>
          <li class="page_menu_item menu_mm">
            <a href="<?=site_url('Welcome/verRevista')?>">Revista</a>
          </li>
          <li class="page_menu_item menu_mm"><a href="<?= site_url('Welcome/verSemaforo')?>">Semaforo<i class="fa fa-angle-down"></i></a></li>
          <li class="page_menu_item menu_mm"><a href="<?= site_url('Welcome/verEstadisticas')?>">Estadisticas<i class="fa fa-angle-down"></i></a></li>
          <li class="page_menu_item menu_mm"><a href="<?= site_url('Welcome/verClientes')?>">Clientes / A-Z<i class="fa fa-angle-down"></i></a></li>
          <li class="page_menu_item menu_mm"><a href="<?=site_url('#')?>">Desconectar<i class="fa fa-angle-down"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
  </div>

  <div class="products">
    <div class="container">