{include file='templates/header.tpl'}

<div class="w-25 mx-auto">
  <form action="{$action}" method="POST">
      
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="exampleInputEmail1" value="{if $category}{$category->nombre}{/if}">
        <div class="form-text">Ingrese el nombre de la Categoria.</div>
      </div>
      
      <div class="d-grid gap-2 d-md-block">
        <a class="btn btn-outline-secondary" href="administracion" role="button">Cancelar</a>
        <button type="submit" class="btn btn-outline-success">Submit</button>
      </div>
  </form>
</div>

{include file='templates/footer.tpl'}