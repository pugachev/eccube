<?php
/* Smarty version 3.1.40, created on 2022-07-18 20:24:51
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/customer/edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d54303ac6402_33554512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb4f4e4e8612fec4dfa8214fa31f1aad3530c19c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/customer/edit.tpl',
      1 => 1658143215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d54303ac6402_33554512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.html_radios.php','function'=>'smarty_function_html_radios',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),4=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),5=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),));
?>

<?php echo '<script'; ?>
 type="text/javascript">
<!--
    function fnReturn() {
        document.search_form.action = './<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
';
        document.search_form.submit();
        return false;
    }
//-->
<?php echo '</script'; ?>
>

<form name="search_form" id="search_form" method="post" action="">
    <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
    <input type="hidden" name="mode" value="search" />

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
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</form>

<form name="form1" id="form1" method="post" action="?" autocomplete="off">
    <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
    <input type="hidden" name="mode" value="confirm" />
    <input type="hidden" name="customer_id" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['customer_id']));?>
" />

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
            <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['customer_id']) {?>
            <tr>
                <th>会員ID<span class="attention"> *</span></th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['customer_id']));?>
</td>
            </tr>
            <?php }?>
            <tr>
                <th>会員状態<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['status']);?>
</span>
                    <span <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['status'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
                        <?php echo smarty_function_html_radios(array('name'=>"status",'options'=>$_smarty_tpl->tpl_vars['arrStatus']->value,'separator'=>" ",'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['status']),$_smarty_tpl);?>

                    </span>
                </td>
            </tr>
            <tr>
                <th>お名前<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['name01']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['name02']);?>
</span>
                    <input type="text" name="name01" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name01']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
" size="30" class="box30" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['name01'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />&nbsp;&nbsp;<input type="text" name="name02" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name02']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
" size="30" class="box30" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['name02'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
                </td>
            </tr>
            <tr>
                <th>お名前(フリガナ)<?php if (!(defined('FORM_COUNTRY_ENABLE') ? constant('FORM_COUNTRY_ENABLE') : null)) {?><span class="attention"> *</span><?php }?></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['kana01']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['kana02']);?>
</span>
                    <input type="text" name="kana01" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['kana01']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
" size="30" class="box30" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['kana01'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />&nbsp;&nbsp;<input type="text" name="kana02" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['kana02']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
" size="30" class="box30" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['kana02'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
                </td>
            </tr>
            <tr>
                <th>会社名</th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['company_name']);?>
</span>
                    <input type="text" name="company_name" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['company_name']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
" size="30" class="box30" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['company_name'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
                </td>
            </tr>
            <?php if (!(defined('FORM_COUNTRY_ENABLE') ? constant('FORM_COUNTRY_ENABLE') : null)) {?>
            <input type="hidden" name="country_id" value="<?php echo smarty_modifier_script_escape((defined('DEFAULT_COUNTRY_ID') ? constant('DEFAULT_COUNTRY_ID') : null));?>
" />
            <?php } else { ?>
            <tr>
                <th>国<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['country_id']);?>
</span>
                    <select name="country_id" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['country_id'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrCountry']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value['country_id'])===null||$tmp==='' ? (defined('DEFAULT_COUNTRY_ID') ? constant('DEFAULT_COUNTRY_ID') : null) : $tmp)),$_smarty_tpl);?>

                    </select>
                </td>
            </tr>
            <tr>
                <th>ZIP CODE</th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['zipcode']);?>
</span>
                    <input type="text" name="zipcode" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['zipcode']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
" size="30" class="box30" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['zipcode'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
                </td>
            </tr>
            <?php }?>
            <tr>
                <th>郵便番号<?php if (!(defined('FORM_COUNTRY_ENABLE') ? constant('FORM_COUNTRY_ENABLE') : null)) {?><span class="attention"> *</span><?php }?></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['zip01']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['zip02']);?>
</span>
                    〒 <input type="text" name="zip01" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['zip01']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('ZIP01_LEN') ? constant('ZIP01_LEN') : null));?>
" size="6" class="box6" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['zip01'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> /> - <input type="text" name="zip02" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['zip02']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('ZIP02_LEN') ? constant('ZIP02_LEN') : null));?>
" size="6" class="box6" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['zip02'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
                    <a class="btn-normal" href="javascript:;" name="address_input" onclick="eccube.getAddress('<?php echo smarty_modifier_script_escape((defined('INPUT_ZIP_URLPATH') ? constant('INPUT_ZIP_URLPATH') : null));?>
', 'zip01', 'zip02', 'pref', 'addr01'); return false;">住所入力</a>
                </td>
            </tr>
            <tr>
                <th>住所<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['pref']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['addr01']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['addr02']);?>
</span>
                    <select class="top" name="pref" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['pref'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
                        <option class="top" value="" selected="selected">都道府県を選択</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrPref']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['pref']),$_smarty_tpl);?>

                    </select><br />
                    <input type="text" name="addr01" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['addr01']));?>
" size="60" class="box60" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['addr01'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> /><br />
                    <?php echo smarty_modifier_script_escape((defined('SAMPLE_ADDRESS1') ? constant('SAMPLE_ADDRESS1') : null));?>
<br />
                    <input type="text" name="addr02" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['addr02']));?>
" size="60" class="box60" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['addr02'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> /><br />
                    <?php echo smarty_modifier_script_escape((defined('SAMPLE_ADDRESS2') ? constant('SAMPLE_ADDRESS2') : null));?>

                </td>
            </tr>
            <tr>
                <th>メールアドレス<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['email']);?>
</span>
                    <input type="text" name="email" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['email']));?>
" size="60" class="box60" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['email'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
                </td>
            </tr>
            <tr>
                <th>携帯メールアドレス</th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['email_mobile']);?>
</span>
                    <input type="text" name="email_mobile" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['email_mobile']));?>
" size="60" class="box60" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['email_mobile'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
                </td>
            </tr>
            <tr>
                <th>電話番号<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['tel01']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['tel02']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['tel03']);?>
</span>
                    <input type="text" name="tel01" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['tel01']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('TEL_ITEM_LEN') ? constant('TEL_ITEM_LEN') : null));?>
" size="6" class="box6" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['tel01'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> /> - <input type="text" name="tel02" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['tel02']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('TEL_ITEM_LEN') ? constant('TEL_ITEM_LEN') : null));?>
" size="6" class="box6" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['tel01'] != '' || $_smarty_tpl->tpl_vars['arrErr']->value['tel02'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> /> - <input type="text" name="tel03" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['tel03']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('TEL_ITEM_LEN') ? constant('TEL_ITEM_LEN') : null));?>
" size="6" class="box6" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['tel01'] != '' || $_smarty_tpl->tpl_vars['arrErr']->value['tel03'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
                </td>
            </tr>
            <tr>
                <th>FAX</th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['fax01']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['fax02']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['fax03']);?>
</span>
                    <input type="text" name="fax01" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['fax01']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('TEL_ITEM_LEN') ? constant('TEL_ITEM_LEN') : null));?>
" size="6" class="box6" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['fax01'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> /> - <input type="text" name="fax02" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['fax02']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('TEL_ITEM_LEN') ? constant('TEL_ITEM_LEN') : null));?>
" size="6" class="box6" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['fax01'] != '' || $_smarty_tpl->tpl_vars['arrErr']->value['fax02'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> /> - <input type="text" name="fax03" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['fax03']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('TEL_ITEM_LEN') ? constant('TEL_ITEM_LEN') : null));?>
" size="6" class="box6" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['fax01'] != '' || $_smarty_tpl->tpl_vars['arrErr']->value['fax03'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
                </td>
            </tr>
            <tr>
                <th>性別<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['sex']);?>
</span>
                    <span <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['sex'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
                        <?php echo smarty_function_html_radios(array('name'=>"sex",'options'=>$_smarty_tpl->tpl_vars['arrSex']->value,'separator'=>" ",'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['sex']),$_smarty_tpl);?>

                    </span>
                </td>
            </tr>
            <tr>
                <th>ご職業</th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['job']);?>
</span>
                    <select name="job" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['job'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> >
                    <option value="" selected="selected">選択してください</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrJob']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['job']),$_smarty_tpl);?>

                    </select>
                </td>
            </tr>
            <tr>
                <th>生年月日</th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['year']);?>
</span>
                    <select name="year" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['year'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> >
                        <option value="" selected="selected">------</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrYear']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['year']),$_smarty_tpl);?>

                    </select>年
                    <select name="month" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['year'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> >
                        <option value="" selected="selected">----</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrMonth']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['month']),$_smarty_tpl);?>

                    </select>月
                    <select name="day" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['year'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> >
                        <option value="" selected="selected">----</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDay']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['day']),$_smarty_tpl);?>

                    </select>日
                </td>
            </tr>
            <tr>
                <th>パスワード<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['password']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['password02']);?>
</span>
                    <input type="password" name="password" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['password']));?>
" size="30" class="box30" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['password'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />　半角英数字<?php echo smarty_modifier_script_escape((defined('PASSWORD_MIN_LEN') ? constant('PASSWORD_MIN_LEN') : null));?>
～<?php echo smarty_modifier_script_escape((defined('PASSWORD_MAX_LEN') ? constant('PASSWORD_MAX_LEN') : null));?>
文字（記号可）<br />
                    <input type="password" name="password02" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['password02']));?>
" size="30" class="box30" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['password02'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
                    <p><span class="attention mini">確認のために2度入力してください。</span></p>
                </td>
            </tr>
            <tr>
                <th>パスワードを忘れたときのヒント<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['reminder']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['reminder_answer']);?>
</span>
                    質問：
                    <select class="top" name="reminder" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['reminder'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> >
                        <option value="" selected="selected">選択してください</option>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrReminder']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['reminder']),$_smarty_tpl);?>

                    </select><br />
                    答え：
                    <input type="text" name="reminder_answer" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['reminder_answer']));?>
" size="30" class="box30" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['reminder_answer'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
                </td>
            </tr>
            <tr>
                <th>メールマガジン<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['mailmaga_flg']);?>
</span>
                    <span <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['mailmaga_flg'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
                        <?php echo smarty_function_html_radios(array('name'=>"mailmaga_flg",'options'=>$_smarty_tpl->tpl_vars['arrMailMagazineType']->value,'separator'=>" ",'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['mailmaga_flg']),$_smarty_tpl);?>

                    </span>
                </td>
            </tr>
            <tr>
                <th>SHOP用メモ</th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['note']);?>
</span>
                    <textarea name="note" maxlength="<?php echo smarty_modifier_script_escape((defined('LTEXT_LEN') ? constant('LTEXT_LEN') : null));?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['note'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> cols="60" rows="8" class="area60"><?php echo smarty_modifier_script_escape("\n");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['note']));?>
</textarea>
                </td>
            </tr>
            <tr>
                <th>所持ポイント<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['point']);?>
</span>
                    <input type="text" name="point" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['point']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('TEL_LEN') ? constant('TEL_LEN') : null));?>
" size="6" class="box6" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['point'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> /> pt
                </td>
            </tr>
            <tr>
            <th>ニックネーム<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['nick_name']);?>
</span>
                <input type="text" name="nick_name" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['nick_name']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
" size="30" class="box30" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['nick_name'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
            </td>
        </tr>
        <tr>
                <th>住まい</th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['house_id']);?>
</span>
                    <select name="house_id" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['house_id'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> >
                    <option value="" selected="selected">選択してください</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrHouse']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['house_id']),$_smarty_tpl);?>

                    </select>
                </td>
            </tr>
            <tr>
                <th>ダイレクトメール<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['dm_id']);?>
</span>
                    <span <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['dm_id'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
                        <?php echo smarty_function_html_radios(array('name'=>"dm_id",'options'=>$_smarty_tpl->tpl_vars['arrDm']->value,'separator'=>"&nbsp;",'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['dm_id']),$_smarty_tpl);?>

                    </span>
                </td>
            </tr>
            <tr>
                <th>趣味</th>
                <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['hobby_id']);?>
</span>
                <?php echo smarty_function_html_checkboxes(array('name'=>"hobby_id",'options'=>$_smarty_tpl->tpl_vars['arrHobby']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['hobby_id'],'separator'=>'&nbsp;&nbsp;'),$_smarty_tpl);?>

                </td>
            </tr>
            <tr>
                <th>美人度<span class="attention"> *</span></th>
                <td>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['bijin_id']);?>
</span>
                    <span <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['dm_id'] != '') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
                        <?php echo smarty_function_html_radios(array('name'=>"bijin_id",'options'=>$_smarty_tpl->tpl_vars['arrBijin']->value,'separator'=>"&nbsp;",'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['bijin_id']),$_smarty_tpl);?>

                    </span>
                </td>
            </tr>
        </table>

        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="return fnReturn();"><span class="btn-prev">検索画面に戻る</span></a></li>
                <li><a class="btn-action" href="javascript:;" onclick="eccube.setValueAndSubmit('form1', 'mode', 'confirm'); return false;"><span class="btn-next">確認ページへ</span></a></li>
            </ul>
        </div>

        <input type="hidden" name="order_id" value="" />
        <input type="hidden" name="search_pageno" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_pageno']->value);?>
" />
        <input type="hidden" name="edit_customer_id" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['edit_customer_id']->value);?>
" />

        <h2>購入履歴一覧</h2>
        <?php if ($_smarty_tpl->tpl_vars['tpl_linemax']->value > 0) {?>
        <p><span class="attention"><!--購入履歴一覧--><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_linemax']->value);?>
件</span>&nbsp;が該当しました。</p>

        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl_pager']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                        <table class="list">
                <tr>
                    <th>日付</th>
                    <th>注文番号</th>
                    <th>購入金額</th>
                    <th>発送日</th>
                    <th>支払方法</th>
                </tr>
                <?php
$__section_cnt_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrPurchaseHistory']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_0_total = $__section_cnt_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_0_total !== 0) {
for ($__section_cnt_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $__section_cnt_0_iteration <= $__section_cnt_0_total; $__section_cnt_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
                    <tr>
                        <td><?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfDispDBDate' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrPurchaseHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['create_date'] )));?>
</td>
                        <td class="center"><a href="../order/edit.php?order_id=<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrPurchaseHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['order_id']);?>
" ><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrPurchaseHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['order_id']);?>
</a></td>
                        <td class="center"><?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrPurchaseHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['payment_total']));?>
円</td>
                        <td class="center"><?php if ($_smarty_tpl->tpl_vars['arrPurchaseHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['status'] == 5) {
echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfDispDBDate' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrPurchaseHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['commit_date'] )));
} else { ?>未発送<?php }?></td>
                        <?php $_smarty_tpl->_assignInScope('payment_id', ((string)$_smarty_tpl->tpl_vars['arrPurchaseHistory']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['payment_id']));?>
                        <td class="center"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrPayment']->value[$_smarty_tpl->tpl_vars['payment_id']->value]));?>
</td>
                    </tr>
                <?php
}
}
?>
            </table>
                    <?php } else { ?>
            <div class="message">購入履歴はありません。</div>
        <?php }?>

    </div>
</form>
<?php }
}
