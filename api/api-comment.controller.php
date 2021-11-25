<?php

require_once 'models/comment.model.php';
require_once 'api/api.view.php';
require_once './helpers/AuthHelper.php';

class ApiCommentController
{
    private $commentModel;
    private $apiView;
    private $authHelper;

    private $data;

    public function __construct()
    {
        $this->commentModel = new CommentModel();
        $this->apiView = new ApiView();

        $this->authHelper = new AuthHelper();
    }

    public function getAll($params = null)
    {
        $id = $params[':ID'];

        $comments = $this->commentModel->getComments($id);

        if ($comments) {
            $this->apiView->response($comments, 200);
        } else {
            $this->apiView->response("ID = $id not found", 204);
        }
    }

    public function addComment($params = null)
    {
        $this->validateUser('NORMAL');
        $data = $this->getBody();
        $this->verify($data);

        $producto = $params[':ID'];
        $usuario = $_SESSION['USER_ID'];
        $descripcion = $data->descripcion;
        $puntaje = $data->puntaje;
        $fecha = $data->fecha;

        $id = $this->commentModel->insertComment($producto, $usuario, $descripcion, $puntaje, $fecha);

        $comment = $this->commentModel->getComment($id);

        if ($comment)
            $this->apiView->response($comment, 200);
        else
            $this->apiView->response("El comentario no fue creado", 500);
    }

    public function delete($params = null)
    {
        $this->validateUser('ADMIN');

        $id = $params[':ID'];

        $comment = $this->commentModel->getComment($id);

        if ($comment) {
            $this->commentModel->deleteComment($id);
            $this->apiView->response("Remove successfully");
        } else {
            $this->apiView->response("ID = $id not found", 404);
        }
    }

    public function filter()
    {
        $this->validateUser('NORMAL');

        $id = $_GET['id'];

        if (key_exists('puntaje', $_GET)) {

            if ($this->validateScore($_GET['puntaje'])) {
                $score = $_GET['puntaje'];
            } elseif (empty($_GET['puntaje'])) {
                $score = null;
            } else {
                $this->cancel();
            }

            $comments = $this->commentModel->getCommentsByScore($score, $id);

            if ($comments) {
                $this->apiView->response($comments, 200);
            } else {
                $this->apiView->response("ID = $id not found", 204);
            }
        } else {
            $this->apiView->response("ID = $id not found", 204);
        }
    }

    public function order()
    {
        $this->validateUser('NORMAL');

        if (!key_exists('campo', $_GET) || 
        !key_exists('orden', $_GET) || 
        !key_exists('id', $_GET)) {
            $this->cancel();
        }

        $id = $_GET['id'];
        $order = $_GET['orden'];
        $campo = $_GET['campo'];

        $comments = $this->commentModel->getCommentsOrder($id, $campo, $order);
        if ($comments) {
            $this->apiView->response($comments, 200);
        } else {
            $this->apiView->response("ID = $id not found", 204);
        }
    }

    private function getBody()
    {
        $data = file_get_contents("php://input");
        return json_decode($data);
    }


    public function validateUser($role)
    {
        $logged = $this->authHelper->isLogged();
        $role = $this->authHelper->verifyRol($role);

        if (!$logged || !$role) {
            $this->apiView->response("No autorizado", 401);
            die();
        }
    }

    public function verify($data)
    {
        $puntaje = $data->puntaje;

        if (!$this->validateScore($puntaje)) {
            $this->cancel();
        }
    }

    public function validateScore($score)
    {
        if (is_numeric($score) && ($score >= 1 && $score <= 5)) {
            return true;
        }
        return false;
    }

    public function cancel()
    {
        $this->apiView->response("El comentario no fue creado", 500);
        die();
    }
}
