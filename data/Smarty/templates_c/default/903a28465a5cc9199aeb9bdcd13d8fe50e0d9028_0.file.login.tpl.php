<?php
/* Smarty version 3.1.40, created on 2022-07-20 06:22:37
  from '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/default/frontparts/bloc/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d7209d752b67_74048160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '903a28465a5cc9199aeb9bdcd13d8fe50e0d9028' => 
    array (
      0 => '/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/Smarty/templates/default/frontparts/bloc/login.tpl',
      1 => 1658234935,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d7209d752b67_74048160 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/home/ikefuku40/ikefukuro40.tech/public_html/eccube/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),));
?>

<div class="block_outer"><div id="login_area"><h2><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/title/tit_bloc_login.gif" alt="ログイン" /></h2><form name="login_form" id="login_form" method="post" action="<?php echo smarty_modifier_script_escape((defined('HTTPS_URL') ? constant('HTTPS_URL') : null));?>
frontparts/login_check.php"<?php if ($_smarty_tpl->tpl_vars['tpl_login']->value) {?> onsubmit="return eccube.checkLoginFormInputted('login_form')"<?php }?>><input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" /><input type="hidden" name="mode" value="login" /><input type="hidden" name="url" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_SERVER['REQUEST_URI']));?>
" /><div class="block_body"><?php if ($_smarty_tpl->tpl_vars['tpl_login']->value) {?><p>ようこそ<br /><span class="user_name"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_name1']->value));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_name2']->value));?>
 様</span><br /><?php if ((defined('USE_POINT') ? constant('USE_POINT') : null) !== false) {?>所持ポイント：<span class="point"> <?php echo smarty_modifier_script_escape((($tmp = @smarty_modifier_n2s($_smarty_tpl->tpl_vars['tpl_user_point']->value))===null||$tmp==='' ? 0 : $tmp));?>
 pt</span><?php }?></p><?php if (!$_smarty_tpl->tpl_vars['tpl_disable_logout']->value) {?><p class="btn"><input type="image" class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_bloc_logout.jpg" onclick="eccube.fnFormModeSubmit('login_form', 'logout', '', ''); return false;" alt="ログアウト" /></p><?php }
} else { ?><dl class="formlist"><dt>メールアドレス</dt><dd><input type="text" name="login_email" class="box140" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_login_email']->value));?>
" style="ime-mode: disabled;" /></dd><dd class="mini"><input type="checkbox" name="login_memory" id="login_memory" value="1" <?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetChecked' ][ 0 ], array( $_smarty_tpl->tpl_vars['tpl_login_memory']->value,1 )));?>
 /><label for="login_memory"><span>コンピューターに記憶する</span></label></dd></dl><dl class="formlist"><dt class="password">パスワード</dt><dd><input type="password" name="login_pass" class="box140" /></dd><dd class="mini"><a href="<?php echo smarty_modifier_script_escape((defined('HTTPS_URL') ? constant('HTTPS_URL') : null));?>
forgot/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
" onclick="eccube.openWindow('<?php echo smarty_modifier_script_escape((defined('HTTPS_URL') ? constant('HTTPS_URL') : null));?>
forgot/<?php echo smarty_modifier_script_escape((defined('DIR_INDEX_PATH') ? constant('DIR_INDEX_PATH') : null));?>
','forget','600','400',{scrollbars:'no',resizable:'no'}); return false;" target="_blank">パスワードを忘れた方はこちら</a></dd></dl><p class="btn"><input type="image" class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_bloc_login.jpg" alt="ログイン" /></p><?php }?></div></form></div></div>
<?php }
}
