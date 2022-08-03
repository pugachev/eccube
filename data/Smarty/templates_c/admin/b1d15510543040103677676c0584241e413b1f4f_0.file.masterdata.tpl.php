<?php
/* Smarty version 3.1.40, created on 2022-07-16 21:46:25
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/system/masterdata.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2b321769bb9_22264982',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1d15510543040103677676c0584241e413b1f4f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/system/masterdata.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2b321769bb9_22264982 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<div id="basis" class="contents-main">
    <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
        <input type="hidden" name="mode" value="show" />
        <div id="basis-masterdata-select" class="btn">
            <select name="master_data_name" id="master_data_name">
            <?php echo smarty_function_html_options(array('output'=>$_smarty_tpl->tpl_vars['arrMasterDataName']->value,'values'=>$_smarty_tpl->tpl_vars['arrMasterDataName']->value,'selected'=>$_smarty_tpl->tpl_vars['masterDataName']->value),$_smarty_tpl);?>

            </select>
            <a class="btn-normal" href="javascript:;" onclick="eccube.fnFormModeSubmit('form1', 'show', '', ''); return false;"><span>選択</span></a>
        </div>
    </form>

    <?php if ($_POST['mode'] == 'show') {?>
        <form name="form2" id="form2" method="post" action="?">
            <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
            <input type="hidden" name="mode" value="edit" />
            <input type="hidden" name="master_data_name" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['masterDataName']->value);?>
" />
            <p class="remark attention">
                マスターデータの値を設定できます。<br />
                重複したIDを登録することはできません。<br />
                空のIDを登録すると、値は削除されます。<br />
                設定値によってはサイトが機能しなくなる場合もありますので、十分ご注意下さい。
            </p>
            <?php if ($_smarty_tpl->tpl_vars['errorMessage']->value != '') {?>
                <div class="message">
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['errorMessage']->value);?>
</span>
                </div>
            <?php }?>

            <table class="form">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrMasterData']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                    <tr>
                        <th>ID：<input type="text" name="id[]" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
" size="6" /></th>
                        <td>値：<input type="text" name="name[]" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['val']->value));?>
" style="" size="60" class="box60" /></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>

            <h2>追加のデータ</h2>
            <table class="form">
                <tr>
                    <th>ID：<input type="text" name="id[]" size="6" /></th>
                    <td>値：<input type="text" name="name[]" style="" size="60" class="box60" /></td>
                </tr>
            </table>
            <div class="btn-area">
                <ul>
                    <li><a class="btn-action" href="javascript:;" onclick="document.form2.submit(); return false;"><span class="btn-next">この内容で登録する</span></a></li>
                </ul>
            </div>
        </form>
    <?php }?>

</div>
<?php }
}
