<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:07:03
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/products/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd27d77524b0_93256745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4968b8d8f63eb3bc6a341925560c0d7afe3062af' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/products/subnavi.tpl',
      1 => 1658652105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd27d77524b0_93256745 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?> class="on"<?php }?> id="navi-products-index"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
products/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
"><span>商品マスター</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'product') {?> class="on"<?php }?> id="navi-products-product"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
products/product.php"><span>商品登録</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'upload_csv') {?> class="on"<?php }?> id="navi-products-uploadcsv"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
products/upload_csv.php"><span>商品登録CSV</span></a></li>
<?php if ((defined('OPTION_CLASS_REGIST') ? constant('OPTION_CLASS_REGIST') : null) == 1) {?>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'class') {?> class="on"<?php }?> id="navi-products-class"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
products/class.php"><span>規格管理</span></a></li>
<?php }?>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'category') {?> class="on"<?php }?> id="navi-products-category"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
products/category.php"><span>カテゴリ登録</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'upload_csv_category') {?> class="on"<?php }?> id="navi-products-upload-csv-category"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
products/upload_csv_category.php"><span>カテゴリ登録CSV</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'maker') {?> class="on"<?php }?> id="navi-products-maker"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
products/maker.php"><span>メーカー登録</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'product_rank') {?> class="on"<?php }?> id="navi-products-rank"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
products/product_rank.php"><span>商品並び替え</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'review') {?> class="on"<?php }?> id="navi-products-review"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
products/review.php"><span>レビュー管理</span></a></li>
</ul>
<?php }
}
