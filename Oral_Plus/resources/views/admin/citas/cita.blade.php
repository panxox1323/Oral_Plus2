@extends('layout.admin')

@section('content')

    <div class="panel panel-info">
        <div class="panel-heading text-center"><h5 class="porte"><strong>Mantenedor de Citas</strong></h5></div>
        @include('admin.partials.mensaje')
        <div class="panel-body">
            <div class="container">
                <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
                    {!! Form::open(['route' => 'admin.agendar.store', 'method' => 'POST', 'id' => 'form', 'role' => 'form', 'autocomplete' => 'off']) !!}

                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <h4 class="text-center color-subtitulo">Seleccione Especialista</h4>
                                    <select name="id_especialista" id="" class="form-control">
                                        @foreach($especialista as $esp)
                                            <option value="{{ $esp->id }}" >{{ $esp->first_name.' '.$esp->last_name }}</option>
                                        @endforeach
                                    </select>
{{--                                    {!! Form::select('id_especialista', $especialista, null, ['class' => 'form-control', 'id' => 'selector']) !!} --}}
                                </div>

                                <div class="col-lg-12-col-md-12 col-sm-12 col-xs-12 ajustes100">
                                    <h4 class="text-center color-subtitulo">Seleccione un Paciente</h4>

                                    <select name="id_usuario" class="form-control">
                                        @foreach($paciente as $pac)
                                            <option value="{{ $pac->id }}">{{ $pac->first_name.' '.$pac->last_name }}</option>
                                        @endforeach
                                    </select>
{{--                                    {!! Form::select('id_usuario', $paciente['first_name'].' '.$paciente['last_name'], null, ['class' => 'form-control', 'id' => 'selector']) !!}--}}
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ajustes100">
                                    <h4 class="text-center color-subtitulo">Valor de la Consulta</h4>
                                    {!! Form::select('valor_consulta', config('opciones.valoresConsulta'),null, ['class' => 'form-control', 'id' => 'selector'] ) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                <h4 class="text-center color-subtitulo">Seleccione una Fecha</h4>

                                <div style="overflow:hidden;">
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div id="datetimepicker12"></div>
                                                {!! Form::text('fecha', null, ['class' => '', 'id' => 'fechaOculta']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6" >
                                <h4>Seleccione una Hora</h4>
                                <div id="acordion" style="overflow: scroll; max-height: 440px;">
                                    @foreach($listado as $lista)

                                        <h3><span class="icon-chevron-right" style="color: green; font-size: 20px;"></span>  {{ $lista->hora }}</h3>

                                        <div>

                                                <p class="text-green"></p>


                                        </div>
                                    @endforeach
                                </div>
                            <button type="submit" class="btn btn-info btn-block btn-lg "><span class="icon-calendar"></span></span> <strong>Agendar</strong></button>
                        </div>



                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>


@endsection