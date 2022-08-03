<?php
/* Smarty version 3.1.40, created on 2022-07-16 22:34:05
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/frontparts/form_personal_input.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2be4d6a1ac2_09010992',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bce88f05907d792bdf8eac6e3e9fa2d68153951e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/frontparts/form_personal_input.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2be4d6a1ac2_09010992 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),3=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/vendor/smarty/smarty/libs/plugins/function.html_radios.php','function'=>'smarty_function_html_radios',),));
?>

<col width="30%" /><col width="70%" /><tr><th>お名前<span class="attention">※</span></th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."name01");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."name02");
if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]);?>
</div><?php }?>姓&nbsp;<input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] )));?>
; ime-mode: active;" class="box120" />&nbsp;名&nbsp;<input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key2']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value] )));?>
; ime-mode: active;" class="box120" /></td></tr><tr><th>お名前(フリガナ)<?php if (!(defined('FORM_COUNTRY_ENABLE') ? constant('FORM_COUNTRY_ENABLE') : null)) {?><span class="attention">※</span><?php }?></th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."kana01");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."kana02");
if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]);?>
</div><?php }?>セイ&nbsp;<input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] )));?>
; ime-mode: active;" class="box120" />&nbsp;メイ&nbsp;<input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key2']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value] )));?>
; ime-mode: active;" class="box120" /></td></tr><tr><th>会社名</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."company_name");
if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);?>
</div><?php }?><input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] )));?>
; ime-mode: active;" class="box300" />&nbsp;</td></tr><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."zip01");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."zip02");
$_smarty_tpl->_assignInScope('key3', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."pref");
$_smarty_tpl->_assignInScope('key4', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."addr01");
$_smarty_tpl->_assignInScope('key5', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."addr02");
$_smarty_tpl->_assignInScope('key6', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."country_id");
$_smarty_tpl->_assignInScope('key7', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."zipcode");
if (!(defined('FORM_COUNTRY_ENABLE') ? constant('FORM_COUNTRY_ENABLE') : null)) {?><input type="hidden" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key6']->value);?>
" value="<?php echo smarty_modifier_script_escape((defined('DEFAULT_COUNTRY_ID') ? constant('DEFAULT_COUNTRY_ID') : null));?>
" /><?php } else { ?><tr><th>国<span class="attention">※</span></th><td><?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key6']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key6']->value]);?>
</div><?php }?><select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key6']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key6']->value] )));?>
"><option value="" selected="selected">国を選択</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrCountry']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key6']->value]['value'])===null||$tmp==='' ? (defined('DEFAULT_COUNTRY_ID') ? constant('DEFAULT_COUNTRY_ID') : null) : $tmp)),$_smarty_tpl);?>
</select></td></tr><tr><th>ZIP CODE</th><td><?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key7']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key7']->value]);?>
</div><?php }?><input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key7']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key7']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key7']->value]['length']);?>
" class="box120" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key7']->value] )));?>
; ime-mode: disabled;" /></td></tr><?php }?><tr><th>郵便番号<?php if (!(defined('FORM_COUNTRY_ENABLE') ? constant('FORM_COUNTRY_ENABLE') : null)) {?><span class="attention">※</span><?php }?></th><td><?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]);?>
</div><?php }?><p class="top">〒&nbsp;<input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] )));?>
; ime-mode: disabled;" class="box60" />&nbsp;-&nbsp;<input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key2']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value] )));?>
; ime-mode: disabled;" class="box60" />&nbsp;<a href="https://www.post.japanpost.jp/zipcode/" target="_blank"><span class="mini">郵便番号検索</span></a></p><p class="zipimg"><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));?>
input_zip.php" onclick="eccube.getAddress('<?php echo smarty_modifier_script_escape((defined('INPUT_ZIP_URLPATH') ? constant('INPUT_ZIP_URLPATH') : null));?>
', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key2']->value);?>
', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key3']->value);?>
', '<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key4']->value);?>
'); return false;" target="_blank"><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_address_input.jpg" alt="住所自動入力" /></a>&nbsp;<span class="mini">郵便番号を入力後、クリックしてください。</span></p></td></tr><tr><th>住所<span class="attention">※</span></th><td><?php if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key3']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key4']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key5']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key3']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key4']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key5']->value]);?>
</div><?php }?><select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key3']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key3']->value] )));?>
"><option value="" selected="selected">都道府県を選択</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrPref']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key3']->value]['value']),$_smarty_tpl);?>
</select><p class="top"><input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key4']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key4']->value]['value']));?>
" class="box300" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key4']->value] )));?>
; ime-mode: active;" /><br /><?php echo smarty_modifier_script_escape((defined('SAMPLE_ADDRESS1') ? constant('SAMPLE_ADDRESS1') : null));?>
</p><p class="top"><input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key5']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key5']->value]['value']));?>
" class="box300" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key5']->value] )));?>
; ime-mode: active;" /><br /><?php echo smarty_modifier_script_escape((defined('SAMPLE_ADDRESS2') ? constant('SAMPLE_ADDRESS2') : null));?>
</p><p class="mini"><span class="attention">住所は2つに分けてご記入ください。マンション名は必ず記入してください。</span></p></td></tr><tr><th>電話番号<span class="attention">※</span></th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."tel01");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."tel02");
$_smarty_tpl->_assignInScope('key3', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."tel03");
if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key3']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key3']->value]);?>
</div><?php }?><input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] )));?>
; ime-mode: disabled;" class="box60" />&nbsp;-&nbsp;<input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key2']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value] )));?>
; ime-mode: disabled;" class="box60" />&nbsp;-&nbsp;<input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key3']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key3']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key3']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key3']->value] )));?>
; ime-mode: disabled;" class="box60" /></td></tr><tr><th>FAX</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fax01");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fax02");
$_smarty_tpl->_assignInScope('key3', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."fax03");
if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key3']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key3']->value]);?>
</div><?php }?><input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] )));?>
; ime-mode: disabled;" class="box60" />&nbsp;-&nbsp;<input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key2']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value] )));?>
; ime-mode: disabled;" class="box60" />&nbsp;-&nbsp;<input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key3']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key3']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key3']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key3']->value] )));?>
; ime-mode: disabled;" class="box60" /></td></tr><?php if ($_smarty_tpl->tpl_vars['flgFields']->value > 1) {?><tr><th>メールアドレス<span class="attention">※</span></th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."email");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."email02");
if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]);?>
</div><?php }?><input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] )));?>
; ime-mode: disabled;" class="box300 top" /><br /><input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key2']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]).($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) )));?>
; ime-mode: disabled;" class="box300" onPaste="return false;"/><br /><span class="attention mini">確認のため2度入力してください。</span></td></tr><?php if ($_smarty_tpl->tpl_vars['emailMobile']->value) {?><tr><th>携帯メールアドレス</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."email_mobile");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."email_mobile02");
if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]);?>
</div><?php }?><input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] )));?>
; ime-mode: disabled;" maxlength="<?php echo smarty_modifier_script_escape((defined('MTEXT_LEN') ? constant('MTEXT_LEN') : null));?>
" class="box300 top" /><br /><input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key2']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]).($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) )));?>
; ime-mode: disabled;" maxlength="<?php echo smarty_modifier_script_escape((defined('MTEXT_LEN') ? constant('MTEXT_LEN') : null));?>
" class="box300" onPaste="return false;"/><br /><span class="attention mini">確認のため2度入力してください。</span></td></tr><?php }?><tr><th>性別<span class="attention">※</span></th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."sex");
if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);?>
</div><?php }?><span style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] )));?>
"><?php echo smarty_function_html_radios(array('name'=>$_smarty_tpl->tpl_vars['key1']->value,'options'=>$_smarty_tpl->tpl_vars['arrSex']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value'],'separator'=>'<br />'),$_smarty_tpl);?>
</span></td></tr><tr><th>職業</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."job");
if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);?>
</div><?php }?><select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
"><option value="" selected="selected">選択してください</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrJob']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']),$_smarty_tpl);?>
</select></td></tr><tr><th>生年月日</th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."year");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."month");
$_smarty_tpl->_assignInScope('key3', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."day");
$_smarty_tpl->_assignInScope('errBirth', ((string)$_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]).((string)$_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]).((string)$_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key3']->value]));
if ($_smarty_tpl->tpl_vars['errBirth']->value) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['errBirth']->value);?>
</div><?php }?><select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['errBirth']->value )));?>
"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrYear']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>
</select>年&nbsp;<select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key2']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['errBirth']->value )));?>
"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrMonth']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>
</select>月&nbsp;<select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key3']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['errBirth']->value )));?>
"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrDay']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key3']->value]['value'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>
</select>日</td></tr><?php if ($_smarty_tpl->tpl_vars['flgFields']->value > 2) {?><tr><th>希望するパスワード<span class="attention">※</span><br /></th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."password");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."password02");
if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]);?>
</div><?php }?><input type="password" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] )));?>
" class="box120" /><p><span class="attention mini">半角英数字<?php echo smarty_modifier_script_escape((defined('PASSWORD_MIN_LEN') ? constant('PASSWORD_MIN_LEN') : null));?>
～<?php echo smarty_modifier_script_escape((defined('PASSWORD_MAX_LEN') ? constant('PASSWORD_MAX_LEN') : null));?>
文字でお願いします。（記号可）</span></p><input type="password" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key2']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
" maxlength="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['length']);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]).($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) )));?>
" class="box120" /><p><span class="attention mini">確認のために2度入力してください。</span></p></td></tr><tr><th>パスワードを忘れた時のヒント<span class="attention">※</span></th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."reminder");
$_smarty_tpl->_assignInScope('key2', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."reminder_answer");
if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] || $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);
echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value]);?>
</div><?php }?>質問：<select name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key1']->value);?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] )));?>
"><option value="" selected="selected">選択してください</option><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['arrReminder']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value']),$_smarty_tpl);?>
</select><br />答え：<input type="text" name="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['key2']->value);?>
" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key2']->value]['value']));?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key2']->value] )));?>
; ime-mode: active;" class="box260" /></td></tr><tr><th>メールマガジン送付について<span class="attention">※</span></th><td><?php $_smarty_tpl->_assignInScope('key1', ((string)$_smarty_tpl->tpl_vars['prefix']->value)."mailmaga_flg");
if ($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]) {?><div class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value]);?>
</div><?php }?><span style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value[$_smarty_tpl->tpl_vars['key1']->value] )));?>
"><?php echo smarty_function_html_radios(array('name'=>$_smarty_tpl->tpl_vars['key1']->value,'options'=>$_smarty_tpl->tpl_vars['arrMAILMAGATYPE']->value,'selected'=>$_smarty_tpl->tpl_vars['arrForm']->value[$_smarty_tpl->tpl_vars['key1']->value]['value'],'separator'=>'<br />'),$_smarty_tpl);?>
</span></td></tr><?php }
}
}
}
