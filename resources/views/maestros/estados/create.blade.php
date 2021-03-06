@extends('maestros.estados')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-06 col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Datos del Estado</h4></div>

                    <div class="panel-body">
                        @include('mensajes.validation')
                        {!! Form::open(['route'=>'maestros.estados.store','method'=>'POST','class'=>'']) !!}
                        @include('maestros.estados.partials.fields')
                        <div class="col-xs-12 col-sm-6 col-md-10 col-md-offset-8">
                            {!! Form::submit('Guardar',['id'=>'guardar','class'=>'btn btn-success']) !!}
                            <a href="{{route('maestros.estados.index')}}" class="btn btn-primary ">Cancelar</a>
                        </div>
                        {!! Form::close() !!}








                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection