@extends ('layouts.app')
@section('content')
<h1>reservación</h1>
<table class="table table-condensed table-striped">
  <thead>
    <th>Cliente</th>
    <th>Profesional</th>
    <th>Servicio</th>
    <th>Fecha</th>
    <th>Opts.</th>
  </thead>
  <tbody>
    <tr>
      <td>{{ $reservation->client() }}</td>
      <td>{{ $reservation->professional() }}</td>
      <td>[PLACEHOLDER]</td>
      <td>[PLACEHOLDER]</td>
      <td>
        <div class="btn-group">
          <a href="{{ route('reservations.show', ['id'=>$reservation->id]) }}" class="btn btn-secondary"><i class="fa fa-eye"></i></a>
          <a href="{{ route('reservations.edit', ['id'=>$reservation->id]) }}" class="btn btn-secondary"><i class="fa fa-edit"></i></a>
          <form action="{{ route('reservations.destroy', ['id'=>$reservation->id]) }}" method="POST">
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