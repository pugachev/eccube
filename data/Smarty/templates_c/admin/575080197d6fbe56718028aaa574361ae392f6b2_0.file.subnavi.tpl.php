<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:07:03
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/contents/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd27d777a665_61487726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '575080197d6fbe56718028aaa574361ae392f6b2' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/contents/subnavi.tpl',
      1 => 1658652103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd27d777a665_61487726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'index') {?> class="on"<?php }?> id="navi-contents-index"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
contents/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
"><span>新着情報管理</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'recommend') {?> class="on"<?php }?> id="navi-contents-recommend"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
contents/recommend.php"><span>おすすめ商品管理</span></a></li>
<li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'file') {?> class="on"<?php }?> id="navi-contents-file"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
contents/file_manager.php"><span>ファイル管理</span></a></li>
<li class="on_level2<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'csv') {?> on<?php }?>" id="navi-contents-csv">
    <div><span>CSV出力項目設定</span></div>
    <ul id="navi-csv-sub" class="level2">
    <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno_csv']->value == 'product') {?> class="on"<?php }?> id="navi-csv-product"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
contents/csv.php?tpl_subno_csv=product"><span>商品管理</span></a></li>
    <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno_csv']->value == 'customer') {?> class="on"<?php }?> id="navi-csv-customer"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
contents/csv.php?tpl_subno_csv=customer"><span>会員管理</span></a></li>
    <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno_csv']->value == 'order') {?> class="on"<?php }?> id="navi-csv-order"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
contents/csv.php?tpl_subno_csv=order"><span>受注管理</span></a></li>
    <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno_csv']->value == 'category') {?> class="on"<?php }?> id="navi-csv-category"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
contents/csv.php?tpl_subno_csv=category"><span>カテゴリ</span></a></li>
    <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno_csv']->value == 'review') {?> class="on"<?php }?> id="navi-csv-review"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
contents/csv.php?tpl_subno_csv=review"><span>レビュー</span></a></li>
    <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno_csv']->value == 'csv_sql') {?> class="on"<?php }?> id="navi-csv-sql"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
contents/csv_sql.php"><span>高度な設定</span></a></li>
    </ul>
</li>
</ul>
<?php }
}
