<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:02:21
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd26bdf330f7_86148568',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9df57672df19949393f8b96fbdf073e1ca3ed148' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/index.tpl',
      1 => 1658652113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd26bdf330f7_86148568 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<div id="main_image"><a href="<?php echo smarty_modifier_script_escape((defined('P_DETAIL_URLPATH') ? constant('P_DETAIL_URLPATH') : null));?>
1"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/banner/bnr_top_main.jpg" alt="詳細はこちら" /></a></div>
<?php }
}
