<div class="container p-3">
<nav class="nav justify-content-between m-2">
    <div class="nav-item">
        <form action="filtrar" method="GET">
            <div class="d-flex justify-content-between mb-3">
                <select name="categoria" class="form-select">
                    <option value="">Todas</option>
                    {foreach from=$categories item=$category}
                        <option value="{$category->id_categoria}">{$category->nombre}</option>
                    {{/foreach}}
                </select>
                <button type="submit" class="btn btn-outline-warning ms-2">Filtrar</button>
            </div>
        </form>
    </div>
    <div class="nav-item">
        <div class="btn-group">
            <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false">
                Nuevo
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="producto/formulario/insertar">Producto</a></li>
                <li><a class="dropdown-item" href="categoria/formulario/insertar">Categoria</a></li>
            </ul>
        </div>
    </div>
</nav>