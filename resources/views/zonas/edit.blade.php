@extends('layouts.app')

@section('title', 'Editar zonas')

@section('contenido')

    @if ($errors->any())
        <div class="notification is-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="columns">
        <div class="column is-4">
            <form action="{{ route('zonas.update', $zona) }}" method="POST">
                @method('PUT')
                <x-zona-form-body :zona="$zona" />
            </form>
            {{-- <a href="{{ URL::previous() }}" class="btn btn-danger">Volver</a> --}}
        </div>
    </div>

@endsection
