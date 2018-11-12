@extends ('layouts.app')
@section('content')
<h1>Actualizar empresa</h1>
<div class="form-wrap">
  <form action="{{ route('enterprises.update', ['id'=>$enterprise->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" id="name" value="{{ $enterprise->name }}" required>
    </div>
    <div class="form-group">
      <label for="description">Descripción</label>
      <input type="type_2" class="form-control" name="description" id="description" value="{{ $enterprise->description }}" required>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Listo</button>
    </div>
  </form>
</div>
@endsection