<?php
require_once "./models/user.model.php";
require_once "./views/auth.view.php";
require_once './helpers/AuthHelper.php';
require_once './api/api.view.php';

class AuthController
{
    private $userModel;
    private $authView;
    private $authHelper;

    // private $apiView;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->authView = new AuthView();
        $this->authHelper = new AuthHelper();

        // $this->apiView = new ApiView();
    }

    public function showLogin()
    {
        $islogged = $this->authHelper->isLogged();
        if ($islogged) {
            /*
            $this->authHelper->redirect();
            */
            $this->authHelper->redirection(BASE_URL);
        }

        $this->authView->renderForm();
    }

    public function login()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->userModel->getUserByEmail($email);

            if ($user && password_verify($password, $user->password)) {
                $this->authHelper->login($user);
                header("Location: " . ADMIN);
            } else {
                $this->authView->renderForm("Usuario o Contraseña Incorrecta");
            }
        }
    }

    public function logout()
    {
        $this->authHelper->logout();
    }

}
