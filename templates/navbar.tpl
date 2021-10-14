<header class="p-3 bg-success text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between">

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="home" class="nav-link px-2 text-white fw-bold" role="button">Home</a></li>
                <li><a class="nav-link px-2 text-white  fw-bold" role="button">Raquetas de tenis</a></li>
                <li><a class="nav-link px-2 text-white fw-bold">Padel</a></li>
                <li><a class="nav-link px-2 text-white fw-bold">Accesorios</a></li>
                <li><a class="nav-link px-2 text-white fw-bold">About</a></li>
            </ul>

            <div class="text-end">
                {if isset($smarty.session.USER_ID)}
                    <!-- $_SESSION['USER_ID'] -->
                    <a class="btn btn-outline-warning me-2" href="logout">({$smarty.session.USER_EMAIL}) Logout</a>
                {else}
                    <a class="btn btn-outline-warning me-2" href="login" role="button">Entrar</a>
                {/if}
                <a class="btn btn btn-warning me-2" href="registro" role="button">Registrarse</a>
            </div>

        </div>
    </div>
</header>