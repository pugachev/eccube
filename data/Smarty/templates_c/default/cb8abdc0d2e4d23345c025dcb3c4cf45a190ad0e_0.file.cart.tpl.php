<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:02:21
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/frontparts/bloc/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd26bdf07771_38620916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb8abdc0d2e4d23345c025dcb3c4cf45a190ad0e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/frontparts/bloc/cart.tpl',
      1 => 1658652115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd26bdf07771_38620916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),));
?>

<div class="block_outer"><div id="cart_area"><h2 class="cart"><span class="title"><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/title/tit_bloc_cart.gif" alt="現在のカゴの中" /></span></h2><div class="block_body"><div class="information"><p class="item">合計数量：<span class="attention"><?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrCartList']->value[0]['TotalQuantity']))===null||$tmp==='' ? 0 : $tmp));?>
</span></p><p class="total">商品金額：<span class="price"><?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrCartList']->value[0]['ProductsTotal']))===null||$tmp==='' ? 0 : $tmp));?>
円</span></p><?php if ($_smarty_tpl->tpl_vars['arrCartList']->value[0]['TotalQuantity'] > 0 && $_smarty_tpl->tpl_vars['arrCartList']->value[0]['free_rule'] > 0 && !$_smarty_tpl->tpl_vars['isMultiple']->value && !$_smarty_tpl->tpl_vars['hasDownload']->value) {?><p class="postage"><?php if ($_smarty_tpl->tpl_vars['arrCartList']->value[0]['deliv_free'] > 0) {?><span class="point_announce">送料手数料無料まで</span>あと<span class="price"><?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrCartList']->value[0]['deliv_free']))===null||$tmp==='' ? 0 : $tmp));?>
円（税込）</span>です。<?php } else { ?>現在、送料は「<span class="price">無料</span>」です。<?php }?></p><?php }?></div><div class="btn"><a href="<?php echo smarty_modifier_script_escape((defined('CART_URL') ? constant('CART_URL') : null));?>
"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_bloc_cart.jpg" alt="カゴの中を見る" /></a></div></div></div></div>
<?php }
}
