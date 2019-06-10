<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-09 20:43:51
         compiled from "vistas\nueva_colaboracion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14315554165cfd94e3bea663-26406281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd8d4aeb4edb11e2b85b54ed7f61b912892d7854' => 
    array (
      0 => 'vistas\\nueva_colaboracion.tpl',
      1 => 1560123417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14315554165cfd94e3bea663-26406281',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cfd94e40b4178_80168793',
  'variables' => 
  array (
    'url_base' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfd94e40b4178_80168793')) {function content_5cfd94e40b4178_80168793($_smarty_tpl) {?>
<!DOCTYPE html>

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
                <input id="monto" name="monto"  onkeyup="javascript:verRec()" type="number" placeholder="Ej: 500" class="form-control" required="">
                <span id="mensajito"></span>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-lg" id="guardar" name="guardar" value="Colaborar">
              </div>
            </form>
            <?php }?>
          </div>
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
      function verRec(){
        var monto = $('#monto').val();
        var propuesta = window.location.pathname;
        var array = propuesta.split('/');
        var nombre = array[4];
        console.log(monto);
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
    <?php echo '</script'; ?>
>
    </section>          
  </section>
      </body></html>
<?php }} ?>
