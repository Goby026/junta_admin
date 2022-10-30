@extends('layouts.app')

@section('title', 'Listar Zonas')

@section('contenido')

<style>
    img, svg{
        width: 30px !important;
    }

    .pagination li {
        background: orange;
        list-style-type: none;
    }
</style>

    <div class="col-md-12">
        <a class="btn btn-primary mb-2" href="{{ route('zonas.create') }}">Registrar zona</a>

        <table class="table table-borderless table-hover table-sm">
            <thead class="table-dark">
                <tr>
                    <th><abbr title="Id">ID</abbr></th>
                    <th>ZONA</th>
                    <th colspan="3" class="text-center">⚙ OPCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($zonas as $zona)
                    <tr class="table-secondary">
                        <th>{{ $zona->itzonas }}</th>
                        <td>{{ $zona->detazona }}</td>
                        <td>
                            <a href="{{ route('zonas.edit', $zona) }}" class="btn btn-secondary btn-sm">📝</a>
                        </td>
                        <td>
                            <a href="{{ route('zonas.show', $zona) }}" class="btn btn-info btn-sm">👀</a>
                        </td>
                        <td>
                            <button class="btn btn-danger btn-sm" onclick="eliminar()">❌</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-end">
            {!! $zonas->links() !!}
            {{-- {{ $zonas->links() }} --}}
        </div>
    </div>

    <script>
        const eliminar = ()=>{
            alert('Eliminar recurso');
        }
    </script>

@endsection
