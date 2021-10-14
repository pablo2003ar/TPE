<?php
/* Smarty version 3.1.39, created on 2021-10-11 22:14:39
  from 'C:\xampp\htdocs\web2\templates\formProduct.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61649b2f9a7ab5_40473702',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73342e45ed9f1f09c19cd8ef27eb9aec37e23854' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\templates\\formProduct.tpl',
      1 => 1633983271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61649b2f9a7ab5_40473702 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="w-25 mx-auto">
  <form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">
      
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" name="descripcion" class="form-control" id="exampleInputEmail1" value="<?php if ($_smarty_tpl->tpl_vars['product']->value) {
echo $_smarty_tpl->tpl_vars['product']->value->descripcion;
}?>">
        <div class="form-text">Ingrese el nombre del producto.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Precio</label>
        <input type="float" name="precio" class="form-control" id="exampleInputPassword1" value="<?php if ($_smarty_tpl->tpl_vars['product']->value) {
echo $_smarty_tpl->tpl_vars['product']->value->precio;
}?>">
        <div class="form-text">Ingrese el precio del producto.</div>
      </div>
      <div class="mb-3">
        <div class="form-group">
          <label for="exampleDataList" class="form-label">Marca</label>
          <select name="marca" class="form-select">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trademarks']->value, 'trademark');
$_smarty_tpl->tpl_vars['trademark']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['trademark']->value) {
$_smarty_tpl->tpl_vars['trademark']->do_else = false;
?>
              <option value="<?php echo $_smarty_tpl->tpl_vars['trademark']->value->id_marca;?>
"><?php echo $_smarty_tpl->tpl_vars['trademark']->value->nombre;?>
</option>
            <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

          </select>
          <div class="form-text">Elegir la marca del producto.</div>
        </div>
      </div>
      <div class="mb-3">
        <div class="form-group">
          <label for="exampleDataList" class="form-label">Categoria</label>
          <select name="categoria" class="form-select">
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
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>

          </select>
          <div class="form-text">Elegir la categoria del producto.</div>
        </div>
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
