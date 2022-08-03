<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:07:03
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/mail/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd27d776ee25_06713934',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50cc7215b38b3b7ae2caef97f5f7d3ab9623a876' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/mail/subnavi.tpl',
      1 => 1658652107,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd27d776ee25_06713934 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?> class="on"<?php }?> id="navi-mail-index"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
mail/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
"><span>配信内容設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'template') {?> class="on"<?php }?> id="navi-mail-template"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
mail/template.php"><span>テンプレート設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'history') {?> class="on"<?php }?> id="navi-mail-history"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
mail/history.php"><span>配信履歴</span></a></li>
</ul>
<?php }
}
