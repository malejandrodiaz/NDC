@inject('request', 'Illuminate\Http\Request')
@extends('layouts.default')

@section('content')
<div class="table-responsive">
  <table class="table table-hover">
  <thead style="background-color:rgba(255,232,164,1.00)">
  
  <tr>
     	<th>User ID</th>
        <th>ID</th>
        <th>Titulo</th>
        <th>Contenido</th>
  </tr>
        </thead>
    <tbody>

  @forelse($contenidos as $contenido)
  <tr data-entry-id="{{ $contenido->id }}">
      <td>{{ $contenido->userId }}</td>
        <td>{{ $contenido->id }}</td>
        <td>{{ $contenido->title }}</td>
        <td>{{ $contenido->body }}</td>
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