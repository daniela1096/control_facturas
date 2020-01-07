@extends('layouts.base')
@section('content')
<div class="row">
  <div class="col">
    <h1>Eliminar Cliente {{ $cliente->id }}</h1>
  </div>
</div>

<div class="row">
  <div class="col">
    <a class="btn btn-secondary" href="/control_clientes">Regresar</a>
  </div>
</div>

<div class="row">
  <div class="col">
    <form class="" action="/control_clientes/{{ $cliente->id }}" method="post">
      {{ csrf_field() }}
      @method('delete')
      <button type="sumbit" class="btn btn-primary">Eliminar</button>
    </form>

  </div>
</div>
@endsection
