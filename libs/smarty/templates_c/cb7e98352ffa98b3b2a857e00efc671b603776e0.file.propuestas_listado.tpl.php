<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-07 14:39:39
         compiled from "vistas\propuestas_listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15269095555cfaa15bc10619-40544663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb7e98352ffa98b3b2a857e00efc671b603776e0' => 
    array (
      0 => 'vistas\\propuestas_listado.tpl',
      1 => 1559602852,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15269095555cfaa15bc10619-40544663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'registrar_propuesta' => 0,
    'propuestas' => 0,
    'prop' => 0,
    'img' => 0,
    'usuLogNick' => 0,
    'est' => 0,
    'paginas' => 0,
    'foo' => 0,
    'sig' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cfaa15c2d0ec8_70868082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfaa15c2d0ec8_70868082')) {function content_5cfaa15c2d0ec8_70868082($_smarty_tpl) {?><!DOCTYPE html>

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
  <body class="bg">
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
          <div class="row jajejo">
            <?php  $_smarty_tpl->tpl_vars['prop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['propuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prop']->key => $_smarty_tpl->tpl_vars['prop']->value) {
$_smarty_tpl->tpl_vars['prop']->_loop = true;
?>
            <?php $_smarty_tpl->tpl_vars['img'] = new Smarty_variable($_smarty_tpl->tpl_vars['prop']->value->traerImagen($_smarty_tpl->tpl_vars['prop']->value->getNombre()), null, 0);?>
            <?php echo $_smarty_tpl->tpl_vars['prop']->value->setImagen($_smarty_tpl->tpl_vars['img']->value);?>

            <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate" data-animate-effect="fadeIn">
              <div class="probootstrap-image-text-block probootstrap-cause">
                <figure class="imk"  width="360" height="200">
                  <img src="<?php echo $_smarty_tpl->tpl_vars['prop']->value->getImagen();?>
" alt="<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['prop']->value->getNombre(), 'UTF-8');?>
" class="img2">
                </figure>
                <div class="probootstrap-cause-inner">
                  <div class="progress">
                    <div class="progress-bar progress-bar-s2" data-percent="<?php echo $_smarty_tpl->tpl_vars['prop']->value->calc();?>
"></div>
                  </div>

                  <div class="row mb30">
                    <div class="col-md-6 col-sm-6 col-xs-6 probootstrap-raised">Monto actual: <span class="money"><?php echo $_smarty_tpl->tpl_vars['prop']->value->getMontoActual();?>
</span></div>
                    <div class="col-md-6 col-sm-6 col-xs-6 probootstrap-goal">Objetivo: <span class="money"> $ <?php echo $_smarty_tpl->tpl_vars['prop']->value->getMonto();?>
</span></div>
                  </div>
                  <h2><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/detalleProp/<?php echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
/"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['prop']->value->getNombre(), 'UTF-8');?>
 </a>
                    <?php if ($_smarty_tpl->tpl_vars['prop']->value->isFavoriteada($_smarty_tpl->tpl_vars['usuLogNick']->value)) {?>
                        <a class="btn estrella" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/desfavoritear/<?php echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
/">
                         <i class="fa fa-star"></i></a>
                       <?php }?>
                       <?php if (!$_smarty_tpl->tpl_vars['prop']->value->isFavoriteada($_smarty_tpl->tpl_vars['usuLogNick']->value)) {?>
                        <a class="btn estrella" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/favoritear/<?php echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
/">
                         <i class="fa fa-star-o"></i></a>
                      <?php }?>
                      </h2>
                  <div class="probootstrap-date"><i class="icon-calendar"></i> Implementar tiempo queda</div>  
                  <p><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/nuevaColaboracion/<?php echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
" class="btn btn-primary btn-black">Colaborar!</a></p>
                </div>
              </div>
            </div>
                  <?php } ?>
  </div>
  <div id="pagination">
<ul class="pagination justify-content-center" style="margin:20px 0">
<li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['est']->value;?>
">Anterior</a></li>
  <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['paginas']->value;?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_tmp1+1 - (1) : 1-($_tmp1)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
  <li class="page-item" id="<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/pagina/<?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
/"><?php echo $_smarty_tpl->tpl_vars['foo']->value;?>
</a></li>
  <?php }} ?>
   <li class="page-item"><a class="page-link" href="<?php echo $_smarty_tpl->tpl_vars['sig']->value;?>
">Siguiente</a></li>
  </ul>
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
    
  </body>
</html>
<?php }} ?>
