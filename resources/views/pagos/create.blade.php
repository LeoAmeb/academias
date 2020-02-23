@extends('layouts.app', ['page' => __('Pagos'), 'pageSlug' => 'pagos'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Pagos') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @include('alerts.success')
                        <form method="post" action="{{ route('pagos.store') }}" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Realizar Pago') }}</h6>
                            <div class="pl-lg-4">

                                <div class="form-group{{ $errors->has('monto') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-monto">{{ __('Monto') }}</label>
                                    
                                    <input type="number" value="0" min="1" max="10000" name="monto" id="input-monto" class="form-control form-control-alternative{{ $errors->has('monto') ? ' is-invalid' : '' }}" placeholder="{{ __('Monto') }}" value="{{ old('monto') }}" required autofocus>
                                    @include('alerts.feedback', ['field' => 'monto'])
                                </div>

                                <div class="form-group{{ $errors->has('id_alumno') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="input-id_alumno">{{ __('Alumno') }}</label>
                                        
                                    <select type="text" name="id_alumno" id="id_alumno" class="form-control form-control-alternative{{ $errors->has('id_alumno') ? ' is-invalid' : '' }}" placeholder="{{ __('id_alumno') }}" value="{{ old('id_alumno') }}"required>
                                    @foreach ($alumnos as $alumno)
                                        <option value="{{ $alumno['id_alumno'] }}">{{$alumno['nombre']." ".$alumno['apellidopat']." ".$alumno['apellidomat']  }}</option>   
                                    @endforeach

                                    </select>
                                </div>

                                <div class="form-group{{ $errors->has('descripcion') ? ' has-danger' : '' }}">
                                    <label class="form-control-label" for="descripcion">{{ __('Descripcion') }}</label>
                                    <input type="text" name="descripcion_pago" id="descripcion_pago" class="form-control form-control-alternative{{ $errors->has('descripcion_pago') ? ' is-invalid' : '' }}" placeholder="{{ __('Descripción') }}" value="{{ old('descripcion') }}" required>
                                    @include('alerts.feedback', ['field' => 'descripcion'])
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
