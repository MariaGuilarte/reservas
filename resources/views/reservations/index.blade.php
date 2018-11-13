@extends ('layouts.app')
@section('content')
<h1>Reservación</h1>
<table class="table table-sm table-striped">
  <thead>
    <th>ID</th>
    <th>Cliente</th>
    <th>Profesional</th>
    <th>Fecha</th>
    <th>Opts.</th>
  </thead>
  <tbody>
    @foreach( $reservations as $reservation )
    <tr>
      <td>{{ $reservation->id }}</td>
      <td>{{ $reservation->client->name }}</td>
      <td>{{ $reservation->professional->name }}</td>
      <td>{{ $reservation->reservation_date }}</td>
      <td>
        <div class="btn-group">
          <a href="{{ route('reservations.show', ['id'=>$reservation->id]) }}" class="btn btn-link"><i class="fa fa-eye"></i></a>
          <a href="{{ route('reservations.edit', ['id'=>$reservation->id]) }}" class="btn btn-link"><i class="fa fa-edit"></i></a>
          <a href="#" class="btn btn-link" onclick="document.getElementById('deletionForm').submit()"><i class="fa fa-trash"></i></a>
        </div>
        <form action="{{ route('reservations.destroy', ['id'=>$reservation->id]) }}" method="POST" id="deletionForm">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
