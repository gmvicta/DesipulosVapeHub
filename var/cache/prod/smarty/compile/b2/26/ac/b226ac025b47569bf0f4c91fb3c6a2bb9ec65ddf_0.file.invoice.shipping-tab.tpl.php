<?php
/* Smarty version 4.3.1, created on 2024-10-13 15:12:11
  from 'C:\laragon\www\DesipulosVapeHub\pdf\invoice.shipping-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670b72cb0a1619_54228731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b226ac025b47569bf0f4c91fb3c6a2bb9ec65ddf' => 
    array (
      0 => 'C:\\laragon\\www\\DesipulosVapeHub\\pdf\\invoice.shipping-tab.tpl',
      1 => 1689813502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670b72cb0a1619_54228731 (Smarty_Internal_Template $_smarty_tpl) {
?><table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Carrier','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }
}
