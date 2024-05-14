<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    public function suplementofase1(){
        return view('aluno.ebooks.suplementos.fase1');
    }

    public function receitasfase1(){
        return view('aluno.ebooks.receitas.fase1');
    }
}
