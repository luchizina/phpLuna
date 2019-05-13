<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-13 22:15:18
         compiled from "vistas\propuestas_listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5400831795cd1edc9991dc1-28867327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb7e98352ffa98b3b2a857e00efc671b603776e0' => 
    array (
      0 => 'vistas\\propuestas_listado.tpl',
      1 => 1557778231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5400831795cd1edc9991dc1-28867327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cd1edcadfcb54_70187512',
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'titulo' => 0,
    'registrar_propuesta' => 0,
    'mensaje' => 0,
    'propuestas' => 0,
    'prop' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd1edcadfcb54_70187512')) {function content_5cd1edcadfcb54_70187512($_smarty_tpl) {?>
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

    <div class="container-fluid">
      <div class="row">
       
        <div class="col-sm-12  col-md-12  main">
          <h1 class="page-header">Propuestas</h1>
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <button id="agregar" name="agregar" class="btn btn-success pull-right" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['registrar_propuesta']->value;?>
'">Agregar</button></h2>
          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
          <div class="table-responsive">



            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  <th>Monto</th>
                  <th>Fecha agregada</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php  $_smarty_tpl->tpl_vars['prop'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['prop']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['propuestas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['prop']->key => $_smarty_tpl->tpl_vars['prop']->value) {
$_smarty_tpl->tpl_vars['prop']->_loop = true;
?>

                  <tr>
                    <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['prop']->value->getNombre(), 'UTF-8');?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['prop']->value->getDescripcion();?>
</td>
                   <td><?php echo $_smarty_tpl->tpl_vars['prop']->value->getMonto();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['prop']->value->getFechaPublicada();?>
</td>
                    <td>
                      <input type="button" value="Borrar" class="btn btn-danger" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/borrar/<?php echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
/'"/>

                      <input type="button" value="colaborar" id="colaborar" class="btn btn-success" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/nuevaColaboracion/<?php echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
/'"/>
                     
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
</html>

<?php }} ?>
