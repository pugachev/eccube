<?php
/* Smarty version 3.1.40, created on 2022-07-16 21:27:25
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/design/subnavi.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2aead8ae084_86913705',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db42a7f8357e48f8dbb5a932459e53f0da98ef2c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/design/subnavi.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2aead8ae084_86913705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<ul class="level1">
    <li class="on_level2">
        <div><span>PC</span></div>
        <ul class="level2">
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'layout') {?> class="on"<?php }?> id="navi-design-layout-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><span>レイアウト設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'main_edit') {?> class="on"<?php }?> id="navi-design-main-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/main_edit.php?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><span>ページ詳細設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'bloc') {?> class="on"<?php }?> id="navi-design-bloc-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/bloc.php?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><span>ブロック設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'header') {?> class="on"<?php }?> id="navi-design-header-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/header.php?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><span>ヘッダー/フッター設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'css') {?> class="on"<?php }?> id="navi-design-css-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/css.php?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><span>CSS設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'template') {?> class="on"<?php }?> id="navi-design-template-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/template.php?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><span>テンプレート設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'up_down') {?> class="on"<?php }?> id="navi-design-add-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/up_down.php?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_PC') ? constant('DEVICE_TYPE_PC') : null));?>
"><span>テンプレート追加</span></a></li>
        </ul>
    </li>
    <li class="on_level2">
        <div><span>スマートフォン</span></div>
        <ul class="level2">
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'layout') {?> class="on"<?php }?> id="navi-design-layout-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><span>レイアウト設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'main_edit') {?> class="on"<?php }?> id="navi-design-main-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/main_edit.php?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><span>ページ詳細設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'bloc') {?> class="on"<?php }?> id="navi-design-bloc-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/bloc.php?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><span>ブロック設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'header') {?> class="on"<?php }?> id="navi-design-header-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/header.php?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><span>ヘッダー/フッター設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'css') {?> class="on"<?php }?> id="navi-design-css-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/css.php?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><span>CSS設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'template') {?> class="on"<?php }?> id="navi-design-template-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/template.php?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><span>テンプレート設定</span></a></li>
            <li<?php if ($_smarty_tpl->tpl_vars['tpl_subno']->value == 'up_down') {?> class="on"<?php }?> id="navi-design-add-<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
design/up_down.php?device_type_id=<?php echo smarty_modifier_script_escape((defined('DEVICE_TYPE_SMARTPHONE') ? constant('DEVICE_TYPE_SMARTPHONE') : null));?>
"><span>テンプレート追加</span></a></li>
        </ul>
    </li>
</ul>
<?php }
}
