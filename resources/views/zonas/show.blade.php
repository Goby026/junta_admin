@extends('layouts.app')

@section('title', 'Mostrar zona')

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
            <h2>Example body text</h2>
            <p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
            <p><small>This line of text is meant to be treated as fine print.</small></p>
            <p>The following is <strong>rendered as bold text</strong>.</p>
            <p>The following is <em>rendered as italicized text</em>.</p>
            <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
            <p>{{ $zona }}</p>

            {{-- <a href="{{ url()->previous() }}" class="btn btn-danger">Volver</a> --}}
            <div class="d-flex">
                <a href="{{ URL::previous() }}" class="btn btn-info">Volver</a>&nbsp;
                <a href="{{ route('zonas.edit', $zona) }}" class="btn btn-warning">Editar</a>&nbsp;

                <form action="{{ route('zonas.destroy', $zona ) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>

            </div>
        </div>
    </div>

@endsection
