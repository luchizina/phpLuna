<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-29 20:03:56
         compiled from "vistas\nueva_colaboracion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2841885375cef0fdc3811b1-19189658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd8d4aeb4edb11e2b85b54ed7f61b912892d7854' => 
    array (
      0 => 'vistas\\nueva_colaboracion.tpl',
      1 => 1559083145,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2841885375cef0fdc3811b1-19189658',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'recompensas' => 0,
    'rec' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cef0fdc4b1cb4_08225967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cef0fdc4b1cb4_08225967')) {function content_5cef0fdc4b1cb4_08225967($_smarty_tpl) {?>
<!DOCTYPE html>

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
                <h1 class="probootstrap-heading probootstrap-animate">Agregar Colaboracion</h1>
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
                <label for="monto">Monto</label>
                <input id="monto" name="monto" type="number" placeholder="Ej: 500" class="form-control" required="">
              </div>
             <!-- <label for="rec">Recompensa</label>
              <select name="rec">
              <div class="form-group">
                <?php  $_smarty_tpl->tpl_vars['rec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recompensas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rec']->key => $_smarty_tpl->tpl_vars['rec']->value) {
$_smarty_tpl->tpl_vars['rec']->_loop = true;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['rec']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['rec']->value->getNombre();?>
</option>
                <?php } ?>
              </div>
            </select> -->
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="guardar" name="guardar" value="Colaborar">
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
      </body></html>
<?php }} ?>
