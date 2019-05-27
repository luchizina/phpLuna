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
                <h1 class="probootstrap-heading probootstrap-animate">Registrar Usuario</h1>
              </div>
            </div>
          </div>
        </div>

      <section class="probootstrap-section">
        <input id="propu" name="propu" type="hidden" value="hola" class="form-control">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif" >
            <form method="post" class="probootstrap-form" enctype="multipart/form-data" id="registr">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input id="nombre" name="nombre" type="text" placeholder="Juan" class="form-control" required="">
              </div>
               <div class="form-group">
                <label for="desc">Descripción</label>
                <input id="desc" name="desc" type="text" placeholder="Una cena con los desarrolladores..." class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="monto">Monto a superar</label>
                <input id="monto" name="monto" type="number" placeholder="ej: 10,100,1000..." class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="limite">Limite Usuario</label>
                <input id="limite" name="limite" type="number" placeholder="Ej: 10" class="form-control" required="">
              </div>
              
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="guardar" name="guardar" value="Registrarse">
              </div>
            </form>
          </div>
        </div>
        </div>

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/validar.js" type="text/javascript"></script>
    </section>          
  </section>
      </body></html>

