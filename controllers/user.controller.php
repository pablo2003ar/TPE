<?php

require_once "./models/user.model.php";

class UserController {
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    function insert() {
        $name = $_REQUEST['usuario'];
        $email = $_REQUEST['email'];
        $password = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);

        $this->userModel->insertUser($name, $email, $password);

        // header("Location: " . BASE_URL);
        header("Location: " . BASE_URL);
    }
}