<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    public function index()
    {
        $Pais = DB::select('select * from Pais');

        return view('funcionario.index', ['Pais' => $pais]);
    }
}
