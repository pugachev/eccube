<?php
/* Smarty version 3.1.40, created on 2022-07-31 20:04:30
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/products/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62e661bea019e9_73680172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f1128057912db454e5a44d844ed9a0a935987f9' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/products/product.tpl',
      1 => 1659264405,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e661bea019e9_73680172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/vendor/smarty/smarty/libs/plugins/function.html_radios.php','function'=>'smarty_function_html_radios',),4=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/vendor/smarty/smarty/libs/plugins/function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),));
?>
    <?php echo '<script'; ?>
 type="text/javascript">
    // 表示非表示切り替え
    function lfDispSwitch(id){
        var obj = document.getElementById(id);
        if (obj.style.display == 'none') {
            obj.style.display = '';
        } else {
            obj.style.display = 'none';
        }
    }

    // セレクトボックスのリストを初期化
    // ※キャッシュ対策
    // (移動元セレクトボックス)
    function fnInitSelect(select) {
        var selectedOptions = <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_json_category_id']->value);?>
;
        $('#' + select + ' option').attr('selected', false);
        for(var i=0; i < selectedOptions.length; i++){
            $('#' + select + ' option[value="' + selectedOptions[i] + '"]')
                .prop('selected', 'selected');
        }
    }

    // セレクトボックスのリストを移動
    // (移動元セレクトボックスID, 移動先セレクトボックスID)
    function fnMoveSelect(select, target) {
        $('#' + select).children().each(function() {
            if (this.selected) {
                $('#' + target).append(this);
                $(this).attr({selected: false});
            }
        });
        // IE7再描画不具合対策
        var ua = navigator.userAgent.toLowerCase();
        if (ua.indexOf("msie") != -1 && ua.indexOf('msie 6') == -1) {
            $('#' + select).hide();
            $('#' + select).show();
            $('#' + target).hide();
            $('#' + target).show();
        }
    }

    // target の子要素を選択状態にする
    function selectAll(target) {
        $('#' + target).children().prop('selected', 'selected');
    }

    // 商品種別によってダウンロード商品のフォームの表示非表示を切り替える
    function toggleDownloadFileForms(value) {
        if (value == '2') {
            $('.type-download').show('fast');
        } else {
            $('.type-download').hide('fast');
        }
    }

    $(function(){
        var form_product_type = $('input[name=product_type_id]');
        form_product_type.click(function(){
            toggleDownloadFileForms(form_product_type.filter(':checked').val());
        });
        toggleDownloadFileForms(form_product_type.filter(':checked').val());
    })
<?php echo '</script'; ?>
>
<form name="form1" id="form1" method="post" action="?" enctype="multipart/form-data">
<input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
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
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<input type="hidden" name="mode" value="edit" />
<input type="hidden" name="image_key" value="" />
<input type="hidden" name="down_key" value="" />
<input type="hidden" name="product_id" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['product_id']));?>
" />
<input type="hidden" name="product_class_id" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['product_class_id']));?>
" />
<input type="hidden" name="copy_product_id" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['copy_product_id']));?>
" />
<input type="hidden" name="anchor_key" value="" />
<input type="hidden" name="select_recommend_no" value="" />
<input type="hidden" name="has_product_class" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['has_product_class']));?>
" />
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrForm']->value['arrHidden'], 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
<input type="hidden" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value));?>
" />
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div id="products" class="contents-main">
    <h2>基本情報</h2>

    <table class="form">
        <tr>
            <th>商品ID</th>
            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['product_id']));?>
</td>
        </tr>
        <tr>
            <th>商品名<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['name']);?>
</span>
                <input type="text" name="name" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['name'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));?>
;<?php }?>" size="60" class="box60" />
                <span class="attention"> (上限<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>商品カテゴリ<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['category_id']);?>
</span>
                <table class="layout">
                    <tr>
                        <td>
                            <select name="category_id[]" id="category_id" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['category_id'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));?>
;<?php }?> height: 120px; min-width: 200px;" onchange="" size="10" multiple="multiple">
                            </select>
                        </td>
                        <td style="padding: 15px;">
                            <a class="btn-normal" href="javascript:;" name="on_select" onclick="fnMoveSelect('category_id_unselect','category_id'); return false;">&nbsp;&nbsp;&lt;-&nbsp;登録&nbsp;&nbsp;</a><br /><br />
                            <a class="btn-normal" href="javascript:;" name="un_select" onclick="fnMoveSelect('category_id','category_id_unselect'); return false;">&nbsp;&nbsp;削除&nbsp;-&gt;&nbsp;&nbsp;</a>
                        </td>
                        <td>
                            <select name="category_id_unselect[]" id="category_id_unselect" onchange="" size="10" style="height: 120px; min-width: 200px;" multiple="multiple">
                                <?php echo smarty_function_html_options(array('values'=>$_smarty_tpl->tpl_vars['arrCatVal']->value,'output'=>$_smarty_tpl->tpl_vars['arrCatOut']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['category_id']),$_smarty_tpl);?>

                            </select>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <th>公開・非公開<span class="attention"> *</span></th>
            <td>
                <?php echo smarty_function_html_radios(array('name'=>"status",'options'=>$_smarty_tpl->tpl_vars['arrDISP']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['status'],'separator'=>'&nbsp;&nbsp;'),$_smarty_tpl);?>

            </td>
        </tr>
        <tr>
            <th>商品ステータス</th>
            <td>
                <?php echo smarty_function_html_checkboxes(array('name'=>"product_status",'options'=>$_smarty_tpl->tpl_vars['arrSTATUS']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['product_status'],'separator'=>'&nbsp;&nbsp;'),$_smarty_tpl);?>

            </td>
        </tr>
        <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['has_product_class'] == false) {?>
        <tr>
            <th>商品種別<span class="attention"> *</span></th>
            <td>
                <?php echo smarty_function_html_radios(array('name'=>"product_type_id",'options'=>$_smarty_tpl->tpl_vars['arrProductType']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['product_type_id'],'separator'=>'&nbsp;&nbsp;'),$_smarty_tpl);?>

            </td>
        </tr>
        <tr class="type-download">
            <th>ダウンロード商品ファイル名<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['down_filename']);?>
</span>
                <input type="text" name="down_filename" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['down_filename']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['down_filename'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));
}?>" size="60" class="box60" />
                <span class="red"> (上限<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
文字)</span>
            </td>
        </tr>
        <tr class="type-download">
            <?php $_smarty_tpl->_assignInScope('key', "down_file");?>
            <th>ダウンロード商品用<br />ファイルアップロード<span class="attention"> *</span></th>
            <td>
                <a name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
"></a>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['down_realfilename']);?>
</span>
                    <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['down_realfilename'] != '') {?>
                        <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['down_realfilename']));?>
<input type="hidden" name="down_realfilename" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['down_realfilename']));?>
">
                        <a href="" onclick="selectAll('category_id'); eccube.setModeAndSubmit('delete_down', 'down_key', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
'); return false;">[ファイルの取り消し]</a><br />
                    <?php }?>
                    <input type="file" name="down_file" size="40" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" />
                    <a class="btn-normal" href="javascript:;" name="btn" onclick="selectAll('category_id'); eccube.setModeAndSubmit('upload_down', 'down_key', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
'); return false;">アップロード</a><br />登録可能拡張子：<?php echo smarty_modifier_script_escape((defined('DOWNLOAD_EXTENSION') ? constant('DOWNLOAD_EXTENSION') : null));?>
　(パラメーター DOWNLOAD_EXTENSION)
            </td>
        </tr>
        <tr>
            <th>商品コード<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['product_code']);?>
</span>
                <input type="text" name="product_code" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['product_code']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['product_code'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));?>
;<?php }?>" size="60" class="box60" />
                <span class="attention"> (上限<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th><?php echo smarty_modifier_script_escape((defined('NORMAL_PRICE_TITLE') ? constant('NORMAL_PRICE_TITLE') : null));?>
</th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['price01']);?>
</span>
                <input type="text" name="price01" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['price01']));?>
" size="6" class="box6" maxlength="<?php echo smarty_modifier_script_escape((defined('PRICE_LEN') ? constant('PRICE_LEN') : null));?>
" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['price01'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));?>
;<?php }?>"/>円
                <span class="attention"> (半角数字で入力)</span>
            </td>
        </tr>
        <tr>
            <th><?php echo smarty_modifier_script_escape((defined('SALE_PRICE_TITLE') ? constant('SALE_PRICE_TITLE') : null));?>
<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['price02']);?>
</span>
                <input type="text" name="price02" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['price02']));?>
" size="6" class="box6" maxlength="<?php echo smarty_modifier_script_escape((defined('PRICE_LEN') ? constant('PRICE_LEN') : null));?>
" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['price02'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));?>
;<?php }?>"/>円
                <span class="attention"> (半角数字で入力)</span>
            </td>
        </tr>
        <tr>
            <th>在庫数<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['stock']);?>
</span>
                <input type="text" name="stock" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['stock']));?>
" size="6" class="box6" maxlength="<?php echo smarty_modifier_script_escape((defined('AMOUNT_LEN') ? constant('AMOUNT_LEN') : null));?>
" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['stock'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));?>
;<?php }?>"/>
                <input type="checkbox" name="stock_unlimited" value="1" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['stock_unlimited'] == "1") {?>checked<?php }?> onclick="eccube.checkStockLimit('<?php echo smarty_modifier_script_escape((defined('DISABLED_RGB') ? constant('DISABLED_RGB') : null));?>
');"/>無制限
            </td>
        </tr>
        <?php }?>
        <?php if ((defined('OPTION_PRODUCT_TAX_RULE') ? constant('OPTION_PRODUCT_TAX_RULE') : null) == 1) {?>
        <tr>
            <th>消費税率<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['tax_rate']);?>
</span>
                <input type="text" name="tax_rate" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['tax_rate']));?>
" size="6" class="box6" maxlength="<?php echo smarty_modifier_script_escape((defined('PERCENTAGE_LEN') ? constant('PERCENTAGE_LEN') : null));?>
" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['tax_rate'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));?>
;<?php }?>"/>%
                <span class="attention">(半角数字で入力)</span>
            </td>
        </tr>
        <?php }?>

        <tr>
            <th>商品送料</th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['deliv_fee']);?>
</span>
                <input type="text" name="deliv_fee" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['deliv_fee']));?>
" size="6" class="box6" maxlength="<?php echo smarty_modifier_script_escape((defined('PRICE_LEN') ? constant('PRICE_LEN') : null));?>
" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['deliv_fee'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));?>
;<?php }?>"/>円
                <span class="attention"> (半角数字で入力)</span>
                <?php if ((defined('OPTION_PRODUCT_DELIV_FEE') ? constant('OPTION_PRODUCT_DELIV_FEE') : null) != 1) {?><br /><span class="attention">※現在無効です</span> (パラメーター OPTION_PRODUCT_DELIV_FEE)<?php }?>
            </td>
        </tr>
        <tr>
            <th>ポイント付与率<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['point_rate']);?>
</span>
                <input type="text" name="point_rate" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value['point_rate'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['arrForm']->value['arrInfo']['point_rate'] : $tmp)));?>
" size="6" class="box6" maxlength="<?php echo smarty_modifier_script_escape((defined('PERCENTAGE_LEN') ? constant('PERCENTAGE_LEN') : null));?>
" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['point_rate'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));?>
;<?php }?>"/>％
                <span class="attention"> (半角数字で入力)</span>
            </td>
        </tr>
        <tr>
            <th>発送日目安</th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['deliv_date_id']);?>
</span>
                <select name="deliv_date_id" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['deliv_date_id'] )));?>
">
                    <option value="">選択してください</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDELIVERYDATE']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['deliv_date_id']),$_smarty_tpl);?>

                </select>
            </td>
        </tr>
        <tr>
            <th>販売制限数</th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['sale_limit']);?>
</span>
                <input type="text" name="sale_limit" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['sale_limit']));?>
" size="6" class="box6" maxlength="<?php echo smarty_modifier_script_escape((defined('AMOUNT_LEN') ? constant('AMOUNT_LEN') : null));?>
" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['sale_limit'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));?>
;<?php }?>"/>
                <span class="attention"> (半角数字で入力)</span>
            </td>
        </tr>
        <tr>
            <th>メーカー</th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['maker_id']);?>
</span>
                <select name="maker_id" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['maker_id'] )));?>
">
                    <option value="">選択してください</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrMaker']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['maker_id']),$_smarty_tpl);?>

                </select>
            </td>
        </tr>
        <tr>
            <th>メーカーURL</th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['comment1']);?>
</span>
                <input type="text" name="comment1" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['comment1']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('URL_LEN') ? constant('URL_LEN') : null));?>
" size="60" class="box60" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['comment1'] )));?>
" />
                <span class="attention"> (上限<?php echo smarty_modifier_script_escape((defined('URL_LEN') ? constant('URL_LEN') : null));?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>検索ワード<br />※複数の場合は、カンマ( , )区切りで入力して下さい</th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['comment3']);?>
</span>
                <textarea name="comment3" cols="60" rows="8" class="area60" maxlength="<?php echo smarty_modifier_script_escape((defined('LLTEXT_LEN') ? constant('LLTEXT_LEN') : null));?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['comment3'] )));?>
"><?php echo smarty_modifier_script_escape("\n");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['comment3']));?>
</textarea><br />
                <span class="attention"> (上限<?php echo smarty_modifier_script_escape((defined('LLTEXT_LEN') ? constant('LLTEXT_LEN') : null));?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>備考欄(SHOP専用)</th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['note']);?>
</span>
                <textarea name="note" cols="60" rows="8" class="area60" maxlength="<?php echo smarty_modifier_script_escape((defined('LLTEXT_LEN') ? constant('LLTEXT_LEN') : null));?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['note'] )));?>
"><?php echo smarty_modifier_script_escape("\n");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['note']));?>
</textarea><br />
                <span class="attention"> (上限<?php echo smarty_modifier_script_escape((defined('LLTEXT_LEN') ? constant('LLTEXT_LEN') : null));?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>一覧-メインコメント<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['main_list_comment']);?>
</span>
                <textarea name="main_list_comment" maxlength="<?php echo smarty_modifier_script_escape((defined('MTEXT_LEN') ? constant('MTEXT_LEN') : null));?>
" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['main_list_comment'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));?>
;<?php }?>" cols="60" rows="8" class="area60"><?php echo smarty_modifier_script_escape("\n");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['main_list_comment']));?>
</textarea><br />
                <span class="attention"> (上限<?php echo smarty_modifier_script_escape((defined('MTEXT_LEN') ? constant('MTEXT_LEN') : null));?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>詳細-メインコメント<span class="attention">(タグ許可)*</span></th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['main_comment']);?>
</span>
                <textarea name="main_comment" maxlength="<?php echo smarty_modifier_script_escape((defined('LLTEXT_LEN') ? constant('LLTEXT_LEN') : null));?>
" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['main_comment'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));?>
;<?php }?>" cols="60" rows="8" class="area60"><?php echo smarty_modifier_script_escape("\n");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['main_comment']));?>
</textarea><br />
                <span class="attention"> (上限<?php echo smarty_modifier_script_escape((defined('LLTEXT_LEN') ? constant('LLTEXT_LEN') : null));?>
文字)</span>
            </td>
        </tr>
        <tr>
            <?php $_smarty_tpl->_assignInScope('key', "main_list_image");?>
            <th>一覧-メイン画像<br />[<?php echo smarty_modifier_script_escape((defined('SMALL_IMAGE_WIDTH') ? constant('SMALL_IMAGE_WIDTH') : null));?>
×<?php echo smarty_modifier_script_escape((defined('SMALL_IMAGE_HEIGHT') ? constant('SMALL_IMAGE_HEIGHT') : null));?>
]</th>
            <td>
                <a name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
"></a>
                <a name="main_image"></a>
                <a name="main_large_image"></a>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath'] != '') {?>
                <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath']);?>
" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name']));?>
" />　<a href="" onclick="selectAll('category_id'); eccube.setModeAndSubmit('delete_image', 'image_key', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
'); return false;">[画像の取り消し]</a><br />
                <?php }?>
                <input type="file" name="main_list_image" size="40" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" />
                <a class="btn-normal" href="javascript:;" name="btn" onclick="selectAll('category_id'); eccube.setModeAndSubmit('upload_image', 'image_key', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
'); return false;">アップロード</a>
            </td>
        </tr>
        <tr>
            <?php $_smarty_tpl->_assignInScope('key', "main_image");?>
            <th>詳細-メイン画像<br />[<?php echo smarty_modifier_script_escape((defined('NORMAL_IMAGE_WIDTH') ? constant('NORMAL_IMAGE_WIDTH') : null));?>
×<?php echo smarty_modifier_script_escape((defined('NORMAL_IMAGE_HEIGHT') ? constant('NORMAL_IMAGE_HEIGHT') : null));?>
]</th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath'] != '') {?>
                <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath']);?>
" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name']));?>
" />　<a href="" onclick="selectAll('category_id'); eccube.setModeAndSubmit('delete_image', 'image_key', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
'); return false;">[画像の取り消し]</a><br />
                <?php }?>
                <input type="file" name="main_image" size="40" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" />
                <a class="btn-normal" href="javascript:;" name="btn" onclick="selectAll('category_id'); eccube.setModeAndSubmit('upload_image', 'image_key', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
'); return false;">アップロード</a>
            </td>
        </tr>
        <tr>
            <?php $_smarty_tpl->_assignInScope('key', "main_large_image");?>
            <th>詳細-メイン拡大画像<br />[<?php echo smarty_modifier_script_escape((defined('LARGE_IMAGE_WIDTH') ? constant('LARGE_IMAGE_WIDTH') : null));?>
×<?php echo smarty_modifier_script_escape((defined('LARGE_IMAGE_HEIGHT') ? constant('LARGE_IMAGE_HEIGHT') : null));?>
]</th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath'] != '') {?>
                <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath']);?>
" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name']));?>
" />　<a href="" onclick="selectAll('category_id'); eccube.setModeAndSubmit('delete_image', 'image_key', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
'); return false;">[画像の取り消し]</a><br />
                <?php }?>
                <input type="file" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" size="40" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" />
                <a class="btn-normal" href="javascript:;" name="btn" onclick="selectAll('category_id'); eccube.setModeAndSubmit('upload_image', 'image_key', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
'); return false;">アップロード</a>
            </td>
        </tr>
        <tr>
            <th>メーカーコード</th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['maker_code']);?>
</span>
                <input type="text" name="maker_code" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['maker_code']));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
" style="<?php if ($_smarty_tpl->tpl_vars['arrErr']->value['maker_code'] != '') {?>background-color: <?php echo smarty_modifier_script_escape((defined('ERR_COLOR') ? constant('ERR_COLOR') : null));?>
;<?php }?>" size="60" class="box60" />
                <span class="attention"> (上限<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>配送種別<span class="attention"> *</span></th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['delivery_type_id']);?>
</span>
                <select name="delivery_type_id" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['delivery_type_id'] )));?>
">
                    <option value="">選択してください</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDeliveryType']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['delivery_type_id']),$_smarty_tpl);?>

                </select>
            </td>
        </tr>
        <tr>
            <th>保証期間</th>
            <td>
            <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['warranty_period_id']);?>
</span>
            <?php echo smarty_function_html_radios(array('name'=>"warranty_period_id",'options'=>$_smarty_tpl->tpl_vars['arrWarrantyPeriod']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['warranty_period_id'],'separator'=>'&nbsp;&nbsp;'),$_smarty_tpl);?>

            </td>
        </tr>
        <tr>
            <th>ギフト対応</th>
            <td>
            <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['gift_id']);?>
</span>
            <?php echo smarty_function_html_checkboxes(array('name'=>"gift_id",'options'=>$_smarty_tpl->tpl_vars['arrGift']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['gift_id'],'separator'=>'&nbsp;&nbsp;'),$_smarty_tpl);?>

            </td>
        </tr>
    </table>

        <?php if (function_exists("sfViewAdminOpe") === TRUE) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)(defined('MODULE_REALDIR') ? constant('MODULE_REALDIR') : null))."mdl_opebuilder/admin_ope_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>

    <div class="btn">
        <a class="btn-normal" href="javascript:;" onclick="selectAll('category_id'); lfDispSwitch('sub_detail'); return false;"><span>サブ情報表示/非表示</span></a>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['sub_find'] == true) {?>
    <div id="sub_detail" style="">
    <?php } else { ?>
    <div id="sub_detail" style="display:none">
    <?php }?>
    <h2>サブ情報</h2>
    <table class="form">
        <?php
$__section_cnt_0_loop = (is_array(@$_loop=(defined('PRODUCTSUB_MAX') ? constant('PRODUCTSUB_MAX') : null)) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_0_total = $__section_cnt_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] <= $__section_cnt_0_total; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
        <!--▼商品<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
-->
        <tr>
            <th>詳細-サブタイトル(<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
)</th>
            <?php $_smarty_tpl->_assignInScope('key', "sub_title".((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                <input type="text" name="sub_title<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]));?>
" size="60" class="box60" maxlength="<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
"/>
                <span class="attention"> (上限<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
文字)</span>
            </td>
        </tr>
        <tr>
            <th>詳細-サブコメント(<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
)<span class="attention">(タグ許可)</span></th>
            <?php $_smarty_tpl->_assignInScope('key', "sub_comment".((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                <textarea name="sub_comment<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
" cols="60" rows="8" class="area60" maxlength="<?php echo smarty_modifier_script_escape((defined('LLTEXT_LEN') ? constant('LLTEXT_LEN') : null));?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
"><?php echo smarty_modifier_script_escape("\n");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]));?>
</textarea><br />
                <span class="attention"> (上限<?php echo smarty_modifier_script_escape((defined('LLTEXT_LEN') ? constant('LLTEXT_LEN') : null));?>
文字)</span>
            </td>
        </tr>
        <tr>
            <?php $_smarty_tpl->_assignInScope('key', "sub_image".((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
            <th>詳細-サブ画像(<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
)<br />[<?php echo smarty_modifier_script_escape((defined('NORMAL_SUBIMAGE_WIDTH') ? constant('NORMAL_SUBIMAGE_WIDTH') : null));?>
×<?php echo smarty_modifier_script_escape((defined('NORMAL_SUBIMAGE_HEIGHT') ? constant('NORMAL_SUBIMAGE_HEIGHT') : null));?>
]</th>
            <td>
                <a name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
"></a>
                <?php $_smarty_tpl->_assignInScope('largekey', "sub_large_image".((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
                <a name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['largekey']->value);?>
"></a>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath'] != '') {?>
                <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath']);?>
" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name']));?>
" />　<a href="" onclick="selectAll('category_id'); eccube.setModeAndSubmit('delete_image', 'image_key', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
'); return false;">[画像の取り消し]</a><br />
                <?php }?>
                <input type="file" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" size="40" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
"/>
                <a class="btn-normal" href="javascript:;" name="btn" onclick="selectAll('category_id'); eccube.setModeAndSubmit('upload_image', 'image_key', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
'); return false;">アップロード</a>
            </td>
        </tr>
        <tr>
            <?php $_smarty_tpl->_assignInScope('key', "sub_large_image".((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
            <th>詳細-サブ拡大画像(<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
)<br />[<?php echo smarty_modifier_script_escape((defined('LARGE_SUBIMAGE_WIDTH') ? constant('LARGE_SUBIMAGE_WIDTH') : null));?>
×<?php echo smarty_modifier_script_escape((defined('LARGE_SUBIMAGE_HEIGHT') ? constant('LARGE_SUBIMAGE_HEIGHT') : null));?>
]</th>
            <td>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath'] != '') {?>
                <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath']);?>
" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name']));?>
" />　<a href="" onclick="selectAll('category_id'); eccube.setModeAndSubmit('delete_image', 'image_key', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
'); return false;">[画像の取り消し]</a><br />
                <?php }?>
                <input type="file" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" size="40" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
"/>
                <a class="btn-normal" href="javascript:;" name="btn" onclick="selectAll('category_id'); eccube.setModeAndSubmit('upload_image', 'image_key', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
'); return false;">アップロード</a>
            </td>
        </tr>
        <!--▲商品<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
-->
        <?php
}
}
?>
    </table>
    </div>

    <div class="btn">
        <a class="btn-normal" href="javascript:;" onclick="selectAll('category_id'); lfDispSwitch('recommend_select'); return false;"><span>関連商品表示/非表示</span></a>
    </div>

    <?php if ((defined('OPTION_RECOMMEND') ? constant('OPTION_RECOMMEND') : null) == 1) {?>
    <?php if (!empty($_smarty_tpl->tpl_vars['arrRecommend']->value)) {?>
    <div id="recommend_select" style="">
    <?php } else { ?>
    <div id="recommend_select" style="display:none">
    <?php }?>
    <h2>関連商品</h2>
    <table class="form">
        <!--▼関連商品-->
        <?php
$__section_cnt_1_loop = (is_array(@$_loop=(defined('RECOMMEND_PRODUCT_MAX') ? constant('RECOMMEND_PRODUCT_MAX') : null)) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_1_total = $__section_cnt_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] <= $__section_cnt_1_total; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
        <?php $_smarty_tpl->_assignInScope('recommend_no', ((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
        <tr>
            <?php $_smarty_tpl->_assignInScope('key', "recommend_id".((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
            <?php $_smarty_tpl->_assignInScope('anckey', "recommend_no".((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
            <th>関連商品(<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
)<br />
                <?php if ($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['product_id']) {?>
                    <img src="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfNoImageMainList' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['main_list_image'] ))));?>
" style="max-width: 65px;max-height: 65;" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['name']));?>
" />
                <?php }?>
            </th>
            <td>
                <a name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['anckey']->value);?>
"></a>
                <input type="hidden" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['product_id']));?>
" />
                <a class="btn-normal" href="javascript:;" name="change" onclick="selectAll('category_id'); eccube.openWindow('./product_select.php?no=<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
', 'search', '615', '500', {menubar:'no'}); return false;">変更</a>
                <?php $_smarty_tpl->_assignInScope('key', "recommend_delete".((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
                <input type="checkbox" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="1" />削除<br />
                <?php $_smarty_tpl->_assignInScope('key', "recommend_comment".((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                商品コード:<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['product_code_min']);?>
 
                <?php if ($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['product_code_min'] != $_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['product_code_max']) {?> 
                    ～ <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['product_code_max']);?>
 
                <?php }?> 
                <br /> 
                商品名:<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['name']));?>
<br />
                <textarea name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" cols="60" rows="8" class="area60" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" ><?php echo smarty_modifier_script_escape("\n");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['comment']));?>
</textarea><br />
                <span class="attention"> (上限<?php echo smarty_modifier_script_escape((defined('LTEXT_LEN') ? constant('LTEXT_LEN') : null));?>
文字)</span>
            </td>
        </tr>
        <?php
}
}
?>
        <!--▲関連商品-->
    </table>
    </div>
    <?php }?>

    <div class="btn-area">
        <?php if (!empty($_smarty_tpl->tpl_vars['arrSearchHidden']->value)) {?>
        <!--▼検索結果へ戻る-->
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="eccube.changeAction('<?php echo smarty_modifier_script_escape((defined('ADMIN_PRODUCTS_URLPATH') ? constant('ADMIN_PRODUCTS_URLPATH') : null));?>
'); eccube.setModeAndSubmit('search','',''); return false;"><span class="btn-prev">検索画面に戻る</span></a></li>
        <!--▲検索結果へ戻る-->
        <?php }?>
            <li><a class="btn-action" href="javascript:;" onclick="selectAll('category_id'); document.form1.submit(); return false;"><span class="btn-next">確認ページへ</span></a></li>
        </ul>
    </div>
</div>
</form>
<?php }
}
