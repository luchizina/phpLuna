<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-07-08 17:47:56
         compiled from "vistas\cabezal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4464920795d23abfcd63cf1-51089832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb05f10fe29da8a558e3c965866d6cd5dd601380' => 
    array (
      0 => 'vistas\\cabezal.tpl',
      1 => 1562016270,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4464920795d23abfcd63cf1-51089832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'usuLogNick' => 0,
    'usuLogTipo' => 0,
    'categorias' => 0,
    'cat' => 0,
    'url_base' => 0,
    'url_login' => 0,
    'url_regis' => 0,
    'usuLogueado' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d23abfce947f3_24495350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d23abfce947f3_24495350')) {function content_5d23abfce947f3_24495350($_smarty_tpl) {?>
 <head>
    <link rel="shortcut icon" href="img/moon.png" type="image/png" />
    <title>LUNA</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/busqueda.css">
    <link rel="stylesheet" href="css/custom.css">
    <?php echo '<script'; ?>
 src="js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/sweetalert.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/validar.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="js/alertas.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="css/busca.css">
    
  </head>
      <nav class="navbar navbar-default probootstrap-navbar">

        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
             <img src="img/logo2.png" alt="Luna" height="100"> 




          </div>
          
          <div id="navbar-collapse" class="navbar-collapse collapse">
                             
                
  <ul class="nav navbar-nav navbar-right">

 <li class="active"><a href="index.html">Inicio</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Usuarios</a>
                <ul class="dropdown-menu">
                  <li ><a href="/phpLuna/usuario/listado/">Listado</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Propuestas</a>
                <ul class="dropdown-menu">
                  <li><a href="/phpLuna/propuesta/listado/">Listado</a></li>
                  <?php if ($_smarty_tpl->tpl_vars['usuLogNick']->value!=''&&$_smarty_tpl->tpl_vars['usuLogTipo']->value==0) {?>
                  <li><a href="/phpLuna/propuesta/listadoPropsAgregadas/1">Aceptar/rechazar propuestas</a></li>
                   <li><a href="/phpLuna/propuesta/listadoCat">Agregar categoría</a></li>
                   <li><a id="btnPropVencen" href="/phpLuna/usuario/mandarPropsQueVencen">¡Avisá de las propuestas que vencen!</a></li>
                   <?php }?>
                </ul>
              </li>
                          <li>
        <svg style="display: none">
                    <symbol id="magnify" viewBox="0 0 18 18" height="100%" width="100%">
                      <path d="M12.5 11h-.8l-.3-.3c1-1.1 1.6-2.6 1.6-4.2C13 2.9 10.1 0          6.5 0S0 2.9 0 6.5 2.9 13 6.5 13c1.6 0 3.1-.6 4.2-1.6l.3.3v.8l5 5          1.5-1.5-5-5zm-6 0C4 11 2 9 2 6.5S4 2 6.5 2 11 4 11 6.5 9 11 6.5            11z" fill="#fff" fill-rule="evenodd"/>
                    </symbol>
                  </svg>

                  <div class="search-bar">
                    <select class="selectita" id="elegirCate">
                      <option value="todas">Todas las categorías</option>
                      <?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categorias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?>
                      <option value="<?php echo $_smarty_tpl->tpl_vars['cat']->value->getNombreP();?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value->getNombreP();?>
</option>
                      <?php } ?>
                    </select>
                    <input type="text" class="input" id="xD" placeholder="&nbsp;">
                    <span class="label">Buscar propuesta</span>
                    <span class="highlight"></span>
                    <div class="search-btn" onclick="filtrarProp('<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
')">
                         <svg class="icon icon-18">
                           <use xlink:href="#magnify"></use>
                          </svg>
                    </div>
                  </div>
                  </li>
               <?php if ($_smarty_tpl->tpl_vars['usuLogNick']->value=='') {?>
              <li class="probootstra-cta-button last"><a href="<?php echo $_smarty_tpl->tpl_vars['url_login']->value;?>
" class="btn btn-primary">INICIAR SESIÓN</a></li>
              <li class="probootstra-cta-button last"><a href="<?php echo $_smarty_tpl->tpl_vars['url_regis']->value;?>
" class="btn btn-primary">REGISTRARSE</a></li>
               <?php } else { ?>
                <li><a href="/phpLuna/usuario/verPerfil/<?php echo $_smarty_tpl->tpl_vars['usuLogNick']->value;?>
">¡Hola <?php echo $_smarty_tpl->tpl_vars['usuLogueado']->value;?>
!</a></li>
                <li id="liprueba" class="probootstra-cta-button last cerrarS"><a id="axD" class="btn btn-primary cerrarS2">CERRAR SESIÓN</a></li>
               
                 <?php }?>
      
            </ul>
          </div>
        </div>
        
      </nav>
<?php }} ?>
