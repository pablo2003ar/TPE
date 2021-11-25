<?php

require_once 'api/api-comment.controller.php';
require_once 'libs/Router.php';

$router = new Router();

$router->addRoute('comentarios/producto/:ID', 'GET', 'ApiCommentController', 'getAll');
$router->addRoute('comentarios/:ID', 'POST', 'ApiCommentController', 'addComment');
$router->addRoute('comentarios/:ID', 'DELETE', 'ApiCommentController', 'delete');

$router->addRoute('comentarios/filter', 'GET', 'ApiCommentController', 'filter');
$router->addRoute('comentarios/order', 'GET', 'ApiCommentController', 'order');


$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];
$router->route($resource, $method);