@extends ('layouts.app')
@section('content')
<h1>Servicios</h1>
<table class="table table-sm table-striped">
  <thead>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Opts.</th>
  </thead>
  <tbody>
    @foreach( $services as $service )
    <tr>
      <td>{{ $service->name }}</td>
      <td>{{ $service->description }}</td>
      <td>
        <div class="btn-group">
          <a href="{{ route('services.show', ['id'=>$service->id]) }}" class="btn btn-link"><i class="fa fa-eye"></i></a>
          <a href="{{ route('services.edit', ['id'=>$service->id]) }}" class="btn btn-link"><i class="fa fa-edit"></i></a>
          <a href="#" class="btn btn-link" onclick="document.getElementById('deletionForm').submit()"><i class="fa fa-trash"></i></a>
        </div>
        <form action="{{ route('services.destroy', ['id'=>$service->id]) }}" method="POST" id="deletionForm">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
