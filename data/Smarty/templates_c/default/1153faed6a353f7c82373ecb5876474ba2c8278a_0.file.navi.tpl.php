<?php
/* Smarty version 3.1.40, created on 2022-07-20 06:27:10
  from '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/default/mypage/navi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d721ae7c6730_50550297',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1153faed6a353f7c82373ecb5876474ba2c8278a' => 
    array (
      0 => '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/default/mypage/navi.tpl',
      1 => 1658234866,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d721ae7c6730_50550297 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),));
?>

<div id="mynavi_area">
    <ul class="mynavi_list clearfix"><?php if ($_smarty_tpl->tpl_vars['tpl_login']->value) {?><li><a href="./<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mypageno']->value == 'index') {?> selected<?php }?>">購入履歴一覧</a></li><?php if ((defined('OPTION_FAVORITE_PRODUCT') ? constant('OPTION_FAVORITE_PRODUCT') : null) == 1) {?><li><a href="favorite.php" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mypageno']->value == 'favorite') {?> selected<?php }?>">お気に入り一覧</a></li><?php }?><li><a href="change.php" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mypageno']->value == 'change') {?> selected<?php }?>">会員登録内容変更</a></li><li><a href="delivery.php" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mypageno']->value == 'delivery') {?> selected<?php }?>">お届け先追加・変更</a></li><li><a href="refusal.php" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mypageno']->value == 'refusal') {?> selected<?php }?>">退会手続き</a></li><?php } else { ?><li><a href="<?php echo smarty_modifier_script_escape((defined('TOP_URL') ? constant('TOP_URL') : null));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mypageno']->value == 'index') {?> selected<?php }?>">購入履歴一覧</a></li><?php if ((defined('OPTION_FAVORITE_PRODUCT') ? constant('OPTION_FAVORITE_PRODUCT') : null) == 1) {?><li><a href="<?php echo smarty_modifier_script_escape((defined('TOP_URL') ? constant('TOP_URL') : null));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mypageno']->value == 'favorite') {?> selected<?php }?>">お気に入り一覧</a></li><?php }?><li><a href="<?php echo smarty_modifier_script_escape((defined('TOP_URL') ? constant('TOP_URL') : null));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mypageno']->value == 'change') {?> selected<?php }?>">会員登録内容変更</a></li><li><a href="<?php echo smarty_modifier_script_escape((defined('TOP_URL') ? constant('TOP_URL') : null));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mypageno']->value == 'delivery') {?> selected<?php }?>">お届け先追加・変更</a></li><li><a href="<?php echo smarty_modifier_script_escape((defined('TOP_URL') ? constant('TOP_URL') : null));?>
" class="<?php if ($_smarty_tpl->tpl_vars['tpl_mypageno']->value == 'refusal') {?> selected<?php }?>">退会手続き</a></li><?php }?></ul><!--▼現在のポイント--><?php if ($_smarty_tpl->tpl_vars['point_disp']->value !== false) {?><div class="point_announce clearfix"><p>ようこそ&nbsp;／&nbsp;<span class="user_name"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['CustomerName1']->value));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['CustomerName2']->value));?>
様</span><?php if ((defined('USE_POINT') ? constant('USE_POINT') : null) !== false) {?>&nbsp;現在の所持ポイントは&nbsp;<span class="point st"><?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['CustomerPoint']->value))===null||$tmp==='' ? "0" : $tmp)));?>
pt</span>&nbsp;です。<?php }?></p></div><?php }?><!--▲現在のポイント-->

</div>
<!--▲NAVI-->
<?php }
}
