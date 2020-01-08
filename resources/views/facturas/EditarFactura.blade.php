@extends('layouts.base')
@section('content')
<div class="row">
  <div class="col">
    <h1>Editar Factura {{ $factura->id }}</h1>
  </div>
</div>

<div class="row">
  <div class="col">
    <a class="btn btn-secondary" href="/control_facturas">Regresar</a>
  </div>
</div>

<div class="row">
  <div class="col">
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form class="" action="/control_facturas/{{ $factura->id }}" method="post">
      {{ csrf_field() }}
      @method('put')
      <div class="form-group">
        <label for="fecha_exp">Fecha de expedición</label>
        <input type="text" name="fecha_exp" id="fecha_exp" class="form-control" value="{{ old('fecha_exp', $factura->fecha_exp) }}">
      </div>
      <div class="form-group">
        <label for="fecha_ven">Fecha de vencimiento</label>
        <input type="text" name="fecha_ven" id="fecha_ven" class="form-control" value="{{ old('fecha_ven', $factura->fecha_ven) }}">
      </div>
      <div class="form-group">
        <label for="fecha_recibo">Fecha de recibo de factura</label>
        <input type="text" name="fecha_recibo" id="fecha_recibo" class="form-control" value="{{ old('fecha_recibo', $factura->fecha_recibo) }}">
      </div>
      <div class="form-group">
        <label for="iva">Iva</label>
        <input type="text" name="iva" id="iva" class="form-control" value="{{ old('iva', $factura->iva) }}">
      </div>
      <div class="form-group">
        <label for="estado">Estado</label>
        <input type="text" name="estado" id="estado" class="form-control" value="{{ old('estado', $factura->estado) }}">
      </div>
      <button type="sumbit" class="btn btn-primary">Guardar</button>
    </form>

  </div>
</div>
@endsection
