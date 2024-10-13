<?php
/* Smarty version 4.3.1, created on 2024-10-13 14:54:54
  from 'C:\laragon\www\DesipulosVapeHub\admin28\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670b6ebe8bd608_01344692',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5cf81b89a93c07dc363dc8c084741f2d46bb74f7' => 
    array (
      0 => 'C:\\laragon\\www\\DesipulosVapeHub\\admin28\\themes\\default\\template\\content.tpl',
      1 => 1689813502,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670b6ebe8bd608_01344692 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
