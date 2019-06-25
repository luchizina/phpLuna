<<<<<<< HEAD
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-17 18:43:50
         compiled from "vistas\favoritos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20490108015d0809963464c5-93880073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
=======
<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-17 14:54:00
         compiled from "vistas\favoritos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42885d07d3b8ac6e34-09435114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03d14a36517e5022eac650f665ec8fbe5e3e7890' => 
    array (
      0 => 'vistas\\favoritos.tpl',
<<<<<<< HEAD
      1 => 1557587780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20490108015d0809963464c5-93880073',
=======
      1 => 1557270269,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42885d07d3b8ac6e34-09435114',
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
<<<<<<< HEAD
  'unifunc' => 'content_5d0809963833c7_53777943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d0809963833c7_53777943')) {function content_5d0809963833c7_53777943($_smarty_tpl) {?><div class="modal fade" id="favoritosModal">
=======
  'unifunc' => 'content_5d07d3b8c0b318_38974581',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d07d3b8c0b318_38974581')) {function content_5d07d3b8c0b318_38974581($_smarty_tpl) {?><div class="modal fade" id="favoritosModal">
>>>>>>> 7f277980dafb8245f820a9fc6b0207265e7111e3
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
