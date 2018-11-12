@extends ('layouts.app')
@section('content')
<h1>Actualizar categoría</h1>
<div class="form-wrap">
  <form action="{{ route('categories.update', ['id'=>$category->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" id="name" value="{{ $category->name }}" required>
    </div>
    <div class="form-group">
      <label for="description">Descripción</label>
      <textarea rows="5" class="form-control" name="description" id="description" required>{{ $category->description }}</textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Listo</button>
    </div>
  </form>
</div>
@endsection