@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <h1>Actualizar categoría <strong>{{ $category->title }}</strong></h1>
        @include('dashboard.fragments._errors-form')
        <form action="{{ route('categories.update', $category->id) }}" method="post">
            @method('PATCH')
            @include('categories._form')
        </form>
    </div>
@endsection