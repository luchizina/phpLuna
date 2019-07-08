<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-07-08 17:47:56
         compiled from "vistas\propuestas_listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11164178335d23abfca888f7-54804593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-07-02 18:07:17
         compiled from "vistas\propuestas_listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185695d1bc785b13220-69554262%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 2f319b3c07ec8f50c0d51a86a731b5c488a2e71f
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb7e98352ffa98b3b2a857e00efc671b603776e0' => 
    array (
      0 => 'vistas\\propuestas_listado.tpl',
<<<<<<< HEAD
      1 => 1561995628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11164178335d23abfca888f7-54804593',
=======
      1 => 1562101319,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185695d1bc785b13220-69554262',
>>>>>>> 2f319b3c07ec8f50c0d51a86a731b5c488a2e71f
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'registrar_propuesta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
<<<<<<< HEAD
  'unifunc' => 'content_5d23abfcce9ef9_46229368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d23abfcce9ef9_46229368')) {function content_5d23abfcce9ef9_46229368($_smarty_tpl) {?><!DOCTYPE html>
=======
  'unifunc' => 'content_5d1bc785beb620_96125908',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d1bc785beb620_96125908')) {function content_5d1bc785beb620_96125908($_smarty_tpl) {?><!DOCTYPE html>
>>>>>>> 2f319b3c07ec8f50c0d51a86a731b5c488a2e71f

<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/moon.png" type="image/png" />
    <title>LUNA</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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
  <body class="bg" onload="listarPropBien(1);">
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
  
 <section class="probootstrap-hero bg" >
  <br>
  <br>
     <section class="probootstrap-section">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
              <h2 class="caca">Propuestas a las que puedas apoyar </h2>
              <p class="lead">miralas tranqui</p>
            </div>
            <button id="agregar" name="agregar" title="Agregar una propuestas" class="btn btn-primary pull-right" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['registrar_propuesta']->value;?>
'">Agregar</button>

          </div>
          <div class="row jajejo" id="propuestitas">
            

  </div>
  <div id="pagination">

</div>
<input type="hidden" id="pAct" value="1">
    </section>
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
     <?php echo '<script'; ?>
 src="js/validar.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>
