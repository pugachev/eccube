<?php
/* Smarty version 3.1.40, created on 2022-07-30 15:52:49
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/adminparts/form_customer_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62e4d5419d8a42_25337225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a2a7980f0eabc4793cb3d3f47496b8c8c43e8b1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/admin/adminparts/form_customer_search.tpl',
      1 => 1658652108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e4d5419d8a42_25337225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/vendor/smarty/smarty/libs/plugins/function.html_checkboxes.php','function'=>'smarty_function_html_checkboxes',),));
?>
<tr>
    <th>会員ID</th>
    <td>
    <?php $_smarty_tpl->_assignInScope('key', "search_customer_id");?>
    <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span><?php }?>
    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" size="30" class="box30" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> /></td>
    <th>都道府県</th>
    <td>
        <?php $_smarty_tpl->_assignInScope('key', "search_pref");?>
        <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span><?php }?>
        <select class="top" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
">
            <option value="" selected="selected" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>都道府県を選択</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrPref']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>
    </td>
</tr>
<tr>
    <th>お名前</th>
    <td>
            <?php $_smarty_tpl->_assignInScope('key', "search_name");?>
            <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span><?php }?>
            <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" size="30" class="box30" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
    </td>
    <th>お名前(フリガナ)</th>
    <td>
        <?php $_smarty_tpl->_assignInScope('key', "search_kana");?>
        <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span><?php }?>
        <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" size="30" class="box30" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> />
    </td>
</tr>
<tr>
    <th>性別</th>
    <td>
        <?php $_smarty_tpl->_assignInScope('key', "search_sex");?>
        <?php echo smarty_function_html_checkboxes(array('name'=>$_smarty_tpl->tpl_vars['key']->value,'options'=>$_smarty_tpl->tpl_vars['arrSex']->value,'separator'=>"&nbsp;",'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

    </td>
    <th>誕生月</th>
    <td>
        <?php $_smarty_tpl->_assignInScope('key', "search_birth_month");?>
        <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span><?php }?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" >
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrMonth']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>月
    </td>
</tr>
<tr>
    <th>誕生日</th>
    <td colspan="3">
    <?php $_smarty_tpl->_assignInScope('errkey1', "search_b_start_year");?>
    <?php $_smarty_tpl->_assignInScope('errkey2', "search_b_end_year");?>
        <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]);?>
</span><?php }?>
        <?php $_smarty_tpl->_assignInScope('key', "search_b_start_year");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">----</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrBirthYear']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>年
        <?php $_smarty_tpl->_assignInScope('key', "search_b_start_month");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrMonth']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>月
        <?php $_smarty_tpl->_assignInScope('key', "search_b_start_day");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDay']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>日～
        <?php $_smarty_tpl->_assignInScope('key', "search_b_end_year");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">----</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrBirthYear']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>年
        <?php $_smarty_tpl->_assignInScope('key', "search_b_end_month");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrMonth']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>月
        <?php $_smarty_tpl->_assignInScope('key', "search_b_end_day");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDay']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>日
    </td>
</tr>
<tr>
    <th>メールアドレス</th>
    <td colspan="3">
    <?php $_smarty_tpl->_assignInScope('key', "search_email");?>
    <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span><?php }?>
    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" size="60" class="box60" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>/>
    </td>
</tr>
<tr>
    <th>携帯メールアドレス</th>
    <td colspan="3">
        <?php $_smarty_tpl->_assignInScope('key', "search_email_mobile");?>
        <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span><?php }?>
        <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" size="60" class="box60" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>/></td>
</tr>
<tr>
    <th>電話番号</th>
    <td colspan="3">
        <?php $_smarty_tpl->_assignInScope('key', "search_tel");?>
        <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span><?php }?>
        <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" size="60" class="box60" /></td>
</tr>
<tr>
    <th>職業</th>
    <td colspan="3">
        <?php $_smarty_tpl->_assignInScope('key', "search_job");?>
        <?php echo smarty_function_html_checkboxes(array('name'=>$_smarty_tpl->tpl_vars['key']->value,'options'=>$_smarty_tpl->tpl_vars['arrJob']->value,'separator'=>"&nbsp;",'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>
</td>
</tr>
<tr>
    <th>購入金額</th>
    <td>
        <?php $_smarty_tpl->_assignInScope('key1', "search_buy_total_from");?>
        <?php $_smarty_tpl->_assignInScope('key2', "search_buy_total_to");?>
        <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) {?><span class="attention">
            <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]);?>
</span>
        <?php }?>
        <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
" size="6" class="box6" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> /> 円 ～
        <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key2']->value);?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
" size="6" class="box6" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> /> 円
    </td>
    <th>購入回数</th>
    <td>
        <?php $_smarty_tpl->_assignInScope('key1', "search_buy_times_from");?>
        <?php $_smarty_tpl->_assignInScope('key2', "search_buy_times_to");?>
    <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) {?>
        <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]);?>
</span>
    <?php }?>
    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
" size="6" class="box6" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> /> 回 ～
    <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key2']->value);?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
" size="6" class="box6" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?> /> 回</td>
</tr>
<tr>
    <th>登録・更新日</th>
    <td colspan="3">
    <?php $_smarty_tpl->_assignInScope('errkey1', "search_start_year");?>
    <?php $_smarty_tpl->_assignInScope('errkey2', "search_end_year");?>
        <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]);?>
</span><?php }?>
        <?php $_smarty_tpl->_assignInScope('key', "search_start_year");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">----</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrRegistYear']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>年
        <?php $_smarty_tpl->_assignInScope('key', "search_start_month");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrMonth']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>月
        <?php $_smarty_tpl->_assignInScope('key', "search_start_day");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDay']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>日～
        <?php $_smarty_tpl->_assignInScope('key', "search_end_year");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">----</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrRegistYear']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>年
        <?php $_smarty_tpl->_assignInScope('key', "search_end_month");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrMonth']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>月
        <?php $_smarty_tpl->_assignInScope('key', "search_end_day");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDay']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>日
    </td>
</tr>
<tr>
    <th>最終購入日</th>
    <td colspan="3">
    <?php $_smarty_tpl->_assignInScope('errkey1', "search_buy_start_year");?>
    <?php $_smarty_tpl->_assignInScope('errkey2', "search_buy_end_year");?>
        <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]);?>
</span><?php }?>
        <?php $_smarty_tpl->_assignInScope('key', "search_buy_start_year");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">----</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrRegistYear']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>年
        <?php $_smarty_tpl->_assignInScope('key', "search_buy_start_month");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrMonth']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>月
        <?php $_smarty_tpl->_assignInScope('key', "search_buy_start_day");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDay']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>日～
        <?php $_smarty_tpl->_assignInScope('key', "search_buy_end_year");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">----</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrRegistYear']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>年
        <?php $_smarty_tpl->_assignInScope('key', "search_buy_end_month");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrMonth']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>月
        <?php $_smarty_tpl->_assignInScope('key', "search_buy_end_day");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey2']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="" selected="selected">--</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDay']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>日
    </td>
</tr>
<tr>
    <th>購入商品名</th>
    <td>
        <?php $_smarty_tpl->_assignInScope('key', "search_buy_product_name");?>
        <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span><?php }?>
        <span style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
">
        <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" size="30" class="box30" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
"/>
        </span>
    </td>
    <th>購入商品コード</th>
    <td>
        <?php $_smarty_tpl->_assignInScope('key', "search_buy_product_code");?>
        <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]) {?><span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value]);?>
</span><?php }?>
        <input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['length']);?>
" size="30" class="box30" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key']->value] )));?>
" />
    </td>
</tr>
<tr>
    <th>カテゴリ</th>
    <td colspan="3">
        <?php $_smarty_tpl->_assignInScope('key', "search_category_id");?>
        <select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['errkey']->value]) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sfSetErrorStyle'][0], array( array(),$_smarty_tpl ) );
}?>>
            <option value="">選択してください</option>
            <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrCatList']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key']->value]['value']),$_smarty_tpl);?>

        </select>
    </td>
</tr>
<?php }
}
