@extends('layout')
@section('titulo', 'Exercicio16')
@section('conteudo')
    <h1>Exercicio 16 - Cálculo de Preço com Desconto</h1>
    <form method="post" action="/exer16resp">
        <div class="mb-3">
            <label for="valor1" class="form-label">Informe o preço</label>
            <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="valor2" class="form-label">Informe o percentual de desconto (%)</label>
            <input type="number" step="any" id="valor2" name="valor2" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($precoComDesconto)
        <p>Preço com desconto: {{ $precoComDesconto }}</p>
    @endisset
@endsection
