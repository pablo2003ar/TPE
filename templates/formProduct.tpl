{include file='templates/header.tpl'}

<div class="w-25 mx-auto">
  <form action="{$action}" method="POST">
      
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" name="descripcion" class="form-control" id="exampleInputEmail1" value="{if $product}{$product->descripcion}{/if}">
        <div class="form-text">Ingrese el nombre del producto.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Precio</label>
        <input type="float" name="precio" class="form-control" id="exampleInputPassword1" value="{if $product}{$product->precio}{/if}">
        <div class="form-text">Ingrese el precio del producto.</div>
      </div>
      <div class="mb-3">
        <div class="form-group">
          <label for="exampleDataList" class="form-label">Marca</label>
          <select name="marca" class="form-select">
            {foreach from=$trademarks item=$trademark}
              <option value="{$trademark->id_marca}">{$trademark->nombre}</option>
            {{/foreach}}
          </select>
          <div class="form-text">Elegir la marca del producto.</div>
        </div>
      </div>
      <div class="mb-3">
        <div class="form-group">
          <label for="exampleDataList" class="form-label">Categoria</label>
          <select name="categoria" class="form-select">
            {foreach from=$categories item=$category}
              <option value="{$category->id_categoria}">{$category->nombre}</option>
            {{/foreach}}
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

{include file='templates/footer.tpl'}