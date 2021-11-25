{include file='templates/header.tpl'}

<div id="user" data-id="{if isset($smarty.session.USER_ID)}{$smarty.session.USER_ID}{/if}"
    data-rol="{if isset($smarty.session.USER_ID)}{$smarty.session.USER_ROL}{/if}">
</div>

<div class="card mb-3 w-75 border-success mx-auto text-center mt-3" style="max-width: 540px;">
    <div id="product" data-id="{$product->id}"></div>
    <div class="card-header">Descripcion: {$product->descripcion}</div>
    <div class="card-body">
        <h5 class="card-title">Marca: {$product->marca}</h5>
        <p class="card-text">Precio: ${$product->precio}</p>
        <p class="card-text">Categoria: {$product->categoria}</p>
    </div>
    <div class="card-footer border-success">
        <a href="home" class="btn btn-outline-success">Volver</a>
        <a class="btn btn-outline-warning">Añadir</a>
    </div>
</div>

<section class="container w-75 mx-auto">
    {include file="templates/formComment.tpl"}
    <div class="d-flex  justify-content-between">
        <div class="h4">Comentarios</div>
        <div>
            {include file="templates/filter-comment.tpl"}
        </div>
        <div>
            {include file="templates/filter-order-comment.tpl"}
        </div>
    </div>
    {include file="templates/vue/product-comments.tpl"}
</section>

<script src="js/comment.js"></script>
{include file='templates/footer.tpl'}