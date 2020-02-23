@extends('layouts.app', ['page' => __('Reportes'), 'pageSlug' => 'reportes'])

@section('content')
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Generar Reportes') }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('reportes.store') }}" autocomplete="off">
                            @csrf
                            <h6 class="heading-small text-muted mb-4">{{ __('Reportes') }}</h6>
                            <div class="pl-lg-5">
                                <div class="pl-lg-5">
                                    <input style="width : 200px; float:left;" method="POST" class="form-control" type="date" name="fecha_min" min="1980-04-01" max="2050-04-30">
                                    
                                    <input style="width : 200px; float:left;" method="POST" class="form-control" type="date" name="fecha_max" min="1980-04-01" max="2050-04-30">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success">{{ __('Generar Reporte') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
