<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-20 11:11:09
         compiled from "vistas\propuestas_modificar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298445ce2b57d12ee14-19848391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47c26a9960d7deb1884814d3bbd5b5a1610d84aa' => 
    array (
      0 => 'vistas\\propuestas_modificar.tpl',
      1 => 1558040242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298445ce2b57d12ee14-19848391',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'propuesta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ce2b57d2b5446_46460371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce2b57d2b5446_46460371')) {function content_5ce2b57d2b5446_46460371($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="js/vendor/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="js/vendor/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body >

    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section class="probootstrap-hero" style="background-image: url(img/hero_bg_bw_1.jpg); height:100%"  data-stellar-background-ratio="0.1">
        <div class="container">
          <div class="row">
            <div class="col-md-12" >
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Modificar Propuesta</h1>
              </div>
            </div>
          </div>
        </div>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif" >
            <form method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
" id="nombre" name="nombre">
              </div>
              <div class="form-group">
                <label for="Descripción">Descripción</label>
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getDescripcion();?>
" id="descripcion" name="descripcion">
              </div>

              <div class="form-group">
                <label for="celular">Monto</label>
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getMonto();?>
" id="monto" name="monto">
              </div>
               <div class="form-group">
                <label for="fecha_pub">Fecha de publicación</label>
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getFechaPublicada();?>
" id="fechaPub" name="fechaPub">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="MODIFICAR">
              </div>
            </form>
          </div>
        </div>
        </div>

    <?php echo '<script'; ?>
 src="js/scripts.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/main.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
>
    </section>          
  </section>
      </body></html><?php }} ?>
