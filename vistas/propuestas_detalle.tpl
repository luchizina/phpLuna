

<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="{$url_base}">
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/carrusel.css">
        <link href="css/dashboard.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="css/propa.css" rel="stylesheet">
        <link href="css/pop.css" rel="stylesheet">
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
                        <h1 class="probootstrap-heading probootstrap-animate otromasche">{$propuesta->getNombre()}</h1>
                        <h2 style="color: #fff" class="probootstrap-heading probootstrap-animate otromasche2">Información general</h2>
                    </div>
                </div>
            </div>
        </div>
        <section class="probootstrap-section">
            <div class="container">
            <div class="row">
                <div class=" probootstrap-animate divSel" >
                    <div class="services">
                        <section class="pricecol">
                            <div class="conte">
                                {if {$propuesta->getImagen()}!=null}
                                <img src="./{$propuesta->getImagen()} " class="imgRedonda" width="400" height="400" />
                                {/if}
                                {if {$propuesta->getImagen()}==null}
                                <img src="/img/person_7.jpg" />
                                {/if}
                                <div> 
                                    <a style="text-align: center; margin-top: 10px; " href="/phpLuna/propuesta/nuevaColaboracion/{$propuesta->getNombre()}" class="btn btn-primary btn-black">Colaborar!</a>  
                                </div>
                            </div>
                            <div style ="margin-left: 10px">
                                <ul>
                                    <li class="estilo">Nombre: </li>
                                    <li>{$propuesta->getNombre()}</li>
                                    <li class="estilo">Fecha publicada:  </li>
                                    <li> {$propuesta->getFechaPublicada()}</li>
                                    <li class="estilo">Descripción: </li>
                                    <li >{$propuesta->getDescripcion()}</li>
                                    <li class="estilo">Monto: </li>
                                    <li>${$propuesta->getMonto()}</li>
                                    <li class="estilo">Progeso actual:  </li>
                                    <li>${$propuesta->getMontoActual()}</li>
                                    <li>
                                        <div class="progress" style="text-align:center; max-width: 300px ; margin: 0 auto; margin-top: 20px;">
                                            <div class="progress-bar progress-bar-s2" data-percent="{$propuesta->calc()}"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'London')">RECOMPENSAS</button>
                        </div>
                        <div id="London" class="tabcontent">
                            <table class="table table-striped tabla" style=" background-color: #ecececb3">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Monto a superar</th>
                                    <th>Opciones</th>
                                </tr>
                                {foreach from=$recompensas item=rec}
                                <tr>
                                    <td id="nombre{$rec->getNombre()}">{$rec->getNombre()}</td>
                                    <td id="monto{$rec->getNombre()}">{$rec->getMontoaSuperar()}</td>

                                     <td><a class="btn" id="{$rec->getId()}{$propuesta->getNombre()}" onclick="modificarRecompensa('{$url_base}','{$rec->getNombre()}',{$rec->getId()},'{$rec->getDescripcion()}',{$rec->getMontoaSuperar()},{$rec->getLimiteUsuarios()},'{$propuesta->getNombre()}')">
                  <i class="fa fa-times"></i></a></td>
                                </tr>
                                {/foreach}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jajaja probootstrap-heading probootstrap-animate" id="coments">
                {foreach from=$comentarios item=com}
                <div class="comment">
                    {if $com->getUsuario()->getImagen() != null}
                    <img src="./{$com->getUsuario()->getImagen()}">
                    {/if}
                    {if $com->getUsuario()->getImagen() == null}
                    <img src="./imgUsus/pepito.png">
                    {/if}
                    <div class="comment-content">
                        <p class="author"><strong>{$com->getUsuario()->getNick()}</strong></p>
                        <span>
                        {$com->getTexto()} 
                        </span>
                    </div>
                    {if $com->getUsuario()->getNick() == $usuLogNick}
                    <a id="{$com->getId()}" class="btn" onclick="borrarComent('{$com->getId()}','{$propuesta->getNombre()}');">
                    <i class="icon-trash"></i></a>  
                    {/if}
                    <a class="btn" onclick="likeComentario('{$usuLogNick}',{$com->getId()});">
                    <i class="fa fa-thumbs-up"></i> <span id="{$usuLogNick}{$com->getId()}">{$com->getLikes()}</span></a>
                </div>
                {/foreach}
            </div>
            <div class="jajaja ">
                <div class="jaja probootstrap-heading probootstrap-animate">
                    <form method="post" class="probootstrap-form">
                        <textarea rows="5" cols="57" name="textoComentario" id="textoComentario"></textarea>
                        <div class="form-group" >
                            <a style="margin-bottom:  10px;"onclick="javascript:Coment('{$url_base}','{$propuesta->getNombre()}');" id="submit" name="submit" class="btn btn-primary btn-lg">COMENTAR</a>
                        </div>
                    </form>
                </div>
            </div>
            <h2 class="probootstrap-heading probootstrap-animate otromasche2"> Quizás te interesen...</h2>
            <div class="accordion probootstrap-heading probootstrap-animate">
                <ul>
                    {foreach from=$propsCatego item=propC}
                    <li>
                        <div class="image_title">
                            <a href="#">{$propC->getNombre()}</a>
                        </div>
                        <a href="https://ibb.co/gGv6QS"><img src="./{$propC->getImagen()}" height="320" width="640" alt="transformers4_640x320" border="0"></a>
                    </li>
                    {/foreach}
                </ul>
            </div>
        </section>
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
        <script src="js/scripts.min.js"></script>
        <script src="js/carrusel.js"></script>
        <script src="js/main.min.js"></script>
        <script src="js/custom.js"></script>
         <script src="js/jquery.min.js"></script>
    <script src="js/sweetalert.js"></script>
        <script src="js/validar.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/alertas.js"></script>
    </body>
</html>


      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif" >
                       <div class="services">
                      <section class="pricecol">
                      <div style="text-align: center;">
                      {if {$propuesta->getImagen()}!=null}
                      <img src="./{$propuesta->getImagen()} " class="imgRedonda" width="400" height="400" />
                      {/if}
                      {if {$propuesta->getImagen()}==null}
                     <img src="/img/person_7.jpg" />
                      {/if}
                      </div>
                      <h3 style="text-align: center;"><Span>Datos personales:</span></h3>
                      <ul>
                      <li>Nombre: {$propuesta->getNombre()}</li>
                      <li>Monto:  ${$propuesta->getMonto()}  </li>
                      <li>Fecha publicada: {$propuesta->getFechaPublicada()}  </li>
                      <li>Descripción: {$propuesta->getDescripcion()}</li>
                      <li>Progeso actual:  ${$propuesta->getMontoActual()}</li>
                      <li> 
                           <div class="progress" style="max-width: 400px">
                           <div class="progress-bar progress-bar-s2" data-percent="{$propuesta->calc()}"></div>
                           </div>
                      </li>
                      <li><a href="{$url_base}propuesta/otracosa/">otra</a>
                      </li>
                      </ul>
                      </section>
                      </div>
           <div class="col-md-6 col-md-push-1 probootstrap-animate"  style="color: white;">            
             <div class="form-group" style="max-width: 300px;max-height: 300px">
                   
                
              </div>
              <div class="form-group">
                <label for="Desc">Descripcion:</label>
                 <p name="Desc"></p> 
              </div>
                <div class="form-group">
                    <label for="na">Progreso actual: ${$propuesta->getMontoActual()}</label>
               <div class="progress" style="max-width: 400px">
                    <div class="progress-bar progress-bar-s2" data-percent="{$propuesta->calc()}"></div>
                  </div>
                  <a href="/phpLuna/propuesta/nuevaColaboracion/{$propuesta->getNombre()}" class="btn btn-primary btn-black">Colaborar!</a>
                  </div>

          </div>
        </div>
        </div>

<div class="jajaja" id="coments">
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
            <a id="{$com->getId()}" class="btn" onclick="borrarComent('{$com->getId()}','{$propuesta->getNombre()}');">
                         <i class="icon-trash"></i></a>  
         {/if}
         <a class="btn" onclick="likeComentario('{$usuLogNick}',{$com->getId()});">
<i class="fa fa-thumbs-up"></i> <span id="{$usuLogNick}{$com->getId()}">{$com->getLikes()}</span></a>
          </div>
      {/foreach}

</div>
{if $NickLog != "" || $NickLog != null}
<div class="jajaja"> 
  <div class="jaja">
      <form method="post" class="probootstrap-form">
        <textarea rows="5" cols="57" name="textoComentario" id="textoComentario"></textarea>
        <div class="form-group" >
            <a onclick="javascript:Coment('{$url_base}','{$propuesta->getNombre()}');" id="submit" name="submit" class="btn btn-primary btn-lg">COMENTAR</a>
          </div>
    </form>
    </div>
  </div>
  {/if}

<h2 class="blanca">Recompensas</h2>
<table class="table table-striped tabla" style=" background-color: #ecececb3">
  <tr>
    <th>Nombre</th>
   <th>Monto a superar</th> 
  </tr>

     {foreach from=$recompensas item=rec}
  <tr>
    <td>{$rec->getNombre()}</td>
    <td>{$rec->getMontoaSuperar()}</td>
  </tr>
  {/foreach}
</table>
  

   
    </section>  

<div class="accordion">
  <ul>
     {foreach from=$propsCatego item=propC}
 
    <li>
      <div class="image_title">
        <a href="{$url_base}propuesta/detalleProp/{$propC->getNombre()}">{$propC->getNombre()}</a>
      </div>
      <a href="{$url_base}propuesta/detalleProp/{$propC->getNombre()}"><img src="./{$propC->getImagen()}" height="320" width="640" alt="transformers4_640x320" border="0"></a>
    </li>
     {/foreach}
   
  </ul>
</div>
          
  </section>
   <script src="js/scripts.min.js"></script>
   <script src="js/carrusel.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/validar.js" type="text/javascript"></script>
      </body></html>
