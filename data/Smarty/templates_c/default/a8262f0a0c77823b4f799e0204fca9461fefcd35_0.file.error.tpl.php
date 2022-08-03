<?php
/* Smarty version 3.1.40, created on 2022-07-20 06:18:56
  from '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/default/error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d71fc0e582f0_56305569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8262f0a0c77823b4f799e0204fca9461fefcd35' => 
    array (
      0 => '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/default/error.tpl',
      1 => 1658234795,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d71fc0e582f0_56305569 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<div id="undercolumn"><div id="undercolumn_error"><div class="message_area"><!--★エラーメッセージ--><p class="error"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_error']->value);?>
</p></div><div class="btn_area"><ul><li><?php if ($_smarty_tpl->tpl_vars['return_top']->value) {?><a href="<?php echo smarty_modifier_script_escape((defined('TOP_URL') ? constant('TOP_URL') : null));?>
"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_toppage.jpg" alt="トップページへ" /></a><?php } else { ?><a href="javascript:history.back()"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_back.jpg" alt="戻る" /></a><?php }?></li></ul></div></div></div>
<?php }
}
