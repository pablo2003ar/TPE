<?php

class UserModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_prod;charset=utf8', 'root', '');
    }

    function getAllUsers()
    {
        $query = $this->db->prepare('SELECT * FROM usuario');
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }

    function insertUser($user, $email, $password)
    {
        $query = $this->db->prepare('INSERT INTO `usuario`(`usuario`, `email`, `password`, `id_rol`) VALUES (?, ?, ?, 1)');
        $query->execute([$user, $email, $password]);
        return $this->db->lastInsertId();
    }

    function getUser($email)
    {
        $query = $this->db->prepare('SELECT * FROM usuario WHERE email = ?');
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function getUserID($id)
    {
        $query = $this->db->prepare('SELECT u.*, r.tipo FROM `usuario` u INNER JOIN rol r ON u.id_rol = r.id_rol WHERE id_usuario = ?');
        $query->execute([$id]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function getUserByEmail($email)
    {
        $query = $this->db->prepare('SELECT u.*, r.tipo FROM `usuario` u INNER JOIN rol r ON u.id_rol = r.id_rol WHERE u.email = ?');
        $query->execute([$email]);
        $user = $query->fetch(PDO::FETCH_OBJ);
        return $user;
    }

    function getAll()
    {
        $query = $this->db->prepare('SELECT * FROM usuario u INNER JOIN rol r ON u.id_rol = r.id_rol');
        $query->execute();
        $users = $query->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }

    function deleteUser($id)
    {
        $query = $this->db->prepare('DELETE FROM `comentario` WHERE `id_usuario` = ?');
        $query->execute([$id]);
        $query = $this->db->prepare('DELETE FROM `usuario` WHERE `id_usuario` = ?');
        $query->execute([$id]);
    }

    function updateUserRol($id, $idRol) {
        $query = $this->db->prepare('UPDATE `usuario` SET `id_rol`= ? WHERE `id_usuario` = ?');
        $query->execute([$idRol, $id]);
    }
}
