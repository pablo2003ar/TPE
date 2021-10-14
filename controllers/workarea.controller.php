<?php
require_once "./models/product.model.php";
require_once "./models/trademark.model.php";
require_once "./models/category.model.php";
require_once "./views/product.view.php";
require_once "./views/category.view.php";
require_once "./views/workarea.view.php";
require_once './helpers/AuthHelper.php';

class WorkAreaController
{
    private $productModel;
    private $productView;
    private $categoryModel;
    private $categoryView;
    private $trademarkModel;
    private $workareaView;
    private $authHelper;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->productView = new ProductView();
        $this->categoryModel = new CategoryModel();
        $this->categoryView = new CategoryView();
        $this->trademarkModel = new TrademarkModel();
        $this->workareaView = new WorkAreaView();
        $this->authHelper = new AuthHelper();

        // barrera que este loguead
        $this->authHelper->checkLoggedIn();
    }

    function showArea()
    {
        $categories = $this->categoryModel->getCategories();
        $products = $this->productModel->getAllProducts();

        $this->workareaView->showHeader();
        $this->workareaView->showNavigation($categories);
        $this->productView->renderList($products);
        $this->categoryView->renderList($categories);
        $this->workareaView->showFooter();
    }

    function showFilter() {
        $products = $this->getProducts();
        $categories = $this->categoryModel->getCategories();


        $this->workareaView->showHeader();
        $this->workareaView->showNavigation($categories);
        $this->productView->renderList($products);
        $this->categoryView->renderList($categories);
        $this->workareaView->showFooter();
    }

    function getProducts() {
        if (isset($_REQUEST['categoria']) && !empty($_REQUEST['categoria'])) {
            $products = $this->productModel->getProductsByCategory($_REQUEST['categoria']);
        } else {
            $products = $this->productModel->getAllProducts();
        }
        return $products;
    }
}
