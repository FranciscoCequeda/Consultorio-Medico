<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text" class="form-control" name="title" id="title"
            value="{{ old('title', $category->title) }}">
    </div>

    <div class="form-group">
        <label for="description">Decripción</label>
        <input class="form-control" type="text" name="description" id="description"
            value="{{ old('description', $category->description) }}">
    </div>

    <input class="btn btn-primary" type="submit" value="Guardar">
    <a class="btn btn-danger" href="{{ route('categories.index', $category) }}"
        style="display: inline-block; margin-left: 10px;">Cancelar</a>
</form>
