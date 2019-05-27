<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-20 20:30:55
         compiled from "vistas\usuarios_nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2398367475ce2f25f0712d1-31532557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c8ee8b714c2a77826cf3b8b4ca6f42cfcdb50bc' => 
    array (
      0 => 'vistas\\usuarios_nuevo.tpl',
      1 => 1558230213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2398367475ce2f25f0712d1-31532557',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ce2f25f7954e7_47045784',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce2f25f7954e7_47045784')) {function content_5ce2f25f7954e7_47045784($_smarty_tpl) {?><!DOCTYPE html>

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
                <h1 class="probootstrap-heading probootstrap-animate">Registrar Usuario</h1>
              </div>
            </div>
          </div>
        </div>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif" >
            <form method="post" class="probootstrap-form" enctype="multipart/form-data" id="registr">
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input id="nombre" name="nombre" type="text" placeholder="Juan" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="apellido">Apellido</label>
                <input id="apellido" name="apellido" type="text" placeholder="Silvera" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="nick">Nick</label>
                <input id="nick" name="nick" type="text" placeholder="Ej: Pepe" class="form-control" required="" onblur="javascript:validarnick();">
                <span id="avisa" style="color: red"></span>
              </div>
              <div class="form-group">
                <label for="ci">CI</label>
                <input id="ci" name="ci" type="text" placeholder="Ej: 47821920" class="form-control" required="" onblur="javascript:validarci();">
                <span id=avisaCe style="color: red"></span> <br>
                <span id=avisaFor style="color: red"></span>
              </div>
              <div class="form-group">
                <label for="email">Correo</label>
                <input id="email" name="email" type="email" placeholder="pepe@gmail.com" class="form-control" required="" onblur="javascript:validarcorreo();">
                <span id="avisaC" style="color: red"></span>
              </div>
              <div class="form-group">
                <label for="pass">Contraseña</label>
                <input id="pass" name="pass" type="password"  minlength="6" title="6 letras mín." class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="celular">Celular</label>
                <input id="cel" name="cel" type="tel" placeholder="Ej: 099999999" class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="archivo">Seleccionar imagen de perfil

                <input  id="archivo" name="archivo" type="file" class="form-control" accept="image/*"> 
               
                </label>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="guardar" name="guardar" value="Registrarse">
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
 src="js/validar.js" type="text/javascript"><?php echo '</script'; ?>
>
    </section>          
  </section>
      </body></html>

<?php }} ?>
