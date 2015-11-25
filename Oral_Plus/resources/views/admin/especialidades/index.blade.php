@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h4><strong>Mantenedor de Especialidades</strong></h4></div>
       @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    <div class="col-md-3">
                        <p>
                            <a href="{{ route('admin.especialidades.create') }}" role="button" class="btn btn-info"><span class="icon-circle-with-plus"></span> Crear Especialidad</a>
                        </p>

                    </div>
                    <div class="col-md-7 col-md-offset-2">
                        {!! Form::model(Request::all(),[ 'method' => 'GET' , 'class' => 'navbar-form navbar-right', 'role' => 'search', 'autocomplete' => 'off']) !!}
                        <div class="form-group">

                            {!! Form::text('especialidad', null, ['class' => 'form-control']) !!}

                        </div>

                        <button type="submit" class="btn btn-info"><span class="icon-magnifier"></span></span> <strong>Buscar</strong></button>
                        {!! Form::close() !!}
                    </div>
                    <div class="col-md-4 pull-left">
                        <p class="text-primary">Hay {{ $especialidades->total() }} Registros</p>
                    </div>

                    @include('admin.especialidades.partials.table')
                    {!! $especialidades->appends(Request::only(['name']))->render() !!}

                </div>
            </div>

        </div>

    </div>

@endsection


                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    