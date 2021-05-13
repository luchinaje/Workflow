@extends('adminlte::page')

@section('title', 'Admin')

@section('content_header')
    <h1>Administrador</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.dictations.store']) !!}

                <div class="form-group">

                    {!! Form::label('date', 'Fecha' ) !!}
                    {!! Form::date('date', null, ['class'=> 'form-control', 'min' => '2021-05-31' ]) !!}
                    @error('date')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                    <div class="form-group">
                    {!! Form::label('time', 'Hora') !!}
                    {!! Form::time('time', null, ['class'=> 'form-control','min' => '08:00', 'max' =>'18:00' ]) !!}
                    @error('time')
                        <small class="text-danger">{{$message}}</small>
                    @enderror

                </div>

                <div class="form-group">
                    {!! Form::label('stock', 'Cupos' ) !!}
                    {!! Form::number('stock', null, ['class'=> 'form-control', 'min' => '1', 'max' => '50','placeholder' => 'Ingrese el numero de cupos disponibles' ]) !!}
                    @error('stock')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('duration', 'Duracion en horas' ) !!}
                    {!! Form::number('duration', null, ['class'=> 'form-control' , 'placeholder' => 'EJ: 8']) !!}
                    @error('duration')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('course_id', 'Curso' ) !!}
                    {!! Form::select('course_id', $courses, null, ['class' => 'form-control','placeholder' => 'Seleccione un Curso' ]) !!}
                    @error('course_id')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    {!! Form::label('place_id', 'Lugar de Dictado' ) !!}
                    {!! Form::select('place_id', $places->    , null, ['class' => 'form-control', 'placeholder' => 'Seleccione un Ciudad' ]) !!}
                    @error('place_id')
                        <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>


                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}


        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
