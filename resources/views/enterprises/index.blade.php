@extends ('layouts.app')
@section('content')
<h1>Empresas</h1>
<table class="table table-condensed table-striped">
  <thead>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Opts.</th>
  </thead>
  <tbody>
    <tr>
      <td>{{ $enterprise->name }}</td>
      <td>{{ $enterprise->description }}</td>
      <td>
        <div class="btn-group">
          <a href="{{ route('enterprises.show', ['id'=>$enterprise->id]) }}" class="btn btn-secondary"><i class="fa fa-eye"></i></a>
          <a href="{{ route('enterprises.edit', ['id'=>$enterprise->id]) }}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
          <form action="{{ route('enterprises.destroy', ['id'=>$enterprise->id]) }}" method="POST">
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