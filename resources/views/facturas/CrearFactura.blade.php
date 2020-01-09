@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Nueva Factura</h1>
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
      <form class="" action="/control_facturas" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="fecha_exp">Fecha de expedición</label>
          <input type="text" name="fecha_exp" id="fecha_exp" class="form-control" value="{{ old('fecha_exp') }}">
        </div>
        <div class="form-group">
          <label for="fecha_ven">Fecha de vencimiento</label>
          <input type="text" name="fecha_ven" id="fecha_ven" class="form-control" value="{{ old('fecha_ven') }}">
        </div>
        <div class="form-group">
          <label for="fecha_recibo">Fecha de recibo de factura</label>
          <input type="text" name="fecha_recibo" id="fecha_recibo" class="form-control" value="{{ old('fecha_recibo') }}">
        </div>
        <div class="form-group">
          <label for="cliente">Cliente</label>
          <select class="form-control custom-select {{ $errors->has('cliente') ? 'is-invalid' : '' }}" name="cliente" id="cliente" required>
                <option value="">{{ __('Por favor seleccione un cliente') }}</option>
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre_completo }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
          <label for="vendedor">Vendedor</label>
          <select class="form-control custom-select {{ $errors->has('vendedor') ? 'is-invalid' : '' }}" name="vendedor" id="vendedor" required>
                <option value="">{{ __('Por favor seleccione un vendedor') }}</option>
                @foreach($vendedores as $vendedor)
                    <option value="{{ $vendedor->id }}">{{ $vendedor->nombre_vendedor }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
          <label for="iva">Iva</label>
          <input type="text" name="iva" id="iva" class="form-control" value="{{ old('iva') }}">
        </div>
        <div class="form-group">
          <label for="estado">Estado</label>
          <!--<input type="text" name="estado" id="estado" class="form-control" value="{{ old('estado') }}">-->
          <select class="form-control custom-select {{ $errors->has('estado') ? 'is-invalid' : '' }}" name="estado" id="estado" required>
                  <option value="">{{ __('Por favor seleccione un estado') }}</option>
                  <option value="Procesada">Procesada</option>
                  <option value="En_proceso">En Proceso</option>
                  <option value="Finalizada">Finalizada</option>
                  <option value="Rechazada">Rechazada</option>
                  <option value="Anludada">Anulada</option>
            </select>
        </div>
        <button type="sumbit" class="btn btn-primary">Guardar</button>
      </form>

    </div>
  </div>
</div>
@endsection
