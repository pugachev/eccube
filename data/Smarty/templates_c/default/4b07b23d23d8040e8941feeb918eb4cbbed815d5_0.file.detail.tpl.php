<?php
/* Smarty version 3.1.40, created on 2022-07-16 22:26:44
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/products/detail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2bc94157b06_36855554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b07b23d23d8040e8941feeb918eb4cbbed815d5' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/products/detail.tpl',
      1 => 1657975412,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2bc94157b06_36855554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.nl2br_html.php','function'=>'smarty_modifier_nl2br_html',),4=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),5=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.u.php','function'=>'smarty_modifier_u',),));
?>

<?php echo '<script'; ?>
 type="text/javascript">//<![CDATA[
    // 規格2に選択肢を割り当てる。
    function fnSetClassCategories(form, classcat_id2_selected) {
        var $form = $(form);
        var product_id = $form.find('input[name=product_id]').val();
        var $sele1 = $form.find('select[name=classcategory_id1]');
        var $sele2 = $form.find('select[name=classcategory_id2]');
        eccube.setClassCategories($form, product_id, $sele1, $sele2, classcat_id2_selected);
    }
//]]><?php echo '</script'; ?>
>

<div id="undercolumn">
    <form name="form1" id="form1" method="post" action="?">
        <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
        <div id="detailarea" class="clearfix">
            <div id="detailphotobloc">
                <div class="photo">
                    <?php $_smarty_tpl->_assignInScope('key', "main_image");?>
                    <!--★画像★-->
                    <?php if (strlen($_smarty_tpl->tpl_vars['arrProduct']->value['main_large_image']) >= 1) {?>
                        <a
                            href="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['main_large_image']));?>
"
                            class="expansion"
                            target="_blank"
                        >
                    <?php }?>
                        <img src="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrFile']->value[$_smarty_tpl->tpl_vars['key']->value]['filepath']));?>
" width="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrFile']->value[$_smarty_tpl->tpl_vars['key']->value]['width']);?>
" height="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrFile']->value[$_smarty_tpl->tpl_vars['key']->value]['height']);?>
" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['name']));?>
" class="picture" />
                    <?php if (strlen($_smarty_tpl->tpl_vars['arrProduct']->value['main_large_image']) >= 1) {?>
                        </a>
                    <?php }?>
                </div>
                <?php if (strlen($_smarty_tpl->tpl_vars['arrProduct']->value['main_large_image']) >= 1) {?>
                    <span class="mini">
                            <!--★拡大する★-->
                            <a
                                href="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['main_large_image']));?>
"
                                class="expansion"
                                target="_blank"
                            >
                                画像を拡大する</a>
                    </span>
                <?php }?>
            </div>

            <div id="detailrightbloc">
                <!--▼商品ステータス-->
                <?php $_smarty_tpl->_assignInScope('ps', $_smarty_tpl->tpl_vars['productStatus']->value[$_smarty_tpl->tpl_vars['tpl_product_id']->value]);?>
                <?php if (!empty($_smarty_tpl->tpl_vars['ps']->value)) {?>
                    <ul class="status_icon clearfix">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ps']->value, 'status');
$_smarty_tpl->tpl_vars['status']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['status']->value) {
$_smarty_tpl->tpl_vars['status']->do_else = false;
?>
                        <li>
                            <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrSTATUS_IMAGE']->value[$_smarty_tpl->tpl_vars['status']->value]);?>
" width="60" height="17" alt="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrSTATUS']->value[$_smarty_tpl->tpl_vars['status']->value]);?>
" id="icon<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['status']->value);?>
" />
                        </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php }?>
                <!--▲商品ステータス-->

                <!--★商品コード★-->
                <dl class="product_code">
                    <dt>商品コード：</dt>
                    <dd>
                        <span id="product_code_default">
                            <?php if ($_smarty_tpl->tpl_vars['arrProduct']->value['product_code_min'] == $_smarty_tpl->tpl_vars['arrProduct']->value['product_code_max']) {?>
                                <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['product_code_min']));?>

                            <?php } else { ?>
                                <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['product_code_min']));?>
～<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['product_code_max']));?>

                            <?php }?>
                        </span><span id="product_code_dynamic"></span>
                    </dd>
                </dl>

                <!--★商品名★-->
                <h2><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['name']));?>
</h2>

                <!--★通常価格★-->
                <?php if ($_smarty_tpl->tpl_vars['arrProduct']->value['price01_min_inctax'] > 0) {?>
                    <dl class="normal_price">
                        <dt><?php echo smarty_modifier_script_escape((defined('NORMAL_PRICE_TITLE') ? constant('NORMAL_PRICE_TITLE') : null));?>
(税込)：</dt>
                        <dd class="price">
                            <span id="price01_default"><?php if ($_smarty_tpl->tpl_vars['arrProduct']->value['price01_min_inctax'] == $_smarty_tpl->tpl_vars['arrProduct']->value['price01_max_inctax']) {
echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrProduct']->value['price01_min_inctax']));
} else {
echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrProduct']->value['price01_min_inctax']));?>
～<?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrProduct']->value['price01_max_inctax']));
}?></span><span id="price01_dynamic"></span>
                            円
                        </dd>
                    </dl>
                <?php }?>

                <!--★販売価格★-->
                <dl class="sale_price">
                    <dt><?php echo smarty_modifier_script_escape((defined('SALE_PRICE_TITLE') ? constant('SALE_PRICE_TITLE') : null));?>
(税込)：</dt>
                    <dd class="price">
                        <span id="price02_default"><?php if ($_smarty_tpl->tpl_vars['arrProduct']->value['price02_min_inctax'] == $_smarty_tpl->tpl_vars['arrProduct']->value['price02_max_inctax']) {
echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrProduct']->value['price02_min_inctax']));
} else {
echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrProduct']->value['price02_min_inctax']));?>
～<?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrProduct']->value['price02_max_inctax']));
}?></span><span id="price02_dynamic"></span>
                        円
                    </dd>
                </dl>

                <!--★ポイント★-->
                <?php if ((defined('USE_POINT') ? constant('USE_POINT') : null) !== false) {?>
                    <div class="point">ポイント：
                        <span id="point_default"><?php if ($_smarty_tpl->tpl_vars['arrProduct']->value['price02_min'] == $_smarty_tpl->tpl_vars['arrProduct']->value['price02_max']) {
echo smarty_modifier_script_escape(smarty_modifier_n2s(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfPrePoint' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrProduct']->value['price02_min'],$_smarty_tpl->tpl_vars['arrProduct']->value['point_rate'] ))));
} else {
if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfPrePoint' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrProduct']->value['price02_min'],$_smarty_tpl->tpl_vars['arrProduct']->value['point_rate'] )) == call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfPrePoint' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrProduct']->value['price02_max'],$_smarty_tpl->tpl_vars['arrProduct']->value['point_rate'] ))) {
echo smarty_modifier_script_escape(smarty_modifier_n2s(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfPrePoint' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrProduct']->value['price02_min'],$_smarty_tpl->tpl_vars['arrProduct']->value['point_rate'] ))));
} else {
echo smarty_modifier_script_escape(smarty_modifier_n2s(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfPrePoint' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrProduct']->value['price02_min'],$_smarty_tpl->tpl_vars['arrProduct']->value['point_rate'] ))));?>
～<?php echo smarty_modifier_script_escape(smarty_modifier_n2s(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfPrePoint' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrProduct']->value['price02_max'],$_smarty_tpl->tpl_vars['arrProduct']->value['point_rate'] ))));
}
}?></span><span id="point_dynamic"></span>
                        Pt
                    </div>
                <?php }?>

                                <?php if (strlen($_smarty_tpl->tpl_vars['arrProduct']->value['maker_name']) >= 1) {?>
                    <dl class="maker">
                        <dt>メーカー：</dt>
                        <dd><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['maker_name']));?>
</dd>
                    </dl>
                <?php }?>
                
                <!--▼メーカーURL-->
                <?php if (strlen($_smarty_tpl->tpl_vars['arrProduct']->value['comment1']) >= 1) {?>
                    <dl class="comment1">
                        <dt>メーカーURL：</dt>
                        <dd><a href="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['comment1']));?>
"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['comment1']));?>
</a></dd>
                    </dl>
                <?php }?>
                <!--▼メーカーURL-->

                <!--★関連カテゴリ★-->
                <dl class="relative_cat">
                    <dt>関連カテゴリ：</dt>
                    <?php
$__section_r_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrRelativeCat']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_r_0_total = $__section_r_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_r'] = new Smarty_Variable(array());
if ($__section_r_0_total !== 0) {
for ($__section_r_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] = 0; $__section_r_0_iteration <= $__section_r_0_total; $__section_r_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']++){
?>
                        <dd>
                            <?php
$__section_s_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrRelativeCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)]) ? count($_loop) : max(0, (int) $_loop));
$__section_s_1_total = $__section_s_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_s'] = new Smarty_Variable(array());
if ($__section_s_1_total !== 0) {
for ($__section_s_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] = 0; $__section_s_1_iteration <= $__section_s_1_total; $__section_s_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_s']->value['last'] = ($__section_s_1_iteration === $__section_s_1_total);
?>
                                <a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
products/list.php?category_id=<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrRelativeCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]['category_id']);?>
"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrRelativeCat']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_r']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_r']->value['index'] : null)][(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['index'] : null)]['category_name']));?>
</a>
                                <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_s']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_s']->value['last'] : null)) {
echo smarty_modifier_script_escape((defined('SEPA_CATNAVI') ? constant('SEPA_CATNAVI') : null));
}?>
                            <?php
}
}
?>
                        </dd>
                    <?php
}
}
?>
                </dl>      

                                <?php if (strlen($_smarty_tpl->tpl_vars['arrProduct']->value['maker_code']) >= 1) {?>
                    <dl class="relative_cat">
                        <dt>メーカーコード：</dt>
                        <dd><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['maker_code']));?>
</dd>
                    </dl>
                <?php }?>
                
                                <?php if (strlen($_smarty_tpl->tpl_vars['arrProduct']->value['delivery_type_id']) >= 1) {?>
                    <dl class="relative_cat">
                        <dt>配送種別：</dt>
                        <dd><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrDeliveryType']->value[$_smarty_tpl->tpl_vars['arrProduct']->value['delivery_type_id']]));?>
</dd>
                    </dl>
                <?php }?>
                
                                <?php if (strlen($_smarty_tpl->tpl_vars['arrProduct']->value['warranty_period_id']) >= 1) {?>
                    <dl class="relative_cat">
                        <dt>保証期間：</dt>
                        <dd><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrWarrantyPeriod']->value[$_smarty_tpl->tpl_vars['arrProduct']->value['warranty_period_id']]));?>
</dd>
                    </dl>
                <?php }?>
                
                <!--▼ギフト対応-->
                <?php $_smarty_tpl->_assignInScope('gift', $_smarty_tpl->tpl_vars['gifts']->value[$_smarty_tpl->tpl_vars['tpl_product_id']->value]);?>
                <?php if (count($_smarty_tpl->tpl_vars['gift']->value) > 0) {?>
                    <dl class="relative_cat">
                        <dt>ギフト対応：</dt>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['gift']->value, 'val');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                        <dd><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrGift']->value[$_smarty_tpl->tpl_vars['val']->value]));?>
</dd>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </dl>
                <?php }?>
                <!--▲ギフト対応-->         

                <!--★詳細メインコメント★-->
                <div class="main_comment"><?php echo smarty_modifier_script_escape(smarty_modifier_nl2br_html($_smarty_tpl->tpl_vars['arrProduct']->value['main_comment']));?>
</div>

                <!--▼買い物カゴ-->
                <div class="cart_area clearfix">
                    <input type="hidden" name="mode" value="cart" />
                    <input type="hidden" name="product_id" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_product_id']->value);?>
" />
                    <input type="hidden" name="product_class_id" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_product_class_id']->value);?>
" id="product_class_id" />
                    <input type="hidden" name="favorite_product_id" value="" />

                    <?php if ($_smarty_tpl->tpl_vars['tpl_stock_find']->value) {?>
                        <?php if ($_smarty_tpl->tpl_vars['tpl_classcat_find1']->value) {?>
                            <div class="classlist">
                                <!--▼規格1-->
                                <ul class="clearfix">
                                    <li><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_class_name1']->value));?>
：</li>
                                    <li>
                                        <select name="classcategory_id1" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['classcategory_id1'] )));?>
">
                                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrClassCat1']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value['classcategory_id1']['value']),$_smarty_tpl);?>

                                        </select>
                                        <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['classcategory_id1'] != '') {?>
                                        <br /><span class="attention">※ <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_class_name1']->value);?>
を入力して下さい。</span>
                                        <?php }?>
                                    </li>
                                </ul>
                                <!--▲規格1-->
                                <?php if ($_smarty_tpl->tpl_vars['tpl_classcat_find2']->value) {?>
                                <!--▼規格2-->
                                <ul class="clearfix">
                                    <li><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_class_name2']->value));?>
：</li>
                                    <li>
                                        <select name="classcategory_id2" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['classcategory_id2'] )));?>
">
                                        </select>
                                        <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['classcategory_id2'] != '') {?>
                                        <br /><span class="attention">※ <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_class_name2']->value);?>
を入力して下さい。</span>
                                        <?php }?>
                                    </li>
                                </ul>
                                <!--▲規格2-->
                                <?php }?>
                            </div>
                        <?php }?>

                        <!--★数量★-->
                        <dl class="quantity">
                            <dt>数量：</dt>
                            <dd><input type="text" class="box60" name="quantity" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h((($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value['quantity']['value'])===null||$tmp==='' ? 1 : $tmp)));?>
" maxlength="<?php echo smarty_modifier_script_escape((defined('INT_LEN') ? constant('INT_LEN') : null));?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['quantity'] )));?>
" />
                                <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['quantity'] != '') {?>
                                    <br /><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['quantity']);?>
</span>
                                <?php }?>
                            </dd>
                        </dl>

                        <div class="cartin">
                            <div class="cartin_btn">
                                <div id="cartbtn_default">
                                    <!--★カゴに入れる★-->
                                    <a href="javascript:void(document.form1.submit())">
                                        <img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_cartin.jpg" alt="カゴに入れる" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="attention" id="cartbtn_dynamic"></div>
                    <?php } else { ?>
                        <div class="attention">申し訳ございませんが、只今品切れ中です。</div>
                    <?php }?>

                    <!--★お気に入り登録★-->
                    <?php if ((defined('OPTION_FAVORITE_PRODUCT') ? constant('OPTION_FAVORITE_PRODUCT') : null) == 1 && $_smarty_tpl->tpl_vars['tpl_login']->value === true) {?>
                        <div class="favorite_btn">
                            <?php $_smarty_tpl->_assignInScope('add_favorite', "add_favorite".((string)$_smarty_tpl->tpl_vars['product_id']->value));?>
                            <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['add_favorite']->value]) {?>
                                <div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['add_favorite']->value]);?>
</div>
                            <?php }?>
                            <?php if (!$_smarty_tpl->tpl_vars['is_favorite']->value) {?>
                                <a href="javascript:eccube.changeAction('?product_id=<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['product_id']));?>
'); eccube.setModeAndSubmit('add_favorite','favorite_product_id','<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['product_id']));?>
');"><img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_add_favorite.jpg" alt="お気に入りに追加" /></a>
                            <?php } else { ?>
                                <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_add_favorite_on.jpg" title="お気に入りに登録済み" alt="お気に入りに登録済み" id="add_favorite_product" />
                                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
js/jquery.ui/jquery.ui.core.min.js"><?php echo '</script'; ?>
>
                                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
js/jquery.ui/jquery.ui.widget.min.js"><?php echo '</script'; ?>
>
                                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
js/jquery.ui/jquery.ui.position.min.js"><?php echo '</script'; ?>
>
                                <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
js/jquery.ui/jquery.ui.tooltip.min.js"><?php echo '</script'; ?>
>
                                <?php echo '<script'; ?>
 type="text/javascript">
                                    var favoriteButton = $("#add_favorite_product");
                                    favoriteButton.tooltip();

                                    <?php if ($_smarty_tpl->tpl_vars['just_added_favorite']->value == true) {?>
                                    favoriteButton.load(function(){ $(this).tooltip("open") });
                                    $(function(){
                                        var tid = setTimeout('favoriteButton.tooltip("close")',5000);
                                    });
                                    <?php }?>
                                <?php echo '</script'; ?>
>
                            <?php }?>
                        </div>
                    <?php }?>
                </div>
                <!--▲買い物カゴ-->
            </div>
        </div>
    </form>

    <!--詳細ここまで-->

    <!--▼サブコメント-->
    <?php
$__section_cnt_2_loop = (is_array(@$_loop=(defined('PRODUCTSUB_MAX') ? constant('PRODUCTSUB_MAX') : null)) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_2_total = $__section_cnt_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_2_total !== 0) {
for ($__section_cnt_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $__section_cnt_2_iteration <= $__section_cnt_2_total; $__section_cnt_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
        <?php $_smarty_tpl->_assignInScope('key', "sub_title".((string)((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)+1)));?>
        <?php $_smarty_tpl->_assignInScope('ikey', "sub_image".((string)((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)+1)));?>
        <?php if ($_smarty_tpl->tpl_vars['arrProduct']->value[$_smarty_tpl->tpl_vars['key']->value] != '' || strlen($_smarty_tpl->tpl_vars['arrProduct']->value[$_smarty_tpl->tpl_vars['ikey']->value]) >= 1) {?>
            <div class="sub_area clearfix">
                <h3><!--★サブタイトル★--><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value[$_smarty_tpl->tpl_vars['key']->value]));?>
</h3>
                <?php $_smarty_tpl->_assignInScope('ckey', "sub_comment".((string)((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)+1)));?>
                <!--▼サブ画像-->
                <?php $_smarty_tpl->_assignInScope('lkey', "sub_large_image".((string)((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)+1)));?>
                <?php if (strlen($_smarty_tpl->tpl_vars['arrProduct']->value[$_smarty_tpl->tpl_vars['ikey']->value]) >= 1) {?>
                    <div class="subtext"><!--★サブテキスト★--><?php echo smarty_modifier_script_escape(smarty_modifier_nl2br_html($_smarty_tpl->tpl_vars['arrProduct']->value[$_smarty_tpl->tpl_vars['ckey']->value]));?>
</div>
                    <div class="subphotoimg">
                        <?php if (strlen($_smarty_tpl->tpl_vars['arrProduct']->value[$_smarty_tpl->tpl_vars['lkey']->value]) >= 1) {?>
                            <a href="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value[$_smarty_tpl->tpl_vars['lkey']->value]));?>
" class="expansion" target="_blank" >
                        <?php }?>
                        <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrFile']->value[$_smarty_tpl->tpl_vars['ikey']->value]['filepath']);?>
" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value['name']));?>
" width="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrFile']->value[$_smarty_tpl->tpl_vars['ikey']->value]['width']);?>
" height="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrFile']->value[$_smarty_tpl->tpl_vars['ikey']->value]['height']);?>
" />
                        <?php if (strlen($_smarty_tpl->tpl_vars['arrProduct']->value[$_smarty_tpl->tpl_vars['lkey']->value]) >= 1) {?>
                            </a>
                            <span class="mini">
                                <a href="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrProduct']->value[$_smarty_tpl->tpl_vars['lkey']->value]));?>
" class="expansion" target="_blank">
                                    画像を拡大する</a>
                            </span>
                        <?php }?>
                    </div>
                <?php } else { ?>
                    <p class="subtext"><!--★サブテキスト★--><?php echo smarty_modifier_script_escape(smarty_modifier_nl2br_html($_smarty_tpl->tpl_vars['arrProduct']->value[$_smarty_tpl->tpl_vars['ckey']->value]));?>
</p>
                <?php }?>
                <!--▲サブ画像-->
            </div>
        <?php }?>
    <?php
}
}
?>
    <!--▲サブコメント-->

    <!--この商品に対するお客様の声-->
    <div id="customervoice_area">
        <h2><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/title/tit_product_voice.png" alt="この商品に対するお客様の声" /></h2>

        <div class="review_bloc clearfix">
            <p>この商品に対するご感想をぜひお寄せください。</p>
            <div class="review_btn">
                <?php if (count($_smarty_tpl->tpl_vars['arrReview']->value) < (defined('REVIEW_REGIST_MAX') ? constant('REVIEW_REGIST_MAX') : null)) {?>
                    <!--★新規コメントを書き込む★-->
                    <a href="./review.php"
                        onclick="eccube.openWindow('./review.php?product_id=<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrProduct']->value['product_id']);?>
','review','600','640'); return false;"
                        target="_blank">
                        <img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_comment.jpg" alt="新規コメントを書き込む" />
                    </a>
                <?php }?>
            </div>
        </div>

        <?php if (!empty($_smarty_tpl->tpl_vars['arrReview']->value)) {?>
            <ul>
                <?php
$__section_cnt_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrReview']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_3_total = $__section_cnt_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_3_total !== 0) {
for ($__section_cnt_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $__section_cnt_3_iteration <= $__section_cnt_3_total; $__section_cnt_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
                    <li>
                        <p class="voicetitle"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['title']));?>
</p>
                        <p class="voicedate"><?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfDispDBDate' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['create_date'],false )));?>
　投稿者：<?php if ($_smarty_tpl->tpl_vars['arrReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['reviewer_url']) {?><a href="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['reviewer_url']);?>
" target="_blank"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['reviewer_name']));?>
</a><?php } else {
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['reviewer_name']));
}?>　おすすめレベル：<span class="recommend_level"><?php $_smarty_tpl->_assignInScope('level', $_smarty_tpl->tpl_vars['arrReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['recommend_level']);
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrRECOMMEND']->value[$_smarty_tpl->tpl_vars['level']->value]));?>
</span></p>
                        <p class="voicecomment"><?php echo smarty_modifier_script_escape(nl2br(smarty_modifier_h($_smarty_tpl->tpl_vars['arrReview']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['comment'])));?>
</p>
                    </li>
                <?php
}
}
?>
            </ul>
        <?php }?>
    </div>
    <!--お客様の声ここまで-->

    <!--▼関連商品-->
    <?php if ($_smarty_tpl->tpl_vars['arrRecommend']->value) {?>
        <div id="whobought_area">
            <h2><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/title/tit_product_recommend.png" alt="その他のオススメ商品" /></h2>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrRecommend']->value, 'arrItem', false, NULL, 'arrRecommend', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['arrItem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['arrItem']->value) {
$_smarty_tpl->tpl_vars['arrItem']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_arrRecommend']->value['iteration']++;
?>
                <div class="product_item">
                    <div class="productImage">
                        <a href="<?php echo smarty_modifier_script_escape((defined('P_DETAIL_URLPATH') ? constant('P_DETAIL_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_u($_smarty_tpl->tpl_vars['arrItem']->value['product_id']));?>
">
                            <img src="<?php echo smarty_modifier_script_escape((defined('IMAGE_SAVE_URLPATH') ? constant('IMAGE_SAVE_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfNoImageMainList' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrItem']->value['main_list_image'] ))));?>
" style="max-width: 65px;max-height: 65px;" alt="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrItem']->value['name']));?>
" /></a>
                    </div>
                    <?php $_smarty_tpl->_assignInScope('price02_min', ((string)$_smarty_tpl->tpl_vars['arrItem']->value['price02_min_inctax']));?>
                    <?php $_smarty_tpl->_assignInScope('price02_max', ((string)$_smarty_tpl->tpl_vars['arrItem']->value['price02_max_inctax']));?>
                    <div class="productContents">
                        <h3><a href="<?php echo smarty_modifier_script_escape((defined('P_DETAIL_URLPATH') ? constant('P_DETAIL_URLPATH') : null));
echo smarty_modifier_script_escape(smarty_modifier_u($_smarty_tpl->tpl_vars['arrItem']->value['product_id']));?>
"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrItem']->value['name']));?>
</a></h3>
                        <p class="sale_price"><?php echo smarty_modifier_script_escape((defined('SALE_PRICE_TITLE') ? constant('SALE_PRICE_TITLE') : null));?>
(税込)：<span class="price">
                            <?php if ($_smarty_tpl->tpl_vars['price02_min']->value == $_smarty_tpl->tpl_vars['price02_max']->value) {?>
                                <?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['price02_min']->value));?>

                            <?php } else { ?>
                                <?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['price02_min']->value));?>
～<?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['price02_max']->value));?>

                            <?php }?>円</span></p>
                        <p class="mini"><?php echo smarty_modifier_script_escape(nl2br(smarty_modifier_h($_smarty_tpl->tpl_vars['arrItem']->value['comment'])));?>
</p>
                    </div>
                </div>                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_arrRecommend']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_arrRecommend']->value['iteration'] : null)%2 === 0) {?>
                    <div class="clear"></div>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }?>
    <!--▲関連商品-->

</div>
<?php }
}
