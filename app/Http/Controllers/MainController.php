<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View
    {
        return view('index');
    }

    public function gerarExercicios(Request $request)
    {
        echo "gerar exercícios";
    }

    public function printExercicios()
    {
        echo "imprimior os exercícios na tela";
    }

    public function exportarExercicios()
    {
        echo "exportar exercícios para arquivo de texto";
    }
}
