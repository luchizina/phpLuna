<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/imagenes.css" rel="stylesheet">
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
            <div class="col-sm-12  col-md-12  main">
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Modificar Usuario</h1>
              </div>
            </div>
          </div>
        </div>

      <section class="probootstrap-section" >
        <div class="container" >
          <div class="row" style="margin: 0 auto">

          <div class="col-md-5 probootstrap-animate mx-auto" style="margin: auto 0; color: white; font-family: Montserrat,Arial,sans-serif "  >
            <form method="post" enctype="multipart/form-data" class="probootstrap-form" id="from1" action="">
              <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" value="{$usuario_log->getNombre()}" id="nombre" name="nombre">
              </div>
              <div class="form-group">
                <label for="Apellido">Apellido</label>
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
               <div class="imgUp">
                {if $usuario_log->getImagen() == ""}
                <div class="imagePreview"></div>
                {/if}
                {if $usuario_log->getImagen() != ""}
                <div class="imagePreview" style="background-image: url('./{$usuario_log->getImagen()}')"></div>
                {/if}
               <label class="btn btn-primary btn-lg">Elegir imagen<input type="file" name="archivo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"></label>
              </div> 
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="modificar" name="submit" value="MODIFICAR">
              </div>
            </form>
          </div>
        </div>
        </div>

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/sweetalert.js"></script>
    <script src="js/subirImg.js" type="text/javascript"></script>
    </section>          
  </section>
      </body></html>