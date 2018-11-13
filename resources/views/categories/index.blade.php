@extends ('layouts.app')
@section('content')
<h1>Categorías</h1>
<div class="card">
  <div class="card-body">
    @if( $categories->count() )
    <table class="table table-sm table-striped">
      <thead>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Opts.</th>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr>
          <td>{{ $category->name }}</td>
          <td>{{ $category->description }}</td>
          <td>
            <div class="btn-group">
              <a href="{{ route('categories.show', ['id'=>$category->id]) }}" class="btn btn-link"><i class="fa fa-eye"></i></a>
              <a href="{{ route('categories.edit', ['id'=>$category->id]) }}" class="btn btn-link"><i class="fa fa-edit"></i></a>
              <a href="#" class="btn btn-link" onclick="document.getElementById('deletionForm').submit()"><i class="fa fa-trash"></i></a>
              <form action="{{ route('categories.destroy', ['id'=>$category->id]) }}" method="POST">
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
        ¡No hay categorías aún! - <a href="{{ route('categories.create') }}">Registra una categoría ahora</a></div>
    @endif
  </div>
</div>
@endsection
