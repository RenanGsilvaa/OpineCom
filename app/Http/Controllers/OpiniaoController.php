<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Opiniao;

class OpiniaoController extends Controller
{
    public function index()
    {
        $opiniao = Opiniao::all();
        return view('Opiniao.index', compact('opiniao'));
    }

    
    public function create()
    {
        return view('Opiniao.create');
    }

    public function store(Request $requisicao)
    {
        $opniao = new Opiniao();
        
        $opniao->titulo = $requisicao->titulo;
        $opniao->nome = $requisicao->nome;
        $opniao->empresa = $requisicao->empresa;
        $opniao->produto = $requisicao->produto;
        $opniao->avaliacao = $requisicao->avaliacao;
        $opniao->data = $requisicao->data;
        $opniao->save();

        return redirect()->route('opiniao.show', $opniao->id);
    }

    public function show(Opiniao $opiniao)
    {
        return view('opiniao.show', compact('opiniao', $opiniao->id));
    }

    
    public function edit(Opiniao $opiniao)
    {
        return view('opiniao.edit', compact('opiniao'));
    }

    public function update(Request $requisicao, Opiniao $Opiniao)
    {
        $Opiniao->update($requisicao->all());

        return redirect()->route('opiniao.show', $Opiniao->id);
    }

    
    public function destroy(Opiniao $usuario)
    {
        $usuario->delete();

        return redirect()->route('Opiniao.index');
    }
}
