@extends('layouts.base')
@section('content')
<div class="row">
  <div class="col">
    <h1>Eliminar Factura {{ $factura->id }}</h1>
  </div>
</div>

<div class="row">
  <div class="col">
    <a class="btn btn-secondary" href="/control_facturas">Regresar</a>
  </div>
</div>

<div class="row">
  <div class="col">
    <form class="" action="/control_facturas/{{ $factura->id }}" method="post">
      {{ csrf_field() }}
      @method('delete')
      <button type="sumbit" class="btn btn-primary">Eliminar</button>
    </form>

  </div>
</div>
@endsection
