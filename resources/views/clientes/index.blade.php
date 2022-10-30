@extends('layouts.app')

@section('title', 'Lista de clientes')

@section('contenido')

@if ($errors->any())
<div class="notification is-danger">
    @foreach ($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
  </div>
@endif

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form class="d-flex justify-content-between" action="{{ route('clientes.index') }}" method="GET">
                    @csrf
                    <div class="input-group">
                        <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input type="text" name="search" class="form-control" placeholder="Buscar aquí (dni ó nombres)"
                        value="{{ request()->get('search') }}">
                    </div>

                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>Tabla de clientes</h6>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bolder opacity-7">
                                            ID</th>
                                        <th class="text-uppercase text-center text-secondary text-xs font-weight-bolder opacity-7 ps-2">
                                            DNI</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            APELLIDOS</th>
                                        <th
                                            class="text-center text-uppercase text-secondary text-xs font-weight-bolder opacity-7">
                                            NOMBRES</th>
                                        <th colspan="3" class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">OPCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $cliente)
                                    <tr>
                                        <td class="align-middle text-center text-sm">
                                            <span class="text-secondary text-xs font-weight-bold">{{ $cliente->idclientes }}</span>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center text-secondary mb-0">{{ $cliente->dni }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center text-secondary mb-0">{{ $cliente->apellidos }}</p>
                                        </td>
                                        <td>
                                            <p class="text-xs text-center text-secondary mb-0">{{ $cliente->nombres }}</p>
                                        </td>

                                        <td>
                                            {{-- <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('zonas.edit', $cliente) }}"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Editar</a> --}}

                                            <a class="btn btn-link text-dark px-3 mb-0" href="{{ route('clientes.show', $cliente) }}"><i class="far fa-eye me-2"></i></i>Ver</a>

                                            {{-- <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="far fa-trash-alt me-2"></i>Borrar</a> --}}

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end mt-4">
                                {!! $clientes->links() !!}
                                {{-- {{ $zonas->links() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
