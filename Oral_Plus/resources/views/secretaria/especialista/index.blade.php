@extends('secretaria.layout')

@section('content')
    <div class="container navbaar">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center"><h4><strong>Mantenedor de Especilistas</strong></h4></div>

                    @if(Session::has('message'))

                        <p class="alert alert-danger">{{ Session::get('message') }}</p>

                    @endif

                    <div class="panel-body">
                        <div class="col-md-3">
                            <p>
                                <a href="{{ route('secretaria.especialista.create') }}" role="button" class="btn btn-info"><span class="icon-circle-with-plus"></span> Crear Especialista</a>
                            </p>

                        </div>
                        <div class="col-md-8 col-md-offset-1">
                            {!! Form::model(Request::all(),['route' => 'secretaria.especialista.index', 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search']) !!}
                            <div class="form-group">

                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de usuario']) !!}

                                {!! Form::select('type', config('opciones.Especialidad'), null, ['class' => 'form-control']) !!}

                            </div>

                            <button type="submit" class="btn btn-info"><span class="icon-magnifier"></span></span> <strong>Buscar</strong></button>
                            {!! Form::close() !!}
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-4  pull-left">
                            <p class="text-primary">Hay {{ $especialistas->total() }} Especialistas</p>
                        </div>


                        @include('secretaria.especialista.partials.table')
                        {!! $especialistas->appends(Request::only(['name', 'type']))->render() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
    {!! Form::open(['method' => 'DELETE', 'id' => 'form-delete']) !!}



    {!! Form::close() !!}
@endsection


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   