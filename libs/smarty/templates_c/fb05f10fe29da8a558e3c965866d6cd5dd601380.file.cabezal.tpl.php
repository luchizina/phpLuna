<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-13 20:57:41
=======
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-13 22:11:35
>>>>>>> d8e224327f0bb3a174f9e4e9bb2bf5a25cd6686c
         compiled from "vistas\cabezal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4226403555cd0bcb390b0b7-60355023%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb05f10fe29da8a558e3c965866d6cd5dd601380' => 
    array (
      0 => 'vistas\\cabezal.tpl',
<<<<<<< HEAD
      1 => 1557773792,
=======
      1 => 1557778292,
>>>>>>> d8e224327f0bb3a174f9e4e9bb2bf5a25cd6686c
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4226403555cd0bcb390b0b7-60355023',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cd0bcb390cee0_10997146',
  'variables' => 
  array (
    'proyecto' => 0,
    'url_login' => 0,
    'url_logout' => 0,
    'url_base' => 0,
    'buscar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd0bcb390cee0_10997146')) {function content_5cd0bcb390cee0_10997146($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top">
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
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_login']->value;?>
">Iniciar sesión</a></li>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_logout']->value;?>
">Cerrar</a></li>

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
