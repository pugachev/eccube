<!--{*
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.
 *
 * http://www.ec-cube.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */
*}-->
<form name="form1" id="form1" method="post" action="?" enctype="multipart/form-data">
<input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
<input type="hidden" name="mode" value="complete" />
<!--{foreach key=key item=item from=$arrSearchHidden}-->
    <!--{if is_array($item)}-->
        <!--{foreach item=c_item from=$item}-->
            <input type="hidden" name="<!--{$key|h}-->[]" value="<!--{$c_item|h}-->" />
        <!--{/foreach}-->
    <!--{else}-->
        <input type="hidden" name="<!--{$key|h}-->" value="<!--{$item|h}-->" />
    <!--{/if}-->
<!--{/foreach}-->
<!--{foreach key=key item=item from=$arrForm}-->
    <!--{if $key == 'product_status'}-->
        <!--{foreach item=statusVal from=$item}-->
            <input type="hidden" name="<!--{$key}-->[]" value="<!--{$statusVal|h}-->" />
        <!--{/foreach}-->
    <!--{elseif $key == 'gift_id'}-->
        <!--{foreach item=giftVal from=$item}-->
            <input type="hidden" name="<!--{$key}-->[]" value="<!--{$giftVal|h}-->" />
        <!--{/foreach}-->
    <!--{elseif $key == 'arrCategoryId'}-->
        <!--{* nop *}-->
    <!--{elseif $key == 'arrFile'}-->
        <!--{* nop *}-->
    <!--{else}-->
        <input type="hidden" name="<!--{$key}-->" value="<!--{$item|h}-->" />
    <!--{/if}-->
<!--{/foreach}-->
<div id="products" class="contents-main">

    <table>
        <tr>
            <th>?????????</th>
            <td>
                <!--{$arrForm.name|h}-->
            </td>
        </tr>
        <tr>
            <th>??????????????????</th>
            <td>
                <!--{section name=cnt loop=$arrForm.arrCategoryId}-->
                    <!--{assign var=key value=$arrForm.arrCategoryId[cnt]}-->
                    <!--{$arrCatList[$key]|sfTrim}--><br />
                <!--{/section}-->
            </td>
        </tr>
        <tr>
            <th>??????????????????</th>
            <td>
                <!--{$arrDISP[$arrForm.status]}-->
            </td>
        </tr>
        <tr>
            <th>?????????????????????</th>
            <td>
                <!--{foreach from=$arrForm.product_status item=status}-->
                    <!--{if $status != ""}-->
                        <img src="<!--{$TPL_URLPATH_PC}--><!--{$arrSTATUS_IMAGE[$status]}-->">
                    <!--{/if}-->
                <!--{/foreach}-->
            </td>
        </tr>

        <!--{if $arrForm.has_product_class != true}-->
            <tr>
                <th>????????????</th>
                <td>
                    <!--{$arrProductType[$arrForm.product_type_id]}-->
                </td>
            </tr>
            <!--{if $arrForm.product_type_id == PRODUCT_TYPE_DOWNLOAD}-->
            <tr>
                <th>???????????????????????????????????????</th>
                <td>
                    <!--{$arrForm.down_filename|h}-->
                </td>
            </tr>
            <tr>
                <th>???????????????????????????<br />????????????</th>
                <td>
                    <!--{if $arrForm.down_realfilename != ""}-->
                        <!--{$arrForm.down_realfilename|h}-->
                    <!--{/if}-->
                </td>
            </tr>
            <!--{/if}-->
            <tr>
                <th>???????????????</th>
                <td>
                    <!--{$arrForm.product_code|h}-->
                </td>
            </tr>
            <tr>
                <th><!--{$smarty.const.NORMAL_PRICE_TITLE}--></th>
                <td>
                    <!--{if strlen($arrForm.price01) >= 1}--><!--{$arrForm.price01|h}--> ???<!--{/if}-->
                </td>
            </tr>
            <tr>
                <th><!--{$smarty.const.SALE_PRICE_TITLE}--></th>
                <td>
                    <!--{if strlen($arrForm.price02) >= 1}--><!--{$arrForm.price02|h}--> ???<!--{/if}-->
                </td>
            </tr>
            <tr>
                <th>?????????</th>
                <td>
                    <!--{if $arrForm.stock_unlimited == 1}-->
                        ?????????
                    <!--{else}-->
                        <!--{$arrForm.stock|h}-->
                    <!--{/if}-->
                </td>
            </tr>
        <!--{/if}-->
        <!--{if $smarty.const.OPTION_PRODUCT_TAX_RULE ==1}-->
            <tr>
                <th>????????????</th>
                <td>
                    <!--{if strlen($arrForm.tax_rate) >= 1}--><!--{$arrForm.tax_rate|h}--> %<!--{/if}-->
                </td>
            </tr>
        <!--{/if}-->

        <tr>
            <th>????????????</th>
            <td>
                <!--{if strlen($arrForm.deliv_fee) >= 1}--><!--{$arrForm.deliv_fee|h}--> ???<!--{/if}-->
            </td>
        </tr>
        <tr>
            <th>?????????????????????</th>
            <td>
                <!--{if strlen($arrForm.point_rate) >= 1}--><!--{$arrForm.point_rate|h}--> ???<!--{/if}-->
            </td>
        </tr>
        <tr>
            <th>???????????????</th>
            <td>
                <!--{$arrDELIVERYDATE[$arrForm.deliv_date_id]|h}-->
            </td>
        </tr>
        <tr>
            <th>???????????????</th>
            <td>
                <!--{$arrForm.sale_limit|default:'?????????'|h}-->
            </td>
        </tr>
        <tr>
            <th>????????????</th>
            <td>
                <!--{$arrMaker[$arrForm.maker_id]|h}-->
            </td>
        </tr>
        <tr>
            <th>????????????URL</th>
            <td style="word-break: break-all;">
                <!--{$arrForm.comment1|h}-->
            </td>
        </tr>
        <tr>
            <th>???????????????</th>
            <td>
                <!--{$arrForm.comment3|h}-->
            </td>
        </tr>
        <tr>
            <th>?????????(SHOP??????)</th>
            <td>
                <!--{$arrForm.note|h|nl2br}-->
            </td>
        </tr>
        <tr>
            <th>??????-?????????????????????</th>
            <td>
                <!--{$arrForm.main_list_comment|h|nl2br}-->
            </td>
        </tr>
        <tr>
            <th>??????-?????????????????????</th>
            <td>
                <!--{$arrForm.main_comment|nl2br_html}-->
            </td>
        </tr>
        <tr>
            <th>??????-???????????????</th>
            <td>
                <!--{assign var=key value="main_list_image"}-->
                <!--{if $arrForm.arrFile[$key].filepath != ""}-->
                    <img src="<!--{$arrForm.arrFile[$key].filepath}-->" alt="<!--{$arrForm.name|h}-->" /><br />
                <!--{/if}-->
            </td>
        </tr>
        <tr>
            <th>??????-???????????????</th>
            <td>
                <!--{assign var=key value="main_image"}-->
                <!--{if $arrForm.arrFile[$key].filepath != ""}-->
                    <img src="<!--{$arrForm.arrFile[$key].filepath}-->" alt="<!--{$arrForm.name|h}-->" /><br />
                <!--{/if}-->
            </td>
        </tr>
        <tr>
            <th>??????-?????????????????????</th>
            <td>
                <!--{assign var=key value="main_large_image"}-->
                <!--{if $arrForm.arrFile[$key].filepath != ""}-->
                    <img src="<!--{$arrForm.arrFile[$key].filepath}-->" alt="<!--{$arrForm.name|h}-->" /><br />
                <!--{/if}-->
            </td>
        </tr>

        <!--{* ????????????????????? *}-->
        <!--{if "sfViewAdminOpe"|function_exists === TRUE}-->
            <!--{include file="`$smarty.const.MODULE_REALDIR`mdl_opebuilder/admin_ope_view.tpl"}-->
        <!--{/if}-->

        <!--{section name=cnt loop=$smarty.const.PRODUCTSUB_MAX}-->
            <!--?????????<!--{$smarty.section.cnt.iteration}-->-->
            <tr>
                <th>??????-?????????????????????<!--{$smarty.section.cnt.iteration}-->???</th>
                <td>
                    <!--{assign var=key value="sub_title`$smarty.section.cnt.iteration`"}-->
                    <!--{$arrForm[$key]|h}-->
                </td>
            </tr>
            <tr>
                <th>??????-?????????????????????<!--{$smarty.section.cnt.iteration}-->???</th>
                <td>
                    <!--{assign var=key value="sub_comment`$smarty.section.cnt.iteration`"}-->
                    <!--{$arrForm[$key]|nl2br_html}-->
                </td>
            </tr>
            <tr>
                <th>??????-???????????????<!--{$smarty.section.cnt.iteration}-->???</th>
                <td>
                    <!--{assign var=key value="sub_image`$smarty.section.cnt.iteration`"}-->
                    <!--{if $arrForm.arrFile[$key].filepath != ""}-->
                        <img src="<!--{$arrForm.arrFile[$key].filepath}-->" alt="<!--{$arrForm.name|h}-->" /><br />
                    <!--{/if}-->
                </td>
            </tr>
            <tr>
                <th>??????-?????????????????????<!--{$smarty.section.cnt.iteration}-->???</th>
                <td>
                    <!--{assign var=key value="sub_large_image`$smarty.section.cnt.iteration`"}-->
                    <!--{if $arrForm.arrFile[$key].filepath != ""}-->
                        <img src="<!--{$arrForm.arrFile[$key].filepath}-->" alt="<!--{$arrForm.name|h}-->" /><br />
                    <!--{/if}-->
                </td>
            </tr>
            <!--?????????<!--{$smarty.section.cnt.iteration}-->-->
        <!--{/section}-->

        <!--{if $smarty.const.OPTION_RECOMMEND == 1}-->
            <!--???????????????-->
            <!--{section name=cnt loop=$smarty.const.RECOMMEND_PRODUCT_MAX}-->
            <!--{assign var=recommend_no value="`$smarty.section.cnt.iteration`"}-->
                <tr>
                    <th>????????????(<!--{$smarty.section.cnt.iteration}-->)<br />
                        <!--{if $arrRecommend[$recommend_no].product_id|strlen >= 1}-->
                            <img src="<!--{$smarty.const.IMAGE_SAVE_URLPATH}--><!--{$arrRecommend[$recommend_no].main_list_image|sfNoImageMainList|h}-->" style="max-width: 65px;max-height: 65;" alt="<!--{$arrRecommend[$recommend_no].name|h}-->" />
                        <!--{/if}-->
                    </th>
                    <td>
                        <!--{if $arrRecommend[$recommend_no].product_id|strlen >= 1}-->
                            ???????????????:<!--{$arrRecommend[$recommend_no].product_code_min}--><br />
                            ?????????:<!--{$arrRecommend[$recommend_no].name|h}--><br />
                            ????????????:<br />
                            <!--{$arrRecommend[$recommend_no].comment|h|nl2br}-->
                        <!--{/if}-->
                    </td>
                </tr>
            <!--{/section}-->
            <!--???????????????-->
        <!--{/if}-->
        <tr>
        <th>?????????????????????</th>
            <td>
                <!--{$arrForm.maker_code|h}-->
            </td>
        </tr>
        <tr>
            <th>????????????</th>
            <td>
                <!--{$arrDeliveryType[$arrForm.delivery_type_id]|h}-->
            </td>
        </tr>
        <tr>
            <th>????????????</th>
            <td>
                <!--{$arrWarrantyPeriod[$arrForm.warranty_period_id]|h}-->
            </td>
        </tr>
        <tr>
            <th>???????????????</th>
            <td>
                <!--{foreach from=$arrForm.gift_id item=gift}-->
                    <!--{if $gift != ""}-->
                        <!--{$arrGift[$gift]|h}-->
                    <!--{/if}-->
                <!--{/foreach}-->
            </td>
        </tr>
    </table>

    <div class="btn-area">
        <ul>
            <li><a class="btn-action" href="javascript:;" onclick="eccube.setModeAndSubmit('confirm_return','',''); return false;"><span class="btn-prev">????????????????????????</span></a></li>
            <li><a class="btn-action" href="javascript:;" onclick="document.form1.submit(); return false;"><span class="btn-next">???????????????????????????</span></a></li>
        </ul>
    </div>
</div>
</form>
