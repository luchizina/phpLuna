<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-17 18:46:09
         compiled from "vistas\usuario_perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19046972965d080a214ede73-73719615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-17 15:29:08
         compiled from "vistas\usuario_perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5635d07dbf484b375-63269006%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd70c4cfaaf427259fbf97c94c57fbf0d1e96ac25' => 
    array (
      0 => 'vistas\\usuario_perfil.tpl',
<<<<<<< HEAD
      1 => 1560804970,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19046972965d080a214ede73-73719615',
=======
      1 => 1560206380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5635d07dbf484b375-63269006',
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'usuLogNick' => 0,
    'usuario' => 0,
    'misProps' => 0,
    'mProp' => 0,
    'propsFavoritas' => 0,
    'favProp' => 0,
    'propsColaboradas' => 0,
    'colProp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
<<<<<<< HEAD
  'unifunc' => 'content_5d080a2161e979_17845698',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d080a2161e979_17845698')) {function content_5d080a2161e979_17845698($_smarty_tpl) {?><!DOCTYPE html>
=======
  'unifunc' => 'content_5d07dbf4d08707_02450826',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d07dbf4d08707_02450826')) {function content_5d07dbf4d08707_02450826($_smarty_tpl) {?><!DOCTYPE html>
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3

<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
     <link href="css/pop.css" rel="stylesheet">
<<<<<<< HEAD
     <link href="css/perfil.css" rel="stylesheet">
=======
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="js/vendor/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="js/vendor/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body class="bg">

    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <section class="probootstrap-hero" style="color: white; height:100%" >
        <div class="container">
          <div class="row">
            <div class="col-md-12" >
              <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                 <?php if ($_smarty_tpl->tpl_vars['usuLogNick']->value==$_smarty_tpl->tpl_vars['usuario']->value->getNick()) {?>
                <h1 class="probootstrap-heading probootstrap-animate">¡Hola <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
!</h1>
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
            <div class="col-md-6 col-md-push-1 probootstrap-animate">     

<<<<<<< HEAD
          <div class="services">
<section class="pricecol">
<div style="text-align: center;">
 <img src="./<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getImagen();?>
" class="imgRedonda" width="150" height="150">
</div>
<h3 style="text-align: center;"><Span>Datos personales:</span></h3>
<ul>
<li>Nombre: <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
</li>
<li>Apellido:    <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getApellido();?>
</li>
<li>Nick:    <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNick();?>
</li>
<li>Correo:    <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getCorreo();?>
</li>
</ul>
</section>

   

          <div class="col-md-5 probootstrap-animate ">
           
<h2>Propuestas</h2>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Propuestas</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Favoritas</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Colaboradas</button>
</div>

<div id="London" class="tabcontent">
  <div> 
            <div class="table-responsive scr">
            <table class="table table-striped tabla" >
=======
           <div class="form-group">
                <img src="./<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getImagen();?>
" class="imgRedonda" width="250" height="250">
           </div>
           <div id="all">
  <article>
     <input id="jaja" type="button" class="btn btn-primary" value=" Ver informacion personal">
  </article>

  <div id="popup">
                <label for="Nombre">Nombre:    <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNombre();?>
</label><br>
                <label for="Descripción">Apellido:    <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getApellido();?>
</label><br>
                <label for="celular">Nick:    <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNick();?>
</label><br>
                <label for="fecha_pub">Correo:    <?php echo $_smarty_tpl->tpl_vars['usuario']->value->getCorreo();?>
</label><br>
  </div>
</div>         
          </div>
          <div class="col-md-5 probootstrap-animate ">
            <h2 class="probootstrap-heading probootstrap-animate ">Información personal</h2>
            <div class="table-responsive">
           <h2 class="blanca">Mis propuestas</h2>
            <table class="table table-striped tabla" style=" background-color: #ecececb3">
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3
  <tr>
    <th>Nombre</th>
 
  </tr>
   <?php if ($_smarty_tpl->tpl_vars['misProps']->value!=null) {?>
     <?php  $_smarty_tpl->tpl_vars['mProp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mProp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['misProps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mProp']->key => $_smarty_tpl->tpl_vars['mProp']->value) {
$_smarty_tpl->tpl_vars['mProp']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['mProp']->value->getNombre();?>
</td>
    
  </tr>
  <?php } ?>
  <?php }?>

 <?php if ($_smarty_tpl->tpl_vars['misProps']->value==null) {?>
  <tr>
    <td>Aún no has publicado nada</td>
  </tr>
  <?php }?>
</table>
</div>
<<<<<<< HEAD
</div>
</div>

<div id="Paris" class="tabcontent">
  <div class="table-responsive ">
            <table class="table table-striped tabla " style=" background-color: #ecececb3">
=======
 
<div class="table-responsive">
            <h2 class="blanca">Propuestas favoritas</h2>
            <table class="table table-striped tabla" style=" background-color: #ecececb3">
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3
  <tr>
    <th>Nombre</th>
  </tr>
      <?php if ($_smarty_tpl->tpl_vars['propsFavoritas']->value!=null) {?>
     <?php  $_smarty_tpl->tpl_vars['favProp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['favProp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['propsFavoritas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['favProp']->key => $_smarty_tpl->tpl_vars['favProp']->value) {
$_smarty_tpl->tpl_vars['favProp']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['favProp']->value->getNombre();?>
</td>
    
  </tr>
  <?php } ?>
  <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['propsFavoritas']->value==null) {?>
  <tr>
    <td>Aún no tienes propuestas favoritas</td>
  </tr>
  <?php }?>
</table>
</div>
<<<<<<< HEAD
</div>

<div id="Tokyo" class="tabcontent">
 
<div class="table-responsive ">
=======

<div class="table-responsive ">
          <h2 class="blanca">Propuestas colaboradas</h2>
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3
            <table class="table table-striped tabla" style=" background-color: #ecececb3">
  <tr>
    <th>Nombre</th>
    <th>Monto colaborado en total</th>
  </tr>
   <?php if ($_smarty_tpl->tpl_vars['propsColaboradas']->value!=null) {?>
     <?php  $_smarty_tpl->tpl_vars['colProp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['colProp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['propsColaboradas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['colProp']->key => $_smarty_tpl->tpl_vars['colProp']->value) {
$_smarty_tpl->tpl_vars['colProp']->_loop = true;
?>
  <tr>
    <td><?php echo $_smarty_tpl->tpl_vars['colProp']->value->getNombre();?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['colProp']->value->totalMontoColaborado($_smarty_tpl->tpl_vars['usuLogNick']->value);?>
</td>
  </tr>
  <?php } ?>
  <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['propsColaboradas']->value==null) {?>
  <tr>
    <td>Aún no has realizado una colaborado</td>
  </tr>
  <?php }?>
</table>
</div>
<<<<<<< HEAD
</div>

<?php echo '<script'; ?>
>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
<?php echo '</script'; ?>
>
 


=======
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3
  <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/notifUsuario">
    <?php if ($_smarty_tpl->tpl_vars['usuario']->value->getNotificacion()==1) {?>
  <input type="checkbox" name="checkNotif" id="checkNotif"> Activar/Desactivar notificaciones<br>
    <?php } else { ?>
     <input type="checkbox" name="checkNotif" id="checkNotif" checked> Activar/Desactivar notificaciones<br>
     <?php }?>
  <input type="hidden" name="nomUsu" id="nomUsu" value="<?php echo $_smarty_tpl->tpl_vars['usuario']->value->getNick();?>
">
  <input type="submit" class="btn btn-primary" value="Guardar cambios">
</form>
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
 src="js/pop.js"><?php echo '</script'; ?>
>
    </section>          
  </section>

     </body>
      </html><?php }} ?>
