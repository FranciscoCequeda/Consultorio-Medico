@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <h1>Actualizar publicación: <strong>{{ $post->title }}</strong></h1>
        @include('dashboard.fragments._errors-form')
        <form action="{{ route('posts.update', $post->id) }}" method="post" enctype="multipart/form-data">
            @method('PATCH')
            @include('dashboard.posts._form')
        </form>
    </div>
@endsection
