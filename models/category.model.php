<?php
class CategoryModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_prod;charset=utf8', 'root', '');
    }

    function getCategories()
    {
        $query = $this->db->prepare('SELECT * FROM `categoria`');
        $query->execute();
        $categories = $query->fetchAll(PDO::FETCH_OBJ);
        return $categories;
    }

    function insertCategory($name)
    {
        $query = $this->db->prepare('INSERT INTO `categoria`(`nombre`) VALUES (?)');
        $query->execute([$name]);
    }

    function deleteCategory($id)
    {
        $query = $this->db->prepare('UPDATE `producto` SET `id_categoria`= null WHERE `id_categoria` = ?');
        $query->execute([$id]);
        $query = $this->db->prepare('DELETE FROM `categoria` WHERE `id_categoria` = ?');
        $query->execute([$id]);
    }

    function updateCategory($id, $name)
    {
        $query = $this->db->prepare('UPDATE `categoria` SET `nombre`= ? WHERE `id_categoria` = ?');
        $query->execute([$name, $id]);
    }

    function getCategoryByID($id)
    {
        $query = $this->db->prepare('SELECT * FROM `categoria` WHERE `id_categoria` = ?');
        $query->execute([$id]);
        $category = $query->fetch(PDO::FETCH_OBJ);
        return $category;
    }
}
