@extends ('layouts.app')
@section('content')
<h1>Registrar reservación</h1>
<div class="form-wrap">
  <form action="{{ route('reservations.store') }}" method="POST">
    {{ csrf_field() }}
    <div class="form-group">
      <label for="client_id">Cliente</label>
      <select class="form-control" name="client_id" id="client_id" required>
        <option value=""></option>
      </select>
    </div>
    <div class="form-group">
      <label for="user_id">Profesional</label>
      <select class="form-control" name="user_id" id="user_id" required>
        <option value=""></option>
      </select>
    </div>
    <div class="form-group">
      <label for="service_id">Servicio</label>
      <select class="form-control" name="service_id" id="service_id" required>
        <option value=""></option>
      </select>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Listo</button>
    </div>
  </form>
</div>
@endsection