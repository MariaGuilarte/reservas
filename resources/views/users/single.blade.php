@extends ('layouts.app')
@section('content')
<h1>Detalles del usuario</h1>
<div class="form-wrap">
  <form action="{{ route('users.store') }}" method="POST">
    {{ csrf_field() }}
    <h2>Información de la cuenta</h2>
    <div class="form-group">
      <label for="name">Nombre</label>
      <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" required>
    </div>
    <div class="form-group">
      <label for="password">Contraseña</label>
      <input type="password" class="form-control" name="password" id="password" required>
    </div>
    <h2>Relaciones del sistema</h2>
    <div class="form-group">
      <label for="enterprise_id">Empresa</label>
      <input type="integer" class="form-control" name="enterprise_id" id="enterprise_id" required>
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
