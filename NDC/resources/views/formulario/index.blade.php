@inject('request', 'Illuminate\Http\Request')
@extends('layouts.default')

@section('content')
<div class="table-responsive">
  <table class="table table-hover">
  <thead style="background-color:rgba(255,232,164,1.00)">
  
  <tr>
     	<th>ID</th>
        <th>Nombres</th>
        <th>Apellidos</th>
        <th>Cedula</th>
        <th>Fecha de nacimiento</th>
  </tr>
        </thead>
    <tbody>

  @forelse($contenidos as $contenido)
  <tr data-entry-id="{{ $contenido->id }}">
      <td>{{ $contenido->id }}</td>
        <td>{{ $contenido->name }}</td>
        <td>{{ $contenido->lastname }}</td>
        <td>{{ $contenido->DNI }}</td>
        <td>{{ $contenido->birthday }}</td>
   </tr>
  @empty
  <p> No hay solicitudes registradas en el sistema </p>
  @endforelse

  </tbody>
  </table>
  </div>
@stop

@section('javascript') 

@endsection