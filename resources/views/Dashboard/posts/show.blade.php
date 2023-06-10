@extends('dashboard.layout')
@section('content')
    <h1>Titulo: <strong>{{ $post->title }}</strong></h1>
    <h1>Description: <strong>{{ $post->description }}</strong></h1>
    <h1>Creacion: <strong>{{ $post->created_at }}</strong></h1>
    <a class="btn btn-secondary" href="{{ route('posts.index', $post) }}" style="display: inline-block;">Volver</a>
@endsection