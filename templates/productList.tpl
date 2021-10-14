{include file='templates/header.tpl'}

{include file='templates/navigation.tpl'}

<div class="w-100 mx-auto m-16">

    <div class="d-flex justify-content-between p-2 mb-2 border-bottom border-dark border-2">
        <div class="text-capitalize fw-bolder">ID</div>
        <div class="text-capitalize fw-bolder">Descripcion</div>
        <div class="text-capitalize fw-bolder">Precio</div>
        <div class="text-capitalize fw-bolder">Categoria</div>
        <div class="text-capitalize fw-bolder">Acciones</div>
    </div>

    {foreach from=$products item=$product}
        <div class="d-flex justify-content-between p-3 mb-2 border border-dark rounded-3">
            <div class="text-capitalize fs-5 fw-light">{$product->id}</div>
            <div class="text-capitalize fs-5 fw-light">{$product->descripcion}</div>
            <div class="text-capitalize fs-5 fw-light">{$product->precio}</div>
            <div class="text-capitalize fs-5 fw-light">{$product->marca}</div>
            <div class="text-capitalize fs-5 fw-light">{$product->categoria}</div>
            <div class="d-flex">
                <a class="btn btn-outline-danger" href="modificar/{$product->id}" role="button">Editar</a>
                <a class="btn btn-outline-dark" href="eliminar/{$product->id}" role="button">Eliminar</a>
            </div>
        </div>
    {/foreach}
</div>


{include file='templates/footer.tpl'}