<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Fotografia;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Empresa;
use App\Models\Turma;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Illuminate\Support\Str;

class TurmaController extends Controller
{

    public function index()
    {
        $turmas = Turma::all();
        return view('secretaria.turma.listar', compact(['turmas']));
    }


    public function create()
    {

        $cursos = Curso::all();
        $empresas = Empresa::all();
        return view('secretaria.turma.create', compact(['cursos', 'empresas']));
    }

    public function store(Request $request)
    {
        $turma = $request->only(['curso_id', 'nome', 'data_inicio', 'data_termino', 'fotografia']); // apenas campos permitidos para turma
        if ($request->fotografia != null) {
            $caminho = $request->fotografia->store('fotografia');
            $turma['fotografia'] = $caminho;
        }
        /* if ($request->fotografia) {
            $nome_arquivo = str_replace('-', '', $request->fotografia) . Carbon::now()->format('YmdHis') . '.' . $request->fotografia->extension();
            $turma['fotografia'] = $request->file('fotografia')->storeAs('turma', $nome_arquivo);
        } */
        $resp = Turma::create($turma);
        return redirect()->back()->withInput(['message' => $resp->nome . ' A turma foi criada com sucesso']);
    }
}
