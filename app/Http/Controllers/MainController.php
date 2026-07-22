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
            'number_one' => 'required|integer|min:0|max:999|lt:number_two',
            'number_two'=> 'required|integer|min:0|max:999',
            'number_exercicio' => 'required|integer|min:5|max:50',
        ]);

        //selecionar operações
        $operacoes = [];
        $operacoes [] = $request->check_soma ? 'soma' : ' ';
        $operacoes [] = $request->check_subtracao ? 'subtracao' : ' ';
        $operacoes [] = $request->check_multiplicacao ? 'multiplicacao' : ' ';
        $operacoes [] = $request->check_dividao ? 'divisao' : ' ';

        //pegar numeros ->min e max
        $min = $request->number_one;
        $max = $request->number_two;

        //numero de exercícios
        $numberExercicio = $request->number_exercicio;
        
        $exercicos = [];
        for($index = 1; $index <= $numberExercicio; $index++){

            $operacao= $operacoes[array_rand($operacoes)];
            $number1 = rand($min, $max);
            $number2 = rand($min, $max);

            $exercico = ' ';
            $solucao = ' ';

            switch ($operacao){
                case 'soma':
                    $exercico = "$number1 + $number2 =";
                    $solucao = $number1 + $number2;
                    break;
                case 'subtracao':
                    $exercico = "$number1 - $number2 =";
                    $solucao = $number1 - $number2;
                    break;
                case 'multiplicacao':
                    $exercico = "$number1 * $number2 =";
                    $solucao = $number1 * $number2;
                    break;
                case 'divisao':
                    $exercico = "$number1 / $number2 =";
                    $solucao = $number1 / $number2;
                    break;
            }

            $exercicos[] = [
                'number_exercicio' => $index,
                'exercicio' => $exercico,
                'solucao' => "$exercico $solucao"
            ];
        }

        // dd($exercicos); // debug

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
