@csrf

<div class="from-group">

    <label for="file">Elige tu archivo:</label>
    <input class="form-control py-1 bg-light @error('file') is-invalid @else border-1 @enderror"
        id="file"
        type="file"
        name="file">

    @error('file')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<br>
<input class="btn btn-outline-success  btn-lg btn-block" type="submit" value="Importar">
<a class="btn btn-lg btn-light btn-block" href="#">Regresar</a>


