
 <head>
    <link rel="shortcut icon" href="img/moon.png" type="image/png" />
    <title>LUNA</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/busqueda.css">
    <link rel="stylesheet" href="css/custom.css">
  </head>
      <nav class="navbar navbar-default probootstrap-navbar">

        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
             <img src="img/logo2.png" alt="Luna" height="100"> 




          </div>
          

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <svg style="display: none">
  <symbol id="magnify" viewBox="0 0 18 18" height="100%" width="100%">
    <path d="M12.5 11h-.8l-.3-.3c1-1.1 1.6-2.6 1.6-4.2C13 2.9 10.1 0          6.5 0S0 2.9 0 6.5 2.9 13 6.5 13c1.6 0 3.1-.6 4.2-1.6l.3.3v.8l5 5          1.5-1.5-5-5zm-6 0C4 11 2 9 2 6.5S4 2 6.5 2 11 4 11 6.5 9 11 6.5            11z" fill="#fff" fill-rule="evenodd"/>
  </symbol>
</svg>  

<div class="search-bar">
  <input class="input-1" type="text" id='xD' placeholder="&nbsp;">
  <span class="label">Buscar propuestas</span>
  <span class="highlight"></span>
  <div class="search-btn" onClick="location.href='{$url_base}propuesta/filtrar/'+ document.getElementById('xD').value;">
   <svg class="icon icon-18">
   <use xlink:href="#magnify"></use>
   </svg>
   </div>
  </div>
</div>
            <ul class="nav navbar-nav navbar-right">




              <li class="active"><a href="index.html">Inicio</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Usuarios</a>
                <ul class="dropdown-menu">
                  <li><a href="/phpLuna/usuario/listado/">Listado</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Propuestas</a>
                <ul class="dropdown-menu">
                  <li><a href="/phpLuna/propuesta/listado/">Listado</a></li>
                  {if $usuLogNick != "" and $usuLogTipo == 0}
                  <li><a href="/phpLuna/propuesta/listadoPropsAgregadas/1">Aceptar/rechazar propuestas</a></li>
                   {/if}
                </ul>
              </li>
               {if $usuLogNick == ""}
              <li class="probootstra-cta-button last"><a href="{$url_login}" class="btn btn-primary">INICIAR SESIÓN</a></li>
              <li class="probootstra-cta-button last"><a href="{$url_regis}" class="btn btn-primary">REGISTRARSE</a></li>
               {else}
                <li><a href="/phpLuna/usuario/verPerfil/{$usuLogNick}">¡Hola {$usuLogueado}!</a></li>
                <li class="probootstra-cta-button last"><a href="{$url_logout}" class="btn btn-primary">CERRAR SESIÓN</a></li>
               
                 {/if}
            </ul>
          </div>
        </div>
      </nav>
