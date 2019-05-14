<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body >

    {include file="cabezal.tpl"}
    <section class="probootstrap-hero" style="background-image: url(img/hero_bg_bw_1.jpg); height:100%"  data-stellar-background-ratio="0.1">
        <div class="container">
          <div class="row">
            <div class="col-md-12" >
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Modificar Usuario</h1>
              </div>
            </div>
          </div>
        </div>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif >
            <form method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" value="{$usuario_log->getNombre()}" id="nombre" name="nombre">
              </div>
              <div class="form-group">
                <label for="Apellido">Nombre</label>
                <input type="text" class="form-control" value="{$usuario_log->getApellido()}" id="apellido" name="apellido">
              </div>
              <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" value="{$usuario_log->getCorreo()}" id="correo" name="correo">
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" placeholder="xxxxxx" id="password" name="password">
              </div>
              <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" value="{$usuario_log->getCelular()}" id="celular" name="celular">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="MODIFICAR">
              </div>
            </form>
          </div>
        </div>
        </div>

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    </section>          
  </section>
      </body></html>