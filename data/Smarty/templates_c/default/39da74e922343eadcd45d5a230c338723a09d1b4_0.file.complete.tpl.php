<?php
/* Smarty version 3.1.40, created on 2022-07-24 20:03:13
  from '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/shopping/complete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62dd26f1aeb946_25792868',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39da74e922343eadcd45d5a230c338723a09d1b4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/eccube/data/Smarty/templates/default/shopping/complete.tpl',
      1 => 1658652116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62dd26f1aeb946_25792868 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/eccube/data/vendor/smarty/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),));
?>

<div id="undercolumn">
    <div id="undercolumn_shopping">
        <p class="flow_area">
            <img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/picture/img_flow_04.jpg" alt="購入手続きの流れ" />
        </p>
        <h2 class="title"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['tpl_title']->value));?>
</h2>

        <!-- ▼その他決済情報を表示する場合は表示 -->
        <?php if ($_smarty_tpl->tpl_vars['arrOther']->value['title']['value']) {?>
            <p><span class="attention">■<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrOther']->value['title']['name']);?>
情報</span><br />
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrOther']->value, 'item', false, 'key');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['key']->value != "title") {?>
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['name'] != '') {?>
                            <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['item']->value['name']);?>
：
                        <?php }?>
                            <?php echo smarty_modifier_script_escape(nl2br($_smarty_tpl->tpl_vars['item']->value['value']));?>
<br />
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </p>
        <?php }?>
        <!-- ▲コンビに決済の場合には表示 -->

        <div id="complete_area">
            <p class="message"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrInfo']->value['shop_name']));?>
の商品をご購入いただき、ありがとうございました。</p>
            <p>ただいま、ご注文の確認メールをお送りさせていただきました。<br />
                万一、ご確認メールが届かない場合は、トラブルの可能性もありますので大変お手数ではございますがもう一度お問い合わせいただくか、お電話にてお問い合わせくださいませ。<br />
                今後ともご愛顧賜りますようよろしくお願い申し上げます。</p>

            <div class="shop_information">
                <p class="name"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrInfo']->value['shop_name']));?>
</p>
                <p>TEL：<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrInfo']->value['tel01']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrInfo']->value['tel02']);?>
-<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrInfo']->value['tel03']);?>
 <?php if ($_smarty_tpl->tpl_vars['arrInfo']->value['business_hour'] != '') {?>（受付時間/<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrInfo']->value['business_hour']);?>
）<?php }?><br />
                E-mail：<a href="mailto:<?php echo smarty_modifier_script_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['arrInfo']->value['email02'], 'hex'));?>
"><?php echo smarty_modifier_script_escape(smarty_modifier_escape($_smarty_tpl->tpl_vars['arrInfo']->value['email02'], 'hexentity'));?>
</a>
                </p>
            </div>
        </div>

        <div class="btn_area">
            <ul>
                <li>
                    <a href="<?php echo smarty_modifier_script_escape((defined('TOP_URL') ? constant('TOP_URL') : null));?>
">
                        <img class="hover_change_image" src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/button/btn_toppage.jpg" alt="トップページへ" />
                    </a>
                </li>
            </ul>
        </div>

    </div>
</div>
<?php }
}
