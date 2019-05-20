<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-20 18:02:45
         compiled from "vistas\propuestas_detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319315ce2aec8dffc66-63408971%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08e12de8fc9c9d6be32a84ef7a419ea195e7387c' => 
    array (
      0 => 'vistas\\propuestas_detalle.tpl',
      1 => 1558386158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319315ce2aec8dffc66-63408971',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ce2aec8f14055_89310022',
  'variables' => 
  array (
    'url_base' => 0,
    'propuesta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce2aec8f14055_89310022')) {function content_5ce2aec8f14055_89310022($_smarty_tpl) {?><!DOCTYPE html>

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
                 <p name="monto"><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getMonto();?>
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
                    <label for="na">Progreso actual</label>
               <div class="progress" style="max-width: 400px">
                    <div class="progress-bar progress-bar-s2" data-percent="<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->calc();?>
"></div>
                  </div>
                  </div>

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
