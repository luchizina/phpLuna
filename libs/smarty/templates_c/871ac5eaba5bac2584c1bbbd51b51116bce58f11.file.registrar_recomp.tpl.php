<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-17 19:08:58
         compiled from "vistas\registrar_recomp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3730023815d080f7a4bcf53-38704567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '871ac5eaba5bac2584c1bbbd51b51116bce58f11' => 
    array (
      0 => 'vistas\\registrar_recomp.tpl',
      1 => 1559417558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3730023815d080f7a4bcf53-38704567',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'mensaje' => 0,
    'tituloPropuesta' => 0,
    'reco' => 0,
    'recompensa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d080f7a62a953_96944075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d080f7a62a953_96944075')) {function content_5d080f7a62a953_96944075($_smarty_tpl) {?><!DOCTYPE html>

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
                <h1 class="probootstrap-heading probootstrap-animate">Registrar Recompensa</h1>
              </div>
               <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
                  <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
               <?php }?>
            </div>
          </div>
        </div>

      <section class="probootstrap-section">
        <input id="tituloPropuesta" name="tituloPropuesta" type="hidden" value=<?php echo $_smarty_tpl->tpl_vars['tituloPropuesta']->value;?>
  class="form-control">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif" >
            <form method="post" class="probootstrap-form" enctype="multipart/form-data" id="registr">
              <div class="form-group">
                <label for="nombreR">Nombre</label>
                <input id="nombreR" name="nombreR" type="text" placeholder="Juan" class="form-control" required="">
              </div>
               <div class="form-group">
               <label for="desc">Descripción:</label>  
            
              <textarea id="desc" name="desc" type="text" placeholder="Esto es una descripcion de mi tarea" class="form-control input-md" required="">
              </textarea>
             
              </div>
              <div class="form-group">
                <label for="monto">Monto a superar</label>
                <input id="monto" name="monto" type="number" placeholder="ej: 10,100,1000..." class="form-control" required="">
              </div>
              <div class="form-group">
                <label for="limite">Limite Usuario</label>
                <input id="limite" name="limite" type="number" placeholder="Ej: 10" class="form-control" required="">
              </div>
              
              <div class="form-group">
                <input type="submit" name="jaja" value="Guardar y agregar otra" class="btn btn-primary" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/registrarRecom/<?php echo $_smarty_tpl->tpl_vars['tituloPropuesta']->value;?>
'"/>
              </div>
               
            </form>
          </div>
         <div class="col-md-6 col-md-push-1 probootstrap-animate">            
            <h2 style="color:#fff">Recompensas ya ingresadas</h2>
            <div class="row">
            <div class="col-sm-12  col-md-12  main">
            <div class="table-responsive scrip src">
            <table class="table table-striped tabla" style=" background-color: #ecececb3">
              <thead>
                <tr>
                  <th style="background-color: #959090; color:#fff">Nombre: </th>
                </tr>
              </thead>
              <tbody>
                 <?php if ($_smarty_tpl->tpl_vars['reco']->value!=null) {?>                 
                <?php  $_smarty_tpl->tpl_vars['recompensa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recompensa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reco']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recompensa']->key => $_smarty_tpl->tpl_vars['recompensa']->value) {
$_smarty_tpl->tpl_vars['recompensa']->_loop = true;
?>
                  <tr>
                    <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['recompensa']->value->getNombre(), 'UTF-8');?>
</td>
                  </tr>
                <?php } ?>
               <?php }?> 
               <?php if ($_smarty_tpl->tpl_vars['reco']->value==null) {?>                 
                  <tr>
                    <td>Aún no tienes recompensas</td>
                  </tr>
               <?php }?> 
              </tbody>
            </table>
          </div>
           <div class="form-group">
                 <input type="button" name="que" value="Listo!" class="btn btn-primary" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/listado'"/>
              </div>
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
    <?php echo '<script'; ?>
 src="js/validar.js" type="text/javascript"><?php echo '</script'; ?>
>
    </section>          
  </section>
      </body></html>

<?php }} ?>
