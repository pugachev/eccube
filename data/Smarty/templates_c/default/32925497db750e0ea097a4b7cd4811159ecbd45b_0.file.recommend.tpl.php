<?php
/* Smarty version 3.1.40, created on 2022-07-16 22:26:36
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/frontparts/bloc/recommend.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2bc8cb84213_04966523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32925497db750e0ea097a4b7cd4811159ecbd45b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/frontparts/bloc/recommend.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2bc8cb84213_04966523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.u.php','function'=>'smarty_modifier_u',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),));
?>

<?php if (!empty($_smarty_tpl->tpl_vars['arrBestProducts']->value)) {?><div class="block_outer clearfix"><div id="recommend_area"><h2><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/title/tit_bloc_recommend.png" alt="*" class="title_icon" /></h2><div class="block_body clearfix"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrBestProducts']->value, 'arrProduct', false, NULL, 'recommend_products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['arrProduct']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arrProduct']->value) {
$_smarty_tpl->tpl_vars['arrProduct']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_recommend_products']->value['iteration']++;
?><div class="product_item clearfix"><div class="productImage"><a href="<?php echo smarty_modifier_script_escape((defined('P_DETAIL_URLPATH') ? constant('P_DETAIL_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_u($_smarty_tpl->tpl_vars['arrProduct']->value['product_id']));?>
"><img src="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfNoImageMainList' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrProduct']->value['main_list_image'] ))));?>
" style="max-width: 80px;max-height: 80px;" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['name']));?>
" /></a></div><div class="productContents"><h3><a href="<?php echo smarty_modifier_script_escape((defined('P_DETAIL_URLPATH') ? constant('P_DETAIL_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_u($_smarty_tpl->tpl_vars['arrProduct']->value['product_id']));?>
"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['name']));?>
</a></h3><p class="sale_price"><?php echo smarty_modifier_script_escape((defined('SALE_PRICE_TITLE') ? constant('SALE_PRICE_TITLE') : null));?>
(税込)： <span class="price"><?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrProduct']->value['price02_min_inctax']));?>
 円</span></p><p class="mini comment"><?php echo smarty_modifier_script_escape(nl2br(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['comment'])));?>
</p></div></div><?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_recommend_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_recommend_products']->value['iteration'] : null)%2 === 0) {?><div class="clear"></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div></div></div><?php }
}
}
