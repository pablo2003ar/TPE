<form id="formComment" action="insertar" method="POST">
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descripcion</label>
        <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div class="mb-3">
        <p>Puntuacion:</p>
    </div>
    <div class="mb-3">
        <select class="form-select" name="puntaje" aria-label="Default select example" required>
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-success mb-3">Comentar</button>
    </div>
</form>