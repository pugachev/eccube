<?php
/* Smarty version 3.1.40, created on 2022-07-16 22:33:30
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/entry/kiyaku.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2be2a65fc17_84240281',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85664886236c71a87348e9b01e9fea7ed05e7f98' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/default/entry/kiyaku.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2be2a65fc17_84240281 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),));
?>

<div id="undercolumn">
    <div id="undercolumn_entry">
        <h2 class="title"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_title']->value));?>
</h2>
        <p class="message">【重要】 会員登録をされる前に、下記ご利用規約をよくお読みください。</p>
        <p>規約には、本サービスを使用するに当たってのあなたの権利と義務が規定されております。<br />
            「同意して会員登録へ」ボタンをクリックすると、あなたが本規約の全ての条件に同意したことになります。
        </p>

        <form name="form1" id="form1" method="post" action="?">
            <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
            <textarea name="textfield" class="kiyaku_text" cols="80" rows="30" readonly="readonly"><?php echo smarty_modifier_script_escape("\n");
echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_kiyaku_text']->value));?>
</textarea>

            <div class="btn_area">
                <ul>
                    <li>
                        <a href="<?php echo smarty_modifier_script_escape((defined('TOP_URL') ? constant('TOP_URL') : null));?>
">
                            <img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_entry_cannot.jpg" alt="同意しない" />
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo smarty_modifier_script_escape((defined('ENTRY_URL') ? constant('ENTRY_URL') : null));?>
">
                            <img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_entry_agree.jpg" alt="同意して会員登録へ" />
                        </a>
                    </li>
                </ul>
            </div>

        </form>
    </div>
</div>
<?php }
}
