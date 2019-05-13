<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-13 23:58:54
=======
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-13 23:33:35
>>>>>>> acfb9354e2bf8a0de8724502318a19981b249fdb
         compiled from "vistas\cabezal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3460903965cd9dfa0cadbe1-19867920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb05f10fe29da8a558e3c965866d6cd5dd601380' => 
    array (
      0 => 'vistas\\cabezal.tpl',
<<<<<<< HEAD
      1 => 1557784728,
=======
      1 => 1557783212,
>>>>>>> acfb9354e2bf8a0de8724502318a19981b249fdb
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3460903965cd9dfa0cadbe1-19867920',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cd9dfa0cbc658_51830300',
  'variables' => 
  array (
    'proyecto' => 0,
    'usuLogueado' => 0,
    'url_login' => 0,
    'url_logout' => 0,
    'url_base' => 0,
    'buscar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<<<<<<< HEAD
<?php if ($_valid && !is_callable('content_5cd0bcb390cee0_10997146')) {function content_5cd0bcb390cee0_10997146($_smarty_tpl) {?> <head>
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
              <li class="probootstra-cta-button last"><a href="donate.html" class="btn btn-primary">INICIAR SESIÓN</a></li>
            </ul>
          </div>
        </div>
      </nav>
         <li class="probootstra-cta-button last"><a href="donate.html" class="btn btn-primary">Donate</a></li>
            </ul>
          </div>
        </div>
      </nav><?php }} ?>
=======
<?php if ($_valid && !is_callable('content_5cd9dfa0cbc658_51830300')) {function content_5cd9dfa0cbc658_51830300($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <?php if ($_smarty_tpl->tpl_vars['usuLogueado']->value=='') {?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_login']->value;?>
">Iniciar sesión</a></li>
            <?php } else { ?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_logout']->value;?>
">Cerrar sesión</a></li>
               <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_logout']->value;?>
">¡Hola <?php echo $_smarty_tpl->tpl_vars['usuLogueado']->value;?>
!</a></li>
               <?php }?>
          </ul>
          <form class="navbar-form navbar-right" method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/buscar/">
            <input type="text" id="buscar" name="buscar" class="form-control" placeholder="Buscar..." value='<?php echo $_smarty_tpl->tpl_vars['buscar']->value;?>
'>
            <input type="submit" value="Buscar" class="form-control btn btn-primary">
          </form>
        </div>
      </div>
    </nav><?php }} ?>
>>>>>>> acfb9354e2bf8a0de8724502318a19981b249fdb
