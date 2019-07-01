<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index() {
        $listaPessoas = Pessoa::all();
        return view('pessoa.index', ['listaP' => $listaPessoas]);
    }
}
