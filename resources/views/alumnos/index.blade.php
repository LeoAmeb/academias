@extends('layouts.app', ['page' => __('alumnos'), 'pageSlug' => 'alumnos'])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <div class="row">
                        <div class="col-8">
                            <h4 class="card-title">{{ __('Alumnos') }}</h4>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ route('alumnos.create') }}" class="btn btn-sm btn-primary">{{ __('Agregar Alumno') }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @include('alerts.success')

                    <div class="">
                        <table class="table tablesorter " id="">
                            <thead class=" text-primary">
                                <th scope="col">{{ __('Nombre') }}</th>
                                <th scope="col">{{ __('Apellido Paterno') }}</th>
                                <th scope="col">{{ __('Apellido Materno') }}</th>
                                <th scope="col">{{ __('Grado') }}</th>
                                <th scope="col">{{ __('Grupo') }}</th>
                                <th scope="col"></th>
                            </thead>
                            <tbody>
                                @foreach ($alumnos as $alumno)
                                    <tr>
                                        <td>{{ $alumno->nombre }}</td>
                                        <td>{{ $alumno->apellidopat }}</td>
                                        <td>{{ $alumno->apellidomat }}</td>
                                        <td>{{ $alumno->grado }}</td>
                                        <td>{{ $alumno->gpo }}</td>
                                        <td class="text-right">
                                                <div class="dropdown">
                                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                        
                                                        <form action="{{ route('alumnos.destroy', $alumno) }}" method="post">
                                                            @csrf
                                                            @method('delete')

                                                            <a class="dropdown-item" href="{{ route('alumnos.edit', $alumno) }}">{{ __('Editar') }}</a>
                                                            <button type="button" class="dropdown-item" onclick="confirm('{{ __("¿Estas seguro de borrar el registro?") }}') ? this.parentElement.submit() : ''">
                                                                {{ __('Borrar') }}
                                                            </button>
                                                        </form>
                                                       
                                                    </div>
                                                </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
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
