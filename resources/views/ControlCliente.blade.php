@extends('layouts.base')
@section('content')
<div class="row">
  <div class="col">
    <h1>Clientes</h1>
  </div>
</div>

<div class="row">
  <div class="col">
    <a class="btn btn-primary" href="/control_clientes/create">Crear Cliente</a>
  </div>
</div>
<br>

<div class="row">
  <div class="col">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nombre Completo</th>
          <th scope="col">Nit</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Ciudad</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
      @foreach($Clientes as $cliente)
      <tr>
        <td>{{$cliente->nombre_completo}}</td>
        <td>{{$cliente->nit}}</td>
        <td>{{$cliente->telefono}}</td>
        <td>{{$cliente->ciudad}}</td>
        <td>{{$cliente->email}}</td>
        <td><a href="/control_clientes/{{$cliente->id}}/edit">Editar</a></td>
        <td><a href="/control_clientes/{{$cliente->id}}/confirmDelete">Eliminar</a></td>

      </tr>
      @endforeach
    </tbody>
    </table>
  </div>
</div>
@endsection
