<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-07-01 19:58:30
         compiled from "vistas\inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19661869325d1a9016136f29-04440114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9a1123df06652abffdc7699f4d4134cd2f4681f' => 
    array (
      0 => 'vistas\\inicio.tpl',
      1 => 1562016270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19661869325d1a9016136f29-04440114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d1a90161edc26_13613452',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d1a90161edc26_13613452')) {function content_5d1a90161edc26_13613452($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/moon.png" type="image/png" />
    <title>LUNA</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/dashboard.css">
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="js/vendor/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="js/vendor/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body class="bg">
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
           
      <section class="probootstrap-hero" tellar-background-ratio="0.5">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Pequeña ayuda<span>GRAN CAUSA...</span></h1>
                <p class="probootstrap-animate"><a href="#" class="btn btn-primary btn-lg">Saber más</a></p>
              </div>
            </div>
          </div>
        </div>
        
      </section>

    <?php echo '<script'; ?>
 src="js/scripts.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/main.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
>
    
  </body>
</html>
<?php }} ?>
