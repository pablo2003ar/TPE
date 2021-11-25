{include file='templates/header.tpl'}

<div class="container">
    {include file="templates/menu-info.tpl"}

    <div class="w-100 mx-auto">
        <table class="table table-borderless table-hover caption-top">
            <caption>Lista de Usuarios</caption>
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">Rol</th>
                    <th scope="col">Permisos</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$users item=$user}
                    <tr>
                        <td>{$user->id_usuario}</td>
                        <td>{$user->usuario}</td>
                        <td>{$user->email}</td>
                        <td>{$user->tipo}</td>
                        {if $user->tipo == 'ADMIN'}
                            <td><a class="btn btn-warning me-2" href="usuario/quitar_permisos/{$user->id_usuario}">Quitar</a></td>
                        {else}
                            <td><a class="btn btn-warning me-2" href="usuario/conceder_permisos/{$user->id_usuario}">Conceder</a></td>
                        {/if}
                        <td><a class="btn btn-warning me-2" href="usuario/eliminar/{$user->id_usuario}">Eliminar</a></td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</div>



{include file='templates/footer.tpl'}