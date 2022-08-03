<?php
/* Smarty version 3.1.40, created on 2022-07-16 22:26:36
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/site_frame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2bc8cac9d50_04785207',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81433a13d3fb41df42e0040b1bcf5d30e84c99d5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/site_frame.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./site_main.tpl' => 1,
  ),
),false)) {
function content_62d2bc8cac9d50_04785207 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/function.include_php_ex.php','function'=>'smarty_function_include_php_ex',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printXMLDeclaration'][0], array( array(),$_smarty_tpl ) );?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo smarty_modifier_script_escape((defined('CHAR_CODE') ? constant('CHAR_CODE') : null));?>
" />
<title><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrSiteInfo']->value['shop_name']));
if (strlen($_smarty_tpl->tpl_vars['tpl_subtitle']->value) >= 1) {?> / <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_subtitle']->value));
} elseif (strlen($_smarty_tpl->tpl_vars['tpl_title']->value) >= 1) {?> / <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_title']->value));
}?></title>
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<?php if (strlen($_smarty_tpl->tpl_vars['arrPageLayout']->value['author']) >= 1) {?>
    <meta name="author" content="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrPageLayout']->value['author']));?>
" />
<?php }
if (strlen($_smarty_tpl->tpl_vars['arrPageLayout']->value['description']) >= 1) {?>
    <meta name="description" content="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrPageLayout']->value['description']));?>
" />
<?php }
if (strlen($_smarty_tpl->tpl_vars['arrPageLayout']->value['keyword']) >= 1) {?>
    <meta name="keywords" content="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrPageLayout']->value['keyword']));?>
" />
<?php }
if (strlen($_smarty_tpl->tpl_vars['arrPageLayout']->value['meta_robots']) >= 1) {?>
    <meta name="robots" content="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrPageLayout']->value['meta_robots']));?>
" />
<?php }?>
<link rel="shortcut icon" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/common/favicon.ico" />
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/common/favicon.ico" />
<link rel="stylesheet" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
css/import.css" type="text/css" media="all" />
<?php if ($_smarty_tpl->tpl_vars['tpl_page_class_name']->value === "LC_Page_Products_Detail") {?>
    <link rel="stylesheet" href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
js/jquery.ui/theme/jquery.ui.core.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
js/jquery.ui/theme/jquery.ui.tooltip.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
js/jquery.ui/theme/jquery.ui.theme.css" type="text/css" media="all" />
<?php }?>
<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo smarty_modifier_script_escape((defined('HTTP_URL') ? constant('HTTP_URL') : null));?>
rss/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
" />

<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
js/eccube.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">//<![CDATA[
    <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_javascript']->value);?>

    $(function(){
        <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_onload']->value);?>

    });
//]]><?php echo '</script'; ?>
>

<?php if (!empty($_smarty_tpl->tpl_vars['arrPageLayout']->value['HeadNavi'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPageLayout']->value['HeadNavi'], 'HeadNaviItem', false, 'HeadNaviKey');
$_smarty_tpl->tpl_vars['HeadNaviItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HeadNaviKey']->value => $_smarty_tpl->tpl_vars['HeadNaviItem']->value) {
$_smarty_tpl->tpl_vars['HeadNaviItem']->do_else = false;
if ($_smarty_tpl->tpl_vars['HeadNaviItem']->value['php_path'] != '') {
echo smarty_function_include_php_ex(array('file'=>$_smarty_tpl->tpl_vars['HeadNaviItem']->value['php_path'],'items'=>$_smarty_tpl->tpl_vars['HeadNaviItem']->value),$_smarty_tpl);
} else {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['HeadNaviItem']->value['tpl_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
</head>

<!-- ▼BODY部 スタート -->
<?php $_smarty_tpl->_subTemplateRender('file:./site_main.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- ▲BODY部 エンド -->

</html>
<?php }
}
