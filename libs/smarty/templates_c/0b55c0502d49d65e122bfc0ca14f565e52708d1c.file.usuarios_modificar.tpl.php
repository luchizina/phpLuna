<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-04 02:15:45
         compiled from "vistas\usuarios_modificar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9924244255cf5b831111dd7-70448237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b55c0502d49d65e122bfc0ca14f565e52708d1c' => 
    array (
      0 => 'vistas\\usuarios_modificar.tpl',
      1 => 1559596731,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9924244255cf5b831111dd7-70448237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'usuario_log' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cf5b8312c9884_14043708',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf5b8312c9884_14043708')) {function content_5cf5b8312c9884_14043708($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link href="css/imagenes.css" rel="stylesheet">
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
            <div class="col-sm-12  col-md-12  main">
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Modificar Usuario</h1>
              </div>
            </div>
          </div>
        </div>

      <section class="probootstrap-section" >
        <div class="container" >
          <div class="row" style="margin: 0 auto">

          <div class="col-md-5 probootstrap-animate mx-auto" style="margin: auto 0; color: white; font-family: Montserrat,Arial,sans-serif "  >
            <form method="post" enctype="multipart/form-data" class="probootstrap-form">
              <div class="form-group">
                <label for="Nombre">Nombre</label>
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usuario_log']->value->getNombre();?>
" id="nombre" name="nombre">
              </div>
              <div class="form-group">
                <label for="Apellido">Apellido</label>
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usuario_log']->value->getApellido();?>
" id="apellido" name="apellido">
              </div>
              <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usuario_log']->value->getCorreo();?>
" id="correo" name="correo">
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" placeholder="xxxxxx" id="password" name="password">
              </div>
              <div class="form-group">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['usuario_log']->value->getCelular();?>
" id="celular" name="celular">
              </div>
              <div class="form-group">
               <div class="imgUp">
                <?php if ($_smarty_tpl->tpl_vars['usuario_log']->value->getImagen()=='') {?>
                <div class="imagePreview"></div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['usuario_log']->value->getImagen()!='') {?>
                <div class="imagePreview" style="background-image: url('./<?php echo $_smarty_tpl->tpl_vars['usuario_log']->value->getImagen();?>
')"></div>
                <?php }?>
               <label class="btn btn-primary btn-lg">Elegir imagen<input type="file" name="archivo" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;"></label>
              </div> 
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
    <?php echo '<script'; ?>
 src="js/subirImg.js" type="text/javascript"><?php echo '</script'; ?>
>
    </section>          
  </section>
      </body></html><?php }} ?>
