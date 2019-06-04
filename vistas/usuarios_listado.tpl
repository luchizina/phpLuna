
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
          <h1 class="page-header">Usuarios</h1>
          <h2 class="sub-header">{$titulo}</h2>
          {if $mensaje!=""}
            <div class="alert alert-danger" role="alert">{$mensaje}</div>
          {/if}
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Nick</th>
                  <th>Email</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                {foreach from=$usuarios item=persona}
                  <tr>
                    <td>{$persona->getNombre()|upper}</td>
                    <td>{$persona->getApellido()}</td>
                   <td>{$persona->getNick()}</td>
                    <td>{$persona->getCorreo()}</td>
                    <td>
                       {if $usuLogNick == $persona->getNick()}
                      <input type="button" value="Borrar" class="btn btn-danger" onClick="window.location='{$url_base}usuario/listado/borrar/{$persona->getNick()}/'"/>
                      <input type="button" value="Modificar" class="btn btn-success" onClick="window.location='{$url_base}usuario/modificar/{$persona->getNick()}/'"/>
                       {/if}
                         <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginAvatar{$persona->getNick()}">Ver perfil</a>
                     <!-- <input type="button" value="Ver perfil" class="btn btn-success" onClick="window.location='{$url_base}usuario/verPerfil/{$persona->getNick()}/'"/>-->
                    <!--  <input type="button" value="Favoritos" class="btn btn-submit" onClick="cargarFavoritos();"/>-->
                     <div class="modal fade" id="modalLoginAvatar{$persona->getNick()}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="./{$persona->getImagen()}" style="border-radius:50%;" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body text-center mb-1">

        <h5 class="mt-1 mb-2">{$persona->getNombre()} {$persona->getApellido()}</h5>
        <label data-error="wrong" data-success="right" for="form29" class="ml-0">Correo: {$persona->getCorreo()}</label><br>
        <label data-error="wrong" data-success="right" for="form29" class="ml-0">Usuario: {$persona->getNick()}</label>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>

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

