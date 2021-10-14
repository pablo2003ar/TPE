<?php
require_once './libs/smarty/libs/Smarty.class.php';

class ProductView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function renderList($products){
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/tableProduct.tpl');
    }

    function renderForm($accion, $product = null, $trademarks, $categories) {
        $this->smarty->assign('action', $accion);
        $this->smarty->assign('product', $product);
        $this->smarty->assign('trademarks', $trademarks);
        $this->smarty->assign('categories', $categories);
        $this->smarty->display('templates/formProduct.tpl');
    }
}