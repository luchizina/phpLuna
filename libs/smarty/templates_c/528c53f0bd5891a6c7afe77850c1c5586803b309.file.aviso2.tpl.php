<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-10 18:27:01
         compiled from "vistas\aviso2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:682508435cfecb25e03277-49184505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '528c53f0bd5891a6c7afe77850c1c5586803b309' => 
    array (
      0 => 'vistas\\aviso2.tpl',
      1 => 1560201871,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '682508435cfecb25e03277-49184505',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'url_regis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cfecb25ef6e70_94067094',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfecb25ef6e70_94067094')) {function content_5cfecb25ef6e70_94067094($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <?php echo '<script'; ?>
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
    
  </head>

  <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <section class="probootstrap-hero" style="background-image: url(img/hero_bg_bw_1.jpg);"  data-stellar-background-ratio="0.1">
        <div class="container">
          <div class="row">
            <div class="col-sm-12  col-md-12  main">
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h2 style="color:#fff" class="probootstrap-heading probootstrap-animate">Se le ha enviado un correo para restablecer su contraseña</h2>
              </div>
            </div>
          </div>
        </div>

      <section class="probootstrap-section" >
        <div class="container" >
          <div class="row" style="margin: 0 auto">

          <div class="col-md-5 probootstrap-animate mx-auto" style="margin: auto 0; color: white; font-family: Montserrat,Arial,sans-serif "  >
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">            
            <h2 style="color:#fff">¿Qué puedes encontrar en LUNA?</h2>
            <ul style="color:#fff" class="probootstrap-contact-info">
              <li><i class="icon-edit"></i> <span>Proponer ideas</span></li>
              <li><i class="fa fa-dollar"></i><span>Colaborar a hacer realidad sueños</span></li>
              <li><i class="fa fa-sign-in"></i><span>¿Aún no tienes cuenta? ¿Qué esperas? <a href="<?php echo $_smarty_tpl->tpl_vars['url_regis']->value;?>
">Haz click aquí</a></span></li>
            </ul>

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
