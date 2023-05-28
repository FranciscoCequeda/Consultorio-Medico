@extends('layouts.app')

@section('content')
    <h1>Creacion de Publicaciones</h1>
    @include('Dashboard.fragments._errors-form')
    <form action="{{ route('posts.store') }}" method="POST">
        @include('Dashboard.posts._form')
    </form>
@endsection
