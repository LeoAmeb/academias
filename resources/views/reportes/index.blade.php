@extends('layouts.app', ['page' => __('Reportes'), 'pageSlug' => 'reportes'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Reporte') }}</h4>
                            <h7 class="card-title">{{ __('Pagos hechos entre '.$inicio) }}</h7>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('reportes.index') }}" class="btn btn-sm btn-primary">{{ __('Regresar') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">{{ __('Descripción') }}</th>
                                <th scope="col">{{ __('Monto') }}</th>
                                <th scope="col">{{ __('Alumno') }}</th>
                                <th scope="col">{{ __('Fecha') }}</th>
                                <th scope="col"></th>
                            </thead>
                            @foreach ($pagos as $pago)
                                    <tr>
                                        <td>{{ $pago->descripcion }}</td>
                                        <td>{{ "$".$pago->monto }}</td>
                                        <td>{{ $pago->nombre." ".$pago->apellidopat." ".$pago->apellidomat}}</td>
                                        <td>{{ $pago->created_at->format('d-m-Y') }}</td>
                                        <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        
                                                        <form action="{{ route('pagos.destroy', $pago) }}" method="post">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("¿Estas seguro de borrar el registro?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Borrar') }}
                                                            </button>
                                                        </form>
                                                       
                                                    </div>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer py-4">
                    <nav class="d-flex justify-content-end" aria-label="...">
                       
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
