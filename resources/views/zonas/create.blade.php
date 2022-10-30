@extends('layouts.app')

@section('title', 'Registrar zonas')

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
        <form action="{{ route('zonas.store') }}" method="POST">
            <x-zona-form-body />
        </form>
    </div>
  </div>
@endsection
