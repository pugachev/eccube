<?php
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

require_once CLASS_EX_REALDIR . 'page_extends/admin/LC_Page_Admin_Ex.php';

/**
 * 会員情報修正 のページクラス.
 *
 * @package Page
 * @author EC-CUBE CO.,LTD.
 * @version $Id$
 */
class LC_Page_Admin_Customer_Edit extends LC_Page_Admin_Ex
{
    /** @var array */
    public $arrSearchErr;

    /**
     * Page を初期化する.
     *
     * @return void
     */
    public function init()
    {
        parent::init();
        $this->tpl_mainpage = 'customer/edit.tpl';
        $this->tpl_mainno = 'customer';
        $this->tpl_subno = 'index';
        $this->tpl_pager = 'pager.tpl';
        $this->tpl_maintitle = '会員管理';
        $this->tpl_subtitle = '会員登録';

        $masterData = new SC_DB_MasterData_Ex();
        $this->arrPref = $masterData->getMasterData('mtb_pref');
        $this->arrCountry = $masterData->getMasterData('mtb_country');
        $this->arrJob = $masterData->getMasterData('mtb_job');
        $this->arrSex = $masterData->getMasterData('mtb_sex');
        $this->arrReminder = $masterData->getMasterData('mtb_reminder');
        $this->arrStatus = $masterData->getMasterData('mtb_customer_status');
        $this->arrMailMagazineType = $masterData->getMasterData('mtb_mail_magazine_type');

        // STEP2：会員カスタマイズ 項目追加
        $this->arrHouse = $masterData->getMasterData('mtb_house');
        $this->arrDm = $masterData->getMasterData('mtb_direct_mail');
        $this->arrHobby = $masterData->getMasterData('mtb_hobby');
        $this->arrBijin = $masterData->getMasterData('mtb_bijin');
        $this->arrMarried = $masterData->getMasterData('mtb_married_type');

        // 日付プルダウン設定
        $objDate = new SC_Date_Ex(BIRTH_YEAR);
        $this->arrYear = $objDate->getYear();
        $this->arrMonth = $objDate->getMonth();
        $this->arrDay = $objDate->getDay();

        // 支払い方法種別
        $this->arrPayment = SC_Helper_Payment_Ex::getIDValueList();
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    public function process()
    {
        $this->action();
        $this->sendResponse();
    }

    /**
     * Page のアクション.
     *
     * @return void
     */
    public function action()
    {
        // パラメーター管理クラス
        $objFormParam = new SC_FormParam_Ex();
        // 検索引き継ぎ用パラメーター管理クラス
        $objFormSearchParam = new SC_FormParam_Ex();

        // mtake add 
        // アップロードファイル情報の初期化
        $objUpFile = new SC_UploadFile_Ex(IMAGE_TEMP_REALDIR, IMAGE_SAVE_REALDIR);
        $this->lfInitFile($objUpFile);
        $objUpFile->setHiddenFileList($_POST);

        // モードによる処理切り替え
        switch ($this->getMode()) {
            // 画像のアップロード
            case 'upload_image':
                // パラメーター初期化
                // mtake add 理論的にはSC_Helper_CustomerのsfCustomerRegisterParamを通るので、そこでパラメータの登録は完了しているはず
                $this->lfInitParam($objFormParam);
                $objFormParam->setParam($_POST);
                $objFormParam->convParam();
                $this->arrForm = $objFormParam->getHashArray();
                // ファイルを一時ディレクトリにアップロード
                $this->arrErr[$this->arrForm['image_key']] = $objUpFile->makeTempFile($this->arrForm['image_key'], false);
                // 入力画面表示設定
                $this->arrForm = $this->lfSetViewParam_InputPage($objUpFile, $objDownFile, $this->arrForm);
                break;
            case 'confirm':
                // パラメーター処理
                $this->lfInitParam($objFormParam);
                $objFormParam->setParam($_POST);
                $objFormParam->convParam();
                // 入力パラメーターチェック
                $this->arrErr = $this->lfCheckError($objFormParam);
                $arrForm = $objFormParam->getHashArray();
                $this->arrForm = $this->lfSetViewParam_ConfirmPage($objUpFile,$arrForm);
                // 検索引き継ぎ用パラメーター処理
                $this->lfInitSearchParam($objFormSearchParam);
                $objFormSearchParam->setParam($objFormParam->getValue('search_data'));
                $this->arrSearchErr = $this->lfCheckErrorSearchParam($objFormSearchParam);
                $this->arrSearchData = $objFormSearchParam->getSearchArray();
                if (!SC_Utils_Ex::isBlank($this->arrErr) or !SC_Utils_Ex::isBlank($this->arrSearchErr)) {
                    return;
                }
                // 確認画面テンプレートに切り替え
                $this->tpl_mainpage = 'customer/edit_confirm.tpl';
                break;
            case 'edit_search':
                // 検索引き継ぎ用パラメーター処理
                $this->lfInitSearchParam($objFormSearchParam);
                $objFormSearchParam->setParam($_REQUEST);
                $this->arrErr = $this->lfCheckErrorSearchParam($objFormSearchParam);
                $this->arrSearchData = $objFormSearchParam->getSearchArray();
                if (!SC_Utils_Ex::isBlank($this->arrErr)) {
                    return;
                }
                // 指定会員の情報をセット
                $this->arrForm = SC_Helper_Customer_Ex::sfGetCustomerData($objFormSearchParam->getValue('edit_customer_id'), true);
                // 購入履歴情報の取得
                list($this->tpl_linemax, $this->arrPurchaseHistory, $this->objNavi) = $this->lfPurchaseHistory($objFormSearchParam->getValue('edit_customer_id'));
                $this->arrPagenavi = $this->objNavi->arrPagenavi;
                $this->arrPagenavi['mode'] = 'return';
                $this->tpl_pageno = '0';
                break;
            case 'return':
                // パラメーター処理
                $this->lfInitParam($objFormParam);
                $objFormParam->setParam($_POST);
                $objFormParam->convParam();
                // 入力パラメーターチェック
                $this->arrErr = $this->lfCheckError($objFormParam);
                $this->arrForm = $objFormParam->getHashArray();
                // 検索引き継ぎ用パラメーター処理
                $this->lfInitSearchParam($objFormSearchParam);
                $objFormSearchParam->setParam($objFormParam->getValue('search_data'));
                $this->arrSearchErr = $this->lfCheckErrorSearchParam($objFormSearchParam);
                $this->arrSearchData = $objFormSearchParam->getSearchArray();
                if (!SC_Utils_Ex::isBlank($this->arrErr) or !SC_Utils_Ex::isBlank($this->arrSearchErr)) {
                    return;
                }
                // 購入履歴情報の取得
                list($this->tpl_linemax, $this->arrPurchaseHistory, $this->objNavi) = $this->lfPurchaseHistory($objFormParam->getValue('customer_id'), $objFormParam->getValue('search_pageno'));
                $this->arrPagenavi = $this->objNavi->arrPagenavi;
                $this->arrPagenavi['mode'] = 'return';
                $this->tpl_pageno = $objFormParam->getValue('search_pageno');

                break;
            case 'complete':
                // 登録・保存処理
                // パラメーター処理
                $this->lfInitParam($objFormParam);
                $objFormParam->setParam($_POST);
                $objFormParam->convParam();
                // 入力パラメーターチェック
                $this->arrErr = $this->lfCheckError($objFormParam);
                $this->arrForm = $objFormParam->getHashArray();
                // 検索引き継ぎ用パラメーター処理
                $this->lfInitSearchParam($objFormSearchParam);
                $objFormSearchParam->setParam($objFormParam->getValue('search_data'));
                $this->arrSearchErr = $this->lfCheckErrorSearchParam($objFormSearchParam);
                $this->arrSearchData = $objFormSearchParam->getSearchArray();
                if (!SC_Utils_Ex::isBlank($this->arrErr) or !SC_Utils_Ex::isBlank($this->arrSearchErr)) {
                    return;
                }
                $this->lfRegistData($objFormParam);
                $this->tpl_mainpage = 'customer/edit_complete.tpl';
                break;
            case 'complete_return':
                // 入力パラメーターチェック
                $this->lfInitParam($objFormParam);
                $objFormParam->setParam($_POST);
                // 検索引き継ぎ用パラメーター処理
                $this->lfInitSearchParam($objFormSearchParam);
                $objFormSearchParam->setParam($objFormParam->getValue('search_data'));
                $this->arrSearchErr = $this->lfCheckErrorSearchParam($objFormSearchParam);
                $this->arrSearchData = $objFormSearchParam->getSearchArray();
                if (!SC_Utils_Ex::isBlank($this->arrSearchErr)) {
                    return;
                }
            default:
                $this->lfInitParam($objFormParam);
                $this->arrForm = $objFormParam->getHashArray();
                break;
        }

    }

    /**
     * パラメーター情報の初期化
     *
     * @param  array $objFormParam フォームパラメータークラス
     * @return void
     */
    public function lfInitParam(&$objFormParam)
    {
        // 会員項目のパラメーター取得
        SC_Helper_Customer_Ex::sfCustomerEntryParam($objFormParam, true);//mtake 
        // 検索結果一覧画面への戻り用パラメーター
        $objFormParam->addParam('検索用データ', 'search_data', '', '', array(), '', false);
        // 会員購入履歴ページング用
        $objFormParam->addParam('', 'search_pageno', INT_LEN, 'n', array('NUM_CHECK', 'MAX_LENGTH_CHECK'), '', false);


    }

    /**
     * 検索パラメーター引き継ぎ用情報の初期化
     *
     * @param  SC_FormParam_Ex $objFormParam フォームパラメータークラス
     * @return void
     */
    public function lfInitSearchParam(&$objFormParam)
    {
        SC_Helper_Customer_Ex::sfSetSearchParam($objFormParam);
        // 初回受け入れ時用
        $objFormParam->addParam('編集対象会員ID', 'edit_customer_id', INT_LEN, 'n', array('NUM_CHECK', 'MAX_LENGTH_CHECK'));
    }

    /**
     * 検索パラメーターエラーチェック
     *
     * @param  SC_FormParam_Ex $objFormParam フォームパラメータークラス
     * @return array エラー配列
     */
    public function lfCheckErrorSearchParam(&$objFormParam)
    {
        return SC_Helper_Customer_Ex::sfCheckErrorSearchParam($objFormParam);
    }

    /**
     * フォーム入力パラメーターエラーチェック
     *
     * @param  array $objFormParam フォームパラメータークラス
     * @return array エラー配列
     */
    public function lfCheckError(&$objFormParam)
    {
        $arrErr = SC_Helper_Customer_Ex::sfCustomerMypageErrorCheck($objFormParam, true);

        // メアド重複チェック(共通ルーチンは使えない)
        $objQuery   = SC_Query_Ex::getSingletonInstance();
        $col = 'email, email_mobile, customer_id';
        $table = 'dtb_customer';
        $where = 'del_flg <> 1 AND (email Like ? OR email_mobile Like ?)';
        $arrVal = array($objFormParam->getValue('email'), $objFormParam->getValue('email_mobile'));
        if ($objFormParam->getValue('customer_id')) {
            $where .= ' AND customer_id <> ?';
            $arrVal[] = $objFormParam->getValue('customer_id');
        }
        $arrData = $objQuery->getRow($col, $table, $where, $arrVal);
        if (!SC_Utils_Ex::isBlank($arrData['email'])) {
            if ($arrData['email'] == $objFormParam->getValue('email')) {
                $arrErr['email'] = '※ すでに他の会員(ID:' . $arrData['customer_id'] . ')が使用しているアドレスです。';
            } elseif ($arrData['email'] == $objFormParam->getValue('email_mobile')) {
                $arrErr['email_mobile'] = '※ すでに他の会員(ID:' . $arrData['customer_id'] . ')が使用しているアドレスです。';
            }
        }
        if (!SC_Utils_Ex::isBlank($arrData['email_mobile'])) {
            if ($arrData['email_mobile'] == $objFormParam->getValue('email_mobile')) {
                $arrErr['email_mobile'] = '※ すでに他の会員(ID:' . $arrData['customer_id'] . ')が使用している携帯アドレスです。';
            } elseif ($arrData['email_mobile'] == $objFormParam->getValue('email')) {
                if ($arrErr['email'] == '') {
                    $arrErr['email'] = '※ すでに他の会員(ID:' . $arrData['customer_id'] . ')が使用している携帯アドレスです。';
                }
            }
        }

        return $arrErr;
    }

    /**
     * 登録処理
     *
     * @param  array $objFormParam フォームパラメータークラス
     * @return integer エラー配列
     */
    public function lfRegistData(&$objFormParam)
    {
        // 登録用データ取得
        $arrData = $objFormParam->getDbArray();
        // 足りないものを作る
        if (!SC_Utils_Ex::isBlank($objFormParam->getValue('year'))) {
            $arrData['birth'] = $objFormParam->getValue('year') . '/'
                            . $objFormParam->getValue('month') . '/'
                            . $objFormParam->getValue('day')
                            . ' 00:00:00';
        }

        if (!is_numeric($arrData['customer_id'])) {
            $arrData['secret_key'] = SC_Utils_Ex::sfGetUniqRandomId('r');
        } else {
            $arrOldCustomerData = SC_Helper_Customer_Ex::sfGetCustomerData($arrData['customer_id']);
            if ($arrOldCustomerData['status'] != $arrData['status']) {
                $arrData['secret_key'] = SC_Utils_Ex::sfGetUniqRandomId('r');
            }
        }

        return SC_Helper_Customer_Ex::sfEditCustomerData($arrData, $arrData['customer_id']);
    }

    /**
     * 購入履歴情報の取得
     *
     * @return array( integer 全体件数, mixed 会員データ一覧配列, mixed SC_PageNaviオブジェクト)
     */
    public function lfPurchaseHistory($customer_id, $pageno = 0)
    {
        if (SC_Utils_Ex::isBlank($customer_id)) {
            return array('0', array(), NULL);
        }
        $objQuery = SC_Query_Ex::getSingletonInstance();
        $page_max = SEARCH_PMAX;
        $table = 'dtb_order';
        $where = 'customer_id = ? AND del_flg <> 1';
        $arrVal = array($customer_id);
        // 購入履歴の件数取得
        $linemax = $objQuery->count($table, $where, $arrVal);
        // ページ送りの取得
        $objNavi = new SC_PageNavi_Ex($pageno, $linemax, $page_max, 'eccube.moveSecondSearchPage', NAVI_PMAX);
        // 取得範囲の指定(開始行番号、行数のセット)
        $objQuery->setLimitOffset($page_max, $objNavi->start_row);
        // 表示順序
        $order = 'order_id DESC';
        $objQuery->setOrder($order);
        // 購入履歴情報の取得
        $arrPurchaseHistory = $objQuery->select('*', $table, $where, $arrVal);

        return array($linemax, $arrPurchaseHistory, $objNavi);
    }

    /**
     * パラメーター情報の初期化
     * - 画像ファイルアップロードモード
     *
     * @param  SC_FormParam_Ex $objFormParam SC_FormParamインスタンス
     * @return void
     */
    public function lfInitFormParam_UploadImage(&$objFormParam)
    {
        //mtake add このimage_keyで「main_large_image」か「main_image」か「sub_large_image」を判定するっぽい
        //そもそもこの変数がくるのは画像up/dnの時だけなので、switch文でこの場合のみobjFormParamに追加しいてる
        //ちなみにここでは「main_image」を決め打ちで使用するつもりです！
        //普段は使わないからいる時だけ使うと。またどこかでfor文をぐるぐる回してたのも、この三種類のどれかを判定したんだと思う
        $objFormParam->addParam('image_key', 'image_key', '', '', array());
    }

    /**
     * アップロードファイルパラメーター情報の初期化
     * - 画像ファイル用
     *
     * @param  SC_UploadFile_Ex $objUpFile SC_UploadFileインスタンス
     * @return void
     */
    public function lfInitFile(&$objUpFile)
    {
        // mtake add ここは取扱う画像の種類やサイズの情報をセットしている模様
        $objUpFile->addFile('詳細-メイン画像', 'main_image', array('jpg', 'gif', 'png'), IMAGE_SIZE, false, NORMAL_IMAGE_WIDTH, NORMAL_IMAGE_HEIGHT);
    }

    /**
     * 表示用フォームパラメーター取得
     * - 入力画面
     *
     * @param  SC_UploadFile_Ex $objUpFile   SC_UploadFileインスタンス
     * @param  SC_UploadFile_Ex $objDownFile SC_UploadFileインスタンス
     * @param  array  $arrForm     フォーム入力パラメーター配列
     * @return array  表示用フォームパラメーター配列
     */
    public function lfSetViewParam_InputPage(&$objUpFile,&$arrForm)
    {
        // アップロードファイル情報取得(Hidden用)
        $arrHidden = $objUpFile->getHiddenFileList();
        // mtake add ようやく理解！確認画面では全てがlabel表示となるため、そのままだとPOST対象外となる。
        // なので編集画面で入力した内容をすべてhiddenにしまい込む必要がある。そしてその後に確認画面へ。
        // 確認画面では入力ボックスがないく、画面表示上はすべてlabelでPOST対象外です。なのであらかじめ
        // hiddenに隠し持った値をPOSTするってことですね。
        $arrForm['arrHidden'] = (array) $arrHidden;

        // 画像ファイル表示用データ取得
        $arrForm['arrFile'] = $objUpFile->getFormFileList();

        // var_dump($arrForm['arrFile']);
        // die();

        return $arrForm;
    }

    /**
     * 表示用フォームパラメーター取得
     * - 確認画面
     *
     * @param  SC_UploadFile_Ex $objUpFile   SC_UploadFileインスタンス
     * @param  SC_UploadFile_Ex $objDownFile SC_UploadFileインスタンス
     * @param  array  $arrForm     フォーム入力パラメーター配列
     * @return array  表示用フォームパラメーター配列
     */
    public function lfSetViewParam_ConfirmPage(&$objUpFile,&$arrForm)
    {
        // 画像ファイル用データ取得
        $arrForm['arrFile'] = $objUpFile->getFormFileList();
        return $arrForm;
    }
}
