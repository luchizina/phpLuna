<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-17 23:11:32
         compiled from "vistas\cabezal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7730758775cdf23846ecc81-81272203%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb05f10fe29da8a558e3c965866d6cd5dd601380' => 
    array (
      0 => 'vistas\\cabezal.tpl',
      1 => 1558050384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7730758775cdf23846ecc81-81272203',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuLogNick' => 0,
    'url_login' => 0,
    'url_regis' => 0,
    'url_logout' => 0,
    'usuLogueado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cdf238528ebe9_09544871',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdf238528ebe9_09544871')) {function content_5cdf238528ebe9_09544871($_smarty_tpl) {?>
 <head>
    <link rel="shortcut icon" href="img/moon.png" type="image/png" />
    <title>LUNA</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
  </head>
      <nav class="navbar navbar-default probootstrap-navbar" style="display: block;">
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
               <?php if ($_smarty_tpl->tpl_vars['usuLogNick']->value=='') {?>
              <li class="probootstra-cta-button last"><a href="<?php echo $_smarty_tpl->tpl_vars['url_login']->value;?>
" class="btn btn-primary">INICIAR SESIÓN</a></li>
              <li class="probootstra-cta-button last"><a href="<?php echo $_smarty_tpl->tpl_vars['url_regis']->value;?>
" class="btn btn-primary">REGISTRARSE</a></li>
               <?php } else { ?>
                <li class="probootstra-cta-button last"><a href="<?php echo $_smarty_tpl->tpl_vars['url_logout']->value;?>
" class="btn btn-primary">CERRAR SESIÓN</a></li>
                <li><a href="about.html">¡Hola <?php echo $_smarty_tpl->tpl_vars['usuLogueado']->value;?>
!</a></li>
                 <?php }?>
            </ul>
          </div>
        </div>
      </nav>
<?php }} ?>
