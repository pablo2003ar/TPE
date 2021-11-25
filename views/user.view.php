<?php
require_once './libs/smarty/libs/Smarty.class.php';
class UserView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function renderForm() {
        $this->smarty->display('templates/formUser.tpl');
    }

    function renderList($users) {
        $this->smarty->assign('users', $users);
        $this->smarty->display('templates/user-list.tpl');
    }
}