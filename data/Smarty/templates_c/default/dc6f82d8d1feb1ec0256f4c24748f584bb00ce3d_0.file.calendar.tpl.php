<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:02:22
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/frontparts/bloc/calendar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd26be07f8d3_75939234',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc6f82d8d1feb1ec0256f4c24748f584bb00ce3d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/frontparts/bloc/calendar.tpl',
      1 => 1658652114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd26be07f8d3_75939234 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<div class="block_outer"><div id="calender_area"><h2><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/title/tit_bloc_calender.gif" alt="カレンダー" /></h2><div class="block_body"><?php
$__section_num_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrCalendar']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_num_1_total = $__section_num_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_num'] = new Smarty_Variable(array());
if ($__section_num_1_total !== 0) {
for ($__section_num_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_num']->value['index'] = 0; $__section_num_1_iteration <= $__section_num_1_total; $__section_num_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_num']->value['index']++){
$_smarty_tpl->_assignInScope('arrCal', $_smarty_tpl->tpl_vars['arrCalendar']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_num']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_num']->value['index'] : null)]);
$__section_cnt_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrCal']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_2_total = $__section_cnt_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_2_total !== 0) {
for ($__section_cnt_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $__section_cnt_2_iteration <= $__section_cnt_2_total; $__section_cnt_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['first'] = ($__section_cnt_2_iteration === 1);
$_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['last'] = ($__section_cnt_2_iteration === $__section_cnt_2_total);
if ((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['first'] : null)) {?><table><caption class="month"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrCal']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['year']);?>
年<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrCal']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['month']);?>
月の定休日</caption><thead><tr><th>日</th><th>月</th><th>火</th><th>水</th><th>木</th><th>金</th><th>土</th></tr></thead><?php }
if ($_smarty_tpl->tpl_vars['arrCal']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['first']) {?><tr><?php }
if (!$_smarty_tpl->tpl_vars['arrCal']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['in_month']) {?><td></td><?php } elseif ($_smarty_tpl->tpl_vars['arrCal']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['holiday']) {?><td class="off<?php if ($_smarty_tpl->tpl_vars['arrCal']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['today']) {?> today<?php }?>"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrCal']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['day']);?>
</td><?php } else { ?><td<?php if ($_smarty_tpl->tpl_vars['arrCal']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['today']) {?> class="today"<?php }?>><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrCal']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['day']);?>
</td><?php }
if ($_smarty_tpl->tpl_vars['arrCal']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['last']) {?></tr><?php }
}
}
if ((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['last'] : null)) {?></table><?php }
}
}
?><p class="information">※赤字は休業日です</p></div></div></div>
<?php }
}
