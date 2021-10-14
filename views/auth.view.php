<?php

require_once './libs/smarty/libs/Smarty.class.php';

class AuthView {
    private $smarty;

    function __construct() {
        $this->smarty = new Smarty();
    }

    function renderForm($error = null) {
        $this->smarty->assign('error',$error);
        $this->smarty->display('templates/formLogin.tpl');
    }
}