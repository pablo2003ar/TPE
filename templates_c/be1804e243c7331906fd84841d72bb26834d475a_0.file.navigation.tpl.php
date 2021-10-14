<?php
/* Smarty version 3.1.39, created on 2021-10-10 03:57:18
  from 'C:\xampp\htdocs\web2\templates\navigation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6162487eb06b43_50018954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'be1804e243c7331906fd84841d72bb26834d475a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\navigation.tpl',
      1 => 1633831036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6162487eb06b43_50018954 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container p-3">
<nav class="nav justify-content-between m-2">
    <div class="nav-item">
        <form action="filtrar" method="GET">
            <div class="d-flex justify-content-between mb-3">
                <select name="categoria" class="form-select">
                    <option value="">Todas</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</option>
                    <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

                </select>
                <button type="submit" class="btn btn-outline-warning ms-2">Filtrar</button>
            </div>
        </form>
    </div>
    <div class="nav-item">
        <div class="btn-group">
            <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Nuevo
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="producto/formulario/insertar">Producto</a></li>
                <li><a class="dropdown-item" href="categoria/formulario/insertar">Categoria</a></li>
            </ul>
        </div>
    </div>
</nav><?php }
}
