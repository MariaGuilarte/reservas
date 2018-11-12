@extends ('layouts.app')
@section('content')
<h1>Actualizar servicios</h1>
<div class="form-wrap">
  <form action="{{ route('services.update', ['id'=>$service->id]) }}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" id="name" value="{{ $service->name }}" required>
    </div>
    <div class="form-group">
      <label for="description">Descripción</label>
      <textarea rows="5" class="form-control" name="description" id="description" required>{{ $service->description }}</textarea>
    </div>
    <div class="form-group">
      <label for="enterprise_id">Empresa</label>
      <select class="form-control" name="enterprise_id" id="enterprise_id" required>
        <option value="{{ $service->enterprise_id }}" selected></option>
      </select>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Listo</button>
    </div>
  </form>
</div>
@endsection