<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:03:11
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/shopping/confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd26ef5cac92_06873714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '194ef71d54a742d52be98ec3bb113d1f5253092f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/shopping/confirm.tpl',
      1 => 1658652116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd26ef5cac92_06873714 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

<?php echo '<script'; ?>
 type="text/javascript">//<![CDATA[
    var sent = false;

    function fnCheckSubmit() {
        if (sent) {
            alert("只今、処理中です。しばらくお待ち下さい。");
            return false;
        }
        sent = true;
        return true;
    }
//]]><?php echo '</script'; ?>
>

<!--CONTENTS-->
<div id="undercolumn">
    <div id="undercolumn_shopping">
        <p class="flow_area"><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/picture/img_flow_03.jpg" alt="購入手続きの流れ" /></p>
        <h2 class="title"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_title']->value));?>
</h2>

        <p class="information">下記ご注文内容で送信してもよろしいでしょうか？<br />
            よろしければ、「<?php if ($_smarty_tpl->tpl_vars['use_module']->value) {?>次へ<?php } else { ?>ご注文完了ページへ<?php }?>」ボタンをクリックしてください。</p>

        <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
            <input type="hidden" name="mode" value="confirm" />
            <input type="hidden" name="uniqid" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_uniqid']->value);?>
" />

            <div class="btn_area">
                <ul>
                    <li>
                        <a href="./payment.php">
                            <img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_back.jpg" alt="戻る" />
                        </a>
                    </li>
                        <?php if ($_smarty_tpl->tpl_vars['use_module']->value) {?>
                    <li>
                        <input type="image" onclick="return fnCheckSubmit();" class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_next.jpg" alt="次へ" name="next-top" id="next-top" />
                    </li>
                        <?php } else { ?>
                    <li>
                        <input type="image" onclick="return fnCheckSubmit();" class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_order_complete.jpg" alt="ご注文完了ページへ" name="next-top" id="next-top" />
                    </li>
                    <?php }?>
                </ul>
            </div>

            <table summary="ご注文内容確認">
                <col width="10%" />
                <col width="40%" />
                <col width="20%" />
                <col width="10%" />
                <col width="20%" />
                <tr>
                    <th scope="col">商品写真</th>
                    <th scope="col">商品名</th>
                    <th scope="col">単価</th>
                    <th scope="col">数量</th>
                    <th scope="col">小計</th>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrCartItems']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <tr>
                        <td class="alignC">
                            <a
                                <?php if (strlen($_smarty_tpl->tpl_vars['item']->value['productsClass']['main_image']) >= 1) {?> href="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfNoImageMainList' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['productsClass']['main_image'] ))));?>
" class="expansion" target="_blank"
                                <?php }?>
                            >
                                <img src="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfNoImageMainList' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['productsClass']['main_list_image'] ))));?>
" style="max-width: 65px;max-height: 65px;" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['name']));?>
" /></a>
                        </td>
                        <td>
                            <ul>
                                <li><strong><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['name']));?>
</strong></li>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['productsClass']['classcategory_name1'] != '') {?>
                                <li><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['class_name1']));?>
：<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['classcategory_name1']));?>
</li>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['item']->value['productsClass']['classcategory_name2'] != '') {?>
                                <li><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['class_name2']));?>
：<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['classcategory_name2']));?>
</li>
                                <?php }?>
                            </ul>
                        </td>
                        <td class="alignR">
                            <?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['item']->value['price_inctax']));?>
円
                        </td>
                        <td class="alignR"><?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['item']->value['quantity']));?>
</td>
                        <td class="alignR"><?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['item']->value['total_inctax']));?>
円</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <tr>
                    <th colspan="4" class="alignR" scope="row">小計</th>
                    <td class="alignR"><?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['tpl_total_inctax']->value[$_smarty_tpl->tpl_vars['cartKey']->value]));?>
円</td>
                </tr>
                <?php if ((defined('USE_POINT') ? constant('USE_POINT') : null) !== false) {?>
                    <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['use_point'] > 0) {?>
                    <tr>
                        <th colspan="4" class="alignR" scope="row">値引き（ポイントご使用時）</th>
                        <td class="alignR">
                            <?php $_smarty_tpl->_assignInScope('discount', ((string)($_smarty_tpl->tpl_vars['arrForm']->value['use_point']*(defined('POINT_VALUE') ? constant('POINT_VALUE') : null))));?>
                            -<?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['discount']->value))===null||$tmp==='' ? 0 : $tmp));?>
円</td>
                    </tr>
                    <?php }?>
                <?php }?>
                <tr>
                    <th colspan="4" class="alignR" scope="row">送料</th>
                    <td class="alignR"><?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrForm']->value['deliv_fee']));?>
円</td>
                </tr>
                <tr>
                    <th colspan="4" class="alignR" scope="row">手数料</th>
                    <td class="alignR"><?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrForm']->value['charge']));?>
円</td>
                </tr>
                <tr>
                    <th colspan="4" class="alignR" scope="row">合計</th>
                    <td class="alignR"><span class="price"><?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrForm']->value['payment_total']));?>
円</span></td>
                </tr>
            </table>

                        <?php if ($_smarty_tpl->tpl_vars['tpl_login']->value == 1 && (defined('USE_POINT') ? constant('USE_POINT') : null) !== false) {?>
                <table summary="ポイント確認" class="delivname">
                <col width="30%" />
                <col width="70%" />
                    <tr>
                        <th scope="row">ご注文前のポイント</th>
                        <td><?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['tpl_user_point']->value))===null||$tmp==='' ? 0 : $tmp));?>
Pt</td>
                    </tr>
                    <tr>
                        <th scope="row">ご使用ポイント</th>
                        <td>-<?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrForm']->value['use_point']))===null||$tmp==='' ? 0 : $tmp));?>
Pt</td>
                    </tr>
                    <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['birth_point'] > 0) {?>
                    <tr>
                        <th scope="row">お誕生月ポイント</th>
                        <td>+<?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrForm']->value['birth_point']))===null||$tmp==='' ? 0 : $tmp));?>
Pt</td>
                    </tr>
                    <?php }?>
                    <tr>
                        <th scope="row">今回加算予定のポイント</th>
                        <td>+<?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrForm']->value['add_point']))===null||$tmp==='' ? 0 : $tmp));?>
Pt</td>
                    </tr>
                    <tr>
                    <?php $_smarty_tpl->_assignInScope('total_point', ((string)($_smarty_tpl->tpl_vars['tpl_user_point']->value-$_smarty_tpl->tpl_vars['arrForm']->value['use_point']+$_smarty_tpl->tpl_vars['arrForm']->value['add_point'])));?>
                        <th scope="row">加算後のポイント</th>
                        <td><?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['total_point']->value));?>
Pt</td>
                    </tr>
                </table>
            <?php }?>
            
                        <h3>ご注文者</h3>
            <table summary="ご注文者" class="customer">
                <col width="30%" />
                <col width="70%" />
                <tbody>
                    <tr>
                        <th scope="row">お名前</th>
                        <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['order_name01']));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['order_name02']));?>
</td>
                    </tr>
                    <tr>
                        <th scope="row">お名前(フリガナ)</th>
                        <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['order_kana01']));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['order_kana02']));?>
</td>
                    </tr>
                    <tr>
                        <th scope="row">会社名</th>
                        <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['order_company_name']));?>
</td>
                    </tr>
                    <?php if ((defined('FORM_COUNTRY_ENABLE') ? constant('FORM_COUNTRY_ENABLE') : null)) {?>
                    <tr>
                        <th scope="row">国</th>
                        <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrCountry']->value[$_smarty_tpl->tpl_vars['arrForm']->value['order_country_id']]));?>
</td>
                    </tr>
                    <tr>
                        <th scope="row">ZIPCODE</th>
                        <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['order_zipcode']));?>
</td>
                    </tr>
                    <?php }?>
                    <tr>
                        <th scope="row">郵便番号</th>
                        <td>〒<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['order_zip01']));?>
-<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['order_zip02']));?>
</td>
                    </tr>
                    <tr>
                        <th scope="row">住所</th>
                        <td><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrPref']->value[$_smarty_tpl->tpl_vars['arrForm']->value['order_pref']]);
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['order_addr01']));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['order_addr02']));?>
</td>
                    </tr>
                    <tr>
                        <th scope="row">電話番号</th>
                        <td><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['order_tel01']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['order_tel02']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['order_tel03']);?>
</td>
                    </tr>
                    <tr>
                        <th scope="row">FAX番号</th>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['order_fax01'] > 0) {?>
                                <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['order_fax01']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['order_fax02']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['order_fax03']);?>

                            <?php }?>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">メールアドレス</th>
                        <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['order_email']));?>
</td>
                    </tr>
                    <tr>
                        <th scope="row">性別</th>
                        <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrSex']->value[$_smarty_tpl->tpl_vars['arrForm']->value['order_sex']]));?>
</td>
                    </tr>
                    <tr>
                        <th scope="row">職業</th>
                        <td><?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrJob']->value[$_smarty_tpl->tpl_vars['arrForm']->value['order_job']])===null||$tmp==='' ? '(未登録)' : $tmp)));?>
</td>
                    </tr>
                    <tr>
                        <th scope="row">生年月日</th>
                        <td>
                            <?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @smarty_modifier_regex_replace(smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['arrForm']->value['order_birth'],"/ .+/",''),"/-/","/"))===null||$tmp==='' ? '(未登録)' : $tmp)));?>

                        </td>
                    </tr>
                </tbody>
            </table>

                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrShipping']->value, 'shippingItem', false, NULL, 'shippingItem', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['shippingItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shippingItem']->value) {
$_smarty_tpl->tpl_vars['shippingItem']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_shippingItem']->value['iteration']++;
?>
                <h3>お届け先<?php if ($_smarty_tpl->tpl_vars['is_multiple']->value) {
echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_foreach_shippingItem']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_shippingItem']->value['iteration'] : null));
}?></h3>
                <?php if ($_smarty_tpl->tpl_vars['is_multiple']->value) {?>
                    <table summary="ご注文内容確認">
                        <col width="10%" />
                        <col width="60%" />
                        <col width="20%" />
                        <col width="10%" />
                        <tr>
                            <th scope="col">商品写真</th>
                            <th scope="col">商品名</th>
                            <th scope="col">数量</th>
                            <th scope="col">小計</th>
                        </tr>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shippingItem']->value['shipment_item'], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                            <tr>
                                <td class="alignC">
                                    <a
                                        <?php if (strlen($_smarty_tpl->tpl_vars['item']->value['productsClass']['main_image']) >= 1) {?> href="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfNoImageMainList' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['productsClass']['main_image'] ))));?>
" class="expansion" target="_blank"
                                        <?php }?>
                                    >
                                        <img src="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfNoImageMainList' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['productsClass']['main_list_image'] ))));?>
" style="max-width: 65px;max-height: 65px;" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['name']));?>
" /></a>
                                </td>
                                <td><strong><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['name']));?>
</strong><br />
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['productsClass']['classcategory_name1'] != '') {?>
                                        <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value['productsClass']['class_name1']);?>
：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value['productsClass']['classcategory_name1']);?>
<br />
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['productsClass']['classcategory_name2'] != '') {?>
                                        <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value['productsClass']['class_name2']);?>
：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value['productsClass']['classcategory_name2']);?>

                                    <?php }?>
                                </td>
                                <td class="alignC"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value['quantity']);?>
</td>
                                <td class="alignR">
                                    <?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['item']->value['total_inctax']));?>
円
                                </td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </table>
                <?php }?>

                <table summary="お届け先確認" class="delivname">
                    <col width="30%" />
                    <col width="70%" />
                    <tbody>
                        <tr>
                            <th scope="row">お名前</th>
                            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_name01']));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_name02']));?>
</td>
                        </tr>
                        <tr>
                            <th scope="row">お名前(フリガナ)</th>
                            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_kana01']));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_kana02']));?>
</td>
                        </tr>
                        <tr>
                            <th scope="row">会社名</th>
                            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_company_name']));?>
</td>
                        </tr>
                        <?php if ((defined('FORM_COUNTRY_ENABLE') ? constant('FORM_COUNTRY_ENABLE') : null)) {?>
                        <tr>
                            <th scope="row">国</th>
                            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrCountry']->value[$_smarty_tpl->tpl_vars['shippingItem']->value['shipping_country_id']]));?>
</td>
                        </tr>
                        <tr>
                            <th scope="row">ZIPCODE</th>
                            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_zipcode']));?>
</td>
                        </tr>
                        <?php }?>
                        <tr>
                            <th scope="row">郵便番号</th>
                            <td>〒<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_zip01']));?>
-<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_zip02']));?>
</td>
                        </tr>
                        <tr>
                            <th scope="row">住所</th>
                            <td><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrPref']->value[$_smarty_tpl->tpl_vars['shippingItem']->value['shipping_pref']]);
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_addr01']));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_addr02']));?>
</td>
                        </tr>
                        <tr>
                            <th scope="row">電話番号</th>
                            <td><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_tel01']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_tel02']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_tel03']);?>
</td>
                        </tr>
                        <tr>
                            <th scope="row">FAX番号</th>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_fax01'] > 0) {?>
                                    <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_fax01']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_fax02']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_fax03']);?>

                                <?php }?>
                            </td>
                        </tr>
                        <?php if ($_smarty_tpl->tpl_vars['cartKey']->value != (defined('PRODUCT_TYPE_DOWNLOAD') ? constant('PRODUCT_TYPE_DOWNLOAD') : null)) {?>
                            <tr>
                                <th scope="row">お届け日</th>
                                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['shippingItem']->value['shipping_date'])===null||$tmp==='' ? "指定なし" : $tmp)));?>
</td>
                            </tr>
                            <tr>
                                <th scope="row">お届け時間</th>
                                <td><?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['shippingItem']->value['shipping_time'])===null||$tmp==='' ? "指定なし" : $tmp)));?>
</td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            
            <h3>配送方法・お支払方法・その他お問い合わせ</h3>
            <table summary="配送方法・お支払方法・その他お問い合わせ" class="delivname">
                <col width="30%" />
                <col width="70%" />
                <tbody>
                <tr>
                    <th scope="row">配送方法</th>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrDeliv']->value[$_smarty_tpl->tpl_vars['arrForm']->value['deliv_id']]));?>
</td>
                </tr>
                <tr>
                    <th scope="row">お支払方法</th>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['payment_method']));?>
</td>
                </tr>
                <tr>
                    <th scope="row">その他お問い合わせ</th>
                    <td><?php echo smarty_modifier_script_escape(nl2br(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['message'])));?>
</td>
                </tr>
                </tbody>
            </table>

            <div class="btn_area">
                <ul>
                    <li>
                        <a href="./payment.php"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_back.jpg" alt="戻る" name="back<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" /></a>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['use_module']->value) {?>
                    <li>
                        <input type="image" onclick="return fnCheckSubmit();" class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_next.jpg" alt="次へ" name="next" id="next" />
                    </li>
                    <?php } else { ?>
                    <li>
                        <input type="image" onclick="return fnCheckSubmit();" class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_order_complete.jpg" alt="ご注文完了ページへ"  name="next" id="next" />
                    </li>
                    <?php }?>
                </ul>
            </div>
        </form>
    </div>
</div>
<?php }
}
