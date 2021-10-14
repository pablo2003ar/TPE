<?php
require_once './libs/smarty/libs/Smarty.class.php';
class CategoryView
{
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function renderList($categories) {
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/tableCategory.tpl');
    }

    function renderForm($accion, $category) {
        $this->smarty->assign('action', $accion);
        $this->smarty->assign('category', $category);
        $this->smarty->display('templates/formCategory.tpl');
    }
}
