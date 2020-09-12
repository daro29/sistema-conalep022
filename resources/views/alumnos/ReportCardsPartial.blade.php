@extends('general._master')

@section('title','calificacion parcial')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-12 mx-auto">
            <div class="content-all">
                @include('message.session-status')
                @auth('student')

{{-- tabla  --}}
<div class="container bg-white">
    <div class="conteiner">
      <h1>Calificaciones Parciales</h1>
</div>

    <div class="conteiner">

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Materia</th>
            <th scope="col">1r. Parcial</th>
            <th scope="col">2o. Parcial</th>
            <th scope="col">3r. Parcial</th>
            <th scope="col">4o. Parcial</th>
            <th scope="col">5o. Parcial</th>
            <th scope="col">6o. Parcial</th>
            <th scope="col">7o. Parcial</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">TALLER DE INVESTIGACION I</th>
            <td data-label="1r. Parcial">90</td>
            <td data-label="2o. Parcial">70</td>
            <td data-label="3r. Parcial">0</td>
            <td data-label="4o. Parcial">65</td>
            <td data-label="5o. Parcial">100</td>
            <td data-label="6o. Parcial">80</td>
            <td data-label="7o. Parcial">80</td>
          </tr>
          <tr>
            <th scope="row">PROGRAMACION LOGICA Y FUNCIONAL</th>
            <td data-label="1r. Parcial">90</td>
            <td data-label="2o. Parcial">70</td>
            <td data-label="3r. Parcial">0</td>
            <td data-label="4o. Parcial">65</td>
            <td data-label="5o. Parcial">100</td>
            <td data-label="6o. Parcial">80</td>
            <td data-label="7o. Parcial">80</td>
          </tr>
          <tr>
            <th scope="row">ADMINISTRACION DE REDES</th>
            <td data-label="1r. Parcial">90</td>
            <td data-label="2o. Parcial">70</td>
            <td data-label="3r. Parcial">0</td>
            <td data-label="4o. Parcial">65</td>
            <td data-label="5o. Parcial">100</td>
            <td data-label="6o. Parcial">80</td>
            <td data-label="7o. Parcial">80</td>
          </tr>
          <tr>
            <th scope="row">TALLER DE INVESTIGACION II</th>
            <td data-label="1r. Parcial">90</td>
            <td data-label="2o. Parcial">70</td>
            <td data-label="3r. Parcial">0</td>
            <td data-label="4o. Parcial">65</td>
            <td data-label="5o. Parcial">100</td>
            <td data-label="6o. Parcial">80</td>
            <td data-label="7o. Parcial">80</td>
          </tr>
          <tr>
            <th scope="row">PROGRAMACION WEB</th>
            <td data-label="1r. Parcial">90</td>
            <td data-label="2o. Parcial">70</td>
            <td data-label="3r. Parcial">0</td>
            <td data-label="4o. Parcial">65</td>
            <td data-label="5o. Parcial">100</td>
            <td data-label="6o. Parcial">80</td>
            <td data-label="7o. Parcial">80</td>
          </tr>
          <!-- <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr> -->
        </tbody>
      </table>
      @endauth

    </div>

  </div>

                {{-- tabla fin --}}

            </div>
        </div>
    </div>
</div>

@endsection
