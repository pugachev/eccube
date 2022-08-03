<?php
/* Smarty version 3.1.40, created on 2022-07-16 21:27:25
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/ownersstore/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2aead8bdd58_72533494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '997c88ff4672427c89f69c9631b36bbfa45b96b3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/ownersstore/subnavi.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2aead8bdd58_72533494 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
    <li class="on_level2">
        <div><span>プラグイン管理</span></div>
        <ul class="level2">
            <li id="navi-ownersstore-index" class="<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?>on<?php }?>">
                <a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
ownersstore/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
"><span>プラグイン管理</span></a></li>
            <li id="navi-ownersstore-plugin-hookpoint-list" class="<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'plugin-hookpoint-list') {?>on<?php }?>">
                <a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
ownersstore/plugin_hookpoint_list.php"><span>フックポイント管理</span></a></li>            
        </ul>
    </li>
    <li id="navi-ownersstore-module" class="<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'module') {?>on<?php }?>">
        <a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
ownersstore/module.php"><span>モジュール管理</span></a></li>
    <li id="navi-ownersstore-settings" class="<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'settings') {?>on<?php }?>">
        <a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
ownersstore/settings.php"><span>認証キー設定</span></a></li>
    <li id="navi-ownersstore-log" class="<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'log') {?>on<?php }?>">
        <a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
ownersstore/log.php"><span>ログ管理</span></a></li>
</ul>
<?php }
}
