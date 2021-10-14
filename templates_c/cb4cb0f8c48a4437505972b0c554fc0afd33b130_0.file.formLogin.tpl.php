<?php
/* Smarty version 3.1.39, created on 2021-10-11 22:09:30
  from 'C:\xampp\htdocs\web2\templates\formLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616499fa49a5f6_81819478',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb4cb0f8c48a4437505972b0c554fc0afd33b130' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\formLogin.tpl',
      1 => 1633982877,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616499fa49a5f6_81819478 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="w-25 mx-auto m-4 text-center">

    <main class="form-signin">
        <form action="verificar" method="POST">
            <h1 class="h2 mb-3 fw-normal">Administración</h1>

            <div class="m-2 form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"
                    required>
                <label for="floatingInput">Email address</label>
            </div>

            <div class="m-2 form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password"
                    required>
                <label for="floatingPassword">Password</label>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
                <div class="alert alert-danger mt-3">
                    <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

                </div>
            <?php }?>

            <button class="mt-5 w-100 btn btn-lg btn-success" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">Solo Tennis</p>

        </form>
    </main>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
