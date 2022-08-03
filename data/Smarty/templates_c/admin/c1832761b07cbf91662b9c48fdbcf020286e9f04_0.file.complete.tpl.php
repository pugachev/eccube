<?php
/* Smarty version 3.1.40, created on 2022-07-16 22:06:40
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/products/complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2b7e0170794_08983671',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1832761b07cbf91662b9c48fdbcf020286e9f04' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/products/complete.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2b7e0170794_08983671 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<form name="form1" id="form1" method="post" action="./product_class.php">
    <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
    <input type="hidden" name="mode" value="" />
    <input type="hidden" name="product_id" value="" />
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrSearchHidden']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <?php if (is_array($_smarty_tpl->tpl_vars['item']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value, 'c_item');
$_smarty_tpl->tpl_vars['c_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_item']->value) {
$_smarty_tpl->tpl_vars['c_item']->do_else = false;
?>
            <input type="hidden" name="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
[]" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['c_item']->value));?>
" />
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <input type="hidden" name="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value));?>
" />
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div id="complete">
        <div class="complete-top"></div>
        <div class="contents">
            <div class="message">
                登録が完了致しました。
            </div>
        </div>
        <div class="btn-area-top"></div>
        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="eccube.changeAction('<?php echo smarty_modifier_script_escape((defined('ADMIN_PRODUCTS_URLPATH') ? constant('ADMIN_PRODUCTS_URLPATH') : null));?>
'); eccube.setModeAndSubmit('search','',''); return false;"><span class="btn-prev">検索結果へ戻る</span></a></li>
                <li><a class="btn-action" href="./product.php"><span class="btn-next">続けて登録を行う</span></a></li>
                <?php if ((defined('OPTION_CLASS_REGIST') ? constant('OPTION_CLASS_REGIST') : null) == 1) {?>
                <li><a class="btn-action" href="?" onclick="eccube.setModeAndSubmit('pre_edit', 'product_id', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['product_id']);?>
'); return false;"><span class="btn-next">この商品の規格を登録する</span></a></li>
                <?php }?>
            </ul>
        </div>
        <div class="btn-area-bottom"></div>
    </div>
</form>
<?php }
}
