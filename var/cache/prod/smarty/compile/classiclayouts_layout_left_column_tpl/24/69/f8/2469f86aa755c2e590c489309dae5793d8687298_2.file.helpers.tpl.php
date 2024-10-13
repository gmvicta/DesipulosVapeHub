<?php
/* Smarty version 4.3.1, created on 2024-10-13 14:54:39
  from 'C:\laragon\www\DesipulosVapeHub\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_670b6eafad17e8_91539123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2469f86aa755c2e590c489309dae5793d8687298' => 
    array (
      0 => 'C:\\laragon\\www\\DesipulosVapeHub\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1678713494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670b6eafad17e8_91539123 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\laragon\\www\\DesipulosVapeHub\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_left_column_tpl\\24\\69\\f8\\2469f86aa755c2e590c489309dae5793d8687298_2.file.helpers.tpl.php',
    'uid' => '2469f86aa755c2e590c489309dae5793d8687298',
    'call_name' => 'smarty_template_function_renderLogo_1157316103670b6eafab3d25_33669721',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_1157316103670b6eafab3d25_33669721 */
if (!function_exists('smarty_template_function_renderLogo_1157316103670b6eafab3d25_33669721')) {
function smarty_template_function_renderLogo_1157316103670b6eafab3d25_33669721(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_1157316103670b6eafab3d25_33669721 */
}
