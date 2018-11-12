@extends ('layouts.app')
@section('content')
<h1>Reservations App</h1>
<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-header">Usuarios</div>
      <div class="card-body">
        <ul>
          <li><a href="{{ route('users.index') }}">Ver todos</a></li>
          <li><a href="{{ route('users.create') }}">Create</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-header">Categorias</div>
      <div class="card-body">
        <ul>
          <li><a href="{{ route('categories.index') }}">Ver todos</a></li>
          <li><a href="{{ route('categories.create') }}">Create</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-header">Empresas</div>
      <div class="card-body">
        <ul>
          <li><a href="{{ route('enterprises.index') }}">Ver todos</a></li>
          <li><a href="{{ route('enterprises.create') }}">Create</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <div class="card-header">Servicios</div>
      <div class="card-body">
        <ul>
          <li><a href="{{ route('services.index') }}">Ver todos</a></li>
          <li><a href="{{ route('services.create') }}">Create</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection
