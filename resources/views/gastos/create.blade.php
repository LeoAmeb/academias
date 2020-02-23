@extends('layouts.app', ['page' => __('Gastos'), 'pageSlug' => 'gastos'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Gastos') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('gastos.store') }}" autocomplete="off">
                            @csrf

                            <h6 class="heading-small text-muted mb-4">{{ __('Registrar gasto') }}</h6>
                            @include('alerts.success')
                            <div class="pl-lg-4">
                                <fieldset disabled>
                                    <div class="form-group{{ $errors->has('id_gasto') ? ' has-danger' : '' }}">
                                        <label class="form-control-label" for="input-name">{{ __('Folio') }}</label>
                                        <input type="text" name="id_gasto" id="input-name" class="form-control form-control-alternative{{ $errors->has('id_gasto') ? ' is-invalid' : '' }}" placeholder="{{ __('Folio') }}" value="{{$gastos}}" required autofocus>
                                        @include('alerts.feedback', ['field' => 'id_gasto'])
                                    </div>
                                </fieldset>
                                <div class="form-group{{ $errors->has('descripcion') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-descripcion">{{ __('Descripcion') }}</label>
                                    <input type="text" name="descripcion" id="input-ape1" class="form-control form-control-alternative{{ $errors->has('descripcion') ? ' is-invalid' : '' }}" placeholder="{{ __('Descripción del gasto') }}" value="" required>
                                    @include('alerts.feedback', ['field' => 'descripcion'])
                                </div>
                                <div class="form-group{{ $errors->has('monto') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-monto">{{ __('Monto') }}</label>
                                    <input type="number" value="0" min="1" max="10000" name="monto" id="input-monto" class="form-control form-control-alternative{{ $errors->has('monto') ? ' is-invalid' : '' }}" placeholder="{{ __('Monto') }}" value="" required>
                                    @include('alerts.feedback', ['field' => 'monto'])
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
