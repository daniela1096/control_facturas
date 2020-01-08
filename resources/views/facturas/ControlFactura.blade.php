@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Facturas</h1>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <a class="btn btn-primary" href="/control_facturas/create">Crear Factura</a>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Fecha de expedición</th>
            <th scope="col">Fecha de vencimiento</th>
            <th scope="col">Fecha de recibo de factura</th>
            <th scope="col">Iva</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
          @foreach($Facturas as $factura)
          <tr>
            <td>{{$factura->fecha_exp}}</td>
            <td>{{$factura->fecha_ven}}</td>
            <td>{{$factura->fecha_recibo}}</td>
            <td>{{$factura->iva}}</td>
            <td>{{$factura->estado}}</td>
            <td><a href="/control_facturas/{{$factura->id}}/edit">Editar</a></td>
            <td><a href="/control_facturas/{{$factura->id}}/confirmDelete">Eliminar</a></td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
