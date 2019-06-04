<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-04 18:48:15
         compiled from "vistas\propuestas_detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13309837765cf6bd51530757-70349685%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-03 20:57:37
         compiled from "vistas\propuestas_detalle.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19869852855cf5922e4db471-69579055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 72018e22c9c4254323b46565cbd0a2409643f5eb
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08e12de8fc9c9d6be32a84ef7a419ea195e7387c' => 
    array (
      0 => 'vistas\\propuestas_detalle.tpl',
<<<<<<< HEAD
      1 => 1559676155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13309837765cf6bd51530757-70349685',
=======
      1 => 1559606254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19869852855cf5922e4db471-69579055',
>>>>>>> 72018e22c9c4254323b46565cbd0a2409643f5eb
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
<<<<<<< HEAD
  'unifunc' => 'content_5cf6bd516db056_61268527',
=======
  'unifunc' => 'content_5cf5922e638680_50468320',
>>>>>>> 72018e22c9c4254323b46565cbd0a2409643f5eb
  'variables' => 
  array (
    'url_base' => 0,
    'propuesta' => 0,
    'comentarios' => 0,
    'com' => 0,
    'usuLogNick' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<<<<<<< HEAD
<?php if ($_valid && !is_callable('content_5cf6bd516db056_61268527')) {function content_5cf6bd516db056_61268527($_smarty_tpl) {?><!DOCTYPE html>
=======
<?php if ($_valid && !is_callable('content_5cf5922e638680_50468320')) {function content_5cf5922e638680_50468320($_smarty_tpl) {?><!DOCTYPE html>
>>>>>>> 72018e22c9c4254323b46565cbd0a2409643f5eb

<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

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
                <h1 class="probootstrap-heading probootstrap-animate">Propuesta</h1>
                 <h2 style="color: #fff" class="probootstrap-heading probootstrap-animate">Información de propuesta</h2>
              </div>
            </div>
          </div>
        </div>
      <section class="probootstrap-section">
        <div class="container">
          <div class="row">
          <div class="col-md-5 probootstrap-animate" style="color: white; font-family: Montserrat,Arial,sans-serif" >
           
              <div class="form-group">
                <label for="Nombre">Nombre:</label>
                 <p name="Nombre"><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
</p> 
              </div>
              
              <div class="form-group">
                <label for="monto">Monto:</label>
                 <p name="monto">$<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getMonto();?>
</p> 
              </div>


               <div class="form-group">
                <label for="fecha">Fecha publicada:</label>
                 <p name="fecha"><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getFechaPublicada();?>
</p>                 
              </div>
             
           
        
          </div>
           <div class="col-md-6 col-md-push-1 probootstrap-animate"  style="color: white;">            
             <div class="form-group" style="max-width: 300px;max-height: 300px">
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getImagen();?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=null) {?>
                    <img src="./<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getImagen();?>
" />
                    <?php }?>
                    <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getImagen();?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2==null) {?>
                   <img src="/img/person_7.jpg" />
                    <?php }?>
                
              </div>
              <div class="form-group">
                <label for="Desc">Descripcion:</label>
                 <p name="Desc"><?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getDescripcion();?>
</p> 
              </div>
                <div class="form-group">
                    <label for="na">Progreso actual: $<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getMontoActual();?>
</label>
               <div class="progress" style="max-width: 400px">
                    <div class="progress-bar progress-bar-s2" data-percent="<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->calc();?>
"></div>
                  </div>
                  </div>

          </div>
        </div>
        </div>

        <div class="jajaja"  >
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
               <div class="comment-content"><p class="author"><strong><?php echo $_smarty_tpl->tpl_vars['com']->value->getUsuario()->getNick();?>
</strong></p>
                <span>
                    <?php echo $_smarty_tpl->tpl_vars['com']->value->getTexto();?>
 
                </span>
           </div>
              <?php if ($_smarty_tpl->tpl_vars['com']->value->getUsuario()->getNick()==$_smarty_tpl->tpl_vars['usuLogNick']->value) {?>
           <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/borrarComEnPagina/<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
/<?php echo $_smarty_tpl->tpl_vars['com']->value->getId();?>
">
                         <i class="icon-trash"></i></a>
         <?php }?>
         <a class="btn" onclick="javascript:likeComentario('<?php echo $_smarty_tpl->tpl_vars['usuLogNick']->value;?>
',<?php echo $_smarty_tpl->tpl_vars['com']->value->getId();?>
);">
<i class="fa fa-thumbs-up"></i> <span id="<?php echo $_smarty_tpl->tpl_vars['usuLogNick']->value;
echo $_smarty_tpl->tpl_vars['com']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['com']->value->getLikes();?>
</span></a>
          </div>
 
      <?php } ?>
<<<<<<< HEAD
      <div class="probootstrap-form">
      <li>
=======
         <div class="jaja">
      <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/comentarEnPagina" class="probootstrap-form">
>>>>>>> 72018e22c9c4254323b46565cbd0a2409643f5eb
        <textarea rows="5" cols="57" name="textoComentario" id="textoComentario"></textarea>
        <div class="form-group" >
          <!-- <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
" name="nomPropCom" id="nomPropCom">
           --> <a id="submit" href="javascript:void(0)" class="btn btn-primary btn-lg" id="com" name="com">COMENTAR</a>
          </div>
<<<<<<< HEAD
      </li>
    </div>
    </ul>
=======
    </form>
    </div>
    <br>
>>>>>>> 72018e22c9c4254323b46565cbd0a2409643f5eb
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
 src="js/validar.js" type="text/javascript"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 type="text/javascript">
      function listCom(){
          $.ajax({
            url: '<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/listComs/<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
',
            success:function(){
              console.log("Lista");
              console.log('<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/listComs/<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
');
            }
          })
        }
       $(function(){
          listCom();
          $('#submit').click(function(){
            var texto = $('#textoComentario').val();
            var nomPropCom = '<?php echo $_smarty_tpl->tpl_vars['propuesta']->value->getNombre();?>
';
            $.ajax({
              url: '<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
propuesta/comentarEnPagina',
              data: 'textoComentario='+texto+'&nomPropCom='+nomPropCom,
              type: 'post',
              success:function(){
                alert('Comentario agregado');
                document.getElementById("textoComentario").value = "";
                listCom();
              }
            })
          })
       })
     <?php echo '</script'; ?>
>
    </section>          
  </section>
      </body></html>

      <?php }} ?>
