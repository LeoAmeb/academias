@extends('layouts.app', ['pageSlug' => 'dashboard'])

@section('content')

    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Balance Total</h5>
                    <h3 class="card-title"><i class="tim-icons icon-bell-55 text-primary"></i>MXN$ {{ $consulta_pagos - $consulta_gastos }}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Colegiaturas Total</h5>
                    <h3 class="card-title"><i class="tim-icons icon-delivery-fast text-info"></i> MXN$ {{$consulta_pagos}}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <div class="card-header">
                    <h5 class="card-category">Gastos Total</h5>
                    <h3 class="card-title"><i class="tim-icons icon-send text-success"></i>MXN$  {{$consulta_gastos}}</h3>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush
