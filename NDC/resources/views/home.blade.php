@extends('layouts.default')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/Boostrap-Select/bootstrap-select.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/DatePicker/jquery.timepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/DatePicker/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />
@stop

@section('content')
<!--
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>


  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{ asset('img/IMG_0159.jpg') }}" alt="...">
      <div class="carousel-caption">
        <h3>
        	Laboratorios
        </h3>
      	<p>
      		Proceso encargado de préstamos de equipos de laboratorios para las facultades
      	</p>
      </div>
    </div>
    <div class="item">
      <img src="{{ asset('img/IMG_0159.jpg') }}" alt="...">
      <div class="carousel-caption">
      	<h3>
        	Audiovisuales
        </h3>
      	<p>
      		Brindar asistencia oportuna al personal académico y administrativo de Unipanamericana y sus unidades de negocio en la asignación y préstamos de equipos audiovisuales.
      	</p>
      </div>
    </div>
        <div class="item">
      <img src="{{ asset('img/IMG_0159.jpg') }}" alt="...">
      <div class="carousel-caption">
      	<h3>
        	Infraestructura
        </h3>
      	<p>
      		Proceso encargado de velar por el estado de la infraestructura física.
      	</p>
      </div>
    </div>
  </div>


  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
-->
@endsection

@section('js')
	<script type="text/javascript" src="{{ asset('js/DatePicker/bootstrap-datepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/DatePicker/jquery.timepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/DatePicker/Datepair.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/Boostrap-Select/bootstrap-select.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>


@stop
