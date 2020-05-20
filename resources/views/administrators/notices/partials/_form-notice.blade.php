@csrf

<div class="from-group">

    <label for="title">Titulo:</label>
    <input class="form-control bg-light shadow-sm @error('title') is-invalid @else border-1 @enderror"
            id="title"
            type="text"
            name="title"
            value="{{ old('title', $notice->title) }}">

    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="excerpt">Extracto:</label>
    <textarea class="form-control @error('title') is-invalid @else border-1 @enderror" name="excerpt" id="excerpt" rows="2">{{ old('excerpt', $notice->excerpt ?? '') }}</textarea>

    @error('excerpt')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="body">Contenido</label>
    <textarea class="form-control @error('title') is-invalid @else border-1 @enderror" name="body" id="body" rows="3">{{ old('body', $notice->body ?? '') }}</textarea>

    @error('body')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="status">Estado:</label>
    <br>
    @if ($notice->status == 'PUBLISHED')
        <label><input type="radio" class=" @error('status') is-invalid @else border-1 @enderror" name="status" id="status" value="PUBLISHED" checked>Publicado</label>
        <br>
    @else
        <label><input type="radio" class=" @error('status') is-invalid @else border-1 @enderror" name="status" id="status" value="PUBLISHED">Publicado</label>
        <br>
    @endif

    @if ($notice->status  == 'DRAFT')
        <label><input type="radio" class=" @error('status') is-invalid @else border-1 @enderror" name="status" id="status" value="DRAFT" checked>Borrador</label>
    @else
        <label><input type="radio" class=" @error('status') is-invalid @else border-1 @enderror" name="status" id="status" value="DRAFT">Borrador</label>
    @endif
    @error('status')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="form-group">
    <label for="status">A quien va dirigido:</label>
    <br>
    @if ($notice->receiber == 'TEACHER')
        <label><input type="radio" name="receiber" id="receiber" value="TEACHER" checked>Docente</label>
        <br>
    @else
        <label><input type="radio" name="receiber" id="receiber" value="TEACHER">Docente</label>
        <br>
    @endif

    @if ($notice->receiber  == 'STUDENT')
        <label><input type="radio" name="receiber" id="receiber" value="STUDENT" checked>Estudiante</label>
    @else
        <label><input type="radio" name="receiber" id="receiber" value="STUDENT">Estudiante</label>
    @endif

</div>

<br>

<input class="btn btn-primary btn-lg btn-block" type="submit" value="{{ $btn }}">

<a class="btn btn-light btn-lg btn-block" href="{{ route('notices.index') }}">Regresar</a>

@section('scripts')
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.config.height = 400;
    CKEDITOR.config.width  = 'auto';
    CKEDITOR.replace('body');
</script>
@endsection
