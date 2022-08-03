<?php
/* Smarty version 3.1.40, created on 2022-07-16 22:26:36
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/site_main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2bc8cafcc58_59801276',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92132f8af977073be75837a2a34d08d4e5af9154' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/site_main.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2bc8cafcc58_59801276 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/function.include_php_ex.php','function'=>'smarty_function_include_php_ex',),));
?>

<body class="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_page_class_name']->value));?>
"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['GLOBAL_ERR']->value);?>
<noscript><p>JavaScript を有効にしてご利用下さい.</p></noscript><div class="frame_outer"><a name="top" id="top"></a><?php if (!empty($_smarty_tpl->tpl_vars['arrPageLayout']->value['HeaderTopNavi'])) {?><div id="headertopcolumn"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPageLayout']->value['HeaderTopNavi'], 'HeaderTopNaviItem', false, 'HeaderTopNaviKey');
$_smarty_tpl->tpl_vars['HeaderTopNaviItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['HeaderTopNaviKey']->value => $_smarty_tpl->tpl_vars['HeaderTopNaviItem']->value) {
$_smarty_tpl->tpl_vars['HeaderTopNaviItem']->do_else = false;
?><!-- ▼<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['HeaderTopNaviItem']->value['bloc_name']);?>
 --><?php if ($_smarty_tpl->tpl_vars['HeaderTopNaviItem']->value['php_path'] != '') {
echo smarty_function_include_php_ex(array('file'=>$_smarty_tpl->tpl_vars['HeaderTopNaviItem']->value['php_path'],'items'=>$_smarty_tpl->tpl_vars['HeaderTopNaviItem']->value),$_smarty_tpl);
} else {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['HeaderTopNaviItem']->value['tpl_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['HeaderTopNaviItem']->value), 0, true);
}?><!-- ▲<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['HeaderTopNaviItem']->value['bloc_name']);?>
 --><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
if ($_smarty_tpl->tpl_vars['arrPageLayout']->value['header_chk'] != 2) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header_tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?><div id="container" class="clearfix"><?php if (!empty($_smarty_tpl->tpl_vars['arrPageLayout']->value['TopNavi'])) {?><div id="topcolumn"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPageLayout']->value['TopNavi'], 'TopNaviItem', false, 'TopNaviKey');
$_smarty_tpl->tpl_vars['TopNaviItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TopNaviKey']->value => $_smarty_tpl->tpl_vars['TopNaviItem']->value) {
$_smarty_tpl->tpl_vars['TopNaviItem']->do_else = false;
?><!-- ▼<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TopNaviItem']->value['bloc_name']);?>
 --><?php if ($_smarty_tpl->tpl_vars['TopNaviItem']->value['php_path'] != '') {
echo smarty_function_include_php_ex(array('file'=>$_smarty_tpl->tpl_vars['TopNaviItem']->value['php_path'],'items'=>$_smarty_tpl->tpl_vars['TopNaviItem']->value),$_smarty_tpl);
} else {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['TopNaviItem']->value['tpl_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['TopNaviItem']->value), 0, true);
}?><!-- ▲<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TopNaviItem']->value['bloc_name']);?>
 --><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
if (!empty($_smarty_tpl->tpl_vars['arrPageLayout']->value['LeftNavi'])) {?><div id="leftcolumn" class="side_column"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPageLayout']->value['LeftNavi'], 'LeftNaviItem', false, 'LeftNaviKey');
$_smarty_tpl->tpl_vars['LeftNaviItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LeftNaviKey']->value => $_smarty_tpl->tpl_vars['LeftNaviItem']->value) {
$_smarty_tpl->tpl_vars['LeftNaviItem']->do_else = false;
?><!-- ▼<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['LeftNaviItem']->value['bloc_name']);?>
 --><?php if ($_smarty_tpl->tpl_vars['LeftNaviItem']->value['php_path'] != '') {
echo smarty_function_include_php_ex(array('file'=>$_smarty_tpl->tpl_vars['LeftNaviItem']->value['php_path'],'items'=>$_smarty_tpl->tpl_vars['LeftNaviItem']->value),$_smarty_tpl);
} else {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['LeftNaviItem']->value['tpl_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['LeftNaviItem']->value), 0, true);
}?><!-- ▲<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['LeftNaviItem']->value['bloc_name']);?>
 --><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?><div id="main_column" class="colnum<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_column_num']->value));
if ($_smarty_tpl->tpl_vars['tpl_column_num']->value == 2) {
echo smarty_modifier_script_escape(" ");
if (empty($_smarty_tpl->tpl_vars['arrPageLayout']->value['LeftNavi'])) {?>left<?php } else { ?>right<?php }
}?>"><?php if (!empty($_smarty_tpl->tpl_vars['arrPageLayout']->value['MainHead'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPageLayout']->value['MainHead'], 'MainHeadItem', false, 'MainHeadKey');
$_smarty_tpl->tpl_vars['MainHeadItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MainHeadKey']->value => $_smarty_tpl->tpl_vars['MainHeadItem']->value) {
$_smarty_tpl->tpl_vars['MainHeadItem']->do_else = false;
?><!-- ▼<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['MainHeadItem']->value['bloc_name']);?>
 --><?php if ($_smarty_tpl->tpl_vars['MainHeadItem']->value['php_path'] != '') {
echo smarty_function_include_php_ex(array('file'=>$_smarty_tpl->tpl_vars['MainHeadItem']->value['php_path'],'items'=>$_smarty_tpl->tpl_vars['MainHeadItem']->value),$_smarty_tpl);
} else {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['MainHeadItem']->value['tpl_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['MainHeadItem']->value), 0, true);
}?><!-- ▲<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['MainHeadItem']->value['bloc_name']);?>
 --><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?><!-- ▼メイン --><?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl_mainpage']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?><!-- ▲メイン --><?php if (!empty($_smarty_tpl->tpl_vars['arrPageLayout']->value['MainFoot'])) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPageLayout']->value['MainFoot'], 'MainFootItem', false, 'MainFootKey');
$_smarty_tpl->tpl_vars['MainFootItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MainFootKey']->value => $_smarty_tpl->tpl_vars['MainFootItem']->value) {
$_smarty_tpl->tpl_vars['MainFootItem']->do_else = false;
?><!-- ▼<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['MainFootItem']->value['bloc_name']);?>
 --><?php if ($_smarty_tpl->tpl_vars['MainFootItem']->value['php_path'] != '') {
echo smarty_function_include_php_ex(array('file'=>$_smarty_tpl->tpl_vars['MainFootItem']->value['php_path'],'items'=>$_smarty_tpl->tpl_vars['MainFootItem']->value),$_smarty_tpl);
} else {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['MainFootItem']->value['tpl_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['MainFootItem']->value), 0, true);
}?><!-- ▲<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['MainFootItem']->value['bloc_name']);?>
 --><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div><?php if (!empty($_smarty_tpl->tpl_vars['arrPageLayout']->value['RightNavi'])) {?><div id="rightcolumn" class="side_column"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPageLayout']->value['RightNavi'], 'RightNaviItem', false, 'RightNaviKey');
$_smarty_tpl->tpl_vars['RightNaviItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['RightNaviKey']->value => $_smarty_tpl->tpl_vars['RightNaviItem']->value) {
$_smarty_tpl->tpl_vars['RightNaviItem']->do_else = false;
?><!-- ▼<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['RightNaviItem']->value['bloc_name']);?>
 --><?php if ($_smarty_tpl->tpl_vars['RightNaviItem']->value['php_path'] != '') {
echo smarty_function_include_php_ex(array('file'=>$_smarty_tpl->tpl_vars['RightNaviItem']->value['php_path'],'items'=>$_smarty_tpl->tpl_vars['RightNaviItem']->value),$_smarty_tpl);
} else {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RightNaviItem']->value['tpl_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['RightNaviItem']->value), 0, true);
}?><!-- ▲<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['RightNaviItem']->value['bloc_name']);?>
 --><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }
if (!empty($_smarty_tpl->tpl_vars['arrPageLayout']->value['BottomNavi'])) {?><div id="bottomcolumn"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPageLayout']->value['BottomNavi'], 'BottomNaviItem', false, 'BottomNaviKey');
$_smarty_tpl->tpl_vars['BottomNaviItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['BottomNaviKey']->value => $_smarty_tpl->tpl_vars['BottomNaviItem']->value) {
$_smarty_tpl->tpl_vars['BottomNaviItem']->do_else = false;
?><!-- ▼<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['BottomNaviItem']->value['bloc_name']);?>
 --><?php if ($_smarty_tpl->tpl_vars['BottomNaviItem']->value['php_path'] != '') {
echo smarty_function_include_php_ex(array('file'=>$_smarty_tpl->tpl_vars['BottomNaviItem']->value['php_path'],'items'=>$_smarty_tpl->tpl_vars['BottomNaviItem']->value),$_smarty_tpl);
} else {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['BottomNaviItem']->value['tpl_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['BottomNaviItem']->value), 0, true);
}?><!-- ▲<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['BottomNaviItem']->value['bloc_name']);?>
 --><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></div><?php if ($_smarty_tpl->tpl_vars['arrPageLayout']->value['footer_chk'] != 2) {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer_tpl']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
if (!empty($_smarty_tpl->tpl_vars['arrPageLayout']->value['FooterBottomNavi'])) {?><div id="footerbottomcolumn"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPageLayout']->value['FooterBottomNavi'], 'FooterBottomNaviItem', false, 'FooterBottomNaviKey');
$_smarty_tpl->tpl_vars['FooterBottomNaviItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FooterBottomNaviKey']->value => $_smarty_tpl->tpl_vars['FooterBottomNaviItem']->value) {
$_smarty_tpl->tpl_vars['FooterBottomNaviItem']->do_else = false;
?><!-- ▼<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['FooterBottomNaviItem']->value['bloc_name']);?>
 --><?php if ($_smarty_tpl->tpl_vars['FooterBottomNaviItem']->value['php_path'] != '') {
echo smarty_function_include_php_ex(array('file'=>$_smarty_tpl->tpl_vars['FooterBottomNaviItem']->value['php_path'],'items'=>$_smarty_tpl->tpl_vars['FooterBottomNaviItem']->value),$_smarty_tpl);
} else {
$_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['FooterBottomNaviItem']->value['tpl_path'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('items'=>$_smarty_tpl->tpl_vars['FooterBottomNaviItem']->value), 0, true);
}?><!-- ▲<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['FooterBottomNaviItem']->value['bloc_name']);?>
 --><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><?php }?></div></body>
<?php }
}
