@extends('layouts.app', ['page' => __('Alumnos'), 'pageSlug' => 'alumno'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Editar Alumno') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('alumnos.index') }}" class="btn btn-sm btn-primary">{{ __('Regresar') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('alumnos.update', $alumno) }}" autocomplete="off">
                            @csrf
                            @method('put')

                            <h6 class="heading-small text-muted mb-4">{{ __('Información') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="{{ $alumno->nombre }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'nombre'])
                                </div>
                                <div class="form-group{{ $errors->has('apellidopat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-ape1">{{ __('Apellido Paterno') }}</label>
                                    <input type="text" name="ape1" id="input-ape1" class="form-control form-control-alternative{{ $errors->has('apellidopat') ? ' is-invalid' : '' }}" placeholder="{{ __('Apellido Paterno') }}" value="{{ $alumno->apellidopat }}" required>
                                    @include('alerts.feedback', ['field' => 'apellidopat'])
                                </div>
                                <div class="form-group{{ $errors->has('apellidomat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-ape2">{{ __('Apellido Materno') }}</label>
                                    <input type="text" name="ape2" id="input-ape2" class="form-control form-control-alternative{{ $errors->has('apellidomat') ? ' is-invalid' : '' }}" placeholder="{{ __('Apellido Materno') }}" value="{{ $alumno->apellidomat }}" required>
                                    @include('alerts.feedback', ['field' => 'apllidomat'])
                                </div>
                                <div class="form-group{{ $errors->has('grado') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-grado">{{ __('Grado') }}</label>
                                    <input type="text" name="grado" id="input-grado" class="form-control form-control-alternative{{ $errors->has('grado') ? ' is-invalid' : '' }}" placeholder="{{ __('Grado') }}" value="{{ $alumno->grado}}" required>
                                    @include('alerts.feedback', ['field' => 'grado'])
                                </div>
                                <div class="form-group{{ $errors->has('gpo') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-gpo">{{ __('Grupo') }}</label>
                                    <input type="text" name="gpo" id="input-gpo" class="form-control form-control-alternative{{ $errors->has('gpo') ? ' is-invalid' : '' }}" placeholder="{{ __('Grupo') }}" value="{{ $alumno->gpo }}" required>
                                    @include('alerts.feedback', ['field' => 'gpo'])
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Guardar') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
