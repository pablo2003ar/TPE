
<div class="w-100 mx-auto m-16">
    <table class="table table-borderless table-hover caption-top">
        <caption>Lista de productos</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Precio</th>
                <th scope="col">Marca</th>
                <th scope="col">Categoria</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$products item=$product}
                <tr>
                    <th scope="row">{$product->id}</th>
                    <td>{$product->descripcion}</td>
                    <td>{$product->precio}</td>
                    <td>{$product->marca}</td>
                    <td>{$product->categoria}</td>
                    <td>
                        <div class="d-flex justify-content-evenly">
                            <a class="btn btn-warning" href="producto/formulario/modificar/{$product->id}" role="button">Editar</a>
                            <a class="btn btn-danger" href="producto/eliminar/{$product->id}" role="button">Eliminar</a>
                        </div>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>

