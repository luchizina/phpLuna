<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-07-01 19:55:48
         compiled from "vistas\usuarios_listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20403182515d1a8f74eafd90-73882986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc36a80b921661286b287e2df8d64e144a173838' => 
    array (
      0 => 'vistas\\usuarios_listado.tpl',
      1 => 1562016270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20403182515d1a8f74eafd90-73882986',
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
  'unifunc' => 'content_5d1a8f750db392_67912858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d1a8f750db392_67912858')) {function content_5d1a8f750db392_67912858($_smarty_tpl) {?>
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
                  <?php if ($_smarty_tpl->tpl_vars['persona']->value->isActivo()==1) {?>
                  <tr>
                    <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['persona']->value->getNombre(), 'UTF-8');?>
 + <?php echo $_smarty_tpl->tpl_vars['persona']->value->isActivo();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getApellido();?>
</td>
                   <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getNick();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['persona']->value->getCorreo();?>
</td>
                    <td>
                    
                       <?php if ($_smarty_tpl->tpl_vars['usuLogNick']->value==$_smarty_tpl->tpl_vars['persona']->value->getNick()) {?>
                     
                      <input type="button" value="Borrar" class="btn btn-danger" id="<?php echo $_smarty_tpl->tpl_vars['persona']->value->getNick();?>
" onClick="borrarUsu('<?php echo $_smarty_tpl->tpl_vars['persona']->value->getNick();?>
','<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
')"/>
                      <input type="button" value="Modificar" class="btn btn-success" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/modificar/<?php echo $_smarty_tpl->tpl_vars['persona']->value->getNick();?>
/'"/>
                       <?php }?>
                         <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalLoginAvatar<?php echo $_smarty_tpl->tpl_vars['persona']->value->getNick();?>
">Ver perfil</a>
                         <?php }?>
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
    <?php echo '<script'; ?>
 type="text/javascript" src="js/alertas.js"><?php echo '</script'; ?>
>
  </body>
</html>

<?php }} ?>
