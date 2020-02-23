@extends('layouts.app', ['page' => __('Alumnos'), 'pageSlug' => 'alumnos'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Alumnos') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="{{ route('alumnos.index') }}" class="btn btn-sm btn-primary">{{ __('Regresar') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('alumnos.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Información') }}</h6>
                            <div class="pl-lg-4">
                                <div class="form-group{{ $errors->has('nombre') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-name">{{ __('Nombre') }}</label>
                                    <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('nombre') ? ' is-invalid' : '' }}" placeholder="{{ __('Nombre') }}" value="{{ old('nombre') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'nombre'])
                                </div>
                                <div class="form-group{{ $errors->has('apellidopat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-ape1">{{ __('Apellido Paterno') }}</label>
                                    <input type="text" name="ape1" id="input-ape1" class="form-control form-control-alternative{{ $errors->has('apellidopat') ? ' is-invalid' : '' }}" placeholder="{{ __('Apellido Paterno') }}" value="{{ old('apellidopat') }}" required>
                                    @include('alerts.feedback', ['field' => 'apellidopat'])
                                </div>
                                <div class="form-group{{ $errors->has('apellidomat') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-ape2">{{ __('Apellido Materno') }}</label>
                                    <input type="text" name="ape2" id="input-ape2" class="form-control form-control-alternative{{ $errors->has('apellidomat') ? ' is-invalid' : '' }}" placeholder="{{ __('Apellido Materno') }}" value="{{ old('apellidomat') }}" required>
                                    @include('alerts.feedback', ['field' => 'apllidomat'])
                                </div>
                                <div class="form-row">
                                    <div class=" col-md-4 form-group{{ $errors->has('grado') ? ' has-danger' : '' }}">
                                      <label for="input-grado">Grado</label>
                                      <select name="grado" id="input-grado" class="form-control">
                                        <option selected value="{{ 1 }}">1</option>
                                         @for ($i = 1; $i <= 10; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                      </select>
                                    </div>

                                    <div class=" col-md-4 form-group{{ $errors->has('gpo') ? ' has-danger' : '' }}">
                                      <label for="input-gpo">Grupo</label>
                                      <select name="gpo" id="input-gpo" class="form-control">
                                        <option selected value="{{ 1 }}">1</option>
                                         @for ($i = 1; $i <= 6; $i++)
                                            <option value="{{ $i }}">{{ $i }}</option>
                                        @endfor
                                      </select>
                                    </div>
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
