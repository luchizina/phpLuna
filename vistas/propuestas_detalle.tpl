<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg">

    {include file="cabezal.tpl"}
    <section class="probootstrap-hero "  data-stellar-background-ratio="0.01">
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

<div class="jajaja"  >
        {foreach from=$comentarios item=com}
        <div class="comment">
              {if $com->getUsuario()->getImagen() != null}
                <img src="./{$com->getUsuario()->getImagen()}">
                {/if}
                 {if $com->getUsuario()->getImagen() == null}
                <img src="./imgUsus/pepito.png">
                {/if}
               <div class="comment-content"><p class="author"><strong>{$com->getUsuario()->getNick()}</strong></p>
                <span>
                    {$com->getTexto()} 
                </span>
           </div>
              {if $com->getUsuario()->getNick() == $usuLogNick}
            <a class="btn" onclick="borrarComent('{$com->getId()}','{$propuesta->getNombre()}',this);">
                         <i class="icon-trash"></i></a>  
         {/if}
         <a class="btn" onclick="javascript:likeComentario('{$usuLogNick}',{$com->getId()});">
                         <i class="fa fa-thumbs-up"></i> <span id="{$usuLogNick}{$com->getId()}">{$com->getLikes()}</span></a>

        </div>
      {/foreach}
      <div class="comment" id="nuevo">

        </div>
<div class="jaja">
      <form method="post" class="probootstrap-form">
        <textarea rows="5" cols="57" name="textoComentario" id="textoComentario"></textarea>
        <div class="form-group" >
            <a onclick="javascript:Coment('{$url_base}','{$propuesta->getNombre()}');" id="submit" name="submit" class="btn btn-primary btn-lg">COMENTAR</a>
          </div>
    </form>
    </div>
</div>

  

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/validar.js" type="text/javascript"></script>
    </section>          
  </section>
      </body></html>

      