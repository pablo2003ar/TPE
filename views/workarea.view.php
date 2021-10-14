<?php
require_once './libs/smarty/libs/Smarty.class.php';
class WorkAreaView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showHeader()
    {
        $this->smarty->display('templates/header.tpl');
    }

    function showFooter()
    {
        $this->smarty->display('templates/footer.tpl');
    }

    function showNavigation($categories) {
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/navigation.tpl');
    }
}
