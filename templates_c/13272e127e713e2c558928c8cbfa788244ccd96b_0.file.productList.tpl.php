<?php
/* Smarty version 3.1.39, created on 2021-10-04 23:36:16
  from 'C:\xampp\htdocs\web2\templates\productList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_615b73d0f334d7_22571216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13272e127e713e2c558928c8cbfa788244ccd96b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\productList.tpl',
      1 => 1633383373,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/navigation.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_615b73d0f334d7_22571216 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="w-100 mx-auto m-16">

    <div class="d-flex justify-content-between p-2 mb-2 border-bottom border-dark border-2">
        <div class="text-capitalize fw-bolder">ID</div>
        <div class="text-capitalize fw-bolder">Descripcion</div>
        <div class="text-capitalize fw-bolder">Precio</div>
        <div class="text-capitalize fw-bolder">Categoria</div>
        <div class="text-capitalize fw-bolder">Acciones</div>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div class="d-flex justify-content-between p-3 mb-2 border border-dark rounded-3">
            <div class="text-capitalize fs-5 fw-light"><?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
</div>
            <div class="text-capitalize fs-5 fw-light"><?php echo $_smarty_tpl->tpl_vars['product']->value->descripcion;?>
</div>
            <div class="text-capitalize fs-5 fw-light"><?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</div>
            <div class="text-capitalize fs-5 fw-light"><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</div>
            <div class="text-capitalize fs-5 fw-light"><?php echo $_smarty_tpl->tpl_vars['product']->value->categoria;?>
</div>
            <div class="d-flex">
                <a class="btn btn-outline-danger" href="modificar/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" role="button">Editar</a>
                <a class="btn btn-outline-dark" href="eliminar/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" role="button">Eliminar</a>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
