@csrf
<div class="form-group">
    <label for="title">Titulo</label>
    <input type="text" class="form-control" name="title" id="title" value="{{ old('title', $post->title) }}">
</div>

<div class="form-group">
    <label for="slug">Slug</label>
    <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug', $post->slug) }}">
</div>

<div class="form-group">
    <label for="category_id">Categoría</label>
    <select class="form-control" name="category_id" id="category_id">
        <option value="">Seleccione una Categoria</option>
        @foreach ($categories as $category => $id)
            <option {{ old('category_id', $post->category_id) == $id ? 'selected' : '' }} value="{{ $id }}">
                {{ $category }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="publicado">Publicado</label>
    <select class="form-control" name="publicado" id="publicado">
        <option {{ old('publicado', $post->publicado) == 'Not' ? 'selected' : '' }} value="Not">No</option>
        <option {{ old('publicado', $post->publicado) == 'Yes' ? 'selected' : '' }} value="Yes">Si</option>
    </select>
</div>

<div class="form-group">
    <label for="content">Contenido</label>
    <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ old('content', $post->content) }}</textarea>
</div>

<div class="form-group">
    <label for="description">Decripción</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description', $post->description) }}</textarea>
</div>

@if ($task == 'edit')
    <div class="form-group">
        <label for="image">Foto</label>
        <input type="file" name="image" id="image">
    </div>
@endif

<input class="btn btn-primary" type="submit" value="Guardar">
<a class="btn btn-danger ml-3" href="{{ route('posts.index', $post) }}" style="display: inline-block;">Cancelar</a>
