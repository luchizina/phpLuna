
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-15 00:23:34
         compiled from "vistas\usuarios_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10816195395cdb3fe63ed287-46827313%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');

$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d397ea05cd87ce4d93b5889f42f577c4e3d5bf8' => 
    array (
      0 => 'vistas\\usuarios_login.tpl',
<<<<<<< HEAD
      1 => 1557702147,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10816195395cdb3fe63ed287-46827313',
=======
      1 => 1557773792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9673258275cdb3e456d7317-87620284',
>>>>>>> 0c906710b21ce4483a84795215d69c3fa8b44ece
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
<<<<<<< HEAD
  'unifunc' => 'content_5cdb3fe653d8f1_38996224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdb3fe653d8f1_38996224')) {function content_5cdb3fe653d8f1_38996224($_smarty_tpl) {?>
=======
  'unifunc' => 'content_5cdb3e45aa6327_00620034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdb3e45aa6327_00620034')) {function content_5cdb3e45aa6327_00620034($_smarty_tpl) {?>
>>>>>>> 0c906710b21ce4483a84795215d69c3fa8b44ece
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
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-1.11.2.min.js"><?php echo '</script'; ?>
>
    
  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container">

      <form class="form-signin" method="POST" >
        <h2 class="form-signin-heading">Login</h2>
        <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="nombre de usuario" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Contraseña" required="">
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
        
      </form>

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
