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

        if($request->check_soma){$operacoes[] = 'soma'; }
        if($request->check_subtracao){$operacoes[] = 'subtracao'; }
        if($request->check_multiplicacao){$operacoes[] = 'multiplicacao'; }
        if($request->check_divisao){$operacoes[] = 'divisao'; }

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
                    $exercico = "$number1 x $number2 =";
                    $solucao = $number1 * $number2;
                    break;
                case 'divisao':

                    if($number2 == 0){
                        $number2 = 1;
                    }//correcao de erro base zero

                    $exercico = "$number1 : $number2 =";
                    $solucao = $number1 / $number2;
                    break;
            }

            //arredondar para duas casas decimais 
            if(is_float($solucao)){
                $solucao = round($solucao, 2);
            }


            $exercicos[] = [
                'operacao' => $operacao,
                'number_exercicio' => $index,
                'exercicio' => $exercico,
                'solucao' => "$exercico $solucao"
            ];
        }

        dd($exercicos); // debug

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
