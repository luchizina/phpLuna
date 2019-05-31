<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-30 19:41:50
         compiled from "vistas\propuestas_listado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:176885cf05c2eb3dcf0-80054626%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb7e98352ffa98b3b2a857e00efc671b603776e0' => 
    array (
      0 => 'vistas\\propuestas_listado.tpl',
      1 => 1559248694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '176885cf05c2eb3dcf0-80054626',
  'function' => 
  array (
  ),
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
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cf05c38019cb1_40487068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf05c38019cb1_40487068')) {function content_5cf05c38019cb1_40487068($_smarty_tpl) {?>
<!DOCTYPE html>
<html lang="es" >
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/dashboard.css" rel="stylesheet">
 <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
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

  <body class="bg">
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <br>
    <br>
    <section class="probootstrap-hero"  data-stellar-background-ratio="0.1">
    <div class="container-fluid">
      <div class="row " style="max-width: 1000px; margin: 0 auto">
       
        <div class="col-sm-12  col-md-12  main" >
          <h1 class="page-header" style="color: #fff ; text-align: center;">Propuestas</h1>
          <br>
          <h2 class="sub-header" style="color: #fff"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 <button id="agregar" name="agregar" class="btn btn-success pull-right" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['registrar_propuesta']->value;?>
'">Agregar</button></h2>

          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
          <div class="table-responsive tabla scr">
            <table class="table table-striped  " style=" background-color: #ececec;">
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
                <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/detalleProp/<?php echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
/">
                  <i class="icon-eye"></i></a>
                    
                      <?php if ($_smarty_tpl->tpl_vars['usuLogNick']->value==$_smarty_tpl->tpl_vars['prop']->value->getUsuario()) {?>

                         <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/borrar/<?php echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
/">
                         <i class="icon-trash"></i></a>
                          <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/modificar/<?php echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
/">
                         <i class="icon-edit"></i></a>
                       <?php }?>

                       <?php if ($_smarty_tpl->tpl_vars['prop']->value->isFavoriteada($_smarty_tpl->tpl_vars['usuLogNick']->value)) {?>
                        <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/desfavoritear/<?php echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
/">
                         <i class="fa fa-star"></i></a>
                      
                       <?php }?>

                       <?php if (!$_smarty_tpl->tpl_vars['prop']->value->isFavoriteada($_smarty_tpl->tpl_vars['usuLogNick']->value)) {?>
                        <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/favoritear/<?php echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
/">
                         <i class="fa fa-star-o"></i></a>
                       
                       <?php }?>
                        <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['nueva_colaboracion']->value;
echo $_smarty_tpl->tpl_vars['prop']->value->getNombre();?>
/">
                         <i class="fa fa-dollar"></i></a>
                     
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
