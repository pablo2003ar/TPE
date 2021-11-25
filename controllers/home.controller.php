<?php
require_once "./models/product.model.php";

require_once "./models/trademark.model.php";
require_once "./models/category.model.php";
require_once "./views/product.view.php";
require_once "./views/home.view.php";
require_once "./views/user.view.php";


class HomeController
{
    private $productModel;
    private $homeView;

    private $userView;

    private $authHelper;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->homeView = new HomeView();

        $this->authHelper = new AuthHelper();

        $this->userView = new UserView();
    }

    function showHome()
    {
        $products = $this->productModel->getAllProducts();
        $this->homeView->renderHome($products);
    }

    function showDetail($id)
    {
        $product = $this->productModel->getProductByID($id);
        $this->homeView->renderDetail($product);
    }

    function showForm()
    {
        $islogged = $this->authHelper->isLogged();

        if ($islogged) {
            $this->authHelper->redirection(BASE_URL);
            die();
        }

        $this->userView->renderForm();
    }

    function search()
    {
        $islogged = $this->authHelper->isLogged();

        
        if (!$islogged) {
            $this->authHelper->redirection(LOGIN);
            die();
        }

        $isUser = $this->authHelper->verifyRol('NORMAL');

        if (!$isUser) {
            $this->authHelper->redirection(BASE_URL);
            die();
        }

        if (!key_exists('data', $_GET)) {
            $this->authHelper->redirection(BASE_URL);
            die();
        }
        
        $data = $_REQUEST['data'];
        $desc = '%' . $data . '%';

        $products = $this->productModel->getProductsByParams($desc);
        $this->homeView->renderHome($products);
    }
}
