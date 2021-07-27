<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function index()
    {
        $funcionario = DB::select('select * from funcionarios');

        return view('funcionario.index', ['funcionario' => $funcionario]);
    }
}
