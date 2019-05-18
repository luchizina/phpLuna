
 <head>
    <link rel="shortcut icon" href="img/moon.png" type="image/png" />
    <title>LUNA</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
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
             <img src="img/logo2.png" alt="Smiley face" height="100"> 
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.html">Inicio</a></li>
              <li><a href="about.html">Propuestas</a></li>
               {if $usuLogNick == ""}
              <li class="probootstra-cta-button last"><a href="{$url_login}" class="btn btn-primary">INICIAR SESIÓN</a></li>
              <li class="probootstra-cta-button last"><a href="{$url_regis}" class="btn btn-primary">REGISTRARSE</a></li>
               {else}
                <li class="probootstra-cta-button last"><a href="{$url_logout}" class="btn btn-primary">CERRAR SESIÓN</a></li>
                <li><a href="about.html">¡Hola {$usuLogueado}!</a></li>
                 {/if}
            </ul>
          </div>
        </div>
      </nav>
