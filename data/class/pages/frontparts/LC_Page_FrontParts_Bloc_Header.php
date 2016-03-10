<?php
require_once(CLASS_PATH . "pages/frontparts/bloc/LC_Page_FrontParts_Bloc.php");


class LC_Page_FrontParts_Bloc_Header extends LC_Page_FrontParts_Bloc {

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();
        $bloc_file = "header.tpl";
        $this->setTplMainpage($bloc_file);
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {
        $objSubView = new SC_SiteView();

        $this->setDataForHeader();

        $objSubView->assignobj($this);
        $objSubView->display($this->tpl_mainpage);
    }

    //（ログイン判定処理等は省略）

}
?>