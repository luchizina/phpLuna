<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-14 03:35:07
         compiled from "vistas\registrar_categoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307885cda19bde5d392-99717159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74e3499dd2d9cd038d4ce1da225b24bb7bc611f3' => 
    array (
      0 => 'vistas\\registrar_categoria.tpl',
      1 => 1557797551,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307885cda19bde5d392-99717159',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cda19be0236d1_66115183',
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'categorias' => 0,
    'persona' => 0,
    'borrar_catego' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cda19be0236d1_66115183')) {function content_5cda19be0236d1_66115183($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    
    <!--<title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</title>-->

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!--<?php echo '<script'; ?>
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
>-->
    
    
  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid" > 
               
      <div class="row" style="max-width: 700px; margin: 0 auto;">  
      <div> 
           <form class="form-horizontal" method="post" style=" padding-top: 50px">
            <fieldset>

              <label  for="nombre">Nombre:</label>  
              <input id="nombre" name="nombreP" type="text" placeholder="La vela en Pdú" class="form-control input-md" required="">
              <button id="guardar" name="guardar" class="btn btn-success">Agregar</button>
               <label class=" control-label" for="guardar"></label>
               
            </fieldset>
          </form>  
          </div>   
        <div class="col-sm-12  col-md-12  main">
          <div class="table-responsive">

            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                </tr>
              </thead>
              <tbody>
                <?php  $_smarty_tpl->tpl_vars['persona'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['persona']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['persona']->key => $_smarty_tpl->tpl_vars['persona']->value) {
$_smarty_tpl->tpl_vars['persona']->_loop = true;
?>
                  <tr>
                    <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['persona']->value->getNombreP(), 'UTF-8');?>
</td>
                  
                    <td>
                      <input type="button" value="Borrar" class="btn btn-danger" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['borrar_catego']->value;
echo $_smarty_tpl->tpl_vars['persona']->value->getNombreP();?>
/'"/>
                     
                    <!--  <input type="button" value="Favoritos" class="btn btn-submit" onClick="cargarFavoritos();"/>-->
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>

      </div>
   
    </div>
    
    <!--<?php echo $_smarty_tpl->getSubTemplate ("favoritos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
-->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>

  </body>
</html><?php }} ?>
