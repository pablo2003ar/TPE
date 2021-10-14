<?php
/* Smarty version 3.1.39, created on 2021-10-11 16:40:25
  from 'C:\xampp\htdocs\web2\templates\formCategory.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61644cd9d35102_61166223',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '107c99fdb371734ce7c548499911aad70066a09c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\formCategory.tpl',
      1 => 1633963219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61644cd9d35102_61166223 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="w-25 mx-auto">
  <form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">
      
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" value="<?php if ($_smarty_tpl->tpl_vars['category']->value) {
echo $_smarty_tpl->tpl_vars['category']->value->nombre;
}?>">
        <div class="form-text">Ingrese el nombre de la Categoria.</div>
      </div>
      
      <div class="d-grid gap-2 d-md-block">
        <a class="btn btn-outline-secondary" href="administracion" role="button">Cancelar</a>
        <button type="submit" class="btn btn-outline-success">Submit</button>
      </div>
  </form>
</div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
