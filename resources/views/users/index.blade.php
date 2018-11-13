@extends ('layouts.app')
@section('content')
<h1>Usuarios</h1>
<table class="table table-condensed table-striped">
  <thead>
    <th>Nombre</th>
    <th>Email</th>
    <th>Contraseña</th>
    <th>Role</th>
    <th>Opts.</th>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->password }}</td>
        <td>{{ $user->role->name }}</td>
        <td>
          <div class="btn-group">
            <a href="{{ route('users.show', ['id'=>$user->id]) }}" class="btn btn-secondary"><i class="fa fa-eye"></i></a>
            <a href="{{ route('users.edit', ['id'=>$user->id]) }}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
            <form action="{{ route('users.destroy', ['id'=>$user->id]) }}" method="POST">
              {{ csrf_field() }}
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-secondary"><i class="fa fa-trash"></i></button>
            </form>
          </div>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
