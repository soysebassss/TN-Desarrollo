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
    var cont = 1;
    $("#addJob").click(function(){
      //alert("Alerta");
      cont = cont+1;
      $(".anotherJob").append('<div class="row"><div class="col" style="text-align: left; color: #ED1919;" id="DeleteJob">'+cont+') <br><div class="row"><div class="col" style="text-align: left;"><label style="color: black;">Trabajo</label><br><input type="text"  class="form-control" placeholder="Trabajo a realizar.." name=""></div><div class="col" style="text-align: left;"><label style="color: black;">Cantidad</label><br><input type="number"  class="form-control" placeholder="Cantidad.." name=""></div></div><br><div class="row"><div class="col" style="text-align: left;"><label style="color: black;">Valor Unitario</label><br><input type="text"  class="form-control" placeholder="Valor Unitario.." name=""></div><div class="col" style="text-align: left;"><label style="color: black;">Medida</label><br><input type="text"  class="form-control" placeholder="Medida.." name=""></div></div><br><div class="row"><div class="col" style="text-align: left;"><label style="color: black;">Cantidad Metros</label><br><input type="text"  class="form-control" placeholder="Cantidad Metros.." name=""></div><div class="col" style="text-align: left;"><label style="color: black;">Valor Rollo</label><br><input type="text"  class="form-control" placeholder="Valor Rollo.." name=""></div></div><br><div class="row"><div class="col" style="text-align: left;"><label style="color: black;">Materia Prima</label><br><input type="text"  class="form-control" placeholder="Materia Prima.." name=""></div><div class="col" style="text-align: left;"><label style="color: black;">Valor Tintas</label><br><input type="text"  class="form-control" placeholder="Valor Tintas.." name=""></div><div class="col" style="text-align: left;"><label style="color: black;">CC Utilizados Tinta</label><br><input type="text"  class="form-control" placeholder="CC Utilizados.." name=""></div></div><br></div></div>');
    });
    var contador = 4;
    $("#addSer").click(function(){
     // alert("Juan");
      contador = contador+1;
      $("#ServicioAdd").append('<div class="row"><div class="col" style="text-align: left; color: #ED1919;" id="DeleteSer">'+contador+') <br><div class="row"><div class="col"><label style="color: black;">Nuevo-'+contador+'</label><br><input type="text"  class="form-control" placeholder=Nuevo-'+contador+'... name=""></div></div><br></div></div>')
    });
    $(document).on('click','#DeleteJob',function(){
      $(this).remove();
    });
    $(document).on('click','#DeleteSer',function(){
      $(this).remove();
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
    $("#clickService").dblclick(function(){
      $("#service").show();
    });
  });
</script>
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