<?php
/* Smarty version 3.1.40, created on 2022-07-16 22:49:48
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/customer/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2c1fcf06940_12635389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a52618c7fd2ff1f199da9bf652e65ae1fe00bf85' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/customer/index.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2c1fcf06940_12635389 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),4=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/vendor/smarty/smarty/libs/plugins/modifier.truncate.php','function'=>'smarty_modifier_truncate',),5=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.mailto.php','function'=>'smarty_function_mailto',),));
?>

<?php echo '<script'; ?>
 type="text/javascript">
<!--

    function fnDelete(customer_id) {
        if (confirm('この会員情報を削除しても宜しいですか？')) {
            document.form1.mode.value = "delete"
            document.form1['edit_customer_id'].value = customer_id;
            document.form1.submit();
            return false;
        }
    }

    function fnEdit(customer_id) {
        document.form1.action = './edit.php';
        document.form1.mode.value = "edit_search"
        document.form1['edit_customer_id'].value = customer_id;
        document.form1.search_pageno.value = 1;
        document.form1.submit();
        return false;
    }

    function fnReSendMail(customer_id) {
        if (confirm('仮登録メールを再送しても宜しいですか？')) {
            document.form1.mode.value = "resend_mail"
            document.form1['edit_customer_id'].value = customer_id;
            document.form1.submit();
            return false;
        }
    }
//-->
<?php echo '</script'; ?>
>


<div id="customer" class="contents-main">
    <form name="search_form" id="search_form" method="post" action="?">
        <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
        <input type="hidden" name="mode" value="search" />

        <h2>検索条件設定</h2>

        <!--検索条件設定テーブルここから-->
        <table class="form">
            <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_ADMIN_REALDIR') ? constant('TEMPLATE_ADMIN_REALDIR') : null))."/adminparts/form_customer_search.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <tr>
                <th>会員状態</th>
                <td colspan="3"><?php echo smarty_function_html_checkboxes(array('name'=>"search_status",'options'=>$_smarty_tpl->tpl_vars['arrStatus']->value,'separator'=>"&nbsp;",'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['search_status']['value']),$_smarty_tpl);?>
</td>
            </tr>
        </table>
        <div class="btn">
            <p class="page_rows">検索結果表示件数
            <select name="search_page_max">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrPageMax']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['search_page_max']),$_smarty_tpl);?>

            </select> 件</p>
            <div class="btn-area">
                <ul>
                    <li><a class="btn-action" href="javascript:;" onclick="eccube.fnFormModeSubmit('search_form', 'search', '', ''); return false;"><span class="btn-next">この条件で検索する</span></a></li>
                </ul>
            </div>
        </div>
    </form>
    <?php if (empty($_smarty_tpl->tpl_vars['arrErr']->value) && ($_POST['mode'] == 'search' || $_POST['mode'] == 'delete' || $_POST['mode'] == 'resend_mail')) {?>

        <!--★★検索結果一覧★★-->
        <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
            <input type="hidden" name="mode" value="search" />
            <input type="hidden" name="edit_customer_id" value="" />
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrHidden']->value, 'item', false, 'key');
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

            <h2>検索結果一覧</h2>
            <div class="btn">
                <span class="attention"><!--検索結果数--><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_linemax']->value);?>
件</span>&nbsp;が該当しました。
                <!--検索結果-->
                <a class="btn-normal" href="javascript:;" onclick="eccube.setModeAndSubmit('csv','',''); return false;">CSV ダウンロード</a>
                <a class="btn-normal" href="javascript:;" onclick="location.href='../contents/csv.php?tpl_subno_csv=customer'">CSV 出力項目設定</a>
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['arrData']->value)) {?>

            <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl_pager']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            <!--検索結果表示テーブル-->
            <table class="list" id="customer-search-result">
                <col width="8%" />
                <col width="10%" />
                <col width="30%" />
                <col width="8%" />
                <col width="30%" />
                <col width="7%" />
                <col width="7%" />
                <tr>
                    <th rowspan="2">種別</th>
                    <th>会員ID</th>
                    <th rowspan="2">お名前/(フリガナ)</th>
                    <th rowspan="2">性別</th>
                    <th>TEL</th>
                    <th rowspan="2">編集</th>
                    <th rowspan="2">削除</th>
                </tr>
                <tr>
                    <th>都道府県</th>
                    <th>メールアドレス</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrData']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                    <tr>
                        <td class="center" rowspan="2"><?php if ($_smarty_tpl->tpl_vars['row']->value['status'] == 1) {?>仮<?php } else { ?>本<?php }?></td>
                        <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['row']->value['customer_id']));?>
</td>
                        <td rowspan="2"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['row']->value['name01']));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['row']->value['name02']));?>
<br />(<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['row']->value['kana01']));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['row']->value['kana02']));?>
)</td>
                        <td class="center" rowspan="2"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrSex']->value[$_smarty_tpl->tpl_vars['row']->value['sex']]));?>
</td>
                        <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['row']->value['tel01']));?>
-<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['row']->value['tel02']));?>
-<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['row']->value['tel03']));?>
</td>
                        <td class="center" rowspan="2"><span class="icon_edit"><a href="#" onclick="return fnEdit('<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['row']->value['customer_id']));?>
');">編集</a></span></td>
                        <td class="center" rowspan="2"><span class="icon_delete"><a href="#" onclick="return fnDelete('<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['row']->value['customer_id']));?>
');">削除</a></span></td>
                    </tr>
                    <tr>
                        <td><?php $_smarty_tpl->_assignInScope('pref', $_smarty_tpl->tpl_vars['row']->value['pref']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrPref']->value[$_smarty_tpl->tpl_vars['pref']->value]);?>
</td>
                        <td><?php echo smarty_function_mailto(array('address'=>$_smarty_tpl->tpl_vars['row']->value['email'],'encode'=>"javascript",'text'=>smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['email'],60)),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['row']->value['status'] == 1) {?><br /><a href="#" onclick="return fnReSendMail('<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['row']->value['customer_id']));?>
');">仮登録メール再送</a><?php }?></td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
            <!--検索結果表示テーブル-->

            <?php }?>
        </form>
        <!--★★検索結果一覧★★-->

    <?php }?>
</div>
<?php }
}
