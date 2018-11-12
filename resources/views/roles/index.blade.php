@extends ('layouts.app')
@section('content')
<h1>rol</h1>
<table class="table table-condensed table-striped">
  <thead>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Opts.</th>
  </thead>
  <tbody>
    <tr>
      <td>{{ $role->name }}</td>
      <td>{{ $role->description }}</td>
      <td>
        <div class="btn-group">
          <a href="{{ route('roles.show', ['id'=>$role->id]) }}" class="btn btn-secondary"><i class="fa fa-eye"></i></a>
          <a href="{{ route('roles.edit', ['id'=>$role->id]) }}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
          <form action="{{ route('roles.destroy', ['id'=>$role->id]) }}" method="POST">
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