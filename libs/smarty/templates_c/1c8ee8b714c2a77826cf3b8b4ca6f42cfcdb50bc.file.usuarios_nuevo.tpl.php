<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-13 00:16:46
         compiled from "vistas\usuarios_nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12021855545cd6e905b0bcb3-13547761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c8ee8b714c2a77826cf3b8b4ca6f42cfcdb50bc' => 
    array (
      0 => 'vistas\\usuarios_nuevo.tpl',
      1 => 1557698730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12021855545cd6e905b0bcb3-13547761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cd6e905daa1b5_70354898',
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'titulo' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd6e905daa1b5_70354898')) {function content_5cd6e905daa1b5_70354898($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
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
          <h1 class="page-header">Usuarios</h1>
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
          <form class="form-horizontal" method="post" enctype="multipart/form-data" id="registr">
            <fieldset>
            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nombre">Nombre</label>  
              <div class="col-md-4">
              <input id="nombre" name="nombre" type="text" placeholder="Juan" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="apellido">Apellido</label>  
              <div class="col-md-4">
              <input id="apellido" name="apellido" type="text" placeholder="Silvera" class="form-control input-md" required="">
                
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="ci">Cedula</label>  
              <div class="col-md-4">
              <input id="ci" name="ci" type="text" placeholder="Ej: 47821920" class="form-control input-md" required="" onblur="validarci(this);">
              <span id=avisaCe></span>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">Email</label>  
              <div class="col-md-4">
              <input id="email" name="email" type="email" placeholder="pepe@gmail.com" class="form-control input-md" required="">  
              <span id="avisaC"></span>              
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="nick">Nick</label>  
              <div class="col-md-4">
              <input id="nick" name="nick" type="text" placeholder="Ej: Pepe" class="form-control input-md">     
              <span id="avisa"></span>            
              </div>
            </div>

             <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="pass">Password</label>  
              <div class="col-md-4">
              <input id="pass" name="pass" type="password"  minlength="6" title="6 letras mín." class="form-control input-md" required="">                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="cel">Celular</label>  
              <div class="col-md-4">
              <input id="cel" name="cel" type="tel" placeholder="Ej: 099999999" class="form-control input-md" required="" pattern="[0-9]<?php echo 9;?>
">
                
              </div>
            </div>

            <div class="form-group">
              <label class="col-md-4 control-label" for="archivo">Seleccionar foto</label>  
              <div class="col-md-4">
              <input id="archivo" name="archivo" type="file" class="form-control" accept="image/*"> 
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <div class="col-md-4">
                <button id="guardar" name="guardar" class="btn btn-success" onclick="Chequear();">Agregar</button>
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
    <?php echo '<script'; ?>
 src="C:/xampp/htdocs/phpLuna/js/validar.js"><?php echo '</script'; ?>
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
