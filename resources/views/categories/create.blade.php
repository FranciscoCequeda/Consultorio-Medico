@extends('layouts.app')

@section('content')
    <h1>Creacion de Categorias</h1>
    @include('Dashboard.fragments._errors-form')
    <form action="{{ route('categories.store') }}" method="POST">
        @include('categories._form')
    </form>
@endsection
