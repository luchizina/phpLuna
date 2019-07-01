<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-07-01 20:26:17
         compiled from "vistas\nueva_colaboracion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1480463175d1a9699b45177-58438122%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd8d4aeb4edb11e2b85b54ed7f61b912892d7854' => 
    array (
      0 => 'vistas\\nueva_colaboracion.tpl',
      1 => 1561751737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1480463175d1a9699b45177-58438122',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'mensaje' => 0,
    'recompensas' => 0,
    'recompensa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d1a9699c38d70_82330879',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d1a9699c38d70_82330879')) {function content_5d1a9699c38d70_82330879($_smarty_tpl) {?><!DOCTYPE html>

<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="js/vendor/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="js/vendor/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body >

    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section class="probootstrap-hero" style="background-image: url(img/hero_bg_bw_1.jpg); height:100%"  data-stellar-background-ratio="0.1">
        <div class="container">
          <div class="row">
            <div class="col-md-12" >
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                <h1 class="probootstrap-heading probootstrap-animate">Agregar Colaboracion</h1>
              </div>
            </div>
          </div>
        </div>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif" >
            <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['mensaje']->value=='') {?>
            <form method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="monto">Monto</label>
                <input id="monto" name="monto"  onkeyup="javascript:verRec(<?php echo $_smarty_tpl->tpl_vars['recompensas']->value[0]->getMontoaSuperar();?>
)" type="number" placeholder="Ej: 500" class="form-control" required="">
                <span id="mensajito"></span>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="guardar" name="guardar" value="Colaborar">
              </div>
            </form>
      
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">            
            <h2 style="color:#fff">Recompensas para la propuesta a colaborar</h2>
            <div class="row">
            <div class="col-sm-12  col-md-12  main">
            <div class="table-responsive scrip src">
            <table class="table table-striped tabla" style=" background-color: #ecececb3">
              <thead>
                <tr>
                  <th style="background-color: #959090; color:#fff">Nombre: </th>
                  <th style="background-color: #959090; color:#fff">Monto minimo necesario: </th>
                  <th style="background-color: #959090; color:#fff">Limite de usuarios: </th>
                  <th style="background-color: #959090; color:#fff">Usuarios actuales: </th>
                  <th style="background-color: #959090; color:#fff">Descripcion: </th>
                </tr>
              </thead>
              <tbody>
                 <?php if ($_smarty_tpl->tpl_vars['recompensas']->value!=null) {?>                 
                <?php  $_smarty_tpl->tpl_vars['recompensa'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['recompensa']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recompensas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['recompensa']->key => $_smarty_tpl->tpl_vars['recompensa']->value) {
$_smarty_tpl->tpl_vars['recompensa']->_loop = true;
?>
                  <tr>
                    <td><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['recompensa']->value->getNombre(), 'UTF-8');?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['recompensa']->value->getMontoaSuperar();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['recompensa']->value->getLimiteUsuarios();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['recompensa']->value->getCantActual();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['recompensa']->value->getDescripcion();?>
</td>
                  </tr>
                <?php } ?>
               <?php }?> 
               <?php if ($_smarty_tpl->tpl_vars['recompensas']->value==null) {?>                 
                  <tr>
                    <td>No hay recompensas para esta propuesta</td>
                  </tr>
               <?php }?> 
               <tfoot>
                 <h5 style="color: #fff">Si el limite de usuarios es superado se le otorgara la recompensa anterior a la que el monto ingresado corresponde</h5>
               </tfoot>
              </tbody>
            </table>
          </div>
          </div>
          </div>
          </div>
           <?php }?>
        </div>
        </div>

    <?php echo '<script'; ?>
 src="js/scripts.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/main.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
      function verRec(m){
        var monto = $('#monto').val();
        var propuesta = window.location.pathname;
        var array = propuesta.split('/');
        var nombre = array[4];
        if(monto < m){
          $('#mensajito').html("Debe colaborar con un monto mayor a "+ m);
          $('#guardar').hide();
        } else {
          $('#guardar').show();
        $.ajax({
          url: '<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/verrecPrecio',
          data: 'propuesta='+nombre+'&monto='+monto,
          type: 'post',
          success:function(res){
            $('#mensajito').html(res);
          }
        })
      }
    }
    <?php echo '</script'; ?>
>
    </section>          
  </section>
      </body></html><?php }} ?>
