<?php
/* Smarty version 3.1.40, created on 2022-07-20 06:28:01
  from '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/admin/customer/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d721e1269686_12217053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21892936418023df567ea2d6495d90e52aec3ee3' => 
    array (
      0 => '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/admin/customer/subnavi.tpl',
      1 => 1658234858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d721e1269686_12217053 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
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
