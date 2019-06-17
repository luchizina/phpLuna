<!DOCTYPE html>

<html lang="en">
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
     <link href="css/pop.css" rel="stylesheet">
     <link href="css/perfil.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="bg">

    {include file="cabezal.tpl"}
    <section class="probootstrap-hero" style="color: white; height:100%" >
        <div class="container">
          <div class="row">
            <div class="col-md-12" >
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                 {if $usuLogNick == $usuario->getNick()}
                <h1 class="probootstrap-heading probootstrap-animate">¡Hola {$usuario->getNombre()}!</h1>
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
            <div class="col-md-6 col-md-push-1 probootstrap-animate">     

          <div class="services">
<section class="pricecol">
<div style="text-align: center;">
 <img src="./{$usuario->getImagen()}" class="imgRedonda" width="150" height="150">
</div>
<h3 style="text-align: center;"><Span>Datos personales:</span></h3>
<ul>
<li>Nombre: {$usuario->getNombre()}</li>
<li>Apellido:    {$usuario->getApellido()}</li>
<li>Nick:    {$usuario->getNick()}</li>
<li>Correo:    {$usuario->getCorreo()}</li>
</ul>
</section>

   

          <div class="col-md-5 probootstrap-animate ">
           
<h2>Propuestas</h2>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Propuestas</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Favoritas</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Colaboradas</button>
</div>

<div id="London" class="tabcontent">
  <div> 
            <div class="table-responsive scr">
            <table class="table table-striped tabla" >
  <tr>
    <th>Nombre</th>
 
  </tr>
   {if $misProps != null}
     {foreach from=$misProps item=mProp}
  <tr>
    <td>{$mProp->getNombre()}</td>
    
  </tr>
  {/foreach}
  {/if}

 {if $misProps == null}
  <tr>
    <td>Aún no has publicado nada</td>
  </tr>
  {/if}
</table>
</div>
</div>
</div>

<div id="Paris" class="tabcontent">
  <div class="table-responsive ">
            <table class="table table-striped tabla " style=" background-color: #ecececb3">
  <tr>
    <th>Nombre</th>
  </tr>
      {if $propsFavoritas != null}
     {foreach from=$propsFavoritas item=favProp}
  <tr>
    <td>{$favProp->getNombre()}</td>
    
  </tr>
  {/foreach}
  {/if}
   {if $propsFavoritas == null}
  <tr>
    <td>Aún no tienes propuestas favoritas</td>
  </tr>
  {/if}
</table>
</div>
</div>

<div id="Tokyo" class="tabcontent">
 
<div class="table-responsive ">
            <table class="table table-striped tabla" style=" background-color: #ecececb3">
  <tr>
    <th>Nombre</th>
    <th>Monto colaborado en total</th>
  </tr>
   {if $propsColaboradas != null}
     {foreach from=$propsColaboradas item=colProp}
  <tr>
    <td>{$colProp->getNombre()}</td>
    <td>{$colProp->totalMontoColaborado($usuLogNick)}</td>
  </tr>
  {/foreach}
  {/if}
   {if $propsColaboradas == null}
  <tr>
    <td>Aún no has realizado una colaborado</td>
  </tr>
  {/if}
</table>
</div>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
 


  <form method="post" action="{$url_base}usuario/notifUsuario">
    {if $usuario->getNotificacion() == 1}
  <input type="checkbox" name="checkNotif" id="checkNotif"> Activar/Desactivar notificaciones<br>
    {else}
     <input type="checkbox" name="checkNotif" id="checkNotif" checked> Activar/Desactivar notificaciones<br>
     {/if}
  <input type="hidden" name="nomUsu" id="nomUsu" value="{$usuario->getNick()}">
  <input type="submit" class="btn btn-primary" value="Guardar cambios">
</form>
  </div>
        </div>
        </div>
    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/pop.js"></script>
    </section>          
  </section>

     </body>
      </html>