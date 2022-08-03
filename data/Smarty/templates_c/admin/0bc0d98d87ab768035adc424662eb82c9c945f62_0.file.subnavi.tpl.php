<?php
/* Smarty version 3.1.40, created on 2022-07-20 06:28:01
  from '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/admin/system/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d721e12aa028_06615883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bc0d98d87ab768035adc424662eb82c9c945f62' => 
    array (
      0 => '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/admin/system/subnavi.tpl',
      1 => 1658234854,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d721e12aa028_06615883 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?> class="on"<?php }?> id="navi-system-index"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
system/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
"><span>メンバー管理</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'bkup') {?> class="on"<?php }?> id="navi-system-bkup"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
system/bkup.php"><span>バックアップ管理</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'parameter') {?> class="on"<?php }?> id="navi-system-parameter"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
system/parameter.php"><span>パラメーター設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'masterdata') {?> class="on"<?php }?> id="navi-system-masterdata"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
system/masterdata.php"><span>マスターデータ管理</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'masterdata') {?> class="on"<?php }?> id="navi-system-adminarea"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
system/adminarea.php"><span>管理画面設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'system') {?> class="on"<?php }?> id="navi-system-system"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
system/system.php"><span>システム情報</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'system' && $_smarty_tpl->tpl_vars['tpl_subno']->value == 'log') {?> class="on"<?php }?> id="navi-system-log"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
system/log.php"><span>EC-CUBE ログ表示</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'system' && $_smarty_tpl->tpl_vars['tpl_subno']->value == 'editdb') {?> class="on"<?php }?> id="navi-system-editdb"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
system/editdb.php"><span>高度なデータベース管理</span></a></li>
</ul>
<?php }
}
