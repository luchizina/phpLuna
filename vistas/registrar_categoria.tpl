
<!DOCTYPE html>
<html lang="es">
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    
    <!--<title>{$proyecto}</title>-->

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>  
  </head>
  <body>
    {include file="cabezal.tpl"}
<section class="probootstrap-hero bg" style="background-image: url(img/hero_bg_bw_1.jpg)"  data-stellar-background-ratio="0">
    <div class="container-fluid" > 
               
      <div class="row" style="max-width: 700px; margin: 0 auto">  
      <div> 
           <form class="form-horizontal" method="post" style=" padding-top: 50px">
            <fieldset>

              <label  for="nombre">Nombre:</label>  
              <input id="nombre" name="nombreP" type="text" placeholder="La vela en Pdú" class="form-control input-md" required="">
              <button id="guardar" name="guardar" class="btn btn-success">Agregar</button>
               <label class=" control-label" for="guardar"></label>
               
            </fieldset>
          </form>  
          </div>   
        <div class="col-sm-12  col-md-12  main" >
          <div class="table-responsive">
            <table class="table table-striped tabla" style=" background-color: #ecececb3">
              <thead>
                <tr>
                  <th>Nombre</th>
                </tr>
              </thead>
              <tbody>
                {foreach from=$categorias item=persona}
                  <tr>
                    <td>{$persona->getNombreH()|upper}</td>
                  
                    <td>
                      <input type="button" value="Borrar" class="btn btn-danger" onClick="window.location='{$url_base}propuesta/borrarCa/{$persona->getNombreP()}/'"/>
                     
                    <!--  <input type="button" value="Favoritos" class="btn btn-submit" onClick="cargarFavoritos();"/>-->
                    </td>
                  </tr>
                {/foreach}
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
     </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  </body>
</html>