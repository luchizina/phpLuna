
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
    <!--<script type="text/javascript" src="js/funciones.js"></script>-->
    
    
  </head>

  <body>
    {include file="cabezal.tpl"}
    <div class="container-fluid">
      <div class="row">
       
        <div class="col-sm-12  col-md-12  main">
          <h1 class="page-header">Propuestas</h1>
          <h2 class="sub-header">{$titulo} <button id="agregar" name="agregar" class="btn btn-success pull-right" onClick="window.location='{$registrar_propuesta}'">Agregar</button></h2>
          {if $mensaje!=""}
            <div class="alert alert-danger" role="alert">{$mensaje}</div>
          {/if}
          <div class="table-responsive">



            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Monto</th>
                  <th>Fecha agregada</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                {foreach from=$propuestas item=prop}

                  <tr>
                    <td>{$prop->getNombre()|upper}</td>
                    <td>{$prop->getDescripcion()}</td>
                   <td>{$prop->getMonto()}</td>
                    <td>{$prop->getFechaPublicada()}</td>
                    <td>
                      <input type="button" value="Borrar" class="btn btn-danger" onClick="window.location='{$url_base}propuesta/borrar/{$prop->getNombre()}/'"/>

                      <input type="button" value="colaborar" id="colaborar" class="btn btn-success" onClick="window.location='{$url_base}propuesta/nuevaColaboracion/{$prop->getNombre()}/'"/>
                     
                    </td>
                  </tr>
                {/foreach}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--{include file="favoritos.tpl"}-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

  </body>
</html>

