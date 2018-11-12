@extends ('layouts.app')
@section('content')
<h1>servicios</h1>
<table class="table table-condensed table-striped">
  <thead>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Empresa</th>
    <th>Opts.</th>
  </thead>
  <tbody>
    <tr>
      <td>{{ $service->name }}</td>
      <td>{{ $service->description }}</td>
      <td>{{ $service->enterprise()->name }}</td>

      <td>
        <div class="btn-group">
          <a href="{{ route('services.show', ['id'=>$service->id]) }}" class="btn btn-secondary"><i class="fa fa-eye"></i></a>
          <a href="{{ route('services.edit', ['id'=>$service->id]) }}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
          <form action="{{ route('services.destroy', ['id'=>$service->id]) }}" method="POST">
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