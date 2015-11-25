@extends('layout.admin')

@section('content')
    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Ingresar Factura de Compras</strong></h5></div>

        @include('admin.partials.mensaje')

        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 padding">

                    {!! Form::open(['route' => 'admin.factura.store', 'method' => 'POST', 'id' => 'form', 'role' => 'form', 'autocomplete' => 'off' ]) !!}

                        @include('admin.factura.partials.fields')
                        @include('admin.factura.partials.campos')

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection