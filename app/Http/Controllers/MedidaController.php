<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedidaController extends Controller
{
    public function create(){
        return view('aluno.medidas.novaMedida');
    }

    public function evolucao(){
        return view('aluno.medidas.medidas');
    }
}
