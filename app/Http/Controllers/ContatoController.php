<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function store(Request $request)
    {
        $dados = $request->validate([
            'titulo' => 'string|max:255',
            'mensagem' => 'required|string|max:10000',
            'email' => 'required|email|max:100',
        ]);

        $contato = Contato::create($dados);
    }
}
