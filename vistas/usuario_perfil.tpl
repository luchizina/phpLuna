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

          <form method="post" action="{$url_base}usuario/notifUsuario">
              {if $usuario->getNotificacion() == 1}
  <input type="checkbox" name="checkNotif" id="checkNotif"> Activar/Desactivar notificaciones<br>
    {else}
     <input type="checkbox" name="checkNotif" id="checkNotif" checked> Activar/Desactivar notificaciones<br>
     {/if}
  <input type="hidden" name="nomUsu" id="nomUsu" value="{$usuario->getNick()}">
  <input type="submit" value="Guardar cambios">
</form>

        </div>
        </div>


<h2>Mis propuestas</h2>
        <table>
  <tr>
    <th>Nombre</th>
 
  </tr>
     {foreach from=$misProps item=mProp}
  <tr>
    <td>{$mProp->getNombre()}</td>
    
  </tr>
  {/foreach}
 
</table>

<h2>Propuestas favoritas</h2>
        <table>
  <tr>
    <th>Nombre</th>
 
  </tr>
     {foreach from=$propsFavoritas item=favProp}
  <tr>
    <td>{$favProp->getNombre()}</td>
    
  </tr>
  {/foreach}
 
</table>

<h2>Propuestas colaboradas</h2>
        <table>
  <tr>
    <th>Nombre</th>
    <th>Monto colaborado en total</th>
  </tr>
     {foreach from=$propsColaboradas item=colProp}
  <tr>
    <td>{$colProp->getNombre()}</td>
    <td>{$colProp->totalMontoColaborado($usuLogNick)}</td>
  </tr>
  {/foreach}
 
</table>

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    </section>          
  </section>

     </body>
      </html>