<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request)
    {
      return view('clientes', [
      'title' => $request->query('title','valor default')
    ]);
    }
}
