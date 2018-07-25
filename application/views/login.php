<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Iniciar Sesión</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('resources/styles/css/bootstrap4/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('resources/styles/css/floating-labels.css')?>">
  </head>

  <body>
      <form class="form-signin" action="<?=site_url('Login')?>" method="post">
        <div class="text-center mb-4">
          <img src="<?=base_url('resources/imagenes/Logo.jpg')?>" width="200px">
        </div>

        <div class="form-label-group">
          <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electrónico" required autofocus name="usu_correo">
          <label for="inputEmail">Correo Electrónico</label>
        </div>

        <div class="form-label-group">
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="usu_clave">
          <label for="inputPassword">Contraseña</label>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
        <p class="mt-5 mb-3 text-muted text-center">&copy; Todonorte</p>
      </form>
  </body>
</html>