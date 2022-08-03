<?php
/* Smarty version 3.1.40, created on 2022-07-20 06:22:37
  from '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/default/frontparts/bloc/guide.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d7209d707e46_31885508',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8be8365e456ba953920b68ac08eaa64318271bd7' => 
    array (
      0 => '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/default/frontparts/bloc/guide.tpl',
      1 => 1658234936,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d7209d707e46_31885508 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
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
