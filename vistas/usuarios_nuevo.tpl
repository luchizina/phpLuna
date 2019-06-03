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
            <div class="col-md-12" >
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Registrar Usuario</h1>
              </div>
            </div>
          </div>
        </div>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif" >
            <div id="message1" class="alert alert-error" style="display:none">  
              <p><strong>Ha ocurrido un error!</strong></p>
            </div>
            <form method="post" class="probootstrap-form" enctype="multipart/form-data" id="registr">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input id="nombre" name="nombre" type="text" placeholder="Juan" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="apellido">Apellido</label>
                <input id="apellido" name="apellido" type="text" placeholder="Silvera" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="nick">Nick</label>
                <input id="nick" name="nick" type="text" placeholder="Ej: Pepe" class="form-control" required="" onblur="javascript:validarnick();">
                <span id="avisa" style="color: red"></span>
              </div>
              <div class="form-group">
                <label for="ci">CI</label>
                <input id="ci" name="ci" type="text" placeholder="Ej: 47821920" class="form-control" required="" onblur="javascript:validarci();">
                <span id=avisaCe style="color: red"></span> <br>
                <span id=avisaFor style="color: red"></span>
              </div>
              <div class="form-group">
                <label for="email">Correo</label>
                <input id="email" name="email" type="email" placeholder="pepe@gmail.com" class="form-control" required="" onblur="javascript:validarcorreo();">
                <span id="avisaC" style="color: red"></span>
              </div>
              <div class="form-group">
                <label for="pass">Contraseña</label>
                <input id="pass" name="pass" type="password"  minlength="6" title="6 letras mín." class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="celular">Celular</label>
                <input id="cel" name="cel" type="tel" placeholder="Ej: 099999999" class="form-control" required="">
              </div>
              <div class="form-group">
                <div class="imgUp">
                <div class="imagePreview"></div>
               <label class="btn btn-primary btn-lg">Elegir imagen<input type="file" name="archivo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"></label>
              </div> 
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
    <script src="js/subirImg.js" type="text/javascript"></script>
    </section>          
  </section>
      </body></html>

