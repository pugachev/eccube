<?php
/* Smarty version 3.1.40, created on 2022-07-18 20:25:39
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/customer/edit_confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d54333040a34_92097893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c924d0e2d0b1a06b70b608f5fff67bbcb97adadf' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/customer/edit_confirm.tpl',
      1 => 1658143525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d54333040a34_92097893 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
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
    
    <!-- ????????????????????? -->
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
                <th>??????ID</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['customer_id']));?>
</td>
            </tr>
            <tr>
                <th>????????????</th>
                <td><?php if ($_smarty_tpl->tpl_vars['arrForm']->value['status'] == 1) {?>?????????<?php } else { ?>?????????<?php }?></td>
            </tr>
            <tr>
                <th>?????????</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name01']));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name02']));?>
??????</td>
            </tr>
            <tr>
                <th>?????????(????????????)</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['kana01']));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['kana02']));?>
??????</td>
            </tr>
            <tr>
                <th>?????????</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['company_name']));?>
</td>
            </tr>
            <?php if ((defined('FORM_COUNTRY_ENABLE') ? constant('FORM_COUNTRY_ENABLE') : null)) {?>
            <tr>
                <th>???</th>
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
                <th>????????????</th>
                <td>??? <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['zip01']));?>
 - <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['zip02']));?>
</td>
            </tr>
            <tr>
                <th>??????</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrPref']->value[$_smarty_tpl->tpl_vars['arrForm']->value['pref']]));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['addr01']));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['addr02']));?>
</td>
            </tr>
            <tr>
                <th>?????????????????????</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['email']));?>
</td>
            </tr>
            <tr>
                <th>???????????????????????????</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['email_mobile']));?>
</td>
            </tr>
            <tr>
                <th>???????????????</th>
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
} else { ?>?????????<?php }?></td>
            </tr>
            <tr>
                <th>??????</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrSex']->value[$_smarty_tpl->tpl_vars['arrForm']->value['sex']]));?>
</td>
            </tr>
            <tr>
                <th>?????????</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrJob']->value[$_smarty_tpl->tpl_vars['arrForm']->value['job']])===null||$tmp==='' ? "?????????" : $tmp)));?>
</td>
            </tr>
            <tr>
                <th>????????????</th>
                <td><?php if (strlen($_smarty_tpl->tpl_vars['arrForm']->value['year']) > 0 && strlen($_smarty_tpl->tpl_vars['arrForm']->value['month']) > 0 && strlen($_smarty_tpl->tpl_vars['arrForm']->value['day']) > 0) {
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['year']));?>
???<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['month']));?>
???<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['day']));?>
???<?php } else { ?>?????????<?php }?></td>
            </tr>
            <tr>
                <th>???????????????</th>
                <td><?php echo smarty_modifier_script_escape((defined('DEFAULT_PASSWORD') ? constant('DEFAULT_PASSWORD') : null));?>
</td>
            </tr>
            <tr>
                <th>?????????????????????????????????????????????</th>
                <td>
                    ????????? <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrReminder']->value[$_smarty_tpl->tpl_vars['arrForm']->value['reminder']]));?>
<br />
                    ????????? <?php echo smarty_modifier_script_escape((defined('DEFAULT_PASSWORD') ? constant('DEFAULT_PASSWORD') : null));?>

                </td>
            </tr>
            <tr>
                <th>?????????????????????</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrMailMagazineType']->value[$_smarty_tpl->tpl_vars['arrForm']->value['mailmaga_flg']]));?>
</td>
            </tr>
            <tr>
                <th>SHOP?????????</th>
                <td><?php echo smarty_modifier_script_escape((($tmp = @nl2br(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['note'])))===null||$tmp==='' ? "?????????" : $tmp));?>
</td>
            </tr>
            <tr>
                <th>??????????????????</th>
                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value['point'])===null||$tmp==='' ? "0" : $tmp)));?>
 pt</td>
            </tr>
            <tr>
            <th>??????????????????</th>
            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['nick_name']));?>
</td>
        </tr>
        <tr>
            <th>?????????</th>
            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrHouse']->value[$_smarty_tpl->tpl_vars['arrForm']->value['house_id']])===null||$tmp==='' ? "?????????" : $tmp)));?>
</td>
        </tr>
        <tr>
            <th>????????????????????????</th>
            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrDm']->value[$_smarty_tpl->tpl_vars['arrForm']->value['dm_id']]));?>
</td>
        </tr>
        <tr>
            <th>??????</th>
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
            <th>??????</th>
            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrBijin']->value[$_smarty_tpl->tpl_vars['arrForm']->value['bijin_id']]));?>
</td>
        </tr>
        </table>
        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="func_return(); return false;"><span class="btn-prev">?????????????????????</span></a></li>
                <li><a class="btn-action" href="javascript:;" onclick="eccube.fnFormModeSubmit('form1', 'complete', '', ''); return false;"><span class="btn-next">???????????????????????????</span></a></li>
            </ul>
        </div>
    </div>
</form>
<?php }
}
