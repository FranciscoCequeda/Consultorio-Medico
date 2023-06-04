@extends('layouts.app')

@section('content')
    <h1>Categoria: <strong>{{ $category->title }}</strong></h1>
    <a class="btn btn-secondary" href="{{ route('categories.index', $category) }}" style="display: inline-block;">Volver</a>
@endsection
