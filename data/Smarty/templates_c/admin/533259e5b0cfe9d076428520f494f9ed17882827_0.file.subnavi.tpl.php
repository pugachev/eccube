<?php
/* Smarty version 3.1.40, created on 2022-07-16 21:27:25
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/basis/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2aead871358_44919381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '533259e5b0cfe9d076428520f494f9ed17882827' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/basis/subnavi.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2aead871358_44919381 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?> class="on"<?php }?> id="navi-basis-index"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
basis/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
"><span>SHOPマスター</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'tradelaw') {?> class="on"<?php }?> id="navi-basis-tradelaw"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
basis/tradelaw.php"><span>特定商取引法</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'delivery') {?> class="on"<?php }?> id="navi-basis-delivery"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
basis/delivery.php"><span>配送方法設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'payment') {?> class="on"<?php }?> id="navi-basis-payment"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
basis/payment.php"><span>支払方法設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'point') {?> class="on"<?php }?> id="navi-basis-point"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
basis/point.php"><span>ポイント設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'mail') {?> class="on"<?php }?> id="navi-basis-mail"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
basis/mail.php"><span>メール設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'kiyaku') {?> class="on"<?php }?> id="navi-basis-kiyaku"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
basis/kiyaku.php"><span>会員規約設定</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'zip_install') {?> class="on"<?php }?> id="navi-basis-zip"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
basis/zip_install.php"><span>郵便番号DB登録</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'holiday') {?> class="on"<?php }?> id="navi-basis-holiday"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
basis/holiday.php"><span>定休日管理</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'tax') {?> class="on"<?php }?> id="navi-basis-tax"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
basis/tax.php"><span>税率設定</span></a></li>
</ul>
<?php }
}
