<?php
require_once "controllers/product.controller.php";
require_once "controllers/workarea.controller.php";
require_once "controllers/category.controller.php";
require_once "controllers/home.controller.php";
require_once "controllers/user.controller.php";
require_once "controllers/auth.controller.php";


define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
define('ADMIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/administracion');
define('LOGIN', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/login');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

switch ($params[0]) {
    case 'administracion':
        $workAreaController = new WorkAreaController();
        $workAreaController->showArea();
        break;
    case 'producto':
        $productController = new ProductController();
        miniRouter($params, $productController);
        break;
    case 'categoria':
        $categoryController = new CategoryController();
        miniRouter($params, $categoryController);
        break;
    case 'home':
        $homeController = new HomeController();
        $homeController->showHome();
        break;
    case 'detalle':
        $homeController = new HomeController();
        $homeController->showDetail($params[1]);
        break;
    case 'filtrar':
        $workAreaController = new WorkAreaController();
        $workAreaController->showFilter();
        break;
    case 'registro':
        $homeController = new HomeController();
        $homeController->showForm();
        break;
    case 'crear':
        $userController = new UserController();
        $userController->insert();
        break;
    case 'login':
        $authcontroller = new AuthController();
        $authcontroller->showLogin();
        break;
    case 'verificar':
        $authController = new AuthController();
        $authController->login();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    default:
        echo "Error";
        break;
}

function miniRouter($actions, $object)
{

    switch ($actions[1]) {
        case 'formulario':
            if (!empty($actions[3])) {
                $object->showForm($actions[0] . "/" . $actions[2] . "/", $actions[3]);
            } else {
                $object->showForm($actions[0] . "/" . $actions[2], null);
            }
            break;
        case 'insertar':
            $object->insert();
            break;
        case 'eliminar':
            $object->delete($actions[2]);
            break;
        case 'modificar':
            $object->update($actions[2]);
            break;
        default:
            echo 'error';
            break;
    }
}
