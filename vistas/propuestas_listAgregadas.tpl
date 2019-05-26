
<!DOCTYPE html>
<html lang="es" >
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/dashboard.css" rel="stylesheet">
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    
    
  </head>

  <body class="bg">
    {include file="cabezal.tpl"}
    <br>
    <br>
    <section class="probootstrap-hero"  data-stellar-background-ratio="0.1">
    <div class="container-fluid">
      <div class="row " style="max-width: 1000px; margin: 0 auto">
       
        <div class="col-sm-12  col-md-12  main" >
          <h1 class="page-header" style="color: #fff ; text-align: center;">Propuestas</h1>
          <br>
          <h2 class="sub-header" style="color: #fff">Holas <button id="agregar" name="agregar" class="btn btn-success pull-right" onClick="window.location='{$registrar_propuesta}'">Agregar</button></h2>

          <div class="table-responsive tabla scr">
            <table class="table table-striped  " style=" background-color: #ececec;">
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
                {foreach from=$propsAgre item=prop}

                  <tr>
                    <td>{$prop->getNombre()|upper}</td>
                    <td>{$prop->getDescripcion()}</td>
                   <td>{$prop->getMonto()}</td>
                    <td>{$prop->getFechaPublicada()}</td>
                    <td>
                <a class="btn" href="{$url_base}propuesta/detalleProp/{$prop->getNombre()}/">
                  <i class="icon-eye"></i></a>
                    
                
                     
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

