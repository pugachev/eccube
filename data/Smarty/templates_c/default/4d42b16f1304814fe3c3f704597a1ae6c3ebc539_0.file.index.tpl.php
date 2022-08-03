<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:03:03
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/cart/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd26e7e68da9_38987717',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d42b16f1304814fe3c3f704597a1ae6c3ebc539' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/cart/index.tpl',
      1 => 1658652119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd26e7e68da9_38987717 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),));
?>

<div id="undercolumn">
    <div id="undercolumn_cart">
        <h2 class="title"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_title']->value));?>
</h2>

        <?php if ((defined('USE_POINT') ? constant('USE_POINT') : null) !== false || count($_smarty_tpl->tpl_vars['arrProductsClass']->value) > 0) {?>
            <!--★ポイント案内★-->
            <?php if ((defined('USE_POINT') ? constant('USE_POINT') : null) !== false) {?>
                <div class="point_announce">
                    <?php if ($_smarty_tpl->tpl_vars['tpl_login']->value) {?>
                        <span class="user_name"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_name']->value));?>
 様</span>の、現在の所持ポイントは「<span class="point"><?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['tpl_user_point']->value))===null||$tmp==='' ? 0 : $tmp)));?>
 pt</span>」です。<br />
                    <?php } else { ?>
                        ポイント制度をご利用になられる場合は、会員登録後ログインしてくださいますようお願い致します。<br />
                    <?php }?>
                    ポイントは商品購入時に<span class="price">1pt＝<?php echo smarty_modifier_script_escape(smarty_modifier_h((defined('POINT_VALUE') ? constant('POINT_VALUE') : null)));?>
円</span>として使用することができます。<br />
                </div>
            <?php }?>
        <?php }?>

        <div class="totalmoney_area">
                        <?php if (!empty($_smarty_tpl->tpl_vars['cartKeys']->value) && count($_smarty_tpl->tpl_vars['cartKeys']->value) > 1) {?>
                <span class="attentionSt"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartKeys']->value, 'key', false, NULL, 'cartKey', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_cartKey']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_cartKey']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_cartKey']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_cartKey']->value['total'];
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProductType']->value[$_smarty_tpl->tpl_vars['key']->value]));
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_cartKey']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cartKey']->value['last'] : null)) {?>、<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>は同時購入できません。<br />
                    お手数ですが、個別に購入手続きをお願い致します。
                </span>
            <?php }?>

            <?php if (strlen($_smarty_tpl->tpl_vars['tpl_error']->value) != 0) {?>
                <p class="attention"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_error']->value));?>
</p>
            <?php }?>

            <?php if (strlen($_smarty_tpl->tpl_vars['tpl_message']->value) != 0) {?>
                <p class="attention"><?php echo smarty_modifier_script_escape(nl2br(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_message']->value)));?>
</p>
            <?php }?>
        </div>

        <?php if (!empty($_smarty_tpl->tpl_vars['cartItems']->value)) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartKeys']->value, 'key');
$_smarty_tpl->tpl_vars['key']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value) {
$_smarty_tpl->tpl_vars['key']->do_else = false;
?>
                <div class="form_area">
                    <form name="form<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
" id="form<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
" method="post" action="?">
                        <input type="hidden" name="<?php echo smarty_modifier_script_escape(smarty_modifier_h((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null)));?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['transactionid']->value));?>
" />
                        <input type="hidden" name="mode" value="confirm" />
                        <input type="hidden" name="cart_no" value="" />
                        <input type="hidden" name="cartKey" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
" />
                        <input type="hidden" name="category_id" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_category_id']->value));?>
" />
                        <input type="hidden" name="product_id" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_product_id']->value));?>
" />
                        <?php if (count($_smarty_tpl->tpl_vars['cartKeys']->value) > 1) {?>
                            <h3><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProductType']->value[$_smarty_tpl->tpl_vars['key']->value]));?>
</h3>
                            <?php $_smarty_tpl->_assignInScope('purchasing_goods_name', $_smarty_tpl->tpl_vars['arrProductType']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('purchasing_goods_name', "カゴの中の商品");?>
                        <?php }?>
                        <p>
                            <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['purchasing_goods_name']->value));?>
の合計金額は「<span class="price"><?php echo smarty_modifier_script_escape(smarty_modifier_h(smarty_modifier_n2s($_smarty_tpl->tpl_vars['tpl_total_inctax']->value[$_smarty_tpl->tpl_vars['key']->value])));?>
円</span>」です。
                            <?php if ($_smarty_tpl->tpl_vars['key']->value != (defined('PRODUCT_TYPE_DOWNLOAD') ? constant('PRODUCT_TYPE_DOWNLOAD') : null)) {?>
                                <?php if ($_smarty_tpl->tpl_vars['arrInfo']->value['free_rule'] > 0) {?>
                                    <?php if (!$_smarty_tpl->tpl_vars['arrData']->value[$_smarty_tpl->tpl_vars['key']->value]['is_deliv_free']) {?>
                                        あと「<span class="price"><?php echo smarty_modifier_script_escape(smarty_modifier_h(smarty_modifier_n2s($_smarty_tpl->tpl_vars['tpl_deliv_free']->value[$_smarty_tpl->tpl_vars['key']->value])));?>
円</span>」で送料無料です！！
                                    <?php } else { ?>
                                        現在、「<span class="attention">送料無料</span>」です！！
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        </p>

                        <table summary="商品情報">
                            <col width="10%" />
                            <col width="15%" />
                            <col width="30%" />
                            <col width="15%" />
                            <col width="15%" />
                            <col width="15%" />
                            <tr>
                                <th class="alignC">削除</th>
                                <th class="alignC">商品写真</th>
                                <th class="alignC">商品名</th>
                                <th class="alignC">単価</th>
                                <th class="alignC">数量</th>
                                <th class="alignC">小計</th>
                            </tr>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartItems']->value[$_smarty_tpl->tpl_vars['key']->value], 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                                <tr style="<?php if ($_smarty_tpl->tpl_vars['item']->value['error']) {?>background-color: <?php echo smarty_modifier_script_escape(smarty_modifier_h((defined('ERR_COLOR') ? constant('ERR_COLOR') : null)));?>
;<?php }?>">
                                    <td class="alignC"><a href="?" onclick="eccube.fnFormModeSubmit('form<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
', 'cartDelete', 'cart_no', '<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['cart_no']));?>
'); return false;">削除</a>
                                    </td>
                                    <td class="alignC">
                                    <?php if (strlen($_smarty_tpl->tpl_vars['item']->value['productsClass']['main_image']) >= 1) {?>
                                        <a class="expansion" target="_blank" href="<?php echo smarty_modifier_script_escape(smarty_modifier_h((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null)));
echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfNoImageMainList' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['productsClass']['main_image'] ))));?>
">
                                    <?php }?>
                                            <img src="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfNoImageMainList' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['productsClass']['main_list_image'] ))));?>
" style="max-width: 65px;max-height: 65px;" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['name']));?>
" />
                                            <?php if (strlen($_smarty_tpl->tpl_vars['item']->value['productsClass']['main_image']) >= 1) {?>
                                        </a>
                                    <?php }?>
                                    </td>
                                    <td><strong><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['name']));?>
</strong>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['productsClass']['classcategory_name1'] != '') {?>
                                            <div><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['class_name1']));?>
：<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['classcategory_name1']));?>
</div>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value['productsClass']['classcategory_name2'] != '') {?>
                                            <div><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['class_name2']));?>
：<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['productsClass']['classcategory_name2']));?>
</div>
                                        <?php }?>
                                    </td>
                                    <td class="alignR">
                                        <?php echo smarty_modifier_script_escape(smarty_modifier_h(smarty_modifier_n2s($_smarty_tpl->tpl_vars['item']->value['price_inctax'])));?>
円
                                    </td>
                                    <td class="alignC"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['quantity']));?>

                                        <ul id="quantity_level">
                                            <li><a href="?" onclick="eccube.fnFormModeSubmit('form<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
','up','cart_no','<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['cart_no']));?>
'); return false"><img src="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['TPL_URLPATH']->value));?>
img/button/btn_plus.jpg" width="16" height="16" alt="＋" /></a></li>
                                            <?php if ($_smarty_tpl->tpl_vars['item']->value['quantity'] > 1) {?>
                                                <li><a href="?" onclick="eccube.fnFormModeSubmit('form<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
','down','cart_no','<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['item']->value['cart_no']));?>
'); return false"><img src="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['TPL_URLPATH']->value));?>
img/button/btn_minus.jpg" width="16" height="16" alt="-" /></a></li>
                                            <?php }?>
                                        </ul>
                                    </td>
                                    <td class="alignR"><?php echo smarty_modifier_script_escape(smarty_modifier_h(smarty_modifier_n2s($_smarty_tpl->tpl_vars['item']->value['total_inctax'])));?>
円</td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <tr>
                                <th colspan="5" class="alignR">合計</th>
                                <td class="alignR"><span class="price"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrData']->value[$_smarty_tpl->tpl_vars['key']->value]['total']-smarty_modifier_h(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrData']->value[$_smarty_tpl->tpl_vars['key']->value]['deliv_fee'])));?>
円</span></td>
                            </tr>
                            <?php if ((defined('USE_POINT') ? constant('USE_POINT') : null) !== false) {?>
                                <?php if ($_smarty_tpl->tpl_vars['arrData']->value[$_smarty_tpl->tpl_vars['key']->value]['birth_point'] > 0) {?>
                                    <tr>
                                        <th colspan="5" class="alignR">お誕生月ポイント</th>
                                        <td class="alignR"><?php echo smarty_modifier_script_escape(smarty_modifier_h(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrData']->value[$_smarty_tpl->tpl_vars['key']->value]['birth_point'])));?>
pt</td>
                                    </tr>
                                <?php }?>
                                <tr>
                                    <th colspan="5" class="alignR">今回加算ポイント</th>
                                    <td class="alignR"><?php echo smarty_modifier_script_escape(smarty_modifier_h(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrData']->value[$_smarty_tpl->tpl_vars['key']->value]['add_point'])));?>
pt</td>
                                </tr>
                            <?php }?>
                        </table>
                        <?php if (strlen($_smarty_tpl->tpl_vars['tpl_error']->value) == 0) {?>
                            <p class="alignC">上記内容でよろしければ「購入手続きへ」ボタンをクリックしてください。</p>
                        <?php }?>
                        <div class="btn_area">
                            <ul>
                                <li>
                                    <?php if ($_smarty_tpl->tpl_vars['tpl_prev_url']->value != '') {?>
                                        <a href="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_prev_url']->value));?>
">
                                            <img class="hover_change_image" src="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['TPL_URLPATH']->value));?>
img/button/btn_back.jpg" alt="戻る" name="back<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['key']->value));?>
" /></a>
                                    <?php }?>
                                </li>
                                <li>
                                    <?php if (strlen($_smarty_tpl->tpl_vars['tpl_error']->value) == 0) {?>
                                        <input type="image" class="hover_change_image" src="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['TPL_URLPATH']->value));?>
img/button/btn_buystep.jpg" alt="購入手続きへ" name="confirm" />
                                    <?php }?>
                                </li>
                            </ul>
                        </div>
                    </form>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php } else { ?>
            <p class="empty"><span class="attention">※ 現在カート内に商品はございません。</span></p>
        <?php }?>
    </div>
</div>
<?php }
}
