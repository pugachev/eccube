<?php
/* Smarty version 3.1.40, created on 2022-07-20 06:28:01
  from '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/admin/main_frame.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d721e124ae00_70380931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c5528fe26c6735b680037a248a94a42470d734f' => 
    array (
      0 => '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/admin/main_frame.tpl',
      1 => 1658234794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d721e124ae00_70380931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['printXMLDeclaration'][0], array( array(),$_smarty_tpl ) );?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo smarty_modifier_script_escape((defined('CHAR_CODE') ? constant('CHAR_CODE') : null));?>
" />
<meta http-equiv="content-script-type" content="text/javascript" />
<meta http-equiv="content-style-type" content="text/css" />
<meta name="robots" content="noindex,nofollow" />
<link rel="stylesheet" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
css/reset.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
css/admin_contents.css" type="text/css" media="all" />
<link rel="stylesheet" href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
css/admin_file_manager.css" type="text/css" media="all" />

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
js/eccube.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
js/eccube.admin.js"><?php echo '</script'; ?>
>
<title><?php echo smarty_modifier_script_escape((defined('ADMIN_TITLE') ? constant('ADMIN_TITLE') : null));?>
</title>
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

<body class="<?php if (strlen($_smarty_tpl->tpl_vars['tpl_authority']->value) >= 1) {?>authority_<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_authority']->value);
}?>">
<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['GLOBAL_ERR']->value);?>

<noscript>
    <p>JavaScript を有効にしてご利用下さい.</p>
</noscript>

<div id="container">
<a name="top"></a>

<?php if ((defined('ADMIN_MODE') ? constant('ADMIN_MODE') : null) == '1') {?>
<div id="admin-mode-on">ADMIN_MODE ON</div>
<?php }?>

<div id="header">
    <div id="header-contents">
        <div id="logo"><a href="<?php echo smarty_modifier_script_escape((defined('ADMIN_HOME_URLPATH') ? constant('ADMIN_HOME_URLPATH') : null));?>
"><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/header/logo.jpg" width="172" height="25" alt="EC-CUBE" /></a></div>
        <div id="site-check">
            <p class="info"><span><strong>ログイン&nbsp;:&nbsp;</strong><?php echo smarty_modifier_script_escape(smarty_modifier_h($_SESSION['login_name']));?>
</span>&nbsp;様,&nbsp;&nbsp;
            <span><strong>最終ログイン日時&nbsp;:&nbsp;</strong><?php echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfDispDBDate' ][ 0 ], array( $_SESSION['last_login'],true ))));?>
</span></p>
            <ul>
                <li><a href="<?php echo smarty_modifier_script_escape((defined('HTTP_URL') ? constant('HTTP_URL') : null));
echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
" class="btn-tool-format" target="_blank"><span>SITE CHECK</span></a></li>
                <li><a href="<?php echo smarty_modifier_script_escape((defined('ADMIN_LOGOUT_URLPATH') ? constant('ADMIN_LOGOUT_URLPATH') : null));?>
" class="btn-tool-format">LOGOUT</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="navi-wrap">
    <ul id="navi" class="clearfix">
        <li id="navi-basis" class="on_level1<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == "basis") {?> on<?php }?>">
            <div><span>基本情報管理</span></div>
            <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_ADMIN_REALDIR') ? constant('TEMPLATE_ADMIN_REALDIR') : null))."basis/subnavi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </li>
        <li id="navi-products" class="on_level1<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == "products") {?> on<?php }?>">
            <div><span>商品管理</span></div>
            <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_ADMIN_REALDIR') ? constant('TEMPLATE_ADMIN_REALDIR') : null))."products/subnavi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </li>
        <li id="navi-customer" class="on_level1<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == "customer") {?> on<?php }?>">
            <div><span>会員管理</span></div>
            <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_ADMIN_REALDIR') ? constant('TEMPLATE_ADMIN_REALDIR') : null))."customer/subnavi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </li>
        <li id="navi-order" class="on_level1<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == "order") {?> on<?php }?>">
            <div><span>受注管理</span></div>
            <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_ADMIN_REALDIR') ? constant('TEMPLATE_ADMIN_REALDIR') : null))."order/subnavi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </li>
        <li id="navi-total" class="on_level1<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == "total") {?> on<?php }?>">
            <div><span>売上集計</span></div>
            <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_ADMIN_REALDIR') ? constant('TEMPLATE_ADMIN_REALDIR') : null))."total/subnavi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </li>
        <li id="navi-mail" class="on_level1<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == "mail") {?> on<?php }?>">
            <div><span>メルマガ管理</span></div>
            <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_ADMIN_REALDIR') ? constant('TEMPLATE_ADMIN_REALDIR') : null))."mail/subnavi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </li>
        <li id="navi-contents" class="on_level1<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == "contents") {?> on<?php }?>">
            <div><span>コンテンツ管理</span></div>
            <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_ADMIN_REALDIR') ? constant('TEMPLATE_ADMIN_REALDIR') : null))."contents/subnavi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </li>
        <li id="navi-design" class="on_level1<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == "design") {?> on<?php }?>">
            <div><span>デザイン管理</span></div>
            <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_ADMIN_REALDIR') ? constant('TEMPLATE_ADMIN_REALDIR') : null))."design/subnavi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </li>
        <li id="navi-system" class="on_level1<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == "system") {?> on<?php }?>">
            <div><span>システム設定</span></div>
            <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_ADMIN_REALDIR') ? constant('TEMPLATE_ADMIN_REALDIR') : null))."system/subnavi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </li>
        <li id="navi-ownersstore" class="on_level1<?php if ($_smarty_tpl->tpl_vars['tpl_mainno']->value == "ownersstore") {?> on<?php }?>">
            <div><span>オーナーズストア</span></div>
            <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_ADMIN_REALDIR') ? constant('TEMPLATE_ADMIN_REALDIR') : null))."ownersstore/subnavi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </li>
    </ul>
</div>

<?php if ($_smarty_tpl->tpl_vars['tpl_subtitle']->value) {?>
<h1><span class="title"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_maintitle']->value));
if (strlen($_smarty_tpl->tpl_vars['tpl_maintitle']->value) >= 1 && strlen($_smarty_tpl->tpl_vars['tpl_subtitle']->value) >= 1) {?>＞<?php }
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_subtitle']->value));?>
</span></h1>
<?php }?>

<div id="contents" class="clearfix">
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl_mainpage']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div>

<div id="footer">
    <div id="footer-contents">
        <div id="copyright">Copyright &copy; 2000-<?php echo smarty_modifier_script_escape(smarty_modifier_date_format(time(),"%Y"));?>
 EC-CUBE CO.,LTD. All Rights Reserved.</div>
        <div id="topagetop">
            <ul class="sites">
                <li><a href="#top" class="btn-tool-format">PAGE TOP</a></li>
            </ul>
        </div>
    </div>
</div>

</div>
</body>
</html>
<?php }
}
