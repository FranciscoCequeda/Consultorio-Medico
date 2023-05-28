@csrf
<label for="title">Titulo</label>
<input type="text" class="form-control" name="title" id="title" value="{{ old('title', $posts->title) }}">

<label for="slug">Slug</label>
<input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug', $posts->slug) }}">

<label for="category_id">Categoría</label>
<select class="form-control" name="category_id" id="category_id">
    <option value="">Seleccione una Categoria</option>
    @foreach ($categories as $title => $id)
        <option {{ old('category_id', 'posts->category_id') == $id ? 'selected' : '' }} value="{{ $id }}">
            {{ $title }}</option>
    @endforeach
</select>

<label for="publicado">Publicado</label>
<select class="form-control" name="publicado" id="publicado">
    <option {{ old('publicado', $posts->publicado) == 'Not' ? 'selected' : '' }} value="Not">No</option>
    <option {{ old('publicado', $posts->publicado) == 'Yes' ? 'selected' : '' }} value="Yes">Si</option>
</select>

<label for="content">Contenido</label>
<textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ old('content', $posts->content) }}</textarea>

<label for="description">Decripción</label>
<textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ old('description', $posts->description) }}</textarea>

<input class="btn btn-primary" type="submit" value="Guardar">
