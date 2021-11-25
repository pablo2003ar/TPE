<?php

class CommentModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_prod;charset=utf8', 'root', '');
    }

    public function getComments($id)
    {
        $query = $this->db->prepare('SELECT c.id, u.usuario, c.descripcion, c.puntaje FROM `comentario` c 
        INNER JOIN `producto` p ON c.id_producto = p.id 
        INNER JOIN `usuario` u ON c.id_usuario = u.id_usuario 
        WHERE p.id = ?');
        $query->execute([$id]);
        $comments = $query->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }

    public function insertComment($productID, $userID, $description, $score, $date)
    {
        $query = $this->db->prepare('INSERT INTO `comentario`(`id_producto`, `id_usuario`, `descripcion`, `puntaje`, `fecha`) VALUES (?, ?, ?, ?, ?)');
        $query->execute([$productID, $userID, $description, $score, $date]);
        return $this->db->lastInsertId();
    }


    public function getComment($id)
    {
        $query = $this->db->prepare('SELECT c.id, u.usuario, c.descripcion, c.puntaje FROM `comentario` c 
        INNER JOIN `producto` p ON c.id_producto = p.id 
        INNER JOIN `usuario` u ON c.id_usuario = u.id_usuario 
        WHERE c.id = ?');
        $query->execute([$id]);
        $comment = $query->fetch(PDO::FETCH_OBJ);
        return $comment;
    }

    public function deleteComment($id)
    {
        $query = $this->db->prepare('DELETE FROM `comentario` WHERE id = ?');
        $query->execute([$id]);
    }

    public function getCommentsByScore($score, $id)
    {
        $query = $this->db->prepare('SELECT c.id, u.usuario, c.descripcion, c.puntaje FROM `comentario` c 
        INNER JOIN `producto` p ON c.id_producto = p.id 
        INNER JOIN `usuario` u ON c.id_usuario = u.id_usuario 
        WHERE p.id = ? AND (c.puntaje = ? OR ? is NULL)');
        $query->execute([$id, $score, $score]);
        $comments = $query->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }

    public function getCommentsOrder($id, $campo, $order)
    {
        $query = $this->db->prepare(
        'SELECT c.id, u.usuario, c.descripcion, c.puntaje
        FROM `comentario` c 
        INNER JOIN `producto` p 
        ON c.id_producto = p.id 
        INNER JOIN `usuario` u 
        ON c.id_usuario = u.id_usuario
        WHERE p.id = ?
        ORDER BY '. $campo . ' ' . $order);
        
        $query->bindParam(1, $id);
        $query->execute();
        $comments = $query->fetchAll(PDO::FETCH_OBJ);
        return $comments;
    }
}
