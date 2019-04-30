<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-04-09 02:16:53
         compiled from "vistas\cabezal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12562538875c9bf6d7bd4698-35041843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef5654c1602441bd6322a41bc70c054361974260' => 
    array (
      0 => 'vistas\\cabezal.tpl',
      1 => 1554768891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12562538875c9bf6d7bd4698-35041843',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5c9bf6d7c11592_52108660',
  'variables' => 
  array (
    'proyecto' => 0,
    'url_logout' => 0,
    'url_base' => 0,
    'buscar' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5c9bf6d7c11592_52108660')) {function content_5c9bf6d7c11592_52108660($_smarty_tpl) {?><nav class="navbar navbar-inverse navbar-fixed-top">
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
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_logout']->value;?>
">Cerrar Sesión</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/nuevo/">Registrarse</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
empresa/lista/">Listar empresas</a></li>
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
