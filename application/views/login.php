<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Iniciar Sesión</title>
  <!-- Tell the browser to be responsive to screen width -->
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
</head>
<body>
  <div class="login-box">
  <!-- /.login-logo -->
    <div class="login-box-body">
      <div class="login-logo">
      <!-- Logo -->
        <img src="<?=base_url()?>resources/images/logo/ARRiendo(7).png" alt="logo" width="180px">
      </div>
      <p class="login-box-msg">Iniciar Sesión</p>
      <form action="<?=site_url('LoginController/checkLoginUser')?>" method="post">
        <div class="form-group has-feedback">
          <input type="input" class="form-control" placeholder="Nombre Usuario" name="userName">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Clave" name="clave">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
        <!-- /.col -->
          <div class="col-xs-12">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
            <a href="<?=site_url('MainController/Index')?>" type="submit" class="btn btn-default btn-block btn-flat">Volver</a>
          </div>
          <!-- /.col -->
        </div>
      </form>
    <!-- /.social-auth-links -->
    </div>
  <!-- /.login-box-body -->
  </div>
<!-- /.login-box -->
</body>
</html>