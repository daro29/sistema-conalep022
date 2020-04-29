@csrf

<div class="from-group">

    <label for="name">Nombre:</label>
    <input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-1 @enderror"
            id="name"
            type="text"
            name="name"
            value="{{ old('name', $career->name) }}">

    @error('name')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>


<div class="from-group">

    <label for="description">Descripción:</label>
    <textarea class="form-control bg-light shadow-sm @error('description') is-invalid @else border-2 @enderror"
            name="description"
            id="description"
            cols="30"
            rows="6">{{ old('description', $career->description) }}
    </textarea>
    @error('description')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<br>

<input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ $btn }}">

<a class="btn btn-light btn-lg btn-block" href="{{ route('career.index') }}">Regresar</a>


