<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:06:50
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/login_frame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd27cabb5c05_57100361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b20152efd5ee20f81efb3ea99e087674dd5cf6fd' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/login_frame.tpl',
      1 => 1658652100,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd27cabb5c05_57100361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printXMLDeclaration'][0], array( array(),$_smarty_tpl ) );?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo smarty_modifier_script_escape((defined('CHAR_CODE') ? constant('CHAR_CODE') : null));?>
">
<meta http-equiv="content-script-type" content="text/javascript">
<meta http-equiv="content-style-type" content="text/css">
<meta name="robots" content="noindex,nofollow" />
<link rel="stylesheet" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
css/reset.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
css/admin_contents.css" type="text/css" media="all" />

<?php echo '<script'; ?>
 src="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
js/eccube.js"><?php echo '</script'; ?>
>

<title>管理機能</title>
<link rel="shortcut icon" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/common/favicon.ico" />
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/common/favicon.ico" />
<?php echo '<script'; ?>
 type="text/javascript">//<![CDATA[
    <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_javascript']->value);?>

    $(function(){
        <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_onload']->value);?>

    });
//]]><?php echo '</script'; ?>
>

</head>

<body>
<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['GLOBAL_ERR']->value);?>

<noscript>
    <p>JavaScript を有効にしてご利用下さい.</p>
</noscript>
<div id="login">

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl_mainpage']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</div>
</body>
</html>
<?php }
}
