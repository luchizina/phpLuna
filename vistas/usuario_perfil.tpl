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
                 {if $usuLogNick == $usuario->getNick()}
                <h1 class="probootstrap-heading probootstrap-animate">¡Hola {$usuario->getNombre()}! Este es tu perfil.</h1>
                 {else}
                   <h1 class="probootstrap-heading probootstrap-animate">Este es el perfil de {$usuario->getNombre()}</h1>
                 {/if}
              </div>
            </div>
          </div>
        </div>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif" >
            <form method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="Nombre">{$usuario->getNombre()}</label>
               
              </div>
              <div class="form-group">
                <label for="Descripción">{$usuario->getApellido()}</label>
              
              </div>

              <div class="form-group">
                <label for="celular">{$usuario->getNick()}</label>
               
              </div>
               <div class="form-group">
                <label for="fecha_pub">{$usuario->getCorreo()}</label>
                
              </div>
                <div class="form-group">
                <img src="./{$usuario->getImagen()}" />
                
              </div>

              <div class="form-group">
              
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

  <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="./{$usuario->getImagen()}" style="border-radius:50%;" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body text-center mb-1">

        <h5 class="mt-1 mb-2">{$usuario->getNombre()} {$usuario->getApellido()}</h5>
         <h5 class="mt-1 mb-2">{$usuario->getNick()}</h5>
        <h5 class="mt-1 mb-2">{$usuario->getCorreo()}</h5>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: Login with Avatar Form-->

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginAvatar">Launch
    Modal Login with Avatar</a>
</div>
      </body></html>