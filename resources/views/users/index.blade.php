@extends ('layouts.app')
@section('content')
<h1>Usuarios</h1>
@if( $users->count() )
<table class="table table-sm table-striped">
  <thead>
    <th>Nombre</th>
    <th>Email</th>
    <th>Role</th>
    <th>Opts.</th>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->role->name }}</td>
        <td>
          <div class="btn-group">
            <a href="{{ route('users.show', ['id'=>$user->id]) }}" class="btn btn-link"><i class="fa fa-eye"></i></a>
            <a href="{{ route('users.edit', ['id'=>$user->id]) }}" class="btn btn-link"><i class="fa fa-edit"></i></a>
            <a href="#" class="btn btn-link" onclick="document.getElementById('deletionForm').submit()"><i class="fa fa-trash"></i></a>
          </div>
          <form action="{{ route('users.destroy', ['id'=>$user->id]) }}" method="POST" id="deletionForm">
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
    ¡No hay usuarios aún! - <a href="{{ route('users.create') }}">Registra un usuario ahora</a></div>
@endif
@endsection
