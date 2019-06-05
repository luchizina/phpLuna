<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-04 19:55:24
         compiled from "vistas\comentarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2919871415cf6f4cf8007b7-25243317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b91c3daa283d6854cdc213e5e494696148ddec2e' => 
    array (
      0 => 'vistas\\comentarios.tpl',
      1 => 1559688923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2919871415cf6f4cf8007b7-25243317',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cf6f4cf83d6b1_35394451',
  'variables' => 
  array (
    'comentarios' => 0,
    'com' => 0,
    'usuLogNick' => 0,
    'url_base' => 0,
    'propuesta' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6f4cf83d6b1_35394451')) {function content_5cf6f4cf83d6b1_35394451($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['com'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['com']->_loop = false;
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
 
      <?php } ?><?php }} ?>
