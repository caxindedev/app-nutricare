<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AulaController extends Controller
{
    public function aula1(){
        return view('aluno.mentoria.modulo1.aula1');
    }

    public function aula2(){
        return view('aluno.mentoria.modulo1.aula2');
    }

    public function aula3(){
        return view('aluno.mentoria.modulo1.aula3');
    }

    public function aula4(){
        return view('aluno.mentoria.modulo1.aula4');
    }

    public function aula5(){
        return view('aluno.mentoria.modulo1.aula5');
    }


    public function modulo2Aula1(){
        return view('aluno.mentoria.modulo2.aula1');
    }

    public function modulo2Aula2(){
        return view('aluno.mentoria.modulo2.aula2');
    }

    public function modulo2Aula3(){
        return view('aluno.mentoria.modulo2.aula3');
    }

    public function modulo2Aula4(){
        return view('aluno.mentoria.modulo2.aula4');
    }

    public function modulo2Aula5(){
        return view('aluno.mentoria.modulo2.aula5');
    }
}

