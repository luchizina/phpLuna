<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-07-01 20:25:01
         compiled from "vistas\propuestas_detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61458725d1a944146ed60-67105658%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08e12de8fc9c9d6be32a84ef7a419ea195e7387c' => 
    array (
      0 => 'vistas\\propuestas_detalle.tpl',
      1 => 1562023498,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61458725d1a944146ed60-67105658',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5d1a94416d0368_26648189',
  'variables' => 
  array (
    'url_base' => 0,
    'propuesta' => 0,
    'usuLogNick' => 0,
    'recompensas' => 0,
    'rec' => 0,
    'comentarios' => 0,
    'com' => 0,
    'propsCatego' => 0,
    'propC' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d1a94416d0368_26648189')) {function content_5d1a94416d0368_26648189($_smarty_tpl) {?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/carrusel.css">
        <link href="css/dashboard.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <link href="css/propa.css" rel="stylesheet">
        <link href="css/pop.css" rel="stylesheet">
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
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

        <section class="probootstrap-hero "  data-stellar-background-ratio="0.01">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                    <div class="probootstrap-slider-text probootstrap-animate" data-animate-effect="fadeIn">
                        <h1 class="probootstrap-heading probootstrap-animate otromasche"><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
</h1>
                        <h2 style="color: #fff" class="probootstrap-heading probootstrap-animate otromasche2">Información general</h2>
                    </div>
                </div>
            </div>
        </div>
        <section class="probootstrap-section">
            <div class="container">
            <div class="row">
                <div class=" probootstrap-animate divSel" >
                    <div class="services">
                        <section class="pricecol">
                            <div class="conte">
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getImagen();?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=null) {?>
                                <img src="./<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getImagen();?>
 " class="imgRedonda" width="400" height="400" />
                                <?php }?>
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getImagen();?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==null) {?>
                                <img src="/img/person_7.jpg" />
                                <?php }?>
                                <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getEstadoActual();?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getEstadoActual();?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp3==3||$_tmp4==4) {?>
                                <?php if ($_smarty_tpl->tpl_vars['usuLogNick']->value!=null) {?>
                                <div> 
                                    <a style="text-align: center; margin-top: 10px; " href="/phpLuna/propuesta/nuevaColaboracion/<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
" class="btn btn-primary btn-black">Colaborar!</a>  
                                </div>
                                <?php }?>
                                <?php }?>
                            </div>
                            <div style ="margin-left: 10px">
                                <ul>
                                    <li class="estilo">Nombre: </li>
                                    <li><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
</li>
                                    <li class="estilo">Fecha publicada:  </li>
                                    <li> <?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getFechaPublicada();?>
</li>
                                    <li class="estilo">Descripción: </li>
                                    <li ><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getDescripcion();?>
</li>
                                    <li class="estilo">Monto: </li>
                                    <li>$<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getMonto();?>
</li>
                                    <li class="estilo">Progeso actual:  </li>
                                    <li>$<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getMontoActual();?>
</li>
                                    <li>
                                        <div class="progress" style="text-align:center; max-width: 300px ; margin: 0 auto; margin-top: 20px;">
                                            <div class="progress-bar progress-bar-s2" data-percent="<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->calc();?>
"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <div class="tab">
                            <button class="tablinks" onclick="openCity(event, 'London')">RECOMPENSAS</button>
                        </div>
                        <div id="London" class="tabcontent">
                            <table class="table table-striped tabla" style=" background-color: #ecececb3">
                                <tr>
                                    <th>Nombre</th>
                                    <th>Monto a superar</th>
                                </tr>
                                <?php  $_smarty_tpl->tpl_vars['rec'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['rec']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['recompensas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['rec']->key => $_smarty_tpl->tpl_vars['rec']->value) {
$_smarty_tpl->tpl_vars['rec']->_loop = true;
?>
                                <tr>
                                    <td><?php echo $_smarty_tpl->tpl_vars['rec']->value->getNombre();?>
</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['rec']->value->getMontoaSuperar();?>
</td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="jajaja probootstrap-heading probootstrap-animate" id="coments">
                <?php  $_smarty_tpl->tpl_vars['com'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['com']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['com']->key => $_smarty_tpl->tpl_vars['com']->value) {
$_smarty_tpl->tpl_vars['com']->_loop = true;
?>
                <div class="comment">
                    <?php if ($_smarty_tpl->tpl_vars['com']->value->getUsuario()->getImagen()!=null) {?>
                    <img src="./<?php echo $_smarty_tpl->tpl_vars['com']->value->getUsuario()->getImagen();?>
">
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['com']->value->getUsuario()->getImagen()==null) {?>
                    <img src="./imgUsus/pepito.png">
                    <?php }?>
                    <div class="comment-content">
                        <p class="author"><strong><?php echo $_smarty_tpl->tpl_vars['com']->value->getUsuario()->getNick();?>
</strong></p>
                        <span>
                        <?php echo $_smarty_tpl->tpl_vars['com']->value->getTexto();?>
 
                        </span>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['com']->value->getUsuario()->getNick()==$_smarty_tpl->tpl_vars['usuLogNick']->value) {?>
                    <a id="<?php echo $_smarty_tpl->tpl_vars['com']->value->getId();?>
" class="btn" onclick="borrarComent('<?php echo $_smarty_tpl->tpl_vars['com']->value->getId();?>
','<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
');">
                    <i class="icon-trash"></i></a>  
                    <?php }?>
                    <a class="btn" onclick="likeComentario('<?php echo $_smarty_tpl->tpl_vars['usuLogNick']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['com']->value->getId();?>
);">
                    <i class="fa fa-thumbs-up"></i> <span id="<?php echo $_smarty_tpl->tpl_vars['usuLogNick']->value;
echo $_smarty_tpl->tpl_vars['com']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['com']->value->getLikes();?>
</span></a>
                </div>
                <?php } ?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['usuLogNick']->value!=null) {?>
            <div class="jajaja ">
                <div class="jaja probootstrap-heading probootstrap-animate">
                    <form method="post" class="probootstrap-form">
                        <textarea rows="5" cols="57" name="textoComentario" id="textoComentario"></textarea>
                        <div class="form-group" >
                            <a style="margin-bottom:  10px;"onclick="javascript:Coment('<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
','<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
');" id="submit" name="submit" class="btn btn-primary btn-lg">COMENTAR</a>
                        </div>
                    </form>
                </div>
            </div>
            <?php }?>
            <h2 class="probootstrap-heading probootstrap-animate otromasche2"> Quizás te interesen...</h2>
            <div class="accordion probootstrap-heading probootstrap-animate">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['propC'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['propC']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['propsCatego']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['propC']->key => $_smarty_tpl->tpl_vars['propC']->value) {
$_smarty_tpl->tpl_vars['propC']->_loop = true;
?>
                    <li>
                        <div class="image_title">
                            <a href="#"><?php echo $_smarty_tpl->tpl_vars['propC']->value->getNombre();?>
</a>
                        </div>
                        <a href="https://ibb.co/gGv6QS"><img src="./<?php echo $_smarty_tpl->tpl_vars['propC']->value->getImagen();?>
" height="320" width="640" alt="transformers4_640x320" border="0"></a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </section>
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
        <?php echo '<script'; ?>
 src="js/scripts.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/carrusel.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/main.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/custom.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="js/validar.js" type="text/javascript"><?php echo '</script'; ?>
>
    </body>
</html>


     <?php }} ?>
