<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-20 11:50:28
         compiled from "vistas\propuestas_detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10443521535ce2beb4a48122-68518152%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08e12de8fc9c9d6be32a84ef7a419ea195e7387c' => 
    array (
      0 => 'vistas\\propuestas_detalle.tpl',
      1 => 1558358023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10443521535ce2beb4a48122-68518152',
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
  'unifunc' => 'content_5ce2beb4b9a320_02008911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce2beb4b9a320_02008911')) {function content_5ce2beb4b9a320_02008911($_smarty_tpl) {?><!DOCTYPE html>

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
                <h1 class="probootstrap-heading probootstrap-animate">Ver Propuesta</h1>
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
                <label for="Nombre"><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
</label>
               
              </div>
              <div class="form-group">
                <label for="Descripción"><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getDescripcion();?>
</label>
              
              </div>

              <div class="form-group">
                <label for="celular"><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getMonto();?>
</label>
               
              </div>
               <div class="form-group">
                <label for="fecha_pub"><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getFechaPublicada();?>
</label>
                
              </div>
                <div class="form-group">
                <img src="./<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getImagen();?>
" />
                
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
