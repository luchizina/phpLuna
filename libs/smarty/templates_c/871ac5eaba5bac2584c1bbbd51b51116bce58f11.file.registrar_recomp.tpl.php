<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-27 20:51:53
         compiled from "vistas\registrar_recomp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:82095cec51b8a7edf2-90442383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '871ac5eaba5bac2584c1bbbd51b51116bce58f11' => 
    array (
      0 => 'vistas\\registrar_recomp.tpl',
      1 => 1559001052,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '82095cec51b8a7edf2-90442383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cec51b8b89917_15265372',
  'variables' => 
  array (
    'url_base' => 0,
    'reco' => 0,
    'recompensa' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cec51b8b89917_15265372')) {function content_5cec51b8b89917_15265372($_smarty_tpl) {?><!DOCTYPE html>

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
            </div>
          </div>
        </div>

      <section class="probootstrap-section">
        <input id="propu" name="propu" type="hidden" value="hola" class="form-control">
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
                <input type="submit" value="Guardar y agregar otra" class="btn btn-primary" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/registrarRecom/registrar_nueva_reco'"/>
                  <input type="submit" value="Guardar y finalizar" class="btn btn-success" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/registrarRecom/fin'"/>
              </div>
               
            </form>
          </div>
         <div class="col-md-6 col-md-push-1 probootstrap-animate">            
            <h2 style="color:#fff">Recompensas ya ingresadas</h2>
            <div class="row">
            <div class="col-sm-12  col-md-12  main">
            <div class="table-responsive scrip">
            <table class="table table-striped tabla " style=" background-color: #ecececb3">
              <thead>
                <tr>
                  <th style="background-color: #959090; color:#fff">Nombre: </th>
                </tr>
              </thead>
              <tbody>

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
               
              </tbody>
            </table>
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
