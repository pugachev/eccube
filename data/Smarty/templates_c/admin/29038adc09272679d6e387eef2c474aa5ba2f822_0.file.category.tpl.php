<?php
/* Smarty version 3.1.40, created on 2022-07-16 21:28:33
  from '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/products/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_62d2aef1f414a5_47346899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29038adc09272679d6e387eef2c474aa5ba2f822' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/Smarty/templates/admin/products/category.tpl',
      1 => 1635324287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d2aef1f414a5_47346899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.script_escape.php','function'=>'smarty_modifier_script_escape',),1=>array('file'=>'/Applications/XAMPP/xamppfiles/htdocs/ec-cube2/data/smarty_extends/modifier.h.php','function'=>'smarty_modifier_h',),));
?>

<?php echo '<script'; ?>
 type="text/javascript">//<![CDATA[
    $(function() {
        $('h2').breadcrumbs({
            'bread_crumbs': <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['tpl_bread_crumbs']->value);?>

        });
    });
//]]><?php echo '</script'; ?>
>
<form name="form1" id="form1" method="post" action="?" enctype="multipart/form-data">
    <input type="hidden" name="<?php echo smarty_modifier_script_escape((defined('TRANSACTION_ID_NAME') ? constant('TRANSACTION_ID_NAME') : null));?>
" value="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['transactionid']->value);?>
" />
    <input type="hidden" name="mode" value="edit" />
    <input type="hidden" name="parent_category_id" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['parent_category_id']));?>
" />
    <input type="hidden" name="category_id" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['category_id']));?>
" />
    <input type="hidden" name="keySet" value="" />
    <div id="products" class="contents-main">
        <div class="btn">
            <a class="btn-normal" href="javascript:;" onclick="eccube.setModeAndSubmit('csv','',''); return false;">CSV ダウンロード</a>
            <a class="btn-normal" href='../contents/csv.php?tpl_subno_csv=category'>CSV 出力項目設定</a>
        </div>

                <div id="products-category-left">
            <ul>
                <li>
                    <a href="?"><img src="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['TPL_URLPATH']->value);?>
img/contents/folder_close.gif" alt="フォルダ" />&nbsp;ホーム</a>
                    <?php $_smarty_tpl->_subTemplateRender(((string)(defined('TEMPLATE_ADMIN_REALDIR') ? constant('TEMPLATE_ADMIN_REALDIR') : null))."products/category_tree_fork.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('children'=>$_smarty_tpl->tpl_vars['arrTree']->value,'treeID'=>"f0",'display'=>1), 0, true);
?>
                </li>
            </ul>
        </div>
        
                <div id="products-category-right">


            <div class="now_dir">
                    <?php if ($_smarty_tpl->tpl_vars['arrErr']->value['category_name']) {?>
                    <span class="attention"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrErr']->value['category_name']);?>
</span>
                    <?php }?>
                    <input type="text" name="category_name" value="<?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrForm']->value['category_name']));?>
" size="30" class="box30" maxlength="<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
" style="<?php echo smarty_modifier_script_escape(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'sfGetErrorColor' ][ 0 ], array( $_smarty_tpl->tpl_vars['arrErr']->value['category_name'] )));?>
" />
                    <a class="btn-normal" href="javascript:;" onclick="eccube.setModeAndSubmit('edit','',''); return false;"><span class="btn-next">登録</span></a><span class="attention">&nbsp;（上限<?php echo smarty_modifier_script_escape((defined('STEXT_LEN') ? constant('STEXT_LEN') : null));?>
文字）</span>
            </div>

            <h2></h2>
            <?php if (!empty($_smarty_tpl->tpl_vars['arrList']->value)) {?>

            <table class="list" id="categoryTable">
                <col width="5%" />
                <col width="60%" />
                <col width="10%" />
                <col width="10%" />
                <col width="25%" />
                <tr class="nodrop nodrag">
                    <th>ID</th>
                    <th>カテゴリ名</th>
                    <th class="edit">編集</th>
                    <th class="delete">削除</th>
                    <th>移動</th>
                </tr>

                <?php
$__section_cnt_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['arrList']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_cnt_0_total = $__section_cnt_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_cnt'] = new Smarty_Variable(array());
if ($__section_cnt_0_total !== 0) {
for ($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] = 1, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] = 0; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] <= $__section_cnt_0_total; $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']++, $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['last'] = ($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] === $__section_cnt_0_total);
?>
                <tr id="<?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['category_id']);?>
" style="background:<?php if ($_smarty_tpl->tpl_vars['arrForm']->value['category_id'] != $_smarty_tpl->tpl_vars['arrList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['category_id']) {?>#ffffff<?php } else {
echo smarty_modifier_script_escape((defined('SELECT_RGB') ? constant('SELECT_RGB') : null));
}?>;" align="left">
                    <td class="center"><?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['category_id']);?>
</td>
                    <td>
                    <?php if ($_smarty_tpl->tpl_vars['arrList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['level'] != (defined('LEVEL_MAX') ? constant('LEVEL_MAX') : null)) {?>
                        <a href="?" onclick="eccube.setModeAndSubmit('tree', 'parent_category_id', <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['category_id']);?>
); return false"><?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['category_name']));?>
</a>
                    <?php } else { ?>
                        <?php echo smarty_modifier_script_escape(smarty_modifier_h($_smarty_tpl->tpl_vars['arrList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['category_name']));?>

                    <?php }?>
                    </td>
                    <td class="center">
                        <?php if ($_smarty_tpl->tpl_vars['arrForm']->value['category_id'] != $_smarty_tpl->tpl_vars['arrList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['category_id']) {?>
                        <a href="?" onclick="eccube.setModeAndSubmit('pre_edit', 'category_id', <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['category_id']);?>
); return false;">編集</a>
                        <?php } else { ?>
                        編集中
                        <?php }?>
                    </td>
                    <td class="center">
                        <a href="?" onclick="eccube.setModeAndSubmit('delete', 'category_id', <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['category_id']);?>
); return false;">削除</a>
                    </td>
                    <td class="center">
                                        <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null) != 1) {?>
                    <a href="?" onclick="eccube.setModeAndSubmit('up','category_id', <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['category_id']);?>
); return false;">上へ</a>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['iteration'] : null) != (isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['last'] : null)) {?>
                    <a href="?" onclick="eccube.setModeAndSubmit('down','category_id', <?php echo smarty_modifier_script_escape($_smarty_tpl->tpl_vars['arrList']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_cnt']->value['index'] : null)]['category_id']);?>
); return false;">下へ</a>
                    <?php }?>
                    </td>

                </tr>
                <?php
}
}
?>
            </table>
            <?php } else { ?>
            <p>この階層には、カテゴリが登録されていません。</p>
            <?php }?>
        </div>
        
    </div>
</form>
<?php }
}
