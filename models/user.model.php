<?php

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_prod;charset=utf8', 'root', '');
    }

    function insertUser($user, $email, $password) {
        $query = $this->db->prepare('INSERT INTO `usuario`(`usuario`, `email`, `password`) VALUES (?, ?, ?)');
        $query->execute([$user, $email, $password]);
    }

    function getUser($email) {
        $query = $this->db->prepare('SELECT * FROM usuario WHERE email = ?');
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }
}
