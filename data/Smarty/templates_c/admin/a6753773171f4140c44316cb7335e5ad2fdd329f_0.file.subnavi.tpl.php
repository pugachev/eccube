<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:07:03
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/order/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd27d775eb48_05855417',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6753773171f4140c44316cb7335e5ad2fdd329f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/order/subnavi.tpl',
      1 => 1658652101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd27d775eb48_05855417 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
    <li id="navi-order-index" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'order' && $_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?>on<?php }?>"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
order/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
"><span>受注管理</span></a></li>
    <li id="navi-order-add" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'order' && $_smarty_tpl->tpl_vars['tpl_subno']->value == 'add') {?>on<?php }?>"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
order/edit.php?mode=add&amp;<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
=<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
"><span>受注登録</span></a></li>
    <li id="navi-order-status"
        class="<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'order' && $_smarty_tpl->tpl_vars['tpl_subno']->value == 'status') {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
order/status.php"><span>対応状況管理</span></a></li>
</ul>
<?php }
}
