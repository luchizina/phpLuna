<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-17 23:48:47
         compiled from "vistas\propuestas_listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104225cdf6c8750c623-68670488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb7e98352ffa98b3b2a857e00efc671b603776e0' => 
    array (
      0 => 'vistas\\propuestas_listado.tpl',
      1 => 1558147517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104225cdf6c8750c623-68670488',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cdf6c87a70ad9_44522526',
  'variables' => 
  array (
    'url_base' => 0,
    'titulo' => 0,
    'registrar_propuesta' => 0,
    'mensaje' => 0,
    'propuestas' => 0,
    'prop' => 0,
    'usuLogNick' => 0,
    'nueva_colaboracion' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdf6c87a70ad9_44522526')) {function content_5cdf6c87a70ad9_44522526($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="es" >
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">

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

    
    
  </head>

  <body style="background-image: url(img/img_sm_1.jpg)">
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <br>
    <br>
    <section class="probootstrap-hero"  data-stellar-background-ratio="0.1">
    <div class="container-fluid">
      <div class="row " style="max-width: 800px; margin: 0 auto">
       
        <div class="col-sm-12  col-md-12  main">
          <h1 class="page-header" style="color: #fff margin-left: 30%;">Propuestas</h1>
          <br>
          <h2 class="sub-header" style="color: #fff"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <button id="agregar" name="agregar" class="btn btn-success pull-right" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['registrar_propuesta']->value;?>
'">Agregar</button></h2>

          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
          <div class="table-responsive tabla scr">
            <table class="table table-striped  " style=" background-color: #ecececb3">
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
                       
                      <?php if ($_smarty_tpl->tpl_vars['usuLogNick']->value==$_smarty_tpl->tpl_vars['prop']->value->getUsuario()) {?>

                       <input type="button" value="Modificar" id="modificar" class="btn btn-success" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/modificar/<?php echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
/'"/>
                       <?php }?>

                      <input type="button" value="Colaborar" id="colaborar" class="btn btn-success" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['nueva_colaboracion']->value;
echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
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
     </section>

    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>

  </body>
</html>

<?php }} ?>
