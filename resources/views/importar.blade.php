<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Importar - Excel</title>
</head>
<body>
<form action="{{ route('datos.import.excel')}}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(Session::has('message'))
            <p>{{ Session::get('message')}}</p>
        @endif
        <label for="file">Buscar Archivo</label>
        <p><input type="file" name="file"></p>

        <input type="submit" value="Importar">

    </form>
</body>
</html>