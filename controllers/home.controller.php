<?php
require_once "./models/product.model.php";

require_once "./models/trademark.model.php";
require_once "./models/category.model.php";
require_once "./views/product.view.php";
require_once "./views/home.view.php";
require_once "./views/user.view.php";


class HomeController{
    private $productModel;
    private $homeView;

    private $userView;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->homeView = new HomeView();

        $this->userView = new UserView();
    }

    function showHome() {
        $products = $this->productModel->getAllProducts();
        $this->homeView->renderHome($products);
    }

    function showDetail($id) {
        $product = $this->productModel->getProductByID($id);
        $this->homeView->renderDetail($product);
    }

    function showForm() {
        $this->userView->renderForm();
    }
}