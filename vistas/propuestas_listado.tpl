
<!DOCTYPE html>
<html lang="es" >
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/dashboard.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    
    
  </head>

  <body style="background-image: url(img/img_sm_1.jpg)">
    {include file="cabezal.tpl"}
    <br>
    <br>
    <section class="probootstrap-hero"  data-stellar-background-ratio="0.1">
    <div class="container-fluid">
      <div class="row " style="max-width: 800px; margin: 0 auto">
       
        <div class="col-sm-12  col-md-12  main">
          <h1 class="page-header" >Propuestas</h1>
          <br>
          <h2 class="sub-header" style="color: #fff">{$titulo} <button id="agregar" name="agregar" class="btn btn-success pull-right" onClick="window.location='{$registrar_propuesta}'">Agregar</button></h2>

          {if $mensaje!=""}
            <div class="alert alert-danger" role="alert">{$mensaje}</div>
          {/if}
          <div class="table-responsive tabla scr">
            <table class="table table-striped  " style=" background-color: #ecececb3">
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
                       
                      {if $usuLogNick == $prop->getUsuario()}

                       <input type="button" value="Modificar" id="modificar" class="btn btn-success" onClick="window.location='{$url_base}propuesta/modificar/{$prop->getNombre()}/'"/>
                       {/if}

                       {if $prop->isFavoriteada($usuLogNick)}
                       <input type="button" value="Desfavoritear" id="desfavoritear" class="btn btn-danger" onClick="window.location='{$url_base}propuesta/desfavoritear/{$prop->getNombre()}/'"/>
                       {/if}
                       {if !$prop->isFavoriteada($usuLogNick)}
                       <input type="button" value="Favoritear" id="Favoritear" class="btn btn-success" onClick="window.location='{$url_base}propuesta/favoritear/{$prop->getNombre()}/'"/>
                       {/if}
                      <input type="button" value="Colaborar" id="colaborar" class="btn btn-success" onClick="window.location='{$nueva_colaboracion}{$prop->getNombre()}/'"/>
                      
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

