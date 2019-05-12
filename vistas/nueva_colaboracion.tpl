<!DOCTYPE html>
<html lang="es">
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">    
    <title>{$proyecto}</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    {include file="cabezal.tpl"}
    <div class="container-fluid">
      <div class="row">
       
        <div class="col-sm-12  col-md-12  main">
          <h1 class="page-header">Propuestas</h1>
          <h2 class="sub-header">{$titulo}</h2>
          {if $mensaje!=""}
            <div class="alert alert-danger" role="alert">{$mensaje}</div>
          {/if}
          <form class="form-horizontal" method="post" enctype="multipart/form-data" id="registr">
            <fieldset>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="monto">Monto</label>  
              <div class="col-md-4">
              <input id="monto" name="monto" type="number" placeholder="Ej: 500" class="form-control input-md" required="">
              </div>
            </div>

            <select name="rec">
             <div class="form-group">
              <label class="col-md-4 control-label" for="rec">Recompensa</label>  
              <div class="col-md-4">
                {foreach from=$recompensas item=rec}
              <option value="{$rec->getId()}">{$rec->getNombre()}</option>
                {/foreach}
              </div>
            </div>
            </select>

            <!-- Button -->
            <div class="form-group">
              <div class="col-md-4">
                <button id="guardar" name="guardar" class="btn btn-success">Agregar</button>
              </div>
            </div>

            </fieldset>
          </form>
      </div>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

