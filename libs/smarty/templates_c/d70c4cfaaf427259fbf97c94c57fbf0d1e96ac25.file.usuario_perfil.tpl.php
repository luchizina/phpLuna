<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-05 21:08:58
         compiled from "vistas\usuario_perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15832812035cf5908009af97-27873010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd70c4cfaaf427259fbf97c94c57fbf0d1e96ac25' => 
    array (
      0 => 'vistas\\usuario_perfil.tpl',
      1 => 1559761726,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15832812035cf5908009af97-27873010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cf590801be997_89127155',
  'variables' => 
  array (
    'url_base' => 0,
    'usuLogNick' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf590801be997_89127155')) {function content_5cf590801be997_89127155($_smarty_tpl) {?><!DOCTYPE html>

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
                 <?php if ($_smarty_tpl->tpl_vars['usuLogNick']->value==$_smarty_tpl->tpl_vars['usuario']->value->getNick()) {?>
                <h1 class="probootstrap-heading probootstrap-animate">¡Hola <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
! Este es tu perfil.</h1>
                 <?php } else { ?>
                   <h1 class="probootstrap-heading probootstrap-animate">Este es el perfil de <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
</h1>
                 <?php }?>
              </div>
            </div>
          </div>
        </div>

      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif" >
            <form method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="Nombre"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
</label>
               
              </div>
              <div class="form-group">
                <label for="Descripción"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getApellido();?>
</label>
              
              </div>

              <div class="form-group">
                <label for="celular"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNick();?>
</label>
               
              </div>
               <div class="form-group">
                <label for="fecha_pub"><?php echo $_smarty_tpl->tpl_vars['usuario']->value->getCorreo();?>
</label>
                
              </div>
                <div class="form-group">
                <img src="./<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getImagen();?>
" />
                
              </div>

              <div class="form-group">
              
              </div>
            </form>
          </div>

          <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/notifUsuario">
              <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getNotificacion()==1) {?>
  <input type="checkbox" name="checkNotif" id="checkNotif"> Activar/Desactivar notificaciones<br>
    <?php } else { ?>
     <input type="checkbox" name="checkNotif" id="checkNotif" checked> Activar/Desactivar notificaciones<br>
     <?php }?>
  <input type="hidden" name="nomUsu" id="nomUsu" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNick();?>
">
  <input type="submit" value="Guardar cambios">
</form>

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
    </section>          
  </section>

     </body>
      </html><?php }} ?>
