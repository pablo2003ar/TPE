<?php
class ProductModel
{
    private $db;
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_prod;charset=utf8', 'root', '');
    }

    function getAllProducts()
    {
        $query = $this->db->prepare('SELECT p.id, p.descripcion, p.precio, m.nombre as marca, c.nombre as categoria FROM `producto` p 
        LEFT JOIN `marca` m ON p.id_marca = m.id_marca 
        LEFT JOIN `categoria` c ON p.id_categoria = c.id_categoria');
        $query->execute();
        $products = $query->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    function insertProduct($name, $price, $mark, $category)
    {
        $query = $this->db->prepare('INSERT INTO `producto`(`descripcion`, `precio`, `id_marca`, `id_categoria`) VALUES (?, ?, ?, ?)');
        $query->execute([$name, $price, $mark, $category]);
        return $this->db->lastInsertId();
    }

    function deleteProduct($id)
    {
        $query = $this->db->prepare('DELETE FROM `producto` WHERE id = ?');
        $query->execute([$id]);
    }

    function getProductByID($id)
    {
        $query = $this->db->prepare('SELECT p.id, p.descripcion, p.precio, m.nombre as marca, c.nombre as categoria FROM `producto` p 
        LEFT JOIN `marca` m ON p.id_marca = m.id_marca 
        LEFT JOIN `categoria` c ON p.id_categoria = c.id_categoria
        WHERE p.id = ?');
        $query->execute([$id]);
        $product = $query->fetch(PDO::FETCH_OBJ);
        return $product;
    }

    function updateProduct($id, $name, $price, $mark, $category)
    {
        $query = $this->db->prepare('UPDATE `producto` SET `descripcion`=?,`precio`=?,`id_marca`=?,`id_categoria`=? WHERE `id`=?');
        $query->execute([$name, $price, $mark, $category, $id]);
    }

    function getProductsByCategory($category) {
        $query = $this->db->prepare('SELECT p.id, p.descripcion, p.precio, m.nombre as marca, c.nombre as categoria FROM `producto` p 
        INNER JOIN `marca` m ON p.id_marca = m.id_marca 
        INNER JOIN `categoria` c ON p.id_categoria = c.id_categoria
        WHERE p.id_categoria = ?');
        $query->execute([$category]);
        $product = $query->fetchAll(PDO::FETCH_OBJ);
        return $product;
    }
}
