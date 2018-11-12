@extends ('layouts.app')
@section('content')
<h1>Registrar usuario</h1>
<div class="form-wrap">
  <form action="{{ route('users.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" id="name" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" required>
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" name="password" id="password" required>
    </div>
    <div class="form-group">
      <label for="enterprise_id">Empresa</label>
      <input type="integer" class="form-control" name="enterprise_id" id="enterprise_id" required>
    </div>
    <div class="form-group">
      <label for="creator_id">Creador</label>
      <input type="integer" class="form-control" name="creator_id" id="creator_id" required>
    </div>
    <div class="form-group">
      <label for="role_id">Rol</label>
      <select class="form-control" name="role_id" id="role_id" required>
        <option value=""></option>
      </select>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Listo</button>
    </div>
  </form>
</div>
@endsection