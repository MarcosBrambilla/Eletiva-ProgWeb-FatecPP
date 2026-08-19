@extends('layout')
@section('titulo', 'Exercicio20')
@section('conteudo')
    <h1>Exercicio 20 - Cálculo da Velocidade Média</h1>
    <form method="post" action="/exer20resp">
        <div class="mb-3">
            <label for="valor1" class="form-label">Informe a distância</label>
            <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="valor2" class="form-label">Informe o tempo</label>
            <input type="number" step="any" id="valor2" name="valor2" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($velocidadeMedia)
        <p>Velocidade Média: {{ $velocidadeMedia }}</p>
    @endisset
@endsection
