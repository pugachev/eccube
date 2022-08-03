<?php
/* Smarty version 3.1.40, created on 2022-07-20 06:28:01
  from '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/admin/total/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d721e127ab77_46191675',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64ceedd74899458855b1fea9c69f49d9dce0d71b' => 
    array (
      0 => '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/admin/total/subnavi.tpl',
      1 => 1658234855,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d721e127ab77_46191675 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
    <li id="navi-total-term"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && ($_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'term' || $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == ''))) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
total/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
?page=term"><span>期間別集計</span></a></li>
    <li id="navi-total-products"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'products')) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
total/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
?page=products"><span>商品別集計</span></a></li>
    <li id="navi-total-age"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'age')) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
total/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
?page=age"><span>年代別集計</span></a></li>
    <li id="navi-total-job"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'job')) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
total/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
?page=job"><span>職業別集計</span></a></li>
    <li id="navi-total-member"
        class="<?php if (($_smarty_tpl->tpl_vars['tpl_mainno']->value == 'total' && $_smarty_tpl->tpl_vars['arrForm']->value['page']['value'] == 'member')) {?>on<?php }?>"
    ><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
total/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
?page=member"><span>会員別集計</span></a></li>
</ul>
<?php }
}
