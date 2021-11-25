{include file='templates/header.tpl'}

<div class="container">
    <div class="d-flex justify-content-center">
        <form class="row g-3 m-1" action="buscar" method="GET">
            <div class="col-auto">
                <input type="text" name="data" class="form-control" id="inputPassword2" placeholder="">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-success mb-3">Buscar</button>
            </div>
        </form>
    </div>
</div>
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