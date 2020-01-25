@extends('layouts.default')

@section('content')
    {!! Form::open(['method' => 'POST', 'route' => ['formulario.store']]) !!}

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if (Session::has('message'))
                       <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif
                    {!! Form::label('name', 'Nombre*', ['class' => 'control-label']) !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    {!! Form::label('lastname', 'Apellidos*', ['class' => 'control-label']) !!}
                    {!! Form::text('lastname', old('lastname'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    {!! Form::label('cedula', 'Cédula*', ['class' => 'control-label']) !!}
                    {!! Form::text('DNI', old('cedula'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    {!! Form::label('burthday', 'Fecha*', ['class' => 'control-label']) !!}
                    {!! Form::date('birthday', old('birthday'), ['class' => 'form-control', 'placeholder' => '', 'required' => '', 'id' => 'fechaNacimiento']) !!}
                    {!! Form::label('name', 'Edad*', ['class' => 'control-label']) !!}
                    <input type="number" readonly id="edad" onchange="getAge()">
                </div>
            </div>
            
        </div>
    {!! Form::submit(trans('Guardar'), ['class' => 'btn btn-success']) !!}
    {!! Form::close() !!}
@stop

@section('js')

<script type="text/javascript">
        var fechaCampo = document.getElementById("fechaNacimiento");

        fechaCampo.addEventListener("change", function() {
            var fechaNacimiento = document.getElementById("fechaNacimiento").value;
            var fecha = new Date(fechaNacimiento);
            var fechaActual = new Date()

            var mes = fechaActual.getMonth();
            var dia = fechaActual.getDate();
            var año = fechaActual.getFullYear();

            fechaActual.setDate(dia);
            fechaActual.setMonth(mes);
            fechaActual.setFullYear(año);

            edadF = Math.floor(((fechaActual - fecha) / (1000 * 60 * 60 * 24) / 365));
           
             var inputFecha = document.getElementById("edad");
            inputFecha.value = edadF;

        });

    </script>

@stop
