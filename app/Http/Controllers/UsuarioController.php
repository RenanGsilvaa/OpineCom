<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        return view('Usuarios.index');
    }

    public function create()
    {
        return view('Usuarios.create');
    }

    public function store(Request $requisicao)
    {
        $usuario = new Usuario();

        $usuario->nome = $requisicao->nome;
        $usuario->idade = $requisicao->idade;
        $usuario->documento = $requisicao->documento;
        $usuario->email = $requisicao->email;
        $usuario->senha = $requisicao->senha;

        $usuario->save();

        return redirect()->route('usuarios.show', $usuario->id);
    }

    public function list()
    {   
        $usuario = Usuario::all();
        return view('Usuarios.list', compact('usuario'));
    }

    public function show(Usuario $usuario)
    {
        return view('Usuarios.show', compact('usuario'));
    }

    
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $requisicao, Usuario $usuario)
    {
        $usuario->update($requisicao->all());

        return redirect()->route('usuarios.show', $usuario->id);
    }

    
    public function destroy(Usuario $usuario)
    {
        $usuario->delete();

        return redirect()->route('usuarios.index');
    }
}