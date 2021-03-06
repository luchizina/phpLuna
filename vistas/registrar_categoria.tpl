
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

  
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  </head>
  <body >
    {include file="cabezal.tpl"}
<section class="probootstrap-hero bg" style="background-image: url(img/hero_bg_bw_1.jpg)"  data-stellar-background-ratio="0">
    <div class="container-fluid" > 
               
      <div class="row" style="max-width: 700px; margin: 0 auto">  
      <div> 

           <form class="form-horizontal" method="post" style="margin-top: 100px">
            <fieldset>
              <h2  style="font-weight: bold;font-style: italic;text-align: center; color: white">AGREGAR NUEVA CATEGORÍA</h2>  
              <label  for="nombre" style=" color: white">Nombre:</label>  
              <input id="nombre" name="nombreP" type="text" placeholder="La vela en Pdú" class="form-control input-md" required="">
              <button id="guardar" name="guardar" class="btn btn-primary ">Agregar</button>
               <label class=" control-label" for="guardar"></label>
               
            </fieldset>
          </form>  
          </div>   
        <div class="col-sm-12  col-md-12  main" >
          <div class="table-responsive scr" >
            <table class="table table-striped tabla" style=" background-color: #ecececb3;">
              <thead>
                <tr>
                  <th>Nombre</th>
                </tr>
              </thead>
              <tbody>
                {foreach from=$categorias item=persona}
                  <tr>
                    <td id="nombre{$persona->getNombreH()}">{$persona->getNombreH()|upper}</td>
                  
                    <td>
                       <a class="btn" href="{$url_base}propuesta/borrarCa/{$persona->getNombreP()}/">
                         <i class="icon-trash"></i></a>

                      
                     
                    <!--  <input type="button" value="Favoritos" class="btn btn-submit" onClick="cargarFavoritos();"/>-->
                    </td>
                      <td><a class="btn" id="{$persona->getNombreH()}" onclick="modificarCategoria('{$url_base}','{$persona->getNombreH()}')"><i class="fa fa-edit"></i></a></td>
                  </tr>
                {/foreach}
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
     </section>
   <script src="js/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        <script src="js/sweetalert.js"></script> 
         <script type="text/javascript" src="js/alertas.js"></script>
  </body>
</html>