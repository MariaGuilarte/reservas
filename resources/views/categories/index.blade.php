@extends ('layouts.app')
@section('content')
<h1>categoría</h1>
<table class="table table-condensed table-striped">
  <thead>
    <th>Nombre</th>
    <th>Descripción</th>
    <th>Opts.</th>
  </thead>
  <tbody>
    <tr>
      <td>{{ $category->name }}</td>
      <td>{{ $category->description }}</td>
      <td>
        <div class="btn-group">
          <a href="{{ route('categories.show', ['id'=>$category->id]) }}" class="btn btn-secondary"><i class="fa fa-eye"></i></a>
          <a href="{{ route('categories.edit', ['id'=>$category->id]) }}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
          <form action="{{ route('categories.destroy', ['id'=>$category->id]) }}" method="POST">
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