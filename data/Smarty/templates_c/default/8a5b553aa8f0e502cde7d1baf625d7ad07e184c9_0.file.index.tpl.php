<?php
/* Smarty version 3.1.40, created on 2022-07-20 06:27:10
  from '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/default/mypage/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d721ae7bc648_42685834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8a5b553aa8f0e502cde7d1baf625d7ad07e184c9' => 
    array (
      0 => '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/default/mypage/index.tpl',
      1 => 1658234865,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d721ae7bc648_42685834 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),1=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),2=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),));
?>

<div id="mypagecolumn">
    <h2 class="title"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_title']->value));?>
</h2>
    <?php if ($_smarty_tpl->tpl_vars['tpl_navi']->value != '') {?>
        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['tpl_navi']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_REALDIR') ? constant('TEMPLATE_REALDIR') : null))."mypage/navi.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }?>
    <div id="mycontents_area">
        <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
            <input type="hidden" name="order_id" value="" />
            <input type="hidden" name="pageno" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['objNavi']->value->nowpage);?>
" />
            <h3><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_subtitle']->value));?>
</h3>

            <?php if ($_smarty_tpl->tpl_vars['objNavi']->value->all_row > 0) {?>

                <p><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['objNavi']->value->all_row);?>
件</span>の購入履歴があります。</p>
                <div class="pagenumber_area">
                    <!--▼ページナビ-->
                    <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['objNavi']->value->strnavi);?>

                    <!--▲ページナビ-->
                </div>

                <table summary="購入履歴">
                    <tr>
                        <th class="alignC">購入日時</th>
                        <th class="alignC">注文番号</th>
                        <th class="alignC">お支払い方法</th>
                        <th class="alignC">合計金額</th>
                        <?php if ((defined('MYPAGE_ORDER_STATUS_DISP_FLAG') ? constant('MYPAGE_ORDER_STATUS_DISP_FLAG') : null)) {?>
                        <th class="alignC">ご注文状況</th>
                        <?php }?>
                        <th class="alignC">詳細</th>
                    </tr>
                    <?php
$__section_cnt_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrOrder']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_0_total = $__section_cnt_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_0_total !== 0) {
for ($__section_cnt_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $__section_cnt_0_iteration <= $__section_cnt_0_total; $__section_cnt_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
?>
                        <tr>
                            <td class="alignC"><?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfDispDBDate' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['create_date'] )));?>
</td>
                            <td><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['order_id']);?>
</td>
                            <?php $_smarty_tpl->_assignInScope('payment_id', ((string)$_smarty_tpl->tpl_vars['arrOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['payment_id']));?>
                            <td class="alignC"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrPayment']->value[$_smarty_tpl->tpl_vars['payment_id']->value]));?>
</td>
                            <td class="alignR"><?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['payment_total']));?>
円</td>

                            <?php if ((defined('MYPAGE_ORDER_STATUS_DISP_FLAG') ? constant('MYPAGE_ORDER_STATUS_DISP_FLAG') : null)) {?>
                                <?php $_smarty_tpl->_assignInScope('order_status_id', ((string)$_smarty_tpl->tpl_vars['arrOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['status']));?>
                                <?php if ($_smarty_tpl->tpl_vars['order_status_id']->value != (defined('ORDER_PENDING') ? constant('ORDER_PENDING') : null)) {?>
                                <td class="alignC"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrCustomerOrderStatus']->value[$_smarty_tpl->tpl_vars['order_status_id']->value]));?>
</td>
                                <?php } else { ?>
                                <td class="alignC attention"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrCustomerOrderStatus']->value[$_smarty_tpl->tpl_vars['order_status_id']->value]));?>
</td>
                                <?php }?>
                            <?php }?>
                            <td class="alignC"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
mypage/history.php?order_id=<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['order_id']);?>
">詳細</a></td>
                        </tr>
                    <?php
}
}
?>
                </table>

            <?php } else { ?>
                <p>購入履歴はありません。</p>
            <?php }?>
        </form>
    </div>
</div>
<?php }
}
