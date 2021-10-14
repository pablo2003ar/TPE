{include file='templates/header.tpl'}

<div class="card mb-3 w-75 border-success mx-auto text-center mt-3" style="max-width: 540px;">
    <div class="card-header">{$product->descripcion}</div>
    <div class="card-body">
        <h5 class="card-title">{$product->marca}</h5>
        <p class="card-text">{$product->precio}</p>
        <p class="card-text">{$product->categoria}</p>
    </div>
    <div class="card-footer border-success">
        <a href="home" class="btn btn-outline-success">Volver</a>
        <a class="btn btn-outline-warning">Añadir</a>
    </div>
    
</div>

{include file='templates/footer.tpl'}