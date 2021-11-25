<?php
require_once "./models/category.model.php";
require_once "./views/category.view.php";
require_once './helpers/AuthHelper.php';

class CategoryController
{
    private $categoryView;
    private $categoryModel;
    private $authHelper;


    public function __construct()
    {
        $this->categoryView = new CategoryView();
        $this->categoryModel = new CategoryModel();
        $this->authHelper = new AuthHelper();

        // barrera que este loguead
        $this->authHelper->checkLoggedIn();
        $this->authHelper->isAdminCheck();
    }

    function showForm($action, $id = null)
    {
        $category = null;
        if (!empty($id)) {
            $action .= $id;
            $category = $this->categoryModel->getCategoryByID($id);
        }
        $this->categoryView->renderForm($action, $category);
    }

    function insert()
    {
        $this->validate();
        $name = $_REQUEST['nombre'];
        $this->categoryModel->insertCategory($name);
        header("Location: " . ADMIN);
    }

    function delete($id)
    {
        $category = $this->categoryModel->getCategoryByID($id);

        if ($category) {
            $this->categoryModel->deleteCategory($id);
        }
        
        header("Location: " . ADMIN);
    }

    function update($id)
    {
        $this->validate();
        $name = $_REQUEST['nombre'];
        $this->categoryModel->updateCategory($id, $name);
        header("Location: " . ADMIN);
    }

    public function validate()
    {
        if (empty($_REQUEST['nombre'])) {
            $this->authHelper->redirection(ADMIN);
        }
    }
}
