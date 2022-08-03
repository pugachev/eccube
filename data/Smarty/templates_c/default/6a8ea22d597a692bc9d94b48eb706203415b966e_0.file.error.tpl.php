<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:02:44
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd26d45e82d0_43097009',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a8ea22d597a692bc9d94b48eb706203415b966e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/error.tpl',
      1 => 1658652112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd26d45e82d0_43097009 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<div id="undercolumn"><div id="undercolumn_error"><div class="message_area"><!--★エラーメッセージ--><p class="error"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_error']->value);?>
</p></div><div class="btn_area"><ul><li><?php if ($_smarty_tpl->tpl_vars['return_top']->value) {?><a href="<?php echo smarty_modifier_script_escape((defined('TOP_URL') ? constant('TOP_URL') : null));?>
"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_toppage.jpg" alt="トップページへ" /></a><?php } else { ?><a href="javascript:history.back()"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_back.jpg" alt="戻る" /></a><?php }?></li></ul></div></div></div>
<?php }
}
