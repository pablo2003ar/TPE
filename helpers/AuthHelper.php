<?php
class AuthHelper
{
    function __construct()
    {
        // abre la sessión siempre para usar el helper
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public function login($user)
    {
        $_SESSION['USER_ID'] = $user->id_usuario;
        $_SESSION['USER_EMAIL'] = $user->email;
        $_SESSION['USER_ROL'] = $user->tipo;
    }

    public function checkLoggedIn()
    {
        if (empty($_SESSION['USER_ID'])) {
            header("Location: " . LOGIN);
            die();
        }
    }

    public function isAdminCheck()
    {
        if ($_SESSION['USER_ROL'] != 'ADMIN') {
            header("Location: " . BASE_URL);
            die();
        }
    }

    public function isLogged()
    {
        if (isset($_SESSION['USER_ID']) && !empty($_SESSION['USER_ID'])) {
            return true;
        }
        return false;
    }

    public function isAdmin()
    {
        if ($_SESSION['USER_ROL'] == 'ADMIN') {
            return true;
        }
        return false;
    }

    public function verifyRol($rol)
    {
        if ($_SESSION['USER_ROL'] == $rol) {
            return true;
        }

        return false;
    }

    public function redirect()
    {
        header("Location: " . BASE_URL);
        die();
    }

    public function redirection($value)
    {
        header("Location: " . $value);
        die();
    }

    function logout()
    {
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }
}
