<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:03:05
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/shopping/deliv.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd26e9b6eeb2_94055376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aa1a0f675dbaaa9a9dd04e48ec041144e388142' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/shopping/deliv.tpl',
      1 => 1658652116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd26e9b6eeb2_94055376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<div id="undercolumn">
    <div id="undercolumn_shopping">
        <p class="flow_area">
            <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/picture/img_flow_01.jpg" alt="購入手続きの流れ" />
        </p>
        <h2 class="title"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_title']->value));?>
</h2>

        <div id="address_area" class="clearfix">
            <div class="information">
                <p>下記一覧よりお届け先住所を選択して、「選択したお届け先に送る」ボタンをクリックしてください。</p>
                <?php if ($_smarty_tpl->tpl_vars['tpl_addrmax']->value < (defined('DELIV_ADDR_MAX') ? constant('DELIV_ADDR_MAX') : null)) {?>
                    <p>一覧にご希望の住所が無い場合は、「新しいお届け先を追加する」より追加登録してください。</p>
                <?php }?>
                <p class="mini attention">※最大<?php echo smarty_modifier_script_escape(smarty_modifier_h((defined('DELIV_ADDR_MAX') ? constant('DELIV_ADDR_MAX') : null)));?>
件まで登録できます。</p>
            </div>
            <?php if ((defined('USE_MULTIPLE_SHIPPING') ? constant('USE_MULTIPLE_SHIPPING') : null) !== false) {?>
                <div class="add_multiple">
                    <p>この商品を複数の<br />お届け先に送りますか？</p>
                    <a href="javascript:;" onclick="eccube.setModeAndSubmit('multiple', '', ''); return false">
                        <img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_several_address.jpg" alt="お届け先を複数指定する" />
                    </a>
                </div>
            <?php }?>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['tpl_addrmax']->value < (defined('DELIV_ADDR_MAX') ? constant('DELIV_ADDR_MAX') : null)) {?>
            <p class="addbtn">
                <a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
mypage/delivery_addr.php" onclick="eccube.openWindow('<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
mypage/delivery_addr.php?page=<?php echo smarty_modifier_script_escape(smarty_modifier_h($_SERVER['SCRIPT_NAME']));?>
','new_deiv','600','640'); return false;">
                    <img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_add_address.jpg" alt="新しいお届け先を追加する" />
                </a>
            </p>
        <?php }?>

        <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
            <input type="hidden" name="mode" value="customer_addr" />
            <input type="hidden" name="uniqid" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_uniqid']->value);?>
" />
            <input type="hidden" name="other_deliv_id" value="" />
            <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['deli'] != '') {?>
                <p class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['deli']);?>
</p>
            <?php }?>
            <table summary="お届け先の指定">
                <col width="10%" />
                <col width="20%" />
                <col width="50%" />
                <col width="10%" />
                <col width="10%" />
                <tr>
                    <th class="alignC">選択</th>
                    <th class="alignC">住所種類</th>
                    <th class="alignC">お届け先</th>
                    <th class="alignC">変更</th>
                    <th class="alignC">削除</th>
                </tr>
                <?php
$__section_cnt_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrAddr']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_0_total = $__section_cnt_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] <= $__section_cnt_0_total; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['first'] = ($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] === 1);
?>
                    <tr>
                        <td class="alignC">
                            <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['first'] : null)) {?>
                                <input type="radio" name="deliv_check" id="chk_id_<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
" value="-1" <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['deliv_check']['value'] == '' || $_smarty_tpl->tpl_vars['arrForm']->value['deliv_check']['value'] == -1) {?> checked="checked"<?php }?> />
                            <?php } else { ?>
                                <input type="radio" name="deliv_check" id="chk_id_<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrAddr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['other_deliv_id']);?>
"<?php if ($_smarty_tpl->tpl_vars['arrForm']->value['deliv_check']['value'] == $_smarty_tpl->tpl_vars['arrAddr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['other_deliv_id']) {?> checked="checked"<?php }?> />
                            <?php }?>
                        </td>
                        <td class="alignC">
                            <label for="chk_id_<?php echo smarty_modifier_script_escape((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null));?>
">
                                <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['first'] : null)) {?>
                                    会員登録住所
                                <?php } else { ?>
                                    追加登録住所
                                <?php }?>
                            </label>
                        </td>
                        <td>
                            <?php $_smarty_tpl->_assignInScope('key1', $_smarty_tpl->tpl_vars['arrAddr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['pref']);?>
                            <?php $_smarty_tpl->_assignInScope('key2', $_smarty_tpl->tpl_vars['arrAddr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['country_id']);?>
                            <?php if ((defined('FORM_COUNTRY_ENABLE') ? constant('FORM_COUNTRY_ENABLE') : null)) {?>
                            <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrCountry']->value[$_smarty_tpl->tpl_vars['key2']->value]));?>
<br/>
                            <?php }?>
                            <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrPref']->value[$_smarty_tpl->tpl_vars['key1']->value]));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrAddr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['addr01']));
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrAddr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['addr02']));?>
<br />
                            <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrAddr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['company_name']));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrAddr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['name01']));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrAddr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['name02']));?>

                        </td>
                        <td class="alignC">
                            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['first'] : null)) {?>
                                <a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
mypage/delivery_addr.php" onclick="eccube.openWindow('<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
mypage/delivery_addr.php?page=<?php echo smarty_modifier_script_escape(smarty_modifier_h($_SERVER['SCRIPT_NAME']));?>
&amp;other_deliv_id=<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrAddr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['other_deliv_id']);?>
','new_deiv','600','640'); return false;">変更</a>
                                <?php } else { ?>
                                    -
                                <?php }?>
                        </td>
                        <td class="alignC">
                            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['first'] : null)) {?>
                                <a href="?" onclick="eccube.setModeAndSubmit('delete', 'other_deliv_id', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrAddr']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['other_deliv_id']);?>
'); return false">削除</a>
                                <?php } else { ?>
                                    -
                                <?php }?>
                        </td>
                    </tr>
                <?php
}
}
?>
            </table>

            <div class="btn_area">
                <ul>
                    <li>
                        <a href="<?php echo smarty_modifier_script_escape((defined('CART_URL') ? constant('CART_URL') : null));?>
">
                            <img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_back.jpg" alt="戻る" />
                        </a>
                    </li>
                    <li>
                        <input type="image" class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_next.jpg" alt="選択したお届け先に送る" name="send_button" id="send_button" />
                    </li>
                </ul>
            </div>

        </form>
    </div>
</div>
<?php }
}
