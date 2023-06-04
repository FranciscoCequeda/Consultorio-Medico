@extends('layouts.app')
@section('content')
    <a class="btn btn-success my-3" href="{{ route('categories.create') }}">Crear Categoria</a>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Nombre Categoria</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <a class="btn btn-warning btn-action edit" href="{{ route('categories.edit', $category) }}"
                                style="display: inline-block; margin-right: 10px;">Editar</a>
                            <a class="btn btn-primary" href="{{ route('categories.show', $category) }}"
                                style="display: inline-block; margin-right: 10px">Ver</a>
                            <form action="{{ route('categories.destroy', $category) }}" method="POST"
                                style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $categories->links() }}
    </div>
@endsection