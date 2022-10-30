@extends('layouts.app')

@section('title', 'Lista de deudas')

@section('contenido')

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tabla de saldos</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bolder opacity-7">
                                            ID</th>
                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                            USUARIO</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            CODIGO</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            DESCRIPCION</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">PERIODO</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">TOTAL</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">SALDO</th>
                                        <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">VENCIMIENTO</th>
                                        {{-- <th colspan="3" class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">OPCIONES</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($deudas as $deuda)
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $deuda->idtbdeudas }}</span>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center text-secondary mb-0">{{ $deuda->usuario }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center text-secondary mb-0">{{ $deuda->codigo }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center text-secondary mb-0">{{ $deuda->descripcion }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center text-secondary mb-0">{{ $deuda->periodo }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center text-secondary mb-0">{{ $deuda->total }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center text-secondary mb-0">{{ $deuda->saldo }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center text-secondary mb-0">{{ $deuda->vencimiento }}</p>
                                        </td>
                                        {{-- <td>
                                            <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('zonas.edit', $deuda) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Editar</a>

                                            <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('zonas.show', $deuda) }}"><i class="far fa-eye me-2"></i></i>Ver</a>

                                            <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Borrar</a>

                                        </td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end mt-4">
                                {!! $deudas->links() !!}
                                {{-- {{ $zonas->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
