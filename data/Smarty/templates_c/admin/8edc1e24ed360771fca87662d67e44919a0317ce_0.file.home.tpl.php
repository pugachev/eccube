<?php
/* Smarty version 3.1.40, created on 2022-07-16 21:27:25
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2aead8d28d9_08681686',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8edc1e24ed360771fca87662d67e44919a0317ce' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/home.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2aead8d28d9_08681686 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),2=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.n2s.php','function'=>'smarty_modifier_n2s',),));
?>

<div id="home">

        <div id="home-info">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arrInfo']->value, 'info');
$_smarty_tpl->tpl_vars['info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->do_else = false;
?>
            <dl class="home-info-item">
                <dt class="date"><?php echo smarty_modifier_script_escape(smarty_modifier_h(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfDispDBDate' ][ 0 ], array( $_smarty_tpl->tpl_vars['info']->value['disp_date'],false ))));?>
</dt>
                <dt class="title"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</dt>
                <dd class="body"><?php echo $_smarty_tpl->tpl_vars['info']->value['body'];?>
</dd>
            </dl>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    
        <div id="home-main">
        <form name="form1" id="form1" method="post" action="#">
            <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />

                        <h2>??????????????????</h2>
            <table summary="??????????????????" class="shop-info">
                <tr>
                    <th>EC-CUBE???????????????</th>
                    <td><?php echo smarty_modifier_script_escape((defined('ECCUBE_VERSION') ? constant('ECCUBE_VERSION') : null));?>
</td>
                </tr>
                <tr>
                    <th>PHP???????????????</th>
                    <td><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['php_version']->value);?>
</td>
                </tr>
                <tr>
                    <th>DB???????????????</th>
                    <td><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['db_version']->value);?>
</td>
                </tr>
                <tr>
                    <th>??????</th>
                    <td><a href="<?php echo smarty_modifier_script_escape((defined('ROOT_URLPATH') ? constant('ROOT_URLPATH') : null));
echo smarty_modifier_script_escape((defined('ADMIN_DIR') ? constant('ADMIN_DIR') : null));?>
system/system.php">???????????????????????????????????????</a></td>
                </tr>
            </table>
            
                        <h2>?????????????????????</h2>
            <table summary="?????????????????????" class="shop-info">
                <tr>
                    <th>??????????????????</th>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['customer_cnt']->value)===null||$tmp==='' ? "0" : $tmp)));?>
???</td>
                </tr>
                <tr>
                    <th>??????????????????</th>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['order_yesterday_amount']->value)===null||$tmp==='' ? "0" : $tmp)));?>
???</td>
                </tr>
                <tr>
                    <th>?????????????????????</th>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['order_yesterday_cnt']->value)===null||$tmp==='' ? "0" : $tmp)));?>
???</td>
                </tr>
                <tr>
                    <th><span>??????????????????</span><span>(????????????) </span></th>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['order_month_amount']->value)===null||$tmp==='' ? "0" : $tmp)));?>
???</td>
                </tr>
                <tr>
                    <th><span>????????????????????? </span><span>(????????????) </span></th>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_n2s((($tmp = @$_smarty_tpl->tpl_vars['order_month_cnt']->value)===null||$tmp==='' ? "0" : $tmp)));?>
???</td>
                </tr>
                <tr>
                    <th>????????????????????????????????????</th>
                    <td><?php echo smarty_modifier_script_escape((($tmp = @$_smarty_tpl->tpl_vars['review_yesterday_cnt']->value)===null||$tmp==='' ? "0" : $tmp));?>
???</th>
                </tr>
                <tr>
                    <th>?????????????????????????????????</th>
                    <td><?php echo smarty_modifier_script_escape((($tmp = @$_smarty_tpl->tpl_vars['customer_point']->value)===null||$tmp==='' ? "0" : $tmp));?>
pt</td>
                </tr>
                <tr>
                    <th>????????????????????????????????????</th>
                    <td><?php echo smarty_modifier_script_escape((($tmp = @$_smarty_tpl->tpl_vars['review_nondisp_cnt']->value)===null||$tmp==='' ? "0" : $tmp));?>
???</td>
                </tr>
                <tr>
                    <th>???????????????</th>
                    <td>
                    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrSoldout']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                    <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrSoldout']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_id']);?>
:<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrSoldout']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name']));?>
<br />
                    <?php
}
}
?>
                    </td>
                </tr>
            </table>
            
                        <h2>??????????????????</h2>
            <table summary="??????????????????" id="home-order">
                <tr>
                    <th class="center">?????????</th>
                    <th class="center">?????????</th>
                    <th class="center">????????????</th>
                    <th class="center">????????????</th>
                    <th class="center">????????????(???)</th>
                </tr>
                <?php
$__section_i_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrNewOrder']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_1_total = $__section_i_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_1_total !== 0) {
for ($__section_i_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_1_iteration <= $__section_i_1_total; $__section_i_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
                <tr>
                    <td><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrNewOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['create_date']);?>
</td>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrNewOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name01']));?>
 <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrNewOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name02']));?>
</td>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrNewOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['product_name']));?>
</td>
                    <td><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrNewOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['payment_method']));?>
</td>
                    <td class="right"><?php echo smarty_modifier_script_escape(smarty_modifier_n2s($_smarty_tpl->tpl_vars['arrNewOrder']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['total']));?>
???</td>
                </tr>
                <?php
}
}
?>
            </table>
            
        </form>
    </div>
    
</div>
<?php }
}
