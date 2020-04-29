@csrf

<div class="from-group">

    <label for="name">Clave del grupo:</label>
    <input class="form-control bg-light shadow-sm @error('code') is-invalid @else border-1 @enderror"
            id="name"
            type="text"
            name="code"
            value="{{ old('code', $group->code) }}">

    @error('code')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<br>

<input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ $btn }}">

<a class="btn btn-light btn-lg btn-block" href="{{ route('group.index') }}">Regresar</a>


