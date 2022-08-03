<?php
/* Smarty version 3.1.40, created on 2022-07-30 19:05:46
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/customer/edit_confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62e5027aef14b0_23495095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '88584e47999b9fcfea03f239567356e9211120a3' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/customer/edit_confirm.tpl',
      1 => 1659174356,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e5027aef14b0_23495095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<?php echo '<script'; ?>
 type="text/javascript">
<!--

function func_return(){
    document.form1.mode.value = "return";
    document.form1.submit();
}

//-->
<?php echo '</script'; ?>
>


<form name="form1" id="form1" method="post" action="?">
    <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
    <input type="hidden" name="mode" value="complete" />

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrForm']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <?php if (!is_array($_smarty_tpl->tpl_vars['item']->value) && $_smarty_tpl->tpl_vars['key']->value != "mode" && $_smarty_tpl->tpl_vars['key']->value != "subm" && $_smarty_tpl->tpl_vars['key']->value != (defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null)) {?>
            <input type="hidden" name="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value));?>
" />
        <?php } else { ?>
            <input type="hidden" name="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
" value="" />
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrForm']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value != "mode" && $_smarty_tpl->tpl_vars['key']->value != "subm" && $_smarty_tpl->tpl_vars['key']->value != (defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null)) {?>
            <?php if ($_smarty_tpl->tpl_vars['key']->value == 'hobby_id') {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value, 'hobbyVal');
$_smarty_tpl->tpl_vars['hobbyVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hobbyVal']->value) {
$_smarty_tpl->tpl_vars['hobbyVal']->do_else = false;
?>
                    <input type="hidden" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
[]" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['hobbyVal']->value));?>
" />
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <input type="hidden" name="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value));?>
" />
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    <!-- 検索条件の保持 -->
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrSearchData']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['key']->value != "customer_id" && $_smarty_tpl->tpl_vars['key']->value != "mode" && $_smarty_tpl->tpl_vars['key']->value != "edit_customer_id" && $_smarty_tpl->tpl_vars['key']->value != (defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null)) {?>
            <?php if (is_array($_smarty_tpl->tpl_vars['item']->value)) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value, 'c_item');
$_smarty_tpl->tpl_vars['c_item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['c_item']->value) {
$_smarty_tpl->tpl_vars['c_item']->do_else = false;
?>
                    <input type="hidden" name="search_data[<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
][]" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['c_item']->value));?>
" />
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php } else { ?>
                <input type="hidden" name="search_data[<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
]" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value));?>
" />
            <?php }?>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

    <div id="customer" class="contents-main">
        <table class="form">
            <tr>
                <th>会員ID</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['customer_id']));?>
</td>
            </tr>
            <tr>
                <th>会員状態</th>
                <td><?php if ($_smarty_tpl->tpl_vars['arrForm']->value['status'] == 1) {?>仮会員<?php } else { ?>本会員<?php }?></td>
            </tr>
            <tr>
                <th>お名前</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name01']));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name02']));?>
　様</td>
            </tr>
            <tr>
                <th>お名前(フリガナ)</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['kana01']));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['kana02']));?>
　様</td>
            </tr>
            <tr>
                <th>会社名</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['company_name']));?>
</td>
            </tr>
            <?php if ((defined('FORM_COUNTRY_ENABLE') ? constant('FORM_COUNTRY_ENABLE') : null)) {?>
            <tr>
                <th>国</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrCountry']->value[$_smarty_tpl->tpl_vars['arrForm']->value['country_id']]));?>
</td>
            </tr>
            <tr>
                <th>ZIPCODE</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['zipcode']));?>
</td>
            </tr>
            <?php }?>
            <tr>
                <th>郵便番号</th>
                <td>〒 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['zip01']));?>
 - <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['zip02']));?>
</td>
            </tr>
            <tr>
                <th>住所</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrPref']->value[$_smarty_tpl->tpl_vars['arrForm']->value['pref']]));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['addr01']));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['addr02']));?>
</td>
            </tr>
            <tr>
                <th>メールアドレス</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['email']));?>
</td>
            </tr>
            <tr>
                <th>携帯メールアドレス</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['email_mobile']));?>
</td>
            </tr>
            <tr>
                <th>お電話番号</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['tel01']));?>
 - <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['tel02']));?>
 - <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['tel03']));?>
</td>
            </tr>
            <tr>
                <th>FAX</th>
                <td><?php if (strlen($_smarty_tpl->tpl_vars['arrForm']->value['fax01']) > 0) {
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['fax01']));?>
 - <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['fax02']));?>
 - <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['fax03']));
} else { ?>未登録<?php }?></td>
            </tr>
            <tr>
                <th>性別</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrSex']->value[$_smarty_tpl->tpl_vars['arrForm']->value['sex']]));?>
</td>
            </tr>
            <tr>
                <th>ご職業</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrJob']->value[$_smarty_tpl->tpl_vars['arrForm']->value['job']])===null||$tmp==='' ? "未登録" : $tmp)));?>
</td>
            </tr>
            <tr>
                <th>生年月日</th>
                <td><?php if (strlen($_smarty_tpl->tpl_vars['arrForm']->value['year']) > 0 && strlen($_smarty_tpl->tpl_vars['arrForm']->value['month']) > 0 && strlen($_smarty_tpl->tpl_vars['arrForm']->value['day']) > 0) {
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['year']));?>
年<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['month']));?>
月<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['day']));?>
日<?php } else { ?>未登録<?php }?></td>
            </tr>
            <tr>
                <th>パスワード</th>
                <td><?php echo smarty_modifier_script_escape((defined('DEFAULT_PASSWORD') ? constant('DEFAULT_PASSWORD') : null));?>
</td>
            </tr>
            <tr>
                <th>パスワードを忘れたときのヒント</th>
                <td>
                    質問： <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrReminder']->value[$_smarty_tpl->tpl_vars['arrForm']->value['reminder']]));?>
<br />
                    答え： <?php echo smarty_modifier_script_escape((defined('DEFAULT_PASSWORD') ? constant('DEFAULT_PASSWORD') : null));?>

                </td>
            </tr>
            <tr>
                <th>メールマガジン</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrMailMagazineType']->value[$_smarty_tpl->tpl_vars['arrForm']->value['mailmaga_flg']]));?>
</td>
            </tr>
            <tr>
                <th>SHOP用メモ</th>
                <td><?php echo smarty_modifier_script_escape((($tmp = @nl2br(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['note'])))===null||$tmp==='' ? "未登録" : $tmp));?>
</td>
            </tr>
            <tr>
                <th>所持ポイント</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value['point'])===null||$tmp==='' ? "0" : $tmp)));?>
 pt</td>
            </tr>
            <tr>
            <th>ニックネーム</th>
            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['nick_name']));?>
</td>
        </tr>
        <tr>
            <th>住まい</th>
            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrHouse']->value[$_smarty_tpl->tpl_vars['arrForm']->value['house_id']])===null||$tmp==='' ? "未登録" : $tmp)));?>
</td>
        </tr>
        <tr>
            <th>ダイレクトメール</th>
            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrDm']->value[$_smarty_tpl->tpl_vars['arrForm']->value['dm_id']]));?>
</td>
        </tr>
        <tr>
            <th>趣味</th>
            <td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrForm']->value['hobby_id'], 'hobby');
$_smarty_tpl->tpl_vars['hobby']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['hobby']->value) {
$_smarty_tpl->tpl_vars['hobby']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['hobby']->value != '') {?>
                        <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrHobby']->value[$_smarty_tpl->tpl_vars['hobby']->value]));?>

                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </td>
        </tr>
        <tr>
            <th>美人</th>
            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrBijin']->value[$_smarty_tpl->tpl_vars['arrForm']->value['bijin_id']]));?>
</td>
        </tr>
        <tr>
            <th>現在結婚していますか？</th>
            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrBijin']->value[$_smarty_tpl->tpl_vars['arrForm']->value['married_id']]));?>
</td>
        </tr>
        </table>
        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="func_return(); return false;"><span class="btn-prev">編集画面に戻る</span></a></li>
                <li><a class="btn-action" href="javascript:;" onclick="eccube.fnFormModeSubmit('form1', 'complete', '', ''); return false;"><span class="btn-next">この内容で登録する</span></a></li>
            </ul>
        </div>
    </div>
</form>
<?php }
}
