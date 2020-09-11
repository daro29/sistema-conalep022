@extends('general._master')

@section('title','boltas de calificacion')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-12 mx-auto">
            <div class="content-all">
                @include('message.session-status')

{{-- tabla  --}}
<div class="container bg-white">
    <div class="conteiner">
      <h1>Boletas de Calificaciones</h1>
    <select class="custom-select ">
      <option selected>Semestre</option>
      <option value="1">ENERO-JUNIO/2020</option>
      <option value="2">AGOSTO-DICIEMBRE/2019</option>
      <option value="3">ENERO-JUNIO/2018</option>
      <option value="4">AGOSTO-DICIEMBRE/2018</option>
      <option value="5">ENERO-JUNIO/2017</option>
      <option value="6">AGOSTO-DICIEMBRE/2017</option>
    </select>
</div><br>


    <div class="conteiner">

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Materia</th>
            <th scope="col">CR.</th>
            <th scope="col">Calificacion</th>
            <th scope="col">Tipo de Evaluacion</th>
            <th scope="col">Observacion</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">TALLER DE INVESTIGACION I</th>
            <td data-label="CR">4</td>
            <td data-label="Calificación">90</td>
            <td data-label="Tipo de evaluación">Evaluacion Ordinaria</td>
            <td data-label="Observación">Cumple con sus Actividades</td>
          </tr>
          <tr>
            <th scope="row">PROGRAMACION LOGICA Y FUNCIONAL</th>
            <td data-label="CR">5</td>
            <td data-label="Calificación">NA</td>
            <td data-label="Tipo de evaluación">Evaluacion Complementaria</td>
            <td data-label="Observación">No cumple con las Actividades</td>
          </tr>
          <tr>
            <th scope="row">ADMINISTRACION DE REDES</th>
            <td data-label="CR">4</td>
            <td data-label="Calificación">100</td>
            <td data-label="Tipo de Evaluación">Evaluacion Ordinaria</td>
            <td data-label="Observación">Cumple con sus Actividades</td>
          </tr>
          <tr>
            <th scope="row">TALLER DE INVESTIGACION II</th>
            <td data-label="CR">4</td>
            <td data-label="Calificación">80</td>
            <td data-label="Tipo de Evaluación">Evaluacion Ordinaria</td>
            <td data-label="Observación">Cumple con sus Actividades</td>
          </tr>
          <tr>
            <th scope="row">PROGRAMACION WEB</th>
            <td data-label="CR">5</td>
            <td data-label="Calificación">87</td>
            <td data-label="Tipo de Evaluación">Evaluacion Ordinaria</td>
            <td data-label="Observación">Cumple con sus Actividades</td>
          </tr>
           <tr>
            <th scope="row">PROMEDIO</th>
            <td data-label="Total CR">22</td>
            <td data-label="Promedio">71.4</td>
            <td></td>
            <td></td>
          </tr>
          <!-- <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
          </tr> -->
        </tbody>
      </table>

    </div>

  </div>

                {{-- tabla fin --}}
            </div>
        </div>
    </div>
</div>

@endsection
