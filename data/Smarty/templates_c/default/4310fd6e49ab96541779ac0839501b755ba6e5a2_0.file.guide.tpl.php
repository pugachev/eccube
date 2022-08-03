<?php
/* Smarty version 3.1.40, created on 2022-07-16 22:26:36
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/frontparts/bloc/guide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2bc8cb58469_95029968',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4310fd6e49ab96541779ac0839501b755ba6e5a2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/frontparts/bloc/guide.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2bc8cb58469_95029968 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<div class="block_outer"><div id="guide_area" class="block_body"><ul class="button_like"><li><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
abouts/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Abouts") {?>selected<?php }?>">当サイトについて</a></li><li><a href="<?php echo smarty_modifier_script_escape((defined('HTTPS_URL') ? constant('HTTPS_URL') : null));?>
contact/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Contact" || $_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Contact_Complete") {?>selected<?php }?>">お問い合わせ</a></li><li><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
order/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Order") {?>selected<?php }?>">特定商取引法に基づく表記</a></li><li><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
guide/privacy.php" class="<?php if ($_smarty_tpl->tpl_vars['tpl_page_class_name']->value == "LC_Page_Guide_Privacy") {?>selected<?php }?>">プライバシーポリシー</a></li></ul></div></div>
<?php }
}
