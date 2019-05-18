<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">    
    <title>{$proyecto}</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
     {include file="cabezal.tpl"}
  </head>
  <body>
   <section class="probootstrap-hero" style="background-image: url(img/img_sq_3.jpg); height:100%"  data-stellar-background-ratio="0.1">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12  col-md-12  main">
        <br>
          <h2 class="sub-header">{$titulo}</h2>
          {if $mensaje!=""}
            <div class="alert alert-danger" role="alert">{$mensaje}</div>
          {/if}
          <form class="form-horizontal" method="post">
            <fieldset>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nombre">Nombre:</label>  
              <div class="col-md-4">
              <input id="nombre" name="nombre" type="text" placeholder="La vela en Pdú" class="form-control input-md" required="">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="desc">Descripción:</label>  
              <div class="col-md-4">
              <textarea id="desc" name="desc" type="text" placeholder="Esto es una descripcion de mi tarea" class="form-control input-md" required="">
              </textarea>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="fechaA">Fecha:</label>  
              <div class="col-md-4">
              <input id="fechaA" name="fechaA" type="Date" class="form-control input-md" required="">
              </div>
            </div>

             <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="monto">Monto</label>  
              <div class="col-md-4">
              <input id="monto" name="monto" type="number" class="form-control input-md" required="">
              </div>
            </div>
              <style>
.dis{  display: block;
width: 100%;
height: 34px;
padding: 6px 12px;
font-size: 14px;
line-height: 1.42857143;
color: #555;
background-color: #fff;
background-image: none;
border: 1px solid #ccc;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s; 
}
              </style>
         <div class="form-group">
              <label class="col-md-4 control-label" for="monto">Categoria</label>  
              <div class="col-md-4">
           <select name="catego" class="dis">
              {foreach from=$categorias item=persona}
            <option value="{$persona->getNombreH()}">{$persona->getNombreH()|upper}</option>
            {/foreach}
          </select>
           </div>
            </div> 
           <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="ci">Recompensa</label>  
              <div class="col-md-4">
              <input id="recom" name="recom" type="text" placeholder="Entradas gratis" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="guardar"></label>
              <div class="col-md-4">
                <button id="guardar" name="guardar" class="btn btn-success">Agregar</button>
              </div>
            </div>

            </fieldset>
          </form>
      </div>
    </div>
 </section>
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

