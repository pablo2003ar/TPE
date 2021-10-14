{include file='templates/header.tpl'}

<div class="row row-cols-1 row-cols-md-4 g-4 w-75 mx-auto mt-3">
    {foreach from=$products item=$product}
        <div class="col">
            <div class="card text-center  h-100" style="width: 18rem;">
                <div class="card-body">
                    <a class="card-title text-decoration-none link-dark h5"
                        href="detalle/{$product->id}">{$product->descripcion}</a>
                    <p class="card-text fw-light fs-3">Precio: {$product->precio}</p>

                </div>
                <div class="card-footer border-success">
                    <a href="#" class="btn btn-outline-success">Añadir</a>
                </div>
            </div>
        </div>
    {/foreach}

</div>

{include file='templates/footer.tpl'}