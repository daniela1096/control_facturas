<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FacturaModel;
use App\ClienteModel;
use App\VendedorModel;

class ControlFacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('facturas.ControlFactura', [
        'Facturas'=>FacturaModel::all()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = ClienteModel::all();
        $vendedores = VendedorModel::all();
        return view('facturas.CrearFactura', [
          'clientes' => $clientes,
          'vendedores' => $vendedores
        ]);
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
        'fecha_exp' => 'required|date',
        'fecha_ven' => 'required|date',
        'fecha_recibo' => 'required|date',
        'iva' => 'required|integer',
        'estado' => 'required'
      ]);

      $factura = new FacturaModel();
      $factura->fecha_exp = $request->get('fecha_exp');
      $factura->fecha_ven = $request->get('fecha_ven');
      $factura->fecha_recibo = $request->get('fecha_recibo');
      $factura->cliente_id = $request->input('cliente_id');
      $factura->vendedor_id = $request->input('vendedor_id');
      $factura->iva = $request->get('iva');
      $factura->estado = $request->get('estado');
      $factura->save();

      return redirect('/control_facturas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $factura = FacturaModel::findOrFail($id);
      return view('facturas.EditarFactura',[
        'factura'=> $factura
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
      $validatedData = $request->validate([
        'fecha_exp' => 'required|date',
        'fecha_ven' => 'required|date',
        'fecha_recibo' => 'required|date',
        'iva' => 'required|integer',
        'estado' => 'required'
      ]);

      $factura = FacturaModel::find($id);
      $factura->fecha_exp = $request->get('fecha_exp');
      $factura->fecha_ven = $request->get('fecha_ven');
      $factura->fecha_recibo = $request->get('fecha_recibo');
      $factura->iva = $request->get('iva');
      $factura->estado = $request->get('estado');
      $factura->save();

      return redirect('/control_facturas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
     {
       $factura = FacturaModel::findOrFail($id);
       $factura->delete();

       return redirect('/control_facturas');

     }


     public function confirmDelete($id)
     {
       //dd('confirmDelete' . $id);
       $factura = FacturaModel::find($id);
       return view('facturas.confirmDelete' , [
         'factura'=>$factura
       ]);
     }
}
