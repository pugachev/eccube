<?php
/* Smarty version 3.1.40, created on 2022-07-16 21:57:47
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/products/confirm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2b5cb2e91f5_26354504',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '144dd2281ea7acf252c853b517c67d28ea1e6e26' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/products/confirm.tpl',
      1 => 1657975383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2b5cb2e91f5_26354504 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.nl2br_html.php','function'=>'smarty_modifier_nl2br_html',),));
?>
<form name="form1" id="form1" method="post" action="?" enctype="multipart/form-data">
<input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
<input type="hidden" name="mode" value="complete" />
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
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrForm']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <?php if ($_smarty_tpl->tpl_vars['key']->value == 'product_status') {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value, 'statusVal');
$_smarty_tpl->tpl_vars['statusVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['statusVal']->value) {
$_smarty_tpl->tpl_vars['statusVal']->do_else = false;
?>
            <input type="hidden" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
[]" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['statusVal']->value));?>
" />
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'gift_id') {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value, 'giftVal');
$_smarty_tpl->tpl_vars['giftVal']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['giftVal']->value) {
$_smarty_tpl->tpl_vars['giftVal']->do_else = false;
?>
            <input type="hidden" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
[]" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['giftVal']->value));?>
" />
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'arrCategoryId') {?>
            <?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'arrFile') {?>
            <?php } else { ?>
        <input type="hidden" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value));?>
" />
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div id="products" class="contents-main">

    <table>
        <tr>
            <th>商品名</th>
            <td>
                <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name']));?>

            </td>
        </tr>
        <tr>
            <th>商品カテゴリ</th>
            <td>
                <?php
$__section_cnt_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrForm']->value['arrCategoryId']) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_0_total = $__section_cnt_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] <= $__section_cnt_0_total; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
                    <?php $_smarty_tpl->_assignInScope('key', $_smarty_tpl->tpl_vars['arrForm']->value['arrCategoryId'][(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]);?>
                    <?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfTrim' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrCatList']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
<br />
                <?php
}
}
?>
            </td>
        </tr>
        <tr>
            <th>公開・非公開</th>
            <td>
                <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrDISP']->value[$_smarty_tpl->tpl_vars['arrForm']->value['status']]);?>

            </td>
        </tr>
        <tr>
            <th>商品ステータス</th>
            <td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrForm']->value['product_status'], 'status');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['status']->value != '') {?>
                        <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH_PC']->value);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrSTATUS_IMAGE']->value[$_smarty_tpl->tpl_vars['status']->value]);?>
">
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </td>
        </tr>

        <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['has_product_class'] != true) {?>
            <tr>
                <th>商品種別</th>
                <td>
                    <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrProductType']->value[$_smarty_tpl->tpl_vars['arrForm']->value['product_type_id']]);?>

                </td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['product_type_id'] == PRODUCT_TYPE_DOWNLOAD) {?>
            <tr>
                <th>ダウンロード商品ファイル名</th>
                <td>
                    <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['down_filename']));?>

                </td>
            </tr>
            <tr>
                <th>ダウンロード商品用<br />ファイル</th>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['down_realfilename'] != '') {?>
                        <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['down_realfilename']));?>

                    <?php }?>
                </td>
            </tr>
            <?php }?>
            <tr>
                <th>商品コード</th>
                <td>
                    <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['product_code']));?>

                </td>
            </tr>
            <tr>
                <th><?php echo smarty_modifier_script_escape((defined('NORMAL_PRICE_TITLE') ? constant('NORMAL_PRICE_TITLE') : null));?>
</th>
                <td>
                    <?php if (strlen($_smarty_tpl->tpl_vars['arrForm']->value['price01']) >= 1) {
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['price01']));?>
 円<?php }?>
                </td>
            </tr>
            <tr>
                <th><?php echo smarty_modifier_script_escape((defined('SALE_PRICE_TITLE') ? constant('SALE_PRICE_TITLE') : null));?>
</th>
                <td>
                    <?php if (strlen($_smarty_tpl->tpl_vars['arrForm']->value['price02']) >= 1) {
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['price02']));?>
 円<?php }?>
                </td>
            </tr>
            <tr>
                <th>在庫数</th>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['stock_unlimited'] == 1) {?>
                        無制限
                    <?php } else { ?>
                        <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['stock']));?>

                    <?php }?>
                </td>
            </tr>
        <?php }?>
        <?php if ((defined('OPTION_PRODUCT_TAX_RULE') ? constant('OPTION_PRODUCT_TAX_RULE') : null) == 1) {?>
            <tr>
                <th>消費税率</th>
                <td>
                    <?php if (strlen($_smarty_tpl->tpl_vars['arrForm']->value['tax_rate']) >= 1) {
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['tax_rate']));?>
 %<?php }?>
                </td>
            </tr>
        <?php }?>

        <tr>
            <th>商品送料</th>
            <td>
                <?php if (strlen($_smarty_tpl->tpl_vars['arrForm']->value['deliv_fee']) >= 1) {
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['deliv_fee']));?>
 円<?php }?>
            </td>
        </tr>
        <tr>
            <th>ポイント付与率</th>
            <td>
                <?php if (strlen($_smarty_tpl->tpl_vars['arrForm']->value['point_rate']) >= 1) {
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['point_rate']));?>
 ％<?php }?>
            </td>
        </tr>
        <tr>
            <th>発送日目安</th>
            <td>
                <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrDELIVERYDATE']->value[$_smarty_tpl->tpl_vars['arrForm']->value['deliv_date_id']]));?>

            </td>
        </tr>
        <tr>
            <th>販売制限数</th>
            <td>
                <?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value['sale_limit'])===null||$tmp==='' ? '無制限' : $tmp)));?>

            </td>
        </tr>
        <tr>
            <th>メーカー</th>
            <td>
                <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrMaker']->value[$_smarty_tpl->tpl_vars['arrForm']->value['maker_id']]));?>

            </td>
        </tr>
        <tr>
            <th>メーカーURL</th>
            <td style="word-break: break-all;">
                <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['comment1']));?>

            </td>
        </tr>
        <tr>
            <th>検索ワード</th>
            <td>
                <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['comment3']));?>

            </td>
        </tr>
        <tr>
            <th>備考欄(SHOP専用)</th>
            <td>
                <?php echo smarty_modifier_script_escape(nl2br(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['note'])));?>

            </td>
        </tr>
        <tr>
            <th>一覧-メインコメント</th>
            <td>
                <?php echo smarty_modifier_script_escape(nl2br(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['main_list_comment'])));?>

            </td>
        </tr>
        <tr>
            <th>詳細-メインコメント</th>
            <td>
                <?php echo smarty_modifier_script_escape(smarty_modifier_nl2br_html($_smarty_tpl->tpl_vars['arrForm']->value['main_comment']));?>

            </td>
        </tr>
        <tr>
            <th>一覧-メイン画像</th>
            <td>
                <?php $_smarty_tpl->_assignInScope('key', "main_list_image");?>
                <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath'] != '') {?>
                    <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath']);?>
" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name']));?>
" /><br />
                <?php }?>
            </td>
        </tr>
        <tr>
            <th>詳細-メイン画像</th>
            <td>
                <?php $_smarty_tpl->_assignInScope('key', "main_image");?>
                <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath'] != '') {?>
                    <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath']);?>
" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name']));?>
" /><br />
                <?php }?>
            </td>
        </tr>
        <tr>
            <th>詳細-メイン拡大画像</th>
            <td>
                <?php $_smarty_tpl->_assignInScope('key', "main_large_image");?>
                <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath'] != '') {?>
                    <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath']);?>
" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name']));?>
" /><br />
                <?php }?>
            </td>
        </tr>

                <?php if (function_exists("sfViewAdminOpe") === TRUE) {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)(defined('MODULE_REALDIR') ? constant('MODULE_REALDIR') : null))."mdl_opebuilder/admin_ope_view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php }?>

        <?php
$__section_cnt_1_loop = (is_array(@$_loop=(defined('PRODUCTSUB_MAX') ? constant('PRODUCTSUB_MAX') : null)) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_1_total = $__section_cnt_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_1_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] <= $__section_cnt_1_total; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
            <!--▼商品<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
-->
            <tr>
                <th>詳細-サブタイトル（<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
）</th>
                <td>
                    <?php $_smarty_tpl->_assignInScope('key', "sub_title".((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
                    <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]));?>

                </td>
            </tr>
            <tr>
                <th>詳細-サブコメント（<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
）</th>
                <td>
                    <?php $_smarty_tpl->_assignInScope('key', "sub_comment".((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
                    <?php echo smarty_modifier_script_escape(smarty_modifier_nl2br_html($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]));?>

                </td>
            </tr>
            <tr>
                <th>詳細-サブ画像（<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
）</th>
                <td>
                    <?php $_smarty_tpl->_assignInScope('key', "sub_image".((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
                    <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath'] != '') {?>
                        <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath']);?>
" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name']));?>
" /><br />
                    <?php }?>
                </td>
            </tr>
            <tr>
                <th>詳細-サブ拡大画像（<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
）</th>
                <td>
                    <?php $_smarty_tpl->_assignInScope('key', "sub_large_image".((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
                    <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath'] != '') {?>
                        <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value['arrFile'][$_smarty_tpl->tpl_vars['key']->value]['filepath']);?>
" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['name']));?>
" /><br />
                    <?php }?>
                </td>
            </tr>
            <!--▲商品<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
-->
        <?php
}
}
?>

        <?php if ((defined('OPTION_RECOMMEND') ? constant('OPTION_RECOMMEND') : null) == 1) {?>
            <!--▼関連商品-->
            <?php
$__section_cnt_2_loop = (is_array(@$_loop=(defined('RECOMMEND_PRODUCT_MAX') ? constant('RECOMMEND_PRODUCT_MAX') : null)) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_2_total = $__section_cnt_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_2_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] <= $__section_cnt_2_total; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
            <?php $_smarty_tpl->_assignInScope('recommend_no', ((string)(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null)));?>
                <tr>
                    <th>関連商品(<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
)<br />
                        <?php if (strlen($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['product_id']) >= 1) {?>
                            <img src="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfNoImageMainList' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['main_list_image'] ))));?>
" style="max-width: 65px;max-height: 65;" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['name']));?>
" />
                        <?php }?>
                    </th>
                    <td>
                        <?php if (strlen($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['product_id']) >= 1) {?>
                            商品コード:<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['product_code_min']);?>
<br />
                            商品名:<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['name']));?>
<br />
                            コメント:<br />
                            <?php echo smarty_modifier_script_escape(nl2br(smarty_modifier_h($_smarty_tpl->tpl_vars['arrRecommend']->value[$_smarty_tpl->tpl_vars['recommend_no']->value]['comment'])));?>

                        <?php }?>
                    </td>
                </tr>
            <?php
}
}
?>
            <!--▲関連商品-->
        <?php }?>
        <tr>
        <th>メーカーコード</th>
            <td>
                <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['maker_code']));?>

            </td>
        </tr>
        <tr>
            <th>配送種別</th>
            <td>
                <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrDeliveryType']->value[$_smarty_tpl->tpl_vars['arrForm']->value['delivery_type_id']]));?>

            </td>
        </tr>
        <tr>
            <th>保証期間</th>
            <td>
                <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrWarrantyPeriod']->value[$_smarty_tpl->tpl_vars['arrForm']->value['warranty_period_id']]));?>

            </td>
        </tr>
        <tr>
            <th>ギフト対応</th>
            <td>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrForm']->value['gift_id'], 'gift');
$_smarty_tpl->tpl_vars['gift']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['gift']->value) {
$_smarty_tpl->tpl_vars['gift']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['gift']->value != '') {?>
                        <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrGift']->value[$_smarty_tpl->tpl_vars['gift']->value]));?>

                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </td>
        </tr>
    </table>

    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="eccube.setModeAndSubmit('confirm_return','',''); return false;"><span class="btn-prev">前のページに戻る</span></a></li>
            <li><a class="btn-action" href="javascript:;" onclick="document.form1.submit(); return false;"><span class="btn-next">この内容で登録する</span></a></li>
        </ul>
    </div>
</div>
</form>
<?php }
}
