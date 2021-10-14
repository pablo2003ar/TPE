<?php
/* Smarty version 3.1.39, created on 2021-10-10 00:12:54
  from 'C:\xampp\htdocs\web2\templates\productDetail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616213e64a0bd1_30161918',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12652f304aa1dd1a84029d52dc8359957dfeff83' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\productDetail.tpl',
      1 => 1633817572,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616213e64a0bd1_30161918 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="card mb-3 w-75 border-success mx-auto text-center mt-3" style="max-width: 540px;">
    <div class="card-header"><?php echo $_smarty_tpl->tpl_vars['product']->value->descripcion;?>
</div>
    <div class="card-body">
        <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['product']->value->marca;?>
</h5>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value->precio;?>
</p>
        <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['product']->value->categoria;?>
</p>
    </div>
    <div class="card-footer border-success">
        <a href="home" class="btn btn-outline-success">Volver</a>
        <a class="btn btn-outline-warning">Añadir</a>
    </div>
    
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
