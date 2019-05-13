<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">{$proyecto}</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            {if $usuLogueado == ""}
            <li><a href="{$url_login}">Iniciar sesión</a></li>
            {else}
            <li><a href="{$url_logout}">Cerrar sesión</a></li>
               <li><a href="{$url_logout}">¡Hola {$usuLogueado}!</a></li>
               {/if}
          </ul>
          <form class="navbar-form navbar-right" method="post" action="{$url_base}usuario/buscar/">
            <input type="text" id="buscar" name="buscar" class="form-control" placeholder="Buscar..." value='{$buscar}'>
            <input type="submit" value="Buscar" class="form-control btn btn-primary">
          </form>
        </div>
      </div>
    </nav>