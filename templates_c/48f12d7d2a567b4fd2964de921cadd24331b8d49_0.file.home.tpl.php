<?php
/* Smarty version 3.1.39, created on 2021-10-10 04:09:15
  from 'C:\xampp\htdocs\web2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61624b4bab7950_43251265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48f12d7d2a567b4fd2964de921cadd24331b8d49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\home.tpl',
      1 => 1633831752,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61624b4bab7950_43251265 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="row row-cols-1 row-cols-md-4 g-4 w-75 mx-auto mt-3">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div class="col">
            <div class="card text-center  h-100" style="width: 18rem;">
                <div class="card-body">
                    <a class="card-title text-decoration-none link-dark h5"
                        href="detalle/<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value->descripcion;?>
</a>
                    <p class="card-text fw-light fs-3">Precio: <?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</p>

                </div>
                <div class="card-footer border-success">
                    <a href="#" class="btn btn-outline-success">Añadir</a>
                </div>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
