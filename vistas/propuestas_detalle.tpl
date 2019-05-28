<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style_com.css">
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body >

    {include file="cabezal.tpl"}
    <section class="probootstrap-hero" style="background-image: url(img/hero_bg_bw_1.jpg); height:100%"  data-stellar-background-ratio="0.01">
        <div class="container">
          <div class="row">
            <div class="col-md-12" >
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Propuesta</h1>
                 <h2 style="color: #fff" class="probootstrap-heading probootstrap-animate">Información de propuesta</h2>
              </div>
            </div>
          </div>
        </div>
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif" >
           
              <div class="form-group">
                <label for="Nombre">Nombre:</label>
                 <p name="Nombre">{$propuesta->getNombre()}</p> 
              </div>
              
              <div class="form-group">
                <label for="monto">Monto:</label>
                 <p name="monto">${$propuesta->getMonto()}</p> 
              </div>


               <div class="form-group">
                <label for="fecha">Fecha publicada:</label>
                 <p name="fecha">{$propuesta->getFechaPublicada()}</p>                 
              </div>
             
           
        
          </div>
           <div class="col-md-6 col-md-push-1 probootstrap-animate"  style="color: white;">            
             <div class="form-group" style="max-width: 300px;max-height: 300px">
                    {if {$propuesta->getImagen()}!=null}
                    <img src="./{$propuesta->getImagen()}" />
                    {/if}
                    {if {$propuesta->getImagen()}==null}
                   <img src="/img/person_7.jpg" />
                    {/if}
                
              </div>
              <div class="form-group">
                <label for="Desc">Descripcion:</label>
                 <p name="Desc">{$propuesta->getDescripcion()}</p> 
              </div>
                <div class="form-group">
                    <label for="na">Progreso actual: ${$propuesta->getMontoActual()}</label>
               <div class="progress" style="max-width: 400px">
                    <div class="progress-bar progress-bar-s2" data-percent="{$propuesta->calc()}"></div>
                  </div>
                  </div>

          </div>
        </div>
        </div>
        <div class="section-comments">
  <div class="section-comments__comments">
    <h6 class="comments__title">Comentarios</h6>
    <ul class="comments__list-comment">
      {foreach from=$comentarios item=com}
      <li class="list-comment__comment">
        {if {$com->getUsuario()->getImagen()} != null}
        <div class="comment__avatar">
          <div class="avatar__border"><img class="avatar__author" src="./{$com->getUsuario()->getImagen()}" alt=""/></div>
        </div>
        {/if}
        <div class="comment__comment-text">
         <h5 class="comment-text__name-author">{$com->getUsuario()->getNick()}</h5>
          <p class="comment-text__content">{$com->getTexto()}</p>
        </div>
      </li>
      {/foreach}
      <form method="post" action="{$url_base}propuesta/comentarEnPagina" class="probootstrap-form">
      <li>
        <textarea rows="5" cols="57" name="textoComentario" id="textoComentario"></textarea>
      </li>
      <li>
        <div class="form-group" >
          <input type="hidden" value="{$propuesta->getNombre()}" name="nomPropCom" id="nomPropCom">
            <input type="submit" class="btn btn-primary btn-lg" id="com" name="com" value="COMENTAR">
          </div>
      </li>
    </form>
    </ul>
  </div>
</div>
  

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    </section>          
  </section>
      </body></html>