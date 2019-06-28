<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-24 13:31:22
         compiled from "vistas\usuarios_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122105d10fada739580-68255334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d397ea05cd87ce4d93b5889f42f577c4e3d5bf8' => 
    array (
      0 => 'vistas\\usuarios_login.tpl',
      1 => 1560793976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122105d10fada739580-68255334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'mensaje' => 0,
    'url_recuperar' => 0,
    'url_regis' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d10fadb10cdc6_05314195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d10fadb10cdc6_05314195')) {function content_5d10fadb10cdc6_05314195($_smarty_tpl) {?>
<!DOCTYPE html>
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
<body>
  <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    
    <section class="probootstrap-hero" style="background-image: url(img/hero_bg_bw_1.jpg);"  data-stellar-background-ratio="0.1">
        <div class="container">
          <div class="row">
            <div class="col-sm-12  col-md-12  main">
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Iniciar sesión</h1>
              </div>
            </div>
          </div>
        </div>

      <section class="probootstrap-section" >
        <div class="container" >
          <div class="row" style="margin: 0 auto">

          <div class="col-md-5 probootstrap-animate mx-auto" style="margin: auto 0; color: white; font-family: Montserrat,Arial,sans-serif "  >
        <form class="form-signin" method="POST" >
        <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="nombre de usuario" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required="">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button> 

        <a href="<?php echo $_smarty_tpl->tpl_vars['url_recuperar']->value;?>
">¿Se olvido su contraseña?</a>
        </form>
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">            
            <h2 style="color:#fff">¿Qué puedes encontrar en LUNA?</h2>
            <ul style="color:#fff" class="probootstrap-contact-info">
              <li><i class="icon-edit"></i> <span>Proponer ideas</span></li>
              <li><i class="fa fa-dollar"></i><span>Colaborar y hacer realidad sueños</span></li>
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
    <?php echo '<script'; ?>
 src="js/validar.js"><?php echo '</script'; ?>
>
    </section>          
  </section>
      </body></html>


<?php }} ?>
