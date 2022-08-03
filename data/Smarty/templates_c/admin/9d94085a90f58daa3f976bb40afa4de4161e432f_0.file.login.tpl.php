<?php
/* Smarty version 3.1.40, created on 2022-07-16 21:27:12
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2aea0d9ff45_87502881',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d94085a90f58daa3f976bb40afa4de4161e432f' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/login.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2aea0d9ff45_87502881 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>


<div id="login-wrap">

    <div id="login-form" class="clearfix">
        <h1><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/contents/admin_login_logo.jpg" width="140" height="150" alt="EC-CUBE管理画面" /></h1>
        <div id="input-form">
            <form name="form1" id="form1" method="post" action="?">
                <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
                <input type="hidden" name="mode" value="login" />
                <p><label for="login_id">ID</label></p>
                <input type="text" name="login_id" size="20" class="box25" />
                <p><label for="password">PASSWORD</label></p>
                <input type="password" name="password" size="20" class="box25" />
                <p><a class="btn-tool-format" href="javascript:;" onclick="document.form1.submit(); return false;"><span>LOGIN</span></a></p>
            </form>
        </div>
    </div>

</div>
<div id="copyright">Copyright &copy; 2000-<?php echo smarty_modifier_script_escape(smarty_modifier_date_format(time(),"%Y"));?>
 EC-CUBE CO.,LTD. All Rights Reserved.</div>

<?php echo '<script'; ?>
 type="text/javascript">//<![CDATA[
document.form1.login_id.focus();
$(function() {
    $('<input type="submit" />')
        .css({'position' : 'absolute',
            'top' : '-1000px'})
        .appendTo('form');
});
//]]><?php echo '</script'; ?>
>
<?php }
}
