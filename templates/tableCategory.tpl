<div class="w-50 mx-auto m-16 ml-3">
    <table class="table table-borderless table-hover caption-top">
        <caption>Lista de categoria</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Categoria</th>
                <th scope="col" colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$categories item=$category}
                <tr>
                    <th scope="row">{$category->id_categoria}</th>
                    <td>{$category->nombre}</td>
                    <td>
                        <div class="d-flex justify-content-evenly">
                            <a class="btn btn-warning" href="categoria/formulario/modificar/{$category->id_categoria}" role="button">Editar</a>
                            <a class="btn btn-danger" href="categoria/eliminar/{$category->id_categoria}" role="button">Eliminar</a>
                        </div>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>