<?php
/* Smarty version 3.1.40, created on 2022-07-16 21:27:25
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/customer/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2aead87eed7_95832281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2276c0f1259295511bc96bfc2549f629467c1418' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/customer/subnavi.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2aead87eed7_95832281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?> class="on"<?php }?> id="navi-customer-index"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
customer/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
"><span>会員マスター</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'customer') {?> class="on"<?php }?> id="navi-customer-customer"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
customer/edit.php"><span>会員登録</span></a></li>
</ul>
<?php }
}
