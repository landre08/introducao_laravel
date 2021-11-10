<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    
    public function index()
    {
        $contatos = new Contato();

        dd($contatos->lista());

        return view('contato.index', compact('contatos'));
    }

    public function criar()
    {
        echo 'criar';
    }

    public function editar()
    {
        echo 'editar';
    }
}
