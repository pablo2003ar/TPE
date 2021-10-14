<?php
/* Smarty version 3.1.39, created on 2021-10-09 02:43:41
  from 'C:\xampp\htdocs\web2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6160e5bdeab058_43582558',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7813dff1baf40d1de9a641e58798223a0264454' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\header.tpl',
      1 => 1633740216,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/navbar.tpl' => 1,
  ),
),false)) {
function content_6160e5bdeab058_43582558 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo BASE_URL;?>
">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php $_smarty_tpl->_subTemplateRender('file:templates/navbar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!--<div class="container p-3">--><?php }
}
