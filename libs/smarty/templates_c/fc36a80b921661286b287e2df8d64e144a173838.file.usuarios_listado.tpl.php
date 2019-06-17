<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-17 18:43:50
         compiled from "vistas\usuarios_listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9493988165d0809960a7fc4-39008053%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-17 14:53:59
         compiled from "vistas\usuarios_listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5795d07d3b7ea1990-32916323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc36a80b921661286b287e2df8d64e144a173838' => 
    array (
      0 => 'vistas\\usuarios_listado.tpl',
<<<<<<< HEAD
      1 => 1559685577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9493988165d0809960a7fc4-39008053',
=======
      1 => 1559914875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5795d07d3b7ea1990-32916323',
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'titulo' => 0,
    'mensaje' => 0,
    'usuarios' => 0,
    'persona' => 0,
    'usuLogNick' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
<<<<<<< HEAD
  'unifunc' => 'content_5d0809962159c9_30420038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0809962159c9_30420038')) {function content_5d0809962159c9_30420038($_smarty_tpl) {?>
=======
  'unifunc' => 'content_5d07d3b84899a6_22863193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d07d3b84899a6_22863193')) {function content_5d07d3b84899a6_22863193($_smarty_tpl) {?>
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3
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
          <h1 class="page-header">Usuarios</h1>
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Nick</th>
                  <th>Email</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <?php  $_smarty_tpl->tpl_vars['persona'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['persona']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['usuarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['persona']->key => $_smarty_tpl->tpl_vars['persona']->value) {
$_smarty_tpl->tpl_vars['persona']->_loop = true;
?>
                  <tr>
                    <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['persona']->value->getNombre(), 'UTF-8');?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getApellido();?>
</td>
                   <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getNick();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getCorreo();?>
</td>
                    <td>
                       <?php if ($_smarty_tpl->tpl_vars['usuLogNick']->value==$_smarty_tpl->tpl_vars['persona']->value->getNick()) {?>
                      <input type="button" value="Borrar" class="btn btn-danger" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/listado/borrar/<?php echo $_smarty_tpl->tpl_vars['persona']->value->getNick();?>
/'"/>
                      <input type="button" value="Modificar" class="btn btn-success" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/modificar/<?php echo $_smarty_tpl->tpl_vars['persona']->value->getNick();?>
/'"/>
                       <?php }?>
                         <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginAvatar<?php echo $_smarty_tpl->tpl_vars['persona']->value->getNick();?>
">Ver perfil</a>
                     <!-- <input type="button" value="Ver perfil" class="btn btn-success" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/verPerfil/<?php echo $_smarty_tpl->tpl_vars['persona']->value->getNick();?>
/'"/>-->
                    <!--  <input type="button" value="Favoritos" class="btn btn-submit" onClick="cargarFavoritos();"/>-->
                     <div class="modal fade" id="modalLoginAvatar<?php echo $_smarty_tpl->tpl_vars['persona']->value->getNick();?>
" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
    <!--Content-->
    <div class="modal-content">

      <!--Header-->
      <div class="modal-header">
        <img src="./<?php echo $_smarty_tpl->tpl_vars['persona']->value->getImagen();?>
" style="border-radius:50%;" alt="avatar" class="rounded-circle img-responsive">
      </div>
      <!--Body-->
      <div class="modal-body text-center mb-1">

        <h5 class="mt-1 mb-2"><?php echo $_smarty_tpl->tpl_vars['persona']->value->getNombre();?>
 <?php echo $_smarty_tpl->tpl_vars['persona']->value->getApellido();?>
</h5>
        <label data-error="wrong" data-success="right" for="form29" class="ml-0">Correo: <?php echo $_smarty_tpl->tpl_vars['persona']->value->getCorreo();?>
</label><br>
        <label data-error="wrong" data-success="right" for="form29" class="ml-0">Usuario: <?php echo $_smarty_tpl->tpl_vars['persona']->value->getNick();?>
</label>
      </div>

    </div>
    <!--/.Content-->
  </div>
</div>

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
