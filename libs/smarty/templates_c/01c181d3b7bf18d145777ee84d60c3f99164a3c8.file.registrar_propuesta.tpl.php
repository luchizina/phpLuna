<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-12 23:23:54
         compiled from "vistas\registrar_propuesta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149135cd58ed32bcec9-66495267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01c181d3b7bf18d145777ee84d60c3f99164a3c8' => 
    array (
      0 => 'vistas\\registrar_propuesta.tpl',
      1 => 1557587780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149135cd58ed32bcec9-66495267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cd58ed33c0fd9_16726062',
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'titulo' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd58ed33c0fd9_16726062')) {function content_5cd58ed33c0fd9_16726062($_smarty_tpl) {?><!DOCTYPE html>
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
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid">
      <div class="row">
     

        <div class="col-sm-12  col-md-12  main">
          <h1 class="page-header">Propuesta</h1>
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
          <form class="form-horizontal" method="post">
            <fieldset>
            <!-- Text input-->
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
              <label class="col-md-4 control-label" for="fechaA">Fecha:</label>  
              <div class="col-md-4">
              <input id="fechaA" name="fechaA" type="Date" class="form-control input-md" required="">
              </div>
            </div>

             <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="monto">Monto</label>  
              <div class="col-md-4">
              <input id="monto" name="monto" type="number" class="form-control input-md" required="">
              </div>
            </div>

            <!-- Text input-->
           <select name="catego" id="categoria">
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
          </select> 
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
