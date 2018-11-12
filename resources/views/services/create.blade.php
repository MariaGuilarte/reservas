@extends ('layouts.app')
@section('content')
<h1>Registrar servicios</h1>
<div class="form-wrap">
  <form action="{{ route('services.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" id="name" required>
    </div>
    <div class="form-group">
      <label for="description">Descripción</label>
      <textarea rows="5" class="form-control" name="description" id="description" required></textarea>
    </div>
    <div class="form-group">
      <label for="enterprise_id">Empresa</label>
      <select class="form-control" name="enterprise_id" id="enterprise_id" required>
        <option value=""></option>
      </select>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Listo</button>
    </div>
  </form>
</div>
@endsection