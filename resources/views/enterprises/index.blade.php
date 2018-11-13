@extends ('layouts.app')
@section('content')
<h1>Empresas</h1>
@if( $enterprises->count() )
<table class="table table-sm table-striped">
  <thead>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Opts.</th>
  </thead>
  <tbody>
    @foreach($enterprises as $enterprise)
    <tr>
      <td>{{ $enterprise->name }}</td>
      <td>{{ $enterprise->description }}</td>
      <td>
        <div class="btn-group">
          <a href="{{ route('enterprises.show', ['id'=>$enterprise->id]) }}" class="btn btn-link"><i class="fa fa-eye"></i></a>
          <a href="{{ route('enterprises.edit', ['id'=>$enterprise->id]) }}" class="btn btn-link"><i class="fa fa-edit"></i></a>
          <a href="#" class="btn btn-link" onclick="document.getElementById('deletionForm').submit()"><i class="fa fa-trash"></i></a>
          <form action="{{ route('enterprises.destroy', ['id'=>$enterprise->id]) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@else
  <div class="alert alert-info text-center">
    <i class="fa fa-lightbulb"></i>
    ¡No hay empresas aún! - <a href="{{ route('enterprises.create') }}">Registra una empresa ahora</a></div>
@endif
@endsection
