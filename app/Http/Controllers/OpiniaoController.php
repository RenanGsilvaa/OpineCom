<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Opiniao;

class OpiniaoController extends Controller
{
    public function create()
    {
        return view('Opiniao.create');
    }

    public function store(Request $requisicao)
    {
        $opniao = new Opiniao();

        $opniao->nome = $requisicao->nome;
        $opniao->idade = $requisicao->idade;
        $opniao->documento = $requisicao->documento;
        $opniao->email = $requisicao->email;
        $opniao->senha = $requisicao->senha;

        $opniao->save();

        return redirect()->route('opniao.show', $opniao->id);
    }
}
