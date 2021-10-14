<?php
/* Smarty version 3.1.39, created on 2021-10-07 04:24:22
  from 'C:\xampp\htdocs\web2\templates\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615e5a56aaa233_00356563',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '251689a43b489bfe87c527cd8890916b1ac49a53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\table.tpl',
      1 => 1633572576,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_615e5a56aaa233_00356563 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="w-100 mx-auto m-16">
    <table class="table table-dark table-borderless">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Marca</th>
                <th scope="col">Categoria</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                <tr>
                    <th scope="row"><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
</th>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->descripcion;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value->categoria;?>
</td>
                    <td>
                        <div class="d-flex justify-content-evenly">
                            <a class="btn btn-outline-light" href="formproducto/modificar/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" role="button">Editar</a>
                            <a class="btn btn-outline-danger" href="eliminar/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
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
