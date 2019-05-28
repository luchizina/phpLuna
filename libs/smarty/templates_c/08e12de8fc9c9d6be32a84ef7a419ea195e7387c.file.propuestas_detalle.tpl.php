<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-27 22:48:35
         compiled from "vistas\propuestas_detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16463338915cec9373d54066-20230924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08e12de8fc9c9d6be32a84ef7a419ea195e7387c' => 
    array (
      0 => 'vistas\\propuestas_detalle.tpl',
      1 => 1559007917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16463338915cec9373d54066-20230924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'propuesta' => 0,
    'comentarios' => 0,
    'com' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cec9373ec1a63_22613999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cec9373ec1a63_22613999')) {function content_5cec9373ec1a63_22613999($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="css/style_com.css">
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

    <section class="probootstrap-hero" style="background-image: url(img/hero_bg_bw_1.jpg); height:100%"  data-stellar-background-ratio="0.01">
        <div class="container">
          <div class="row">
            <div class="col-md-12" >
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Propuesta</h1>
                 <h2 style="color: #fff" class="probootstrap-heading probootstrap-animate">Información de propuesta</h2>
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
                <label for="Nombre">Nombre:</label>
                 <p name="Nombre"><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
</p> 
              </div>
              
              <div class="form-group">
                <label for="monto">Monto:</label>
                 <p name="monto">$<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getMonto();?>
</p> 
              </div>


               <div class="form-group">
                <label for="fecha">Fecha publicada:</label>
                 <p name="fecha"><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getFechaPublicada();?>
</p>                 
              </div>
             
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="MODIFICAR">
              </div>
            </form>
          </div>
           <div class="col-md-6 col-md-push-1 probootstrap-animate"  style="color: white;">            
             <div class="form-group" style="max-width: 300px;max-height: 300px">
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getImagen();?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=null) {?>
                    <img src="./<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getImagen();?>
" />
                    <?php }?>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getImagen();?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==null) {?>
                   <img src="/img/person_7.jpg" />
                    <?php }?>
                
              </div>
              <div class="form-group">
                <label for="Desc">Descripcion:</label>
                 <p name="Desc"><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getDescripcion();?>
</p> 
              </div>
                <div class="form-group">
                    <label for="na">Progreso actual: $<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getMontoActual();?>
</label>
               <div class="progress" style="max-width: 400px">
                    <div class="progress-bar progress-bar-s2" data-percent="<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->calc();?>
"></div>
                  </div>
                  </div>

          </div>
        </div>
        </div>
        <div class="section-comments">
  <div class="section-comments__comments">
    <h6 class="comments__title">Comentarios</h6>
    <ul class="comments__list-comment">
      <?php  $_smarty_tpl->tpl_vars['com'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['com']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['com']->key => $_smarty_tpl->tpl_vars['com']->value) {
$_smarty_tpl->tpl_vars['com']->_loop = true;
?>
      <li class="list-comment__comment">
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['com']->value->getUsuario()->getImagen();?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3!=null) {?>
        <div class="comment__avatar">
          <div class="avatar__border"><img class="avatar__author" src="./<?php echo $_smarty_tpl->tpl_vars['com']->value->getUsuario()->getImagen();?>
" alt=""/></div>
        </div>
        <?php }?>
        <div class="comment__comment-text">
         <h5 class="comment-text__name-author"><?php echo $_smarty_tpl->tpl_vars['com']->value->getUsuario()->getNick();?>
</h5>
          <p class="comment-text__content"><?php echo $_smarty_tpl->tpl_vars['com']->value->getTexto();?>
</p>
        </div>
      </li>
      <?php } ?>
      <li>
        <textarea rows="5" cols="57" name="coment"></textarea>
      </li>
      <li>
        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-lg" id="com" name="com" value="COMENTAR">
          </div>
      </li>
    </ul>
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
