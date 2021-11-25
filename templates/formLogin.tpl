{include file='templates/header.tpl'}

<div class="w-25 mx-auto m-4 text-center">

    <main class="form-signin">
        <form action="verificar" method="POST">
            <h1 class="h2 mb-3 fw-normal">Login</h1>

            <div class="m-2 form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com"
                    required>
                <label for="floatingInput">Email address</label>
            </div>

            <div class="m-2 form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password"
                    required>
                <label for="floatingPassword">Password</label>
            </div>

            {if $error}
                <div class="alert alert-danger mt-3">
                    {$error}
                </div>
            {/if}

            <button class="mt-5 w-100 btn btn-lg btn-success" type="submit">Sign in</button>
            <p class="mt-5 mb-3 text-muted">Solo Tennis</p>

        </form>
    </main>
</div>

{include file='templates/footer.tpl'}