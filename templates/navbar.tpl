<header class="p-3 bg-success text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="home" class="nav-link px-2 text-white" role="button">Home</a></li>
                <li class="px-2">
                    <div class="dropdown">
                        <a class="btn dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Productos
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <li><a class="dropdown-item" href="#">Raquetas</a></li>
                            <li><a class="dropdown-item" href="#">Padel</a></li>
                            <li><a class="dropdown-item" href="#">Accesorios</a></li>
                        </ul>
                    </div>
                </li>
                <li><a class="nav-link px-2 text-white">About</a></li>
            </ul>

            <div class="text-end">
                {if isset($smarty.session.USER_ID)}
                    {if $smarty.session.USER_ROL == 'ADMIN'}
                        <a class="btn btn-warning me-2" href="administracion">Admin</a>
                    {/if}
                    <a class="btn btn-outline-warning me-2" href="logout">({$smarty.session.USER_EMAIL}) Logout</a>
                {else}
                    <a class="btn btn-outline-warning me-2" href="login" role="button">Entrar</a>
                    <a class="btn btn btn-warning me-2" href="registro" role="button">Registrarse</a>
                {/if}
            </div>

        </div>
    </div>
</header>