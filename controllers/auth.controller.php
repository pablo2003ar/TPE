<?php
require_once "./models/user.model.php";
require_once "./views/auth.view.php";
require_once './helpers/AuthHelper.php';

class AuthController {
    private $userModel;
    private $authView;
    private $authHelper;

    public function __construct() {
        $this->userModel = new UserModel();
        $this->authView = new AuthView();
        $this->authHelper = new AuthHelper();
    }

    public function showLogin() {
        $this->authView->renderForm();
    }

    public function login() {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
     
            // Obtengo el usuario de la base de datos
            $user = $this->userModel->getUser($email);
     
            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, $user->password)) {
                 // armo la sesion del usuario
                $this->authHelper->login($user);
                header("Location: " . ADMIN);
            } else {
                $this->authView->renderForm("Usuario o Contraseña Incorrecta");
            }
        }
    }

    public function logout() {
        $this->authHelper->logout();
    }
}