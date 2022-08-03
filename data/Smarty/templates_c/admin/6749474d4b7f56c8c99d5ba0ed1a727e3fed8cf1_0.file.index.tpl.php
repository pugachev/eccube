<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:07:07
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/products/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd27dba51ec2_14547759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6749474d4b7f56c8c99d5ba0ed1a727e3fed8cf1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/products/index.tpl',
      1 => 1658652106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd27dba51ec2_14547759 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/vendor/smarty/smarty/libs/plugins/function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),4=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),));
?>

<?php echo '<script'; ?>
 type="text/javascript">
// URLの表示非表示切り替え
function lfnDispChange(){
    inner_id = 'switch';

    cnt = document.form1.item_cnt.value;

    if($('#disp_url1').css("display") == 'none'){
        for (i = 1; i <= cnt; i++) {
            disp_id = 'disp_url'+i;
            $('#' + disp_id).css("display", "");

            disp_id = 'disp_cat'+i;
            $('#' + disp_id).css("display", "none");

            $('#' + inner_id).html('    URL <a href="#" onclick="lfnDispChange();"> &gt;&gt; カテゴリ表示<\/a>');
        }
    }else{
        for (i = 1; i <= cnt; i++) {
            disp_id = 'disp_url'+i;
            $('#' + disp_id).css("display", "none");

            disp_id = 'disp_cat'+i;
            $('#' + disp_id).css("display", "");

            $('#' + inner_id).html('    カテゴリ <a href="#" onclick="lfnDispChange();"> &gt;&gt; URL表示<\/a>');
        }
    }

}

<?php echo '</script'; ?>
>


<div id="products" class="contents-main">
    <form name="search_form" id="search_form" method="post" action="?">
        <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
        <input type="hidden" name="mode" value="search" />
        <h2>検索条件設定</h2>

        <!--検索条件設定テーブルここから-->
        <table>
            <tr>
                <th>商品ID</th>
                <td colspan="3">
                    <?php $_smarty_tpl->_assignInScope('key', "search_product_id");?>
                    <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                        <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <?php }?>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="30" class="box30"/>
                </td>
            </tr>
            <tr>
                <th>商品コード</th>
                <td>
                    <?php $_smarty_tpl->_assignInScope('key', "search_product_code");?>
                    <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                        <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <?php }?>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="30" class="box30" />
                </td>
                <th>商品名</th>
                <td>
                    <?php $_smarty_tpl->_assignInScope('key', "search_name");?>
                    <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                        <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <?php }?>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="30" class="box30" />
                </td>
            </tr>
            <tr>
                <th>カテゴリ</th>
                <td>
                    <?php $_smarty_tpl->_assignInScope('key', "search_category_id");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
">
                    <option value="">選択してください</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrCatList']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

                    </select>
                </td>
                <th>種別</th>
                <td>
                    <?php $_smarty_tpl->_assignInScope('key', "search_status");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]));?>
</span>
                    <?php echo smarty_function_html_checkboxes(array('name'=>((string)$_smarty_tpl->tpl_vars['key']->value),'options'=>$_smarty_tpl->tpl_vars['arrDISP']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

                </td>
            </tr>
            <tr>
                <th>登録・更新日</th>
                <td colspan="3">
                    <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['search_startyear'] || $_smarty_tpl->tpl_vars['arrErr']->value['search_endyear']) {?>
                        <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['search_startyear']);?>
</span>
                        <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['search_endyear']);?>
</span>
                    <?php }?>
                    <select name="search_startyear" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['search_startyear'] )));?>
">
                    <option value="">----</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrStartYear']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['search_startyear']['value']),$_smarty_tpl);?>

                    </select>年
                    <select name="search_startmonth" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['search_startyear'] )));?>
">
                    <option value="">--</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrStartMonth']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['search_startmonth']['value']),$_smarty_tpl);?>

                    </select>月
                    <select name="search_startday" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['search_startyear'] )));?>
">
                    <option value="">--</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrStartDay']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['search_startday']['value']),$_smarty_tpl);?>

                    </select>日～
                    <select name="search_endyear" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['search_endyear'] )));?>
">
                    <option value="">----</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrEndYear']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['search_endyear']['value']),$_smarty_tpl);?>

                    </select>年
                    <select name="search_endmonth" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['search_endyear'] )));?>
">
                    <option value="">--</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrEndMonth']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['search_endmonth']['value']),$_smarty_tpl);?>

                    </select>月
                    <select name="search_endday" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['search_endyear'] )));?>
">
                    <option value="">--</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrEndDay']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['search_endday']['value']),$_smarty_tpl);?>

                    </select>日
                </td>
            </tr>
            <tr>
                <th>商品ステータス</th>
                <td colspan="3">
                <?php $_smarty_tpl->_assignInScope('key', "search_product_statuses");?>
                <span class="attention"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]));?>
</span>
                <?php echo smarty_function_html_checkboxes(array('name'=>((string)$_smarty_tpl->tpl_vars['key']->value),'options'=>$_smarty_tpl->tpl_vars['arrSTATUS']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

                </td>
            </tr>
            <tr>
                <th>メーカーコード</th>
                <td>
                    <?php $_smarty_tpl->_assignInScope('key', "search_maker_code");?>
                    <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                        <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <?php }?>
                    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" size="30" class="box30" />
                </td>
                <th>配送種別</th>
                <td>
                    <?php $_smarty_tpl->_assignInScope('key', "search_delivery_type_id");?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
                    <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
">
                    <option value="">選択してください</option>
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDeliveryType']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

                    </select>
                </td>
                <tr>
                    <th>保証期間</th>
                    <td>
                        <?php $_smarty_tpl->_assignInScope('key', "search_warranty_period_id");?>
                        <span class="attention"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]));?>
</span>
                        <?php echo smarty_function_html_checkboxes(array('name'=>((string)$_smarty_tpl->tpl_vars['key']->value),'options'=>$_smarty_tpl->tpl_vars['arrWarrantyPeriod']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

                    </td>
                    <th>ギフト対応</th>
                    <td>
                        <?php $_smarty_tpl->_assignInScope('key', "search_gift_id");?>
                        <span class="attention"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]));?>
</span>
                        <?php echo smarty_function_html_checkboxes(array('name'=>((string)$_smarty_tpl->tpl_vars['key']->value),'options'=>$_smarty_tpl->tpl_vars['arrGift']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

                    </td>
                </tr>
            </tr>
        </table>
        <div class="btn">
            <p class="page_rows">検索結果表示件数
            <?php $_smarty_tpl->_assignInScope('key', "search_page_max");?>
            <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span>
            <?php }?>
            <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
">
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrPageMax']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['search_page_max']['value']),$_smarty_tpl);?>

            </select> 件</p>

            <div class="btn-area">
                <ul>
                    <li><a class="btn-action" href="javascript:;" onclick="eccube.fnFormModeSubmit('search_form', 'search', '', ''); return false;"><span class="btn-next">この条件で検索する</span></a></li>
                </ul>
            </div>

        </div>
        <!--検索条件設定テーブルここまで-->
    </form>


    <?php if (empty($_smarty_tpl->tpl_vars['arrErr']->value) && ($_POST['mode'] == 'search' || $_POST['mode'] == 'delete')) {?>

        <!--★★検索結果一覧★★-->
        <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
            <input type="hidden" name="mode" value="search" />
            <input type="hidden" name="product_id" value="" />
            <input type="hidden" name="category_id" value="" />
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
                <?php if ((defined('ADMIN_MODE') ? constant('ADMIN_MODE') : null) == '1') {?>
                    <a class="btn-normal" href="javascript:;" onclick="eccube.setModeAndSubmit('delete_all','',''); return false;">検索結果を全て削除</a>
                <?php }?>
                <a class="btn-tool" href="javascript:;" onclick="eccube.setModeAndSubmit('csv','',''); return false;">CSV ダウンロード</a>
                <a class="btn-tool" href="../contents/csv.php?tpl_subno_csv=product">CSV 出力項目設定</a>
            </div>
            <?php if (!empty($_smarty_tpl->tpl_vars['arrProducts']->value)) {?>

                <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl_pager']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                <!--検索結果表示テーブル-->
                <table class="list" id="products-search-result">
                    <col width="8%" />
                    <col width="9%" />
                    <col width="9%" />
                    <col width="8%" />
                    <col width="25%" />
                    <col width="8%" />
                    <col width="8%" />
                    <col width="5%" />
                    <col width="5%" />
                    <col width="5%" />
                    <col width="5%" />
                    <col width="5%" />
                    <tr>
                        <th rowspan="2">商品ID</th>
                        <th rowspan="2">商品画像</th>
                        <th rowspan="2">商品コード</th>
                        <th rowspan="2">価格(円)</th>
                        <th>商品名</th>
                        <th rowspan="2">在庫</th>
                        <th rowspan="2">種別</th>
                        <th rowspan="2">編集</th>
                        <th rowspan="2">確認</th>
                        <?php if ((defined('OPTION_CLASS_REGIST') ? constant('OPTION_CLASS_REGIST') : null) == 1) {?>
                        <th rowspan="2">規格</th>
                        <?php }?>
                        <th rowspan="2">削除</th>
                        <th rowspan="2">複製</th>
                    </tr>
                    <tr>
                        <th nowrap="nowrap"><a href="#" onclick="lfnDispChange(); return false;">カテゴリ ⇔ URL</a></th>
                    </tr>

                    <?php
$__section_cnt_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrProducts']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_0_total = $__section_cnt_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] <= $__section_cnt_0_total; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
                        <!--▼商品<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
-->
                        <?php $_smarty_tpl->_assignInScope('status', ((string)$_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['status']));?>
                        <tr style="background:<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrPRODUCTSTATUS_COLOR']->value[$_smarty_tpl->tpl_vars['status']->value]);?>
;">
                            <td class="id" rowspan="2"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['product_id']);?>
</td>
                            <td class="thumbnail" rowspan="2">
                            <img src="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfNoImageMainList' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['main_list_image'] ))));?>
" style="max-width: 65px;max-height: 65;" alt="" />
                            </td>
                            <td rowspan="2"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['product_code_min']));?>

                                <?php if ($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['product_code_min'] != $_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['product_code_max']) {?>
                                    <br />～ <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['product_code_max']));?>

                                <?php }?>
                            </td>
                                                        <td rowspan="2" class="right">
                                <?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['price02_min']));?>

                                <?php if ($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['price02_min'] != $_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['price02_max']) {?>
                                    <br />～ <?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['price02_max']));?>

                                <?php }?>            </td>
                            <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['name']));?>
</td>
                                                                                    <td class="menu" rowspan="2">
                                <?php if ($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['stock_unlimited_min']) {?>無制限<?php } else {
echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['stock_min']));
}?>
                                <?php if ($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['stock_unlimited_min'] != $_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['stock_unlimited_max'] || $_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['stock_min'] != $_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['stock_max']) {?>
                                    <br />～ <?php if ($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['stock_unlimited_max']) {?>無制限<?php } else {
echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['stock_max']));
}?>
                                <?php }?>            </td>
                                                        <?php $_smarty_tpl->_assignInScope('key', $_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['status']);?>
                            <td class="menu" rowspan="2"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrDISP']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</td>
                            <td class="menu" rowspan="2"><span class="icon_edit"><a href="javascript:;" onclick="eccube.changeAction('./product.php'); eccube.setModeAndSubmit('pre_edit', 'product_id', <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['product_id']);?>
); return false;" >編集</a></span></td>
                            <td class="menu" rowspan="2"><span class="icon_confirm"><a href="<?php echo smarty_modifier_script_escape((defined('HTTP_URL') ? constant('HTTP_URL') : null));?>
products/detail.php?product_id=<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['product_id']);?>
&amp;admin=on" target="_blank">確認</a></span></td>
                            <?php if ((defined('OPTION_CLASS_REGIST') ? constant('OPTION_CLASS_REGIST') : null) == 1) {?>
                            <td class="menu" rowspan="2"><span class="icon_class"><a href="javascript:;" onclick="eccube.changeAction('./product_class.php'); eccube.setModeAndSubmit('pre_edit', 'product_id', <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['product_id']);?>
); return false;" >規格</a></span></td>
                            <?php }?>
                            <td class="menu" rowspan="2"><span class="icon_delete"><a href="javascript:;" onclick="eccube.setValue('category_id', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['category_id']);?>
'); eccube.setModeAndSubmit('delete', 'product_id', <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['product_id']);?>
); return false;">削除</a></span></td>
                            <td class="menu" rowspan="2"><span class="icon_copy"><a href="javascript:;" onclick="eccube.changeAction('./product.php'); eccube.setModeAndSubmit('copy', 'product_id', <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['product_id']);?>
); return false;" >複製</a></span></td>
                        </tr>
                        <tr style="background:<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrPRODUCTSTATUS_COLOR']->value[$_smarty_tpl->tpl_vars['status']->value]);?>
;">
                            <td>
                                                                <div id="disp_cat<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
" style="display:<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['cat_flg']->value);?>
">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['categories'], 'category_id', false, NULL, 'categories', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['category_id']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category_id']->value) {
$_smarty_tpl->tpl_vars['category_id']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['total'];
?>
                                        <?php echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfTrim' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrCatList']->value[$_smarty_tpl->tpl_vars['category_id']->value] ))));?>

                                        <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_categories']->value['last'] : null)) {?><br /><?php }?>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>

                                                                <div id="disp_url<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
" style="display:none">
                                    <?php echo smarty_modifier_script_escape((defined('HTTP_URL') ? constant('HTTP_URL') : null));?>
products/detail.php?product_id=<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrProducts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['product_id']);?>

                                </div>
                            </td>
                        </tr>
                        <!--▲商品<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
-->
                    <?php
}
}
?>
                </table>
                <input type="hidden" name="item_cnt" value="<?php echo smarty_modifier_script_escape(count($_smarty_tpl->tpl_vars['arrProducts']->value));?>
" />
                <!--検索結果表示テーブル-->
            <?php }?>

        </form>

        <!--★★検索結果一覧★★-->
    <?php }?>
</div>
<?php }
}
