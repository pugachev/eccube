<?php
/* Smarty version 3.1.40, created on 2022-07-16 21:58:25
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/pager.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2b5f1a9c201_89959602',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1925bee604bea75bb30f5b47b0da0c6fea4341c5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/pager.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2b5f1a9c201_89959602 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>
<div class="pager">
    <ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrPagenavi']->value['arrPageno'], 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <li<?php if ($_smarty_tpl->tpl_vars['arrPagenavi']->value['now_page'] == $_smarty_tpl->tpl_vars['item']->value) {?> class="on"<?php }?>><a href="#" onclick="eccube.moveNaviPage(<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value);?>
, '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrPagenavi']->value['mode']);?>
'); return false;"><span><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value);?>
</span></a></li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}
