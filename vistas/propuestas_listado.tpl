<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="{$url_base}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/moon.png" type="image/png" />
    <title>LUNA</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
     <link rel="stylesheet" href="css/dashboard.css">


    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg">
    {include file="cabezal.tpl"}  
 <section class="probootstrap-hero bg" >
  <br>
  <br>
     <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
              <h2 class="caca">Propuestas a las que puedas apoyar </h2>
              <p class="lead">miralas tranqui</p>
            </div>
            <button id="agregar" name="agregar" title="Agregar una propuestas" class="btn btn-primary pull-right" onClick="window.location='{$registrar_propuesta}'">Agregar</button>

          </div>
          <div class="row jajejo">
            {foreach from=$propuestas item=prop}
            {$img = $prop->traerImagen($prop->getNombre())}
            {$prop->setImagen($img)}
            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate" data-animate-effect="fadeIn">
              <div class="probootstrap-image-text-block probootstrap-cause">
                <figure class="imk"  width="360" height="200">
                  <img src="{$prop->getImagen()}" alt="{$prop->getNombre()|upper}" class="img2">
                </figure>
                <div class="probootstrap-cause-inner">
                  <div class="progress">
                    <div class="progress-bar progress-bar-s2" data-percent="{$prop->calc()}"></div>
                  </div>

                  <div class="row mb30">
                    <div class="col-md-6 col-sm-6 col-xs-6 probootstrap-raised">Monto actual: <span class="money">{$prop->getMontoActual()}</span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6 probootstrap-goal">Objetivo: <span class="money"> $ {$prop->getMonto()}</span></div>
                  </div>
                  <h2><a href="{$url_base}propuesta/detalleProp/{$prop->getNombre()}/">{$prop->getNombre()|upper} </a>
                    {if $prop->isFavoriteada($usuLogNick)}
                        <a class="btn estrella" onclick="favoritear('{$prop->getNombre()}','{$url_base}','{$usuLogNick}');">
                         <i class="fa fa-star" id="{$usuLogNick}{$prop->getNombre()}"></i></a>
                       {/if}
                       {if !$prop->isFavoriteada($usuLogNick)}
                        <!-- <a class="btn estrella" href="{$url_base}propuesta/favoritear/{$prop->getNombre()}/">
                         <i class="fa fa-star-o"></i></a> -->
                         <a class="btn estrella"  onclick="favoritear('{$prop->getNombre()}','{$url_base}','{$usuLogNick}');">
                         <i class="fa fa-star-o" id="{$usuLogNick}{$prop->getNombre()}"></i></a>
                      {/if}
                      </h2>
                  <div class="probootstrap-date"><i class="icon-calendar"></i> Implementar tiempo queda</div>  
                  <p><a href="{$url_base}propuesta/nuevaColaboracion/{$prop->getNombre()}" class="btn btn-primary btn-black">Colaborar!</a></p>
                </div>
              </div>
            </div>
                  {/foreach}
  </div>
  <div id="pagination">
<ul class="pagination justify-content-center" style="margin:20px 0">
<li class="page-item"><a class="page-link" href="{$est}">Anterior</a></li>
  {for $foo=1 to {$paginas}}
  <li class="page-item" id="{$foo}"><a class="page-link" href="{$url_base}propuesta/pagina/{$foo}/">{$foo}</a></li>
  {/for}
   <li class="page-item"><a class="page-link" href="{$sig}">Siguiente</a></li>
  </ul>
    </section>
 </section>


    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/validar.js"></script>
  </body>
</html>
