<?php
/* Smarty version 4.3.1, created on 2024-10-13 15:12:45
  from 'C:\laragon\www\DesipulosVapeHub\pdf\delivery-slip.summary-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670b72edec34d0_24068969',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97444605fddfd9a871d7fae101746fe419f8abe8' => 
    array (
      0 => 'C:\\laragon\\www\\DesipulosVapeHub\\pdf\\delivery-slip.summary-tab.tpl',
      1 => 1689813502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670b72edec34d0_24068969 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="summary-tab" width="100%">
	<tr>
		<th class="header small" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Reference','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</th>
		<th class="header small" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order date','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</th>
		<?php if ((isset($_smarty_tpl->tpl_vars['carrier']->value))) {?>
			<th class="header small" valign="middle"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</th>
		<?php }?>
	</tr>
	<tr>
		<td class="center small white"><?php echo $_smarty_tpl->tpl_vars['order']->value->getUniqReference();?>
</td>
		<td class="center small white"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['dateFormat'][0], array( array('date'=>$_smarty_tpl->tpl_vars['order']->value->date_add,'full'=>0),$_smarty_tpl ) );?>
</td>
		<?php if ((isset($_smarty_tpl->tpl_vars['carrier']->value))) {?>
			<td class="center small white"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
		<?php }?>
	</tr>
</table>

<?php }
}
