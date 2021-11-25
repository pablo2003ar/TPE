{include file='templates/header.tpl'}

<div class="w-25 mx-auto m-3">
    <form action="crear" method="POST">
        <div class="form-group mb-3">
            <label for="exampleInputEmail1" class="form-group mb-3">Usuario</label>
            <input type="text" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Ingrese nombre de usuario" required>
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1" class="form-group mb-3">Email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Ingrese email" required>
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputPassword1" class="form-group mb-3">Contraseña</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success p-2 mt-3">Registrarse</button>
        </div>
    </form>
</div>

{include file='templates/footer.tpl'}