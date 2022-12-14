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

<script type="text/javascript">
<!--

function func_return(){
    document.form1.mode.value = "return";
    document.form1.submit();
}

//-->
</script>


<form name="form1" id="form1" method="post" action="?">
    <input type="hidden" name="<!--{$smarty.const.TRANSACTION_ID_NAME}-->" value="<!--{$transactionid}-->" />
    <input type="hidden" name="mode" value="complete" />

    <!--{foreach from=$arrForm key=key item=item}-->
        <!--{if !is_array($item) && $key ne "mode" && $key ne "subm" && $key ne $smarty.const.TRANSACTION_ID_NAME}-->
            <input type="hidden" name="<!--{$key|h}-->" value="<!--{$item|h}-->" />
        <!--{else}-->
            <input type="hidden" name="<!--{$key|h}-->" value="" />
        <!--{/if}-->
    <!--{/foreach}-->

    <!--{foreach from=$arrForm key=key item=item}-->
        <!--{if $key ne "mode" && $key ne "subm" && $key ne $smarty.const.TRANSACTION_ID_NAME}-->
            <!--{if $key == 'hobby_id'}-->
                <!--{foreach item=hobbyVal from=$item}-->
                    <input type="hidden" name="<!--{$key}-->[]" value="<!--{$hobbyVal|h}-->" />
                <!--{/foreach}-->
            <!--{else}-->
                <input type="hidden" name="<!--{$key|h}-->" value="<!--{$item|h}-->" />
            <!--{/if}-->
        <!--{/if}-->
    <!--{/foreach}-->
    
    <!-- ????????????????????? -->
    <!--{foreach from=$arrSearchData key="key" item="item"}-->
        <!--{if $key ne "customer_id" && $key ne "mode" && $key ne "edit_customer_id" && $key ne $smarty.const.TRANSACTION_ID_NAME}-->
            <!--{if is_array($item)}-->
                <!--{foreach item=c_item from=$item}-->
                    <input type="hidden" name="search_data[<!--{$key|h}-->][]" value="<!--{$c_item|h}-->" />
                <!--{/foreach}-->
            <!--{else}-->
                <input type="hidden" name="search_data[<!--{$key|h}-->]" value="<!--{$item|h}-->" />
            <!--{/if}-->
        <!--{/if}-->
    <!--{/foreach}-->

    <div id="customer" class="contents-main">
        <table class="form">
            <tr>
                <th>??????ID</th>
                <td><!--{$arrForm.customer_id|h}--></td>
            </tr>
            <tr>
                <th>????????????</th>
                <td><!--{if $arrForm.status == 1}-->?????????<!--{else}-->?????????<!--{/if}--></td>
            </tr>
            <tr>
                <th>?????????</th>
                <td><!--{$arrForm.name01|h}--><!--{$arrForm.name02|h}-->??????</td>
            </tr>
            <tr>
                <th>?????????(????????????)</th>
                <td><!--{$arrForm.kana01|h}--><!--{$arrForm.kana02|h}-->??????</td>
            </tr>
            <tr>
                <th>?????????</th>
                <td><!--{$arrForm.company_name|h}--></td>
            </tr>
            <!--{if $smarty.const.FORM_COUNTRY_ENABLE}-->
            <tr>
                <th>???</th>
                <td><!--{$arrCountry[$arrForm.country_id]|h}--></td>
            </tr>
            <tr>
                <th>ZIPCODE</th>
                <td><!--{$arrForm.zipcode|h}--></td>
            </tr>
            <!--{/if}-->
            <tr>
                <th>????????????</th>
                <td>??? <!--{$arrForm.zip01|h}--> - <!--{$arrForm.zip02|h}--></td>
            </tr>
            <tr>
                <th>??????</th>
                <td><!--{$arrPref[$arrForm.pref]|h}--><!--{$arrForm.addr01|h}--><!--{$arrForm.addr02|h}--></td>
            </tr>
            <tr>
                <th>?????????????????????</th>
                <td><!--{$arrForm.email|h}--></td>
            </tr>
            <tr>
                <th>???????????????????????????</th>
                <td><!--{$arrForm.email_mobile|h}--></td>
            </tr>
            <tr>
                <th>???????????????</th>
                <td><!--{$arrForm.tel01|h}--> - <!--{$arrForm.tel02|h}--> - <!--{$arrForm.tel03|h}--></td>
            </tr>
            <tr>
                <th>FAX</th>
                <td><!--{if strlen($arrForm.fax01) > 0}--><!--{$arrForm.fax01|h}--> - <!--{$arrForm.fax02|h}--> - <!--{$arrForm.fax03|h}--><!--{else}-->?????????<!--{/if}--></td>
            </tr>
            <tr>
                <th>??????</th>
                <td><!--{$arrSex[$arrForm.sex]|h}--></td>
            </tr>
            <tr>
                <th>?????????</th>
                <td><!--{$arrJob[$arrForm.job]|default:"?????????"|h}--></td>
            </tr>
            <tr>
                <th>????????????</th>
                <td><!--{if strlen($arrForm.year) > 0 && strlen($arrForm.month) > 0 && strlen($arrForm.day) > 0}--><!--{$arrForm.year|h}-->???<!--{$arrForm.month|h}-->???<!--{$arrForm.day|h}-->???<!--{else}-->?????????<!--{/if}--></td>
            </tr>
            <tr>
                <th>???????????????</th>
                <td><!--{$smarty.const.DEFAULT_PASSWORD}--></td>
            </tr>
            <tr>
                <th>?????????????????????????????????????????????</th>
                <td>
                    ????????? <!--{$arrReminder[$arrForm.reminder]|h}--><br />
                    ????????? <!--{$smarty.const.DEFAULT_PASSWORD}-->
                </td>
            </tr>
            <tr>
                <th>?????????????????????</th>
                <td><!--{$arrMailMagazineType[$arrForm.mailmaga_flg]|h}--></td>
            </tr>
            <tr>
                <th>SHOP?????????</th>
                <td><!--{$arrForm.note|h|nl2br|default:"?????????"}--></td>
            </tr>
            <tr>
                <th>??????????????????</th>
                <td><!--{$arrForm.point|default:"0"|h}--> pt</td>
            </tr>
            <tr>
            <th>??????????????????</th>
            <td><!--{$arrForm.nick_name|h}--></td>
        </tr>
        <tr>
            <th>?????????</th>
            <td><!--{$arrHouse[$arrForm.house_id]|default:"?????????"|h}--></td>
        </tr>
        <tr>
            <th>????????????????????????</th>
            <td><!--{$arrDm[$arrForm.dm_id]|h}--></td>
        </tr>
        <tr>
            <th>??????</th>
            <td>
                <!--{foreach from=$arrForm.hobby_id item=hobby}-->
                    <!--{if $hobby != ""}-->
                        <!--{$arrHobby[$hobby]|h}-->
                    <!--{/if}-->
                <!--{/foreach}-->
            </td>
        </tr>
        <tr>
            <th>??????</th>
            <td><!--{$arrBijin[$arrForm.bijin_id]|h}--></td>
        </tr>
        <tr>
            <th>?????????????????????????????????</th>
            <td><!--{$arrBijin[$arrForm.married_id]|h}--></td>
        </tr>
        </table>
        <div class="btn-area">
            <ul>
                <li><a class="btn-action" href="javascript:;" onclick="func_return(); return false;"><span class="btn-prev">?????????????????????</span></a></li>
                <li><a class="btn-action" href="javascript:;" onclick="eccube.fnFormModeSubmit('form1', 'complete', '', ''); return false;"><span class="btn-next">???????????????????????????</span></a></li>
            </ul>
        </div>
    </div>
</form>
