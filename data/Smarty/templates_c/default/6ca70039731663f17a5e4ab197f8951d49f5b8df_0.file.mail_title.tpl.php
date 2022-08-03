<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:03:13
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/mail_templates/mail_title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd26f190a847_69975444',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ca70039731663f17a5e4ab197f8951d49f5b8df' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/mail_templates/mail_title.tpl',
      1 => 1658652113,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd26f190a847_69975444 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>
【<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_shopname']->value);?>
】 <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_mailtitle']->value);?>

<?php }
}
