<?php
/* Smarty version 3.1.40, created on 2022-07-16 21:28:34
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/products/category_tree_fork.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2aef2016ce9_47774128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e170a3ba4fd90826be2b3e0467a007ea1dd69e38' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/products/category_tree_fork.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2aef2016ce9_47774128 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<ul <?php if ($_smarty_tpl->tpl_vars['treeID']->value != '') {?>id="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['treeID']->value);?>
"<?php }?> style="<?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>display: none;<?php }?>">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['children']->value, 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
        <li class="level<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['child']->value['level']);?>
">
                        <?php $_smarty_tpl->_assignInScope('disp_name', ((string)$_smarty_tpl->tpl_vars['child']->value['category_id']).".".((string)$_smarty_tpl->tpl_vars['child']->value['category_name']));?>
            <?php if ($_smarty_tpl->tpl_vars['child']->value['level'] != (defined('LEVEL_MAX') ? constant('LEVEL_MAX') : null)) {?>
                <a href="?" onclick="eccube.setModeAndSubmit('tree', 'parent_category_id', <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['child']->value['category_id']);?>
); return false;">
                <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['parent_category_id'] == $_smarty_tpl->tpl_vars['child']->value['category_id']) {?>
                    <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/contents/folder_open.gif" alt="フォルダ" />
                <?php } else { ?>
                    <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/contents/folder_close.gif" alt="フォルダ" />
                <?php }?>
                <?php echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfCutString' ][ 0 ], array( $_smarty_tpl->tpl_vars['disp_name']->value,10,false ))));?>
</a>
            <?php } else { ?>
                <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/contents/folder_close.gif" alt="フォルダ" />
                <?php echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfCutString' ][ 0 ], array( $_smarty_tpl->tpl_vars['disp_name']->value,10,false ))));?>

            <?php }?>
            <?php if (in_array($_smarty_tpl->tpl_vars['child']->value['category_id'],$_smarty_tpl->tpl_vars['arrParentID']->value)) {?>
                <?php $_smarty_tpl->_assignInScope('disp_child', 1);?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('disp_child', 0);?>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['child']->value['children']))) {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_ADMIN_REALDIR') ? constant('TEMPLATE_ADMIN_REALDIR') : null))."products/category_tree_fork.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('children'=>$_smarty_tpl->tpl_vars['child']->value['children'],'treeID'=>"f".((string)$_smarty_tpl->tpl_vars['child']->value['category_id']),'display'=>$_smarty_tpl->tpl_vars['disp_child']->value), 0, true);
?>
            <?php }?>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
