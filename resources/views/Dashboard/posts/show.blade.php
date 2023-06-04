@extends('layouts.app')
@section('content')
    <h1>Publicación: <strong>{{ $post->title }}</strong></h1>
    <a class="btn btn-secondary" href="{{ route('posts.index', $post) }}" style="display: inline-block;">Volver</a>
@endsection