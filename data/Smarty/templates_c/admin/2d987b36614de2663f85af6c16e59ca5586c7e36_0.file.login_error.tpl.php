<?php
/* Smarty version 3.1.40, created on 2022-07-16 21:57:57
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/login_error.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2b5d5ed55c4_31234598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d987b36614de2663f85af6c16e59ca5586c7e36' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/login_error.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2b5d5ed55c4_31234598 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<div id="outside">
    <div id="out-wrap">
            <div class="logo">
                <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/contents/logo_resize.jpg" width="99" height="15" alt="EC-CUBE" />
            </div>
        <div id="error">
            <div class="out-top"></div>
            <div class="contents">
                <div class="message">
                    <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_error']->value);?>

                </div>
            </div>
            <div class="btn-area-top"></div>
            <div class="btn-area">
                <ul>
                    <li>
                        <a class="btn-action" href="<?php echo smarty_modifier_script_escape((defined('ADMIN_LOGIN_URLPATH') ? constant('ADMIN_LOGIN_URLPATH') : null));?>
"><span class="btn-prev">ログインページに戻る</span></a>
                    </li>
                </ul>
            </div>
            <div class="btn-area-bottom"></div>
        </div>
    </div>
</div>

<?php }
}
