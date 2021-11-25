<?php

require_once "./models/user.model.php";

class UserController
{
    private $userModel;
    private $authHelper;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->authHelper = new AuthHelper();
    }

    public function insert()
    {
        $this->validate();

        $name = $_REQUEST['usuario'];
        $email = $_REQUEST['email'];
        $password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);

        $userID = $this->userModel->insertUser($name, $email, $password);

        $user =  $this->userModel->getUserID($userID);

        $this->authHelper->login($user);

        header("Location: " . BASE_URL);
    }

    public function delete($id)
    {
        $this->authHelper->checkLoggedIn();
        $this->authHelper->isAdminCheck();

        $this->userModel->deleteUser($id);
        header("Location: " . USUARIOS);
    }

    public function givePermissions($id)
    {
        $this->authHelper->checkLoggedIn();
        $this->authHelper->isAdminCheck();

        $this->userModel->updateUserRol($id, 2);

        header("Location: " . USUARIOS);
    }

    public function removePermissions($id)
    {
        $this->authHelper->checkLoggedIn();
        $this->authHelper->isAdminCheck();

        $this->userModel->updateUserRol($id, 1);

        header("Location: " . USUARIOS);
    }

    public function validate()
    {
        if (
            empty($_REQUEST['usuario']) ||
            empty($_REQUEST['email']) ||
            empty($_REQUEST['password'])
        ) {
            $this->authHelper->redirection(BASE_URL);
            /*
            header("Location: " . BASE_URL);
            die();
            */
        }
    }
}
