<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-20 20:30:55
=======
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-26 16:20:34
>>>>>>> e6bf66fd39445788b83c4caf3b08d561a2f8c402
         compiled from "vistas\cabezal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9669151855ce709f4d8de05-79231675%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb05f10fe29da8a558e3c965866d6cd5dd601380' => 
    array (
      0 => 'vistas\\cabezal.tpl',
<<<<<<< HEAD
      1 => 1558376376,
=======
      1 => 1558880414,
>>>>>>> e6bf66fd39445788b83c4caf3b08d561a2f8c402
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9669151855ce709f4d8de05-79231675',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ce709f50b66c1_32248688',
  'variables' => 
  array (
    'usuLogNick' => 0,
    'usuLogTipo' => 0,
    'url_login' => 0,
    'url_regis' => 0,
    'usuLogueado' => 0,
    'url_logout' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce709f50b66c1_32248688')) {function content_5ce709f50b66c1_32248688($_smarty_tpl) {?>
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
             <img src="img/logo2.png" alt="Luna" height="100"> 
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
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
                  <?php if ($_smarty_tpl->tpl_vars['usuLogNick']->value!=''&&$_smarty_tpl->tpl_vars['usuLogTipo']->value==0) {?>
                  <li><a href="/phpLuna/propuesta/listadoPropsAgregadas/1">Aceptar/rechazar propuestas</a></li>
                   <?php }?>
                </ul>
              </li>
               <?php if ($_smarty_tpl->tpl_vars['usuLogNick']->value=='') {?>
              <li class="probootstra-cta-button last"><a href="<?php echo $_smarty_tpl->tpl_vars['url_login']->value;?>
" class="btn btn-primary">INICIAR SESIÓN</a></li>
              <li class="probootstra-cta-button last"><a href="<?php echo $_smarty_tpl->tpl_vars['url_regis']->value;?>
" class="btn btn-primary">REGISTRARSE</a></li>
               <?php } else { ?>
                <li><a href="/phpLuna/usuario/verPerfil/<?php echo $_smarty_tpl->tpl_vars['usuLogNick']->value;?>
">¡Hola <?php echo $_smarty_tpl->tpl_vars['usuLogueado']->value;?>
!</a></li>
                <li class="probootstra-cta-button last"><a href="<?php echo $_smarty_tpl->tpl_vars['url_logout']->value;?>
" class="btn btn-primary">CERRAR SESIÓN</a></li>
               
                 <?php }?>
            </ul>
          </div>
        </div>
      </nav>
<?php }} ?>
