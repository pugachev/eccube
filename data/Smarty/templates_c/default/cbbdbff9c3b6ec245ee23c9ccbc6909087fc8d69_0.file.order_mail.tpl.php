<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:03:13
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/mail_templates/order_mail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd26f18fba28_34114091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cbbdbff9c3b6ec245ee23c9ccbc6909087fc8d69' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/mail_templates/order_mail.tpl',
      1 => 1658652114,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd26f18fba28_34114091 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_name01']);?>
 <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_name02']);?>
 様

<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_header']->value);?>


************************************************
　ご請求金額
************************************************

ご注文番号：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_id']);?>

お支払い合計：￥<?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrOrder']->value['payment_total']))===null||$tmp==='' ? 0 : $tmp));?>

お支払い方法：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['payment_method']);?>

メッセージ：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['Message_tmp']->value);?>


<?php if ($_smarty_tpl->tpl_vars['arrOther']->value['title']['value']) {?>
************************************************
　<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOther']->value['title']['name']);?>
情報
************************************************

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrOther']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
if ($_smarty_tpl->tpl_vars['key']->value != "title") {
if ($_smarty_tpl->tpl_vars['item']->value['name'] != '') {
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value['name']);?>
：<?php }
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value['value']);?>

<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

************************************************
　ご注文商品明細
************************************************

<?php
$__section_cnt_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrOrderDetail']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_0_total = $__section_cnt_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_0_total !== 0) {
for ($__section_cnt_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $__section_cnt_0_iteration <= $__section_cnt_0_total; $__section_cnt_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
商品コード: <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrderDetail']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['product_code']);?>

商品名: <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrderDetail']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['product_name']);?>
 <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrderDetail']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['classcategory_name1']);?>
 <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrderDetail']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['classcategory_name2']);?>

単価：￥<?php echo smarty_modifier_script_escape(smarty_modifier_n2s(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfCalcIncTax' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrOrderDetail']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['price'],$_smarty_tpl->tpl_vars['arrOrderDetail']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['tax_rate'],$_smarty_tpl->tpl_vars['arrOrderDetail']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['tax_rule'] ))));?>

数量：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrderDetail']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['quantity']);?>


<?php
}
}
?>
-------------------------------------------------
小　計 ￥<?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrOrder']->value['subtotal']))===null||$tmp==='' ? 0 : $tmp));?>
 <?php if (0 < $_smarty_tpl->tpl_vars['arrOrder']->value['tax']) {?>(うち消費税 ￥<?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrOrder']->value['tax']))===null||$tmp==='' ? 0 : $tmp));?>
)<?php }?>

<?php if ($_smarty_tpl->tpl_vars['arrOrder']->value['use_point'] > 0) {?>
値引き ￥<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['use_point']*(defined('POINT_VALUE') ? constant('POINT_VALUE') : null)+(($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrOrder']->value['discount']))===null||$tmp==='' ? 0 : $tmp));?>

<?php }?>
送　料 ￥<?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrOrder']->value['deliv_fee']))===null||$tmp==='' ? 0 : $tmp));?>

手数料 ￥<?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrOrder']->value['charge']))===null||$tmp==='' ? 0 : $tmp));?>

============================================
合　計 ￥<?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrOrder']->value['payment_total']))===null||$tmp==='' ? 0 : $tmp));?>


************************************************
　ご注文者情報
************************************************
　お名前　：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_name01']);?>
 <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_name02']);?>
　様
<?php if ($_smarty_tpl->tpl_vars['arrOrder']->value['order_company_name'] != '') {?>
　会社名　：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_company_name']);?>

<?php }
if ((defined('FORM_COUNTRY_ENABLE') ? constant('FORM_COUNTRY_ENABLE') : null)) {?>
　国　　　：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrCountry']->value[$_smarty_tpl->tpl_vars['arrOrder']->value['order_country_id']]);?>

　ZIPCODE ：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_zipcode']);?>

<?php }?>
　郵便番号：〒<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_zip01']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_zip02']);?>

　住所　　：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrPref']->value[$_smarty_tpl->tpl_vars['arrOrder']->value['order_pref']]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_addr01']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_addr02']);?>

　電話番号：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_tel01']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_tel02']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_tel03']);?>

　FAX番号 ：<?php if ($_smarty_tpl->tpl_vars['arrOrder']->value['order_fax01'] > 0) {
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_fax01']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_fax02']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_fax03']);
}?>

　メールアドレス：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value['order_email']);?>


<?php if (count($_smarty_tpl->tpl_vars['arrShipping']->value) >= 1) {?>
************************************************
　配送情報
************************************************

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrShipping']->value, 'shipping', false, NULL, 'shipping', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['shipping']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['shipping']->value) {
$_smarty_tpl->tpl_vars['shipping']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_shipping']->value['iteration']++;
?>
◎お届け先<?php if (count($_smarty_tpl->tpl_vars['arrShipping']->value) > 1) {
echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_foreach_shipping']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_shipping']->value['iteration'] : null));
}?>

　お名前　：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_name01']);?>
 <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_name02']);?>
　様
<?php if ($_smarty_tpl->tpl_vars['shipping']->value['shipping_company_name'] != '') {?>
　会社名　：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_company_name']);?>

<?php }
if ((defined('FORM_COUNTRY_ENABLE') ? constant('FORM_COUNTRY_ENABLE') : null)) {?>
　国　　　：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrCountry']->value[$_smarty_tpl->tpl_vars['shipping']->value['shipping_country_id']]);?>

　ZIPCODE ：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_zipcode']);?>

<?php }?>
　郵便番号：〒<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_zip01']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_zip02']);?>

　住所　　：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrPref']->value[$_smarty_tpl->tpl_vars['shipping']->value['shipping_pref']]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_addr01']);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_addr02']);?>

　電話番号：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_tel01']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_tel02']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_tel03']);?>

　FAX番号 ：<?php if ($_smarty_tpl->tpl_vars['shipping']->value['shipping_fax01'] > 0) {
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_fax01']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_fax02']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['shipping']->value['shipping_fax03']);
} else { ?>　<?php }?>

　お届け日：<?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_date_format($_smarty_tpl->tpl_vars['shipping']->value['shipping_date'],"%Y/%m/%d"))===null||$tmp==='' ? "指定なし" : $tmp));?>

　お届け時間：<?php echo smarty_modifier_script_escape((($tmp = @$_smarty_tpl->tpl_vars['shipping']->value['shipping_time'])===null||$tmp==='' ? "指定なし" : $tmp));?>


<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['shipping']->value['shipment_item'], 'item', false, NULL, 'item', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
商品コード: <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value['product_code']);?>

商品名: <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value['product_name']);?>
 <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value['classcategory_name1']);?>
 <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value['classcategory_name2']);?>

単価：￥<?php echo smarty_modifier_script_escape(smarty_modifier_n2s(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfCalcIncTax' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['price'],$_smarty_tpl->tpl_vars['item']->value['tax_rate'],$_smarty_tpl->tpl_vars['item']->value['tax_rule'] ))));?>

数量：<?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['item']->value['quantity']));?>


<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
if ($_smarty_tpl->tpl_vars['arrOrder']->value['customer_id'] && (defined('USE_POINT') ? constant('USE_POINT') : null) !== false) {?>
============================================
ご使用ポイント <?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['arrOrder']->value['use_point'])===null||$tmp==='' ? 0 : $tmp)));?>
 pt
今回加算される予定のポイント <?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['arrOrder']->value['add_point'])===null||$tmp==='' ? 0 : $tmp)));?>
 pt
現在の所持ポイント <?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['arrCustomer']->value['point'])===null||$tmp==='' ? 0 : $tmp)));?>
 pt
<?php }
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_footer']->value);?>

<?php }
}
