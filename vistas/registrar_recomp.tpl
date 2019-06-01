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
                <h1 class="probootstrap-heading probootstrap-animate">Registrar Recompensa</h1>
              </div>
               {if $mensaje!=""}
                  <div class="alert alert-danger" role="alert">{$mensaje}</div>
               {/if}
            </div>
          </div>
        </div>

      <section class="probootstrap-section">
        <input id="tituloPropuesta" name="tituloPropuesta" type="hidden" value={$tituloPropuesta}  class="form-control">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif" >
            <form method="post" class="probootstrap-form" enctype="multipart/form-data" id="registr">
              <div class="form-group">
                <label for="nombreR">Nombre</label>
                <input id="nombreR" name="nombreR" type="text" placeholder="Juan" class="form-control" required="">
              </div>
               <div class="form-group">
               <label for="desc">Descripción:</label>  
            
              <textarea id="desc" name="desc" type="text" placeholder="Esto es una descripcion de mi tarea" class="form-control input-md" required="">
              </textarea>
             
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
                <input type="submit" name="jaja" value="Guardar y agregar otra" class="btn btn-primary" onClick="window.location='{$url_base}propuesta/registrarRecom/{$tituloPropuesta}'"/>
              </div>
               
            </form>
          </div>
         <div class="col-md-6 col-md-push-1 probootstrap-animate">            
            <h2 style="color:#fff">Recompensas ya ingresadas</h2>
            <div class="row">
            <div class="col-sm-12  col-md-12  main">
            <div class="table-responsive scrip src">
            <table class="table table-striped tabla" style=" background-color: #ecececb3">
              <thead>
                <tr>
                  <th style="background-color: #959090; color:#fff">Nombre: </th>
                </tr>
              </thead>
              <tbody>
                 {if $reco != null }                 
                {foreach from=$reco item=recompensa}
                  <tr>
                    <td>{$recompensa->getNombre()|upper}</td>
                  </tr>
                {/foreach}
               {/if} 
               {if  $reco == null}                 
                  <tr>
                    <td>Aún no tienes recompensas</td>
                  </tr>
               {/if} 
              </tbody>
            </table>
          </div>
           <div class="form-group">
                 <input type="button" name="que" value="Listo!" class="btn btn-primary" onClick="window.location='{$url_base}propuesta/listado'"/>
              </div>
          </div>
          </div>
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

