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
        $request->validate([
            'check_soma' => 'required_without_all:check_subtracao, check_multiplicacao, check_divisao',
            'check_subtracao' => 'required_without_all:check_soma, check_multiplicacao, check_divisao',
            'check_multiplicacao' => 'required_without_all:check_soma, check_subtracao, check_divisao',
            'check_divisao' => 'required_without_all:check_soma, check_subtracao, check_multiplicacao',
            'number_one' => 'required|integer|min:0|max:999',
            'number_two'=> 'required|integer|min:0|max:999',
            'number_exercicio' => 'required|integer|min:5|max:50',
        ]);

        dd($request->all());
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
