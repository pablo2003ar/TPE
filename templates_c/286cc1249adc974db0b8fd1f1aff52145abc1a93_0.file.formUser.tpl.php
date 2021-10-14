<?php
/* Smarty version 3.1.39, created on 2021-10-11 16:45:09
  from 'C:\xampp\htdocs\web2\templates\formUser.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61644df5047960_90930029',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '286cc1249adc974db0b8fd1f1aff52145abc1a93' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\formUser.tpl',
      1 => 1633963507,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61644df5047960_90930029 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="w-25 mx-auto m-3">
    <form action="crear" method="POST">
        <div class="form-group p-1 mb-1">
            <label for="exampleInputEmail1">Usuario</label>
            <input type="text" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Ingrese nombre de usuario" required>
        </div>
        <div class="form-group p-1 mb-1">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Ingrese email" required>
        </div>
        <div class="form-group p-1 mb-1">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <div class="form-group p-1">
            <button type="submit" class="btn btn-success p-2 mt-3">Registrarse</button>
        </div>
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
