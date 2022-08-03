<?php
/* Smarty version 3.1.40, created on 2022-07-16 22:26:36
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/frontparts/bloc/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2bc8cb47bc1_27609375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd2a86d183305b2a7baea45c2ffdafaa8fbf2697' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/frontparts/bloc/category.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2bc8cb47bc1_27609375 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<?php echo '<script'; ?>
 type="text/javascript">//<![CDATA[
    $(function(){
        $('#category_area li.level1:last').css('border-bottom', 'none');
    });
//]]><?php echo '</script'; ?>
>

<div class="block_outer"><div id="category_area"><div class="block_body"><h2><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/title/tit_bloc_category.gif" alt="商品カテゴリ" /></h2><?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_REALDIR') ? constant('TEMPLATE_REALDIR') : null))."frontparts/bloc/category_tree_fork.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('children'=>$_smarty_tpl->tpl_vars['arrTree']->value,'treeID'=>'','display'=>1), 0, true);
?></div></div></div>
<?php }
}
