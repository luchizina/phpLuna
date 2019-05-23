<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-20 18:40:17
         compiled from "vistas\registrar_propuesta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11805630285ce31ec1a7f238-96406863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01c181d3b7bf18d145777ee84d60c3f99164a3c8' => 
    array (
      0 => 'vistas\\registrar_propuesta.tpl',
      1 => 1558363620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11805630285ce31ec1a7f238-96406863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'titulo' => 0,
    'mensaje' => 0,
    'categorias' => 0,
    'persona' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ce31ec3ed7635_47945630',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce31ec3ed7635_47945630')) {function content_5ce31ec3ed7635_47945630($_smarty_tpl) {?><!DOCTYPE html>
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
     <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </head>
  <body>
   <section class="probootstrap-hero bg"  data-stellar-background-ratio="0.1">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12  col-md-12  main">
        <br>
          <h2 class="sub-header"  style="color: #fff ; text-align: center;"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
          <form class="form-horizontal" enctype="multipart/form-data" method="post">
            <fieldset style="color: #fff;">
            <!-- Text input-->
            <br>
            <div class="form-group">
              <label class="col-md-4 control-label" for="nombre">Nombre:</label>  
              <div class="col-md-4">
              <input id="nombre" name="nombre" type="text" placeholder="La vela en Pdú" class="form-control input-md" required="">
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="desc">Descripción:</label>  
              <div class="col-md-4">
              <textarea id="desc" name="desc" type="text" placeholder="Esto es una descripcion de mi tarea" class="form-control input-md" required="">
              </textarea>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="fechaA">Seleccione una imagen:</label>  
              <div class="col-md-4">
             <input  id="archivo" name="archivo" type="file" class="form-control input-md" accept="image/*"> 
              </div>
            </div>

            
             <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="monto">Monto</label>  
              <div class="col-md-4">
              <input id="monto" name="monto" type="number" class="form-control input-md" required="">
              </div>
            </div>
              <style>

              </style>
         <div class="form-group">
              <label class="col-md-4 control-label" for="monto">Categoria</label>  
              <div class="col-md-4">
           <select name="catego" class="dis">
              <?php  $_smarty_tpl->tpl_vars['persona'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['persona']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['persona']->key => $_smarty_tpl->tpl_vars['persona']->value) {
$_smarty_tpl->tpl_vars['persona']->_loop = true;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['persona']->value->getNombreH();?>
"><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['persona']->value->getNombreH(), 'UTF-8');?>
</option>
            <?php } ?>
          </select>
           </div>
            </div> 
           <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="ci">Recompensa</label>  
              <div class="col-md-4">
              <input id="recom" name="recom" type="text" placeholder="Entradas gratis" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="guardar"></label>
              <div class="col-md-4">
                <button id="guardar" name="guardar" class="btn btn-success">Agregar</button>
              </div>
            </div>

            </fieldset>
          </form>
      </div>
    </div>
 </section>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?php echo '<script'; ?>
 src="../../assets/js/vendor/holder.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
</html>

<?php }} ?>
