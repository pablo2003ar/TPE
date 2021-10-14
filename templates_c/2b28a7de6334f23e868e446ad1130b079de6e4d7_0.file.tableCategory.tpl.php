<?php
/* Smarty version 3.1.39, created on 2021-10-11 16:58:12
  from 'C:\xampp\htdocs\web2\templates\tableCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61645104e18b22_99860580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b28a7de6334f23e868e446ad1130b079de6e4d7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\tableCategory.tpl',
      1 => 1633964290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61645104e18b22_99860580 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="w-50 mx-auto m-16 ml-3">
    <table class="table table-borderless table-hover caption-top">
        <caption>Lista de categoria</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Categoria</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                <tr>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['category']->value->nombre;?>
</td>
                    <td>
                        <div class="d-flex justify-content-evenly">
                            <a class="btn btn-warning" href="categoria/formulario/modificar/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
" role="button">Editar</a>
                            <a class="btn btn-danger" href="categoria/eliminar/<?php echo $_smarty_tpl->tpl_vars['category']->value->id_categoria;?>
" role="button">Eliminar</a>
                        </div>
                    </td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div><?php }
}
