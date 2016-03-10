<?php
require_once(CLASS_EX_PATH . "page_extends/frontparts/LC_Page_FrontParts_Bloc_Header_Ex.php");


$objPage = new LC_Page_FrontParts_Bloc_Header_Ex();
register_shutdown_function(array($objPage, "destroy"));
$objPage->init();
$objPage->process();
?>