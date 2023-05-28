@extends('layouts.app')

@section('content')
    <a class="btn btn-success mt-3" href="{{ route('posts.create') }}">Crear Publicacion</a>
    <table class="table">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Descripcion</th>
                <th>Publicado</th>
                <th colspan="2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>$post->title</td>
                    <td>$post->categories -> title </td>
                    <td>$post->Description</td>
                    <td>$post-> publicado</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('posts.edit', $post) }}">Editar</a>
                        <a class="btn btn-primary" href="{{ route('posts.show', $post) }}">Ver</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection
