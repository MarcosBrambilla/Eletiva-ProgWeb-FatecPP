<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function abrirFormExer1()
    {
        return view('exer1');
    }
    public function respostaExer1(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $soma = $valor1 + $valor2;

        return view('exer1', ['soma' => $soma]);
    }

    public function abrirFormExer2()
    {
        return view('exer2');
    }
    public function respostaExer2(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $subtracao = $valor1 - $valor2;

        return view('exer2', ['subtracao' => $subtracao]);
    }

    public function abrirFormExer3()
    {
        return view('exer3');
    }
    public function respostaExer3(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $multiplicacao = $valor1 * $valor2;

        return view('exer3', ['multiplicacao' => $multiplicacao]);
    }

    //exercicio 4 divisao
    public function abrirFormExer4()
    {
        return view('exer4');
    }
    public function respostaExer4(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        if ($valor2 == 0) {
            $divisao = "Erro: Divisão por zero não é permitida!";
        } else {
            $divisao = $valor1 / $valor2;
        }

        return view('exer4', ['divisao' => $divisao ]);
    }

    //exercicio 5 Média nota
    public function abrirFormExer5()
    {
        return view('exer5');
    }
    public function respostaExer5(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $valor3 = $request->valor3;

        $media = ($valor1 + $valor2 + $valor3) / 3;

        return view('exer5', ['media' => $media ]);
    }

    //exercicio 6 Converter temperatura
    public function abrirFormExer6()
    {
        return view('exer6');
    }
    public function respostaExer6(Request $request)
    {
        $valor1 = $request->valor1;

        $temperatura = ($valor1 * 9 / 5) + 32;

        return view('exer6', ['temperatura' => $temperatura ]);
    }

    public function abrirFormExer7()
    {
        return view('exer7');
    }
    public function respostaExer7(Request $request)
    {
        $valor1 = $request->valor1;

        $temperatura = ($valor1 - 32) * 5 / 9;

        return view('exer7', ['temperatura' => $temperatura ]);
    }

    public function abrirFormExer8()
    {
        return view('exer8');
    }
    public function respostaExer8(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $area = $valor1 * $valor2;

        return view('exer8', ['area' => $area ]);
    }

    public function abrirFormExer9()
    {
        return view('exer9');
    }
    public function respostaExer9(Request $request)
    {
        $valor1 = $request->valor1;

        $area = pi() * ($valor1 ** 2);

        return view('exer9', ['area' => $area ]);
    }

    public function abrirFormExer10()
    {
        return view('exer10');
    }
    public function respostaExer10(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $perimetro = 2 * ($valor1 + $valor2);

        return view('exer10', ['perimetro' => $perimetro ]);
    }

    //exercicio 11 Perímetro do Círculo
    public function abrirFormExer11()
    {
        return view('exer11');
    }
    public function respostaExer11(Request $request)
    {
        $valor1 = $request->valor1;

        $perimetro = 2 * pi() * $valor1;

        return view('exer11', ['perimetro' => $perimetro]);
    }

    //exercicio 12 Potenciação
    public function abrirFormExer12()
    {
        return view('exer12');
    }
    public function respostaExer12(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $resultado = $valor1 ** $valor2;

        return view('exer12', ['resultado' => $resultado]);
    }

    //exercicio 13 Metros para Centímetros
    public function abrirFormExer13()
    {
        return view('exer13');
    }
    public function respostaExer13(Request $request)
    {
        $valor1 = $request->valor1;

        $centimetros = $valor1 * 100;

        return view('exer13', ['centimetros' => $centimetros]);
    }

    //exercicio 14 Quilômetros para Milhas
    public function abrirFormExer14()
    {
        return view('exer14');
    }
    public function respostaExer14(Request $request)
    {
        $valor1 = $request->valor1;

        $milhas = $valor1 * 0.621371;

        return view('exer14', ['milhas' => $milhas]);
    }

    //exercicio 15 Cálculo do IMC
    public function abrirFormExer15()
    {
        return view('exer15');
    }
    public function respostaExer15(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        if ($valor2 == 0) {
            $imc = "Erro: Altura deve ser maior que zero!";
        } else {
            $imc = $valor1 / ($valor2 ** 2);
        }

        return view('exer15', ['imc' => $imc]);
    }

    //exercicio 16 Preço com Desconto
    public function abrirFormExer16()
    {
        return view('exer16');
    }
    public function respostaExer16(Request $request)
    {
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;

        $precoComDesconto = $valor1 - ($valor1 * ($valor2 / 100));

        return view('exer16', ['precoComDesconto' => $precoComDesconto]);
    }
}
