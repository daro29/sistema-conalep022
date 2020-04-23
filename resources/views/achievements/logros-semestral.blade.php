@extends('general._master')

@section('title', 'Parcial')

@section('content')
<main>
	<div class="content-all">
		<!--contenedor  de aviso y datos del usuario-->
		<div class="conteiner-grafics">
			<h1>Logros semestrales</h1>
			<hr>
				<select name="menu">
					<option value="1">Parcial</option>
					<option value="2">1er Parcial</option>
					<option value="3">2ed Parcial</option>
					<option value="4">3er parcial</option>
					<option value="5">4er Parcial</option>
					<option value="6" selected>6ed semestre</option>
					<button type="reset">Buscar</button>
				</select>
				<div class="row">
					<div class="col-md-12">
						<h2>graficas</h2>
						<hr>
						<div id="myfirstchart"></div>
					</div>
				</div>
			 </div>
    </div>
</main>
@endsection
