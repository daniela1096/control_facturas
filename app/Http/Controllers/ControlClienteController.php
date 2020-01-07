<?php

namespace App\Http\Controllers;

use App\ClienteModel;
use Illuminate\Http\Request;

class ControlClienteController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('ControlCliente', [
      'Clientes'=>ClienteModel::all()
    ]);
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('CrearCliente');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {

    $validatedData = $request->validate([
      'nombre_completo' => 'required|max:255',
      'nit' => 'required|max:12',
      'telefono' => 'required|max:10',
      'ciudad' => 'required|max:255',
      'email' => 'required|regex:/^.+@.+$/i'
    ]);

    $cliente = new ClienteModel();
    $cliente->nombre_completo = $request->get('nombre_completo');
    $cliente->nit = $request->get('nit');
    $cliente->telefono = $request->get('telefono');
    $cliente->ciudad = $request->get('ciudad');
    $cliente->email = $request->get('email');
    $cliente->save();

    return redirect('/control_clientes');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show($id)
  {
    //
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit($id)
  {
    $cliente = ClienteModel::findOrFail($id);
    return view('EditarCliente',[
      'cliente'=> $cliente
    ]);
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    //dd('put update');

    $validatedData = $request->validate([
      'nombre_completo' => 'required|max:255',
      'nit' => 'required|max:12',
      'telefono' => 'required|max:10',
      'ciudad' => 'required|max:255',
      'email' => 'required|regex:/^.+@.+$/i'
    ]);
    
    $cliente = ClienteModel::find($id);
    $cliente->nombre_completo = $request->get('nombre_completo');
    $cliente->nit = $request->get('nit');
    $cliente->telefono = $request->get('telefono');
    $cliente->ciudad = $request->get('ciudad');
    $cliente->email = $request->get('email');
    $cliente->save();

    return redirect('/control_clientes');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $cliente = ClienteModel::findOrFail($id);
    $cliente->delete();

    return redirect('/control_clientes');

  }


  public function confirmDelete($id)
  {
    //dd('confirmDelete' . $id);
    $cliente = ClienteModel::find($id);
    return view('confirmDelete' , [
      'cliente'=>$cliente
    ]);
  }
}
