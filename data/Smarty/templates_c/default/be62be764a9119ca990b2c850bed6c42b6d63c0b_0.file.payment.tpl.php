<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:03:07
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/shopping/payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd26eb124e86_07637072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be62be764a9119ca990b2c850bed6c42b6d63c0b' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/shopping/payment.tpl',
      1 => 1658652116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd26eb124e86_07637072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),));
?>

<?php echo '<script'; ?>
 type="text/javascript">//<![CDATA[
    $(function() {
        if ($('input[name=deliv_id]:checked').val()
            || $('#deliv_id').val()) {
            showForm(true);
        } else {
            showForm(false);
        }
        $('input[id^=deliv_]').click(function() {
            showForm(true);
            var data = {};
            data.mode = 'select_deliv';
            data.deliv_id = $(this).val();
            data['<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
'] = '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
';
            $.ajax({
                type : 'POST',
                url : location.pathname,
                data: data,
                cache : false,
                dataType : 'json',
                error : remoteException,
                success : function(data, dataType) {
                    if (data.error) {
                        remoteException();
                    } else {
                        // 支払い方法の行を生成
                        var payment_tbody = $('#payment tbody');
                        payment_tbody.empty();
                        for (var i in data.arrPayment) {
                            // ラジオボタン
                                                        var radio = $('<input type="radio" name="payment_id" id="pay_' + i + '" />')
                                .val(data.arrPayment[i].payment_id);
                            // ラベル
                            var label = $('<label />')
                                .attr('for', 'pay_' + i)
                                .text(data.arrPayment[i].payment_method);
                            // 行
                            var tr = $('<tr />')
                                .append($('<td />')
                                    .addClass('alignC')
                                    .append(radio))
                                .append($('<td />').append(label));

                            // 支払方法の画像が登録されている場合は表示
                            if (data.img_show) {
                                var payment_image = data.arrPayment[i].payment_image;
                                $('th#payment_method').attr('colspan', 3);
                                if (payment_image) {
                                    var img = $('<img />').attr('src', '<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));?>
' + payment_image);
                                    tr.append($('<td />').append(img));
                                } else {
                                    tr.append($('<td />'));
                                }
                            } else {
                                $('th#payment_method').attr('colspan', 2);
                            }

                            tr.appendTo(payment_tbody);
                        }
                        // お届け時間を生成
                        var deliv_time_id_select = $('select[id^=deliv_time_id]');
                        deliv_time_id_select.empty();
                        deliv_time_id_select.append($('<option />').text('指定なし').val(''));
                        for (var i in data.arrDelivTime) {
                            var option = $('<option />')
                                .val(i)
                                .text(data.arrDelivTime[i])
                                .appendTo(deliv_time_id_select);
                        }
                    }
                }
            });
        });

        /**
         * 通信エラー表示.
         */
        function remoteException(XMLHttpRequest, textStatus, errorThrown) {
            alert('通信中にエラーが発生しました。カート画面に移動します。');
            location.href = '<?php echo smarty_modifier_script_escape((defined('CART_URL') ? constant('CART_URL') : null));?>
';
        }

        /**
         * 配送方法の選択状態により表示を切り替える
         */
        function showForm(show) {
            if (show) {
                $('#payment, div.delivdate, .select-msg').show();
                $('.non-select-msg').hide();
            } else {
                $('#payment, div.delivdate, .select-msg').hide();
                $('.non-select-msg').show();
            }
        }
    });
//]]><?php echo '</script'; ?>
>
<div id="undercolumn">
    <div id="undercolumn_shopping">
        <p class="flow_area">
            <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/picture/img_flow_02.jpg" alt="購入手続きの流れ" />
        </p>
        <h2 class="title"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_title']->value));?>
</h2>

        <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
            <input type="hidden" name="mode" value="confirm" />
            <input type="hidden" name="uniqid" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_uniqid']->value);?>
" />

            <?php $_smarty_tpl->_assignInScope('key', "deliv_id");?>
            <?php if ($_smarty_tpl->tpl_vars['is_single_deliv']->value) {?>
                <input type="hidden" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" id="deliv_id" />
            <?php } else { ?>
            <div class="pay_area">
                <h3>配送方法の指定</h3>
                <p>配送方法をご選択ください。</p>

                <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] != '') {?>
                <p class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</p>
                <?php }?>
                <table summary="配送方法選択">
                    <col width="20%" />
                    <col width="80%" />
                    <tr>
                        <th class="alignC">選択</th>
                        <th class="alignC" colspan="2">配送方法</th>
                    </tr>
                    <?php
$__section_cnt_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrDeliv']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_0_total = $__section_cnt_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] <= $__section_cnt_0_total; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
                    <tr>
                        <td class="alignC"><input type="radio" id="deliv_<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrDeliv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['deliv_id']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" <?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetChecked' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrDeliv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['deliv_id'],$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value'] )));?>
 />
                        </td>
                        <td>
                            <label for="deliv_<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrDeliv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['name']));
if ($_smarty_tpl->tpl_vars['arrDeliv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['remark'] != '') {?><p><?php echo smarty_modifier_script_escape(nl2br(smarty_modifier_h($_smarty_tpl->tpl_vars['arrDeliv']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['remark'])));?>
</p><?php }?></label>
                        </td>
                    </tr>
                    <?php
}
}
?>
                </table>
            </div>
            <?php }?>

            <div class="pay_area">
                <h3>お支払方法の指定</h3>
                <p class="select-msg">お支払方法をご選択ください。</p>
                <p class="non-select-msg">まずはじめに、配送方法を選択ください。</p>

                <?php $_smarty_tpl->_assignInScope('key', "payment_id");?>
                <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] != '') {?>
                <p class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</p>
                <?php }?>
                <table summary="お支払方法選択" id="payment">
                    <col width="20%" />
                    <col width="80%" />
                    <thead>
                        <tr>
                            <th class="alignC">選択</th>
                            <th class="alignC" colspan="<?php if (!$_smarty_tpl->tpl_vars['img_show']->value) {?>2<?php } else { ?>3<?php }?>" id="payment_method">お支払方法</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
$__section_cnt_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrPayment']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_1_total = $__section_cnt_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] <= $__section_cnt_1_total; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
                            <tr>
                            <td class="alignC"><input type="radio" id="pay_<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
"  value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrPayment']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['payment_id']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" <?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetChecked' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrPayment']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['payment_id'],$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value'] )));?>
 /></td>
                            <td>
                                <label for="pay_<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrPayment']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['payment_method']));
if ($_smarty_tpl->tpl_vars['arrPayment']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['note'] != '') {
}?></label>
                            </td>
                            <?php if ($_smarty_tpl->tpl_vars['img_show']->value) {?>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['arrPayment']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['payment_image'] != '') {?>
                                        <img src="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrPayment']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['payment_image']);?>
" />
                                    <?php }?>
                                </td>
                            <?php }?>
                            </tr>
                        <?php
}
}
?>
                    </tbody>
                </table>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['cartKey']->value != (defined('PRODUCT_TYPE_DOWNLOAD') ? constant('PRODUCT_TYPE_DOWNLOAD') : null)) {?>
            <div class="pay_area02">
                <h3>お届け時間の指定</h3>
                <p class="select-msg">ご希望の方は、お届け時間を選択してください。</p>
                <p class="non-select-msg">まずはじめに、配送方法を選択ください。</p>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrShipping']->value, 'shippingItem', false, NULL, 'shippingItem', array (
));
$_smarty_tpl->tpl_vars['shippingItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shippingItem']->value) {
$_smarty_tpl->tpl_vars['shippingItem']->do_else = false;
?>
                <?php $_smarty_tpl->_assignInScope('index', $_smarty_tpl->tpl_vars['shippingItem']->value['shipping_id']);?>
                <div class="delivdate top">
                    <?php if ($_smarty_tpl->tpl_vars['is_multiple']->value) {?>
                        <span class="st">▼<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_name01']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_name02']);?>

                        <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrPref']->value[$_smarty_tpl->tpl_vars['shippingItem']->value['shipping_pref']]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_addr01']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shippingItem']->value['shipping_addr02']);?>
</span><br/>
                    <?php }?>
                    <!--★お届け日★-->
                    <?php $_smarty_tpl->_assignInScope('key', "deliv_date".((string)$_smarty_tpl->tpl_vars['index']->value));?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    お届け日：
                    <?php if (!$_smarty_tpl->tpl_vars['arrDelivDate']->value) {?>
                        ご指定頂けません。
                    <?php } else { ?>
                        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" id="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
">
                            <option value="" selected="">指定なし</option>
                            <?php $_smarty_tpl->_assignInScope('shipping_date_value', (($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shippingItem']->value['shipping_date'] : $tmp));?>
                            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDelivDate']->value,'selected'=>$_smarty_tpl->tpl_vars['shipping_date_value']->value),$_smarty_tpl);?>

                        </select>&nbsp;
                    <?php }?>
                    <!--★お届け時間★-->
                    <?php $_smarty_tpl->_assignInScope('key', "deliv_time_id".((string)$_smarty_tpl->tpl_vars['index']->value));?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    お届け時間：
                    <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" id="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
">
                        <option value="" selected="">指定なし</option>
                        <?php $_smarty_tpl->_assignInScope('shipping_time_value', (($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['shippingItem']->value['time_id'] : $tmp));?>
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDelivTime']->value,'selected'=>$_smarty_tpl->tpl_vars['shipping_time_value']->value),$_smarty_tpl);?>

                    </select>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <?php }?>

            <!-- ▼ポイント使用 -->
            <?php if ($_smarty_tpl->tpl_vars['tpl_login']->value == 1 && (defined('USE_POINT') ? constant('USE_POINT') : null) !== false) {?>
                <div class="point_area">
                    <h3>ポイント使用の指定</h3>
                        <p><span class="attention">1ポイントを<?php echo smarty_modifier_script_escape(smarty_modifier_n2s((defined('POINT_VALUE') ? constant('POINT_VALUE') : null)));?>
円</span>として使用する事ができます。<br />
                            使用する場合は、「ポイントを使用する」にチェックを入れた後、使用するポイントをご記入ください。
                        </p>
                        <div class="point_announce">
                            <p><span class="user_name"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['name01']->value));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['name02']->value));?>
様</span>の、現在の所持ポイントは「<span class="point"><?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['tpl_user_point']->value)===null||$tmp==='' ? 0 : $tmp)));?>
Pt</span>」です。<br />
                                今回ご購入合計金額：<span class="price"><?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrPrices']->value['subtotal']));?>
円</span> <span class="attention">(送料、手数料を含みません。)</span>
                            </p>
                            <ul>
                                <li>
                                <input type="radio" id="point_on" name="point_check" value="1" <?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetChecked' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrForm']->value['point_check']['value'],1 )));?>
 onclick="eccube.togglePointForm();" /><label for="point_on">ポイントを使用する</label>
                                    <?php $_smarty_tpl->_assignInScope('key', "use_point");?><br />
                                今回のお買い物で、<input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape((($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['tpl_user_point']->value : $tmp));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" class="box60" />&nbsp;Ptを使用する。<span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                                </li>
                                <li><input type="radio" id="point_off" name="point_check" value="2" <?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetChecked' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrForm']->value['point_check']['value'],2 )));?>
 onclick="eccube.togglePointForm();" /><label for="point_off">ポイントを使用しない</label></li>
                            </ul>
                    </div>
                </div>
            <?php }?>
            <!-- ▲ポイント使用 -->

            <div class="pay_area02">
                <h3>その他お問い合わせ</h3>
                <p>その他お問い合わせ事項がございましたら、こちらにご入力ください。</p>
                <div>
                    <!--★その他お問い合わせ事項★-->
                    <?php $_smarty_tpl->_assignInScope('key', "message");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <textarea name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" cols="70" rows="8" class="txtarea" wrap="hard"><?php echo smarty_modifier_script_escape("\n");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
</textarea>
                    <p class="attention"> (<?php echo smarty_modifier_script_escape((defined('LTEXT_LEN') ? constant('LTEXT_LEN') : null));?>
文字まで)</p>
                </div>
            </div>

            <div class="btn_area">
                <ul>
                    <li>
                    <a href="?mode=return">
                        <img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_back.jpg" alt="戻る" border="0" name="back03" id="back03" /></a>
                    </li>
                    <li>
                        <input type="image" class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_next.jpg" alt="次へ" name="next" id="next" />
                    </li>
                </ul>
            </div>
        </form>
    </div>
</div>
<?php }
}
