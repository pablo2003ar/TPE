<?php
require_once './libs/smarty/libs/Smarty.class.php';
class HomeView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function renderHome($products)
    {
        $this->smarty->assign('products', $products);
        $this->smarty->display('templates/home.tpl');
    }

    function renderDetail($product) {
        $this->smarty->assign('product', $product);
        $this->smarty->display('templates/productDetail.tpl');
    }
}
