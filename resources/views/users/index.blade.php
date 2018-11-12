@extends ('layouts.app')
@section('content')
<h1>usuario</h1>
<table class="table table-condensed table-striped">
  <thead>
    <th>Nombre</th>
    <th>Email</th>
    <th>Contraseña</th>
    <th>Empresa</th>
    <th>Creador</th>
    <th>Role</th>
    <th>Opts.</th>
  </thead>
  <tbody>
    <tr>
      <td>{{ $entity->name }}</td>
      <td>{{ $entity->email }}</td>
      <td>{{ $entity->password }}</td>
      <td>{{ $entity->getEnterpriseName() }}</td>
      <td>{{ $entity->getCreatorName() }}</td>
      <td>{{ $entity->role()->name }}</td>
      <td>
        <div class="btn-group">
          <a href="{{ route('users.show', ['id'=>$entity->id]) }}" class="btn btn-secondary"><i class="fa fa-eye"></i></a>
          <a href="{{ route('users.edit', ['id'=>$entity->id]) }}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
          <form action="{{ route('users.destroy', ['id'=>$entity->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-secondary"><i class="fa fa-trash"></i></button>
          </form>
        </div>
      </td>
    </tr>
  </tbody>
</table>
@endsection