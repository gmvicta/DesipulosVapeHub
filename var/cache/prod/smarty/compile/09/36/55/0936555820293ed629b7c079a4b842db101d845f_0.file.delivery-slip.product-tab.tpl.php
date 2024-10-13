<?php
/* Smarty version 4.3.1, created on 2024-10-13 15:12:46
  from 'C:\laragon\www\DesipulosVapeHub\pdf\delivery-slip.product-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670b72ee04b787_70070337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0936555820293ed629b7c079a4b842db101d845f' => 
    array (
      0 => 'C:\\laragon\\www\\DesipulosVapeHub\\pdf\\delivery-slip.product-tab.tpl',
      1 => 1689813502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670b72ee04b787_70070337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\laragon\\www\\DesipulosVapeHub\\vendor\\smarty\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),));
?>
<table class="product" width="100%" cellpadding="4" cellspacing="0">

	<thead>
		<tr>
			<th class="product header small" width="25%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</th>
			<th class="product header small" width="65%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</th>
			<th class="product header small" width="10%"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Qty','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</th>
		</tr>
	</thead>

	<tbody>
		<!-- PRODUCTS -->
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_details']->value, 'order_detail');
$_smarty_tpl->tpl_vars['order_detail']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order_detail']->value) {
$_smarty_tpl->tpl_vars['order_detail']->do_else = false;
?>
			<?php echo smarty_function_cycle(array('values'=>array("color_line_even","color_line_odd"),'assign'=>'bgcolor_class'),$_smarty_tpl);?>

			<tr class="product <?php echo $_smarty_tpl->tpl_vars['bgcolor_class']->value;?>
">

				<td class="product left">
					<?php if (empty($_smarty_tpl->tpl_vars['order_detail']->value['product_reference'])) {?>
						---
					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['order_detail']->value['product_reference'];?>

					<?php }?>
				</td>
				<td class="product left">
					<?php if ($_smarty_tpl->tpl_vars['display_product_images']->value) {?>
						<table width="100%">
							<tr>
								<td width="15%">
									<?php if ((isset($_smarty_tpl->tpl_vars['order_detail']->value['image'])) && $_smarty_tpl->tpl_vars['order_detail']->value['image']->id) {?>
										<?php echo $_smarty_tpl->tpl_vars['order_detail']->value['image_tag'];?>

									<?php }?>
								</td>
								<td width="5%">&nbsp;</td>
								<td width="80%">
									<?php echo $_smarty_tpl->tpl_vars['order_detail']->value['product_name'];?>

								</td>
							</tr>
						</table>
					<?php } else { ?>
						<?php echo $_smarty_tpl->tpl_vars['order_detail']->value['product_name'];?>

					<?php }?>
				</td>
				<td class="product center">
					<?php echo $_smarty_tpl->tpl_vars['order_detail']->value['product_quantity'];?>

				</td>

			</tr>

			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order_detail']->value['customizedDatas'], 'customizationPerAddress');
$_smarty_tpl->tpl_vars['customizationPerAddress']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customizationPerAddress']->value) {
$_smarty_tpl->tpl_vars['customizationPerAddress']->do_else = false;
?>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizationPerAddress']->value, 'customization', false, 'customizationId');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customizationId']->value => $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
					<tr class="customization_data <?php echo $_smarty_tpl->tpl_vars['bgcolor_class']->value;?>
">
						<td class="center"> &nbsp;</td>

						<td>
							<?php if ((isset($_smarty_tpl->tpl_vars['customization']->value['datas'][Product::CUSTOMIZE_TEXTFIELD])) && count($_smarty_tpl->tpl_vars['customization']->value['datas'][Product::CUSTOMIZE_TEXTFIELD]) > 0) {?>
								<table style="width: 100%;">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['datas'][Product::CUSTOMIZE_TEXTFIELD], 'customization_infos');
$_smarty_tpl->tpl_vars['customization_infos']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization_infos']->value) {
$_smarty_tpl->tpl_vars['customization_infos']->do_else = false;
?>
										<tr>
											<td style="width: 30%;">
												<?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s:','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
echo sprintf($_prefixVariable1,$_smarty_tpl->tpl_vars['customization_infos']->value['name']);?>

											</td>
											<td><?php echo $_smarty_tpl->tpl_vars['customization_infos']->value['value'];?>
</td>
										</tr>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</table>
							<?php }?>

							<?php if ((isset($_smarty_tpl->tpl_vars['customization']->value['datas'][Product::CUSTOMIZE_FILE])) && count($_smarty_tpl->tpl_vars['customization']->value['datas'][Product::CUSTOMIZE_FILE]) > 0) {?>
								<table style="width: 100%;">
									<tr>
										<td style="width: 30%;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'image(s):','d'=>'Shop.Pdf','pdf'=>'true'),$_smarty_tpl ) );?>
</td>
										<td><?php echo count($_smarty_tpl->tpl_vars['customization']->value['datas'][Product::CUSTOMIZE_FILE]);?>
</td>
									</tr>
								</table>
							<?php }?>
						</td>

						<td class="center">
							(<?php if ($_smarty_tpl->tpl_vars['customization']->value['quantity'] == 0) {?>1<?php } else {
echo $_smarty_tpl->tpl_vars['customization']->value['quantity'];
}?>)
						</td>

					</tr>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<!-- END PRODUCTS -->
	</tbody>

</table>
<?php }
}
