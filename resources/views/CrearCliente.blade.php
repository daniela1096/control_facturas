@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Nuevo Cliente</h1>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <a class="btn btn-secondary" href="/control_clientes">Regresar</a>
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
      <form class="" action="/control_clientes" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="nombre_completo">Nombre Completo</label>
          <input type="text" name="nombre_completo" id="nombre_completo" class="form-control" value="{{ old('nombre_completo') }}">
        </div>
        <div class="form-group">
          <label for="nit">Nit</label>
          <input type="text" name="nit" id="nit" class="form-control" value="{{ old('nit') }}">
        </div>
        <div class="form-group">
          <label for="telefono">Teléfono</label>
          <input type="text" name="telefono" id="telefono" class="form-control" value="{{ old('telefono') }}">
        </div>
        <div class="form-group">
          <label for="ciudad">Ciudad</label>
          <input type="text" name="ciudad" id="ciudad" class="form-control" value="{{ old('ciudad') }}">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
        </div>
        <button type="sumbit" class="btn btn-primary">Guardar</button>
      </form>

    </div>
  </div>
</div>
@endsection
