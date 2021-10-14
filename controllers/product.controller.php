<?php
require_once "./models/product.model.php";
require_once "./models/trademark.model.php";
require_once "./models/category.model.php";
require_once "./views/product.view.php";
require_once './helpers/AuthHelper.php';


class ProductController
{
    private $model;
    private $trademarkModel;
    private $categoryModel;
    private $view;
    private $authHelper;

    public function __construct()
    {
        $this->model = new ProductModel();
        $this->trademarkModel = new TrademarkModel();
        $this->categoryModel = new CategoryModel();
        $this->view = new ProductView();
        $this->authHelper = new AuthHelper();

        // barrera que este loguead
        $this->authHelper->checkLoggedIn();
    }

    public function showProduct()
    {
        $products = $this->model->getAllProducts();
        $this->view->renderList($products);
    }

    public function showForm($action, $id = null)
    {
        $product = null;
        if (!empty($id)) {
            // $action = 'producto/modificar/' . $id;
            $action .= $id;
            $product = $this->model->getProductByID($id);
        }
        $trademarks = $this->trademarkModel->getTrademarks();
        $categories = $this->categoryModel->getCategories();
        $this->view->renderForm($action, $product, $trademarks, $categories);
    }

    function insert()
    {
        $name = $_REQUEST['descripcion'];
        $price = $_REQUEST['precio'];
        $mark = $_REQUEST['marca'];
        $category = $_REQUEST['categoria'];

        $this->model->insertProduct($name, $price, $mark, $category);

        // header("Location: " . BASE_URL);
        header("Location: " . ADMIN);
    }

    function delete($id)
    {
        $this->model->deleteProduct($id);

        header("Location: " . ADMIN);
    }


    function update($id)
    {
        $name = $_REQUEST['descripcion'];
        $price = $_REQUEST['precio'];
        $mark = $_REQUEST['marca'];
        $category = $_REQUEST['categoria'];

        $this->model->updateProduct($id, $name, $price, $mark, $category);

        header("Location: " . ADMIN);
    }
}
