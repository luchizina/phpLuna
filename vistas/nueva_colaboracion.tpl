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
                <h1 class="probootstrap-heading probootstrap-animate">Agregar Colaboracion</h1>
              </div>
            </div>
          </div>
        </div>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif" >
            {if $mensaje!=""}
            <div class="alert alert-danger" role="alert">{$mensaje}</div>
            {/if}
            {if $mensaje==""}
            <form method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="monto">Monto</label>
                <input id="monto" name="monto"  onkeyup="javascript:verRec()" type="number" placeholder="Ej: 500" class="form-control" required="">
                <span id="mensajito"></span>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="guardar" name="guardar" value="Colaborar">
              </div>
            </form>
      
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">            
            <h2 style="color:#fff">Recompensas para la propuesta a colaborar</h2>
            <div class="row">
            <div class="col-sm-12  col-md-12  main">
            <div class="table-responsive scrip src">
            <table class="table table-striped tabla" style=" background-color: #ecececb3">
              <thead>
                <tr>
                  <th style="background-color: #959090; color:#fff">Nombre: </th>
                  <th style="background-color: #959090; color:#fff">Monto minimo necesario: </th>
                  <th style="background-color: #959090; color:#fff">Limite de usuarios: </th>
                  <th style="background-color: #959090; color:#fff">Usuarios actuales: </th>
                  <th style="background-color: #959090; color:#fff">Descripcion: </th>
                </tr>
              </thead>
              <tbody>
                 {if $recompensas != null }                 
                {foreach from=$recompensas item=recompensa}
                  <tr>
                    <td>{$recompensa->getNombre()|upper}</td>
                    <td>{$recompensa->getMontoaSuperar()}</td>
                    <td>{$recompensa->getLimiteUsuarios()}</td>
                    <td>{$recompensa->getCantActual()}</td>
                    <td>{$recompensa->getDescripcion()}</td>
                  </tr>
                {/foreach}
               {/if} 
               {if  $recompensas == null}                 
                  <tr>
                    <td>No hay recompensas para esta propuesta</td>
                  </tr>
               {/if} 
               <tfoot>
                 <h5 style="color: #fff">Si el limite de usuarios es superado se le otorgara la recompensa anterior a la que el monto ingresado corresponde</h5>
               </tfoot>
              </tbody>
            </table>
          </div>
          </div>
          </div>
          </div>
           {/if}
        </div>
        </div>

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
      function verRec(){
        var monto = $('#monto').val();
        var propuesta = window.location.pathname;
        var array = propuesta.split('/');
        var nombre = array[4];
        console.log(monto);
        $.ajax({
          url: '{$url_base}propuesta/verrecPrecio',
          data: 'propuesta='+nombre+'&monto='+monto,
          type: 'post',
          success:function(res){
            $('#mensajito').html(res);
          }
        })
      }
    </script>
    </section>          
  </section>
      </body></html>