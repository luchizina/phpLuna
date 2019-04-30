<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-04-08 03:08:12
         compiled from "vistas\empresa_listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1532337975caa9efcee1717-47371041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f838f681d5e333bca08c1e0571ed435aa3381c98' => 
    array (
      0 => 'vistas\\empresa_listado.tpl',
      1 => 1554685430,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1532337975caa9efcee1717-47371041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'titulo' => 0,
    'usuario_nuevo' => 0,
    'mensaje' => 0,
    'empresas' => 0,
    'empre' => 0,
    'empresa_modifica' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5caa9efd27a714_20852951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5caa9efd27a714_20852951')) {function content_5caa9efd27a714_20852951($_smarty_tpl) {?>
<!DOCTYPE html>
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

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
>
    
    
  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid">
      <div class="row">
       
        <div class="col-sm-12  col-md-12  main">
          <h1 class="page-header">Empresas</h1>
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <button id="agregar" name="agregar" class="btn btn-success pull-right" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['usuario_nuevo']->value;?>
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
                  <th>Razon Social</th>
                  <th>Rut</th>
                  <th>Direccion</th>
                  <th>Email</th>
                  <th>Telefono</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php  $_smarty_tpl->tpl_vars['empre'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['empre']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['empresas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['empre']->key => $_smarty_tpl->tpl_vars['empre']->value) {
$_smarty_tpl->tpl_vars['empre']->_loop = true;
?>
                  <tr>
                    <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['empre']->value->getNombre(), 'UTF-8');?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['empre']->value->getRazon();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['empre']->value->getRut();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['empre']->value->getDireccion();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['empre']->value->getEmail();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['empre']->value->getTel();?>
</td>
                    <td>
                      <input type="button" value="Borrar" class="btn btn-danger" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
empresa/listado/borrar/<?php echo $_smarty_tpl->tpl_vars['empre']->value->getId();?>
/'"/>

                     <input type="button" value="modificar" class="btn btn-submit" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['empresa_modifica']->value;
echo $_smarty_tpl->tpl_vars['empre']->value->getId();?>
/'"/>

                      <input type="button" value="Favoritos" class="btn btn-submit" onClick="cargarFavoritos();"/>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("favoritos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>

  </body>
</html>

<?php }} ?>
