<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-14 23:35:37
         compiled from "vistas\favoritos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:238005cdb34a9c64415-10597239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-15 00:23:35
         compiled from "vistas\favoritos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9929400505cdb3fe77c06b2-64924539%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> f7204b901711289b2f011274512fec5e6ab8ce78
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03d14a36517e5022eac650f665ec8fbe5e3e7890' => 
    array (
      0 => 'vistas\\favoritos.tpl',
      1 => 1557270269,
      2 => 'file',
    ),
  ),
<<<<<<< HEAD
  'nocache_hash' => '238005cdb34a9c64415-10597239',
=======
  'nocache_hash' => '9929400505cdb3fe77c06b2-64924539',
>>>>>>> f7204b901711289b2f011274512fec5e6ab8ce78
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
<<<<<<< HEAD
  'unifunc' => 'content_5cdb34a9d34872_31823747',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdb34a9d34872_31823747')) {function content_5cdb34a9d34872_31823747($_smarty_tpl) {?><div class="modal fade" id="favoritosModal">
=======
  'unifunc' => 'content_5cdb3fe77f7421_43639188',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdb3fe77f7421_43639188')) {function content_5cdb3fe77f7421_43639188($_smarty_tpl) {?><div class="modal fade" id="favoritosModal">
>>>>>>> f7204b901711289b2f011274512fec5e6ab8ce78
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Favoritos</h4>
      </div>
      <div class="modal-body">
         <table class="table table-striped favoritosTable" id="favoritosTable" >
		  <thead>
		    <tr>
		      <th>Nombre</th>
		      <th>Apellido</th>
		      <th>Email</th>
		    </tr>
		  </thead>
		  <tbody>

		  </tbody>
		  </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<?php echo '<script'; ?>
 id="favoritosTemplate" type="text/template">
  	<tr>
  		<td><?php echo '<%'; ?>
= nombre <?php echo '%>'; ?>
</td>
  		<td><?php echo '<%'; ?>
= apellido <?php echo '%>'; ?>
</td>
		<td><?php echo '<%'; ?>
= email <?php echo '%>'; ?>
</td>
  	</tr>
<?php echo '</script'; ?>
>
    <?php }} ?>
