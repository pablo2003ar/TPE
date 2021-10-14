<?php
/* Smarty version 3.1.39, created on 2021-10-11 22:55:12
  from 'C:\xampp\htdocs\web2\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6164a4b05109e8_69234678',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b39e2adb8fe3f3406c435368135ba3eb8199b99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\navbar.tpl',
      1 => 1633985710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6164a4b05109e8_69234678 (Smarty_Internal_Template $_smarty_tpl) {
?><header class="p-3 bg-success text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="home" class="nav-link px-2 text-white fw-bold" role="button">Home</a></li>
                <li><a class="nav-link px-2 text-white  fw-bold" role="button">Raquetas de tenis</a></li>
                <li><a class="nav-link px-2 text-white fw-bold">Padel</a></li>
                <li><a class="nav-link px-2 text-white fw-bold">Accesorios</a></li>
                <li><a class="nav-link px-2 text-white fw-bold">About</a></li>
            </ul>

            <div class="text-end">
                <?php if ((isset($_SESSION['USER_ID']))) {?>
                    <!-- $_SESSION['USER_ID'] -->
                    <a class="btn btn-outline-warning me-2" href="logout">(<?php echo $_SESSION['USER_EMAIL'];?>
) Logout</a>
                <?php } else { ?>
                    <a class="btn btn-outline-warning me-2" href="login" role="button">Entrar</a>
                <?php }?>
                <a class="btn btn btn-warning me-2" href="registro" role="button">Registrarse</a>
            </div>

        </div>
    </div>
</header><?php }
}
