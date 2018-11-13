@extends ('layouts.app')
@section('content')
<h1>Roles de usuario</h1>
@if( $roles->count() )
<table class="table table-sm table-striped">
  <thead>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Opts.</th>
  </thead>
  <tbody>
    @foreach($roles as $role)
    <tr>
      <td>{{ $role->name }}</td>
      <td>{{ $role->description }}</td>
      <td>
        <div class="btn-group">
          <a href="{{ route('roles.show', ['id'=>$role->id]) }}" class="btn btn-link"><i class="fa fa-eye"></i></a>
          <a href="{{ route('roles.edit', ['id'=>$role->id]) }}" class="btn btn-link"><i class="fa fa-edit"></i></a>
          <a href="#" class="btn btn-link" onclick="document.getElementById('deletionForm').submit()"><i class="fa fa-trash"></i></a>
        </div>
        <form action="{{ route('roles.destroy', ['id'=>$role->id]) }}" method="POST" id="deletionForm">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
  <div class="alert alert-info text-center">
    <i class="fa fa-lightbulb"></i>
    ¡No hay roles aún! - <a href="{{ route('roles.create') }}">Registra un rol ahora</a></div>
@endif
@endsection
