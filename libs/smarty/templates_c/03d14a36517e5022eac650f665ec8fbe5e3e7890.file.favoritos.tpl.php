<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-20 04:51:02
         compiled from "vistas\favoritos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14598199265ce21616e03891-15845028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03d14a36517e5022eac650f665ec8fbe5e3e7890' => 
    array (
      0 => 'vistas\\favoritos.tpl',
      1 => 1430789471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14598199265ce21616e03891-15845028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ce21617027cd5_64196568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce21617027cd5_64196568')) {function content_5ce21617027cd5_64196568($_smarty_tpl) {?><div class="modal fade" id="favoritosModal">
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
