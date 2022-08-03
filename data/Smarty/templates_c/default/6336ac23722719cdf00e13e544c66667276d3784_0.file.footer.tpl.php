<?php
/* Smarty version 3.1.40, created on 2022-07-20 06:18:56
  from '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/default/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d71fc0e5f495_90931983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6336ac23722719cdf00e13e544c66667276d3784' => 
    array (
      0 => '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/default/footer.tpl',
      1 => 1658234794,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d71fc0e5f495_90931983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),2=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<!--▼FOOTER-->
<div id="footer_wrap"><div id="footer" class="clearfix"><div id="pagetop"><a href="#top">このページの先頭へ</a></div><div id="copyright">Copyright ©&nbsp;<?php if ((defined('RELEASE_YEAR') ? constant('RELEASE_YEAR') : null) != smarty_modifier_date_format(time(),"%Y")) {
echo smarty_modifier_script_escape((defined('RELEASE_YEAR') ? constant('RELEASE_YEAR') : null));?>
-<?php }
echo smarty_modifier_script_escape(smarty_modifier_date_format(time(),"%Y"));?>
&nbsp;<?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrSiteInfo']->value['shop_name_eng'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['arrSiteInfo']->value['shop_name'] : $tmp)));?>
 All rights reserved.</div></div></div>
<!--▲FOOTER-->
<?php }
}
