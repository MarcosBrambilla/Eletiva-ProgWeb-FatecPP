@extends('layout')
@section('titulo', 'Exercicio15')
@section('conteudo')
    <h1>Exercicio 15 - Cálculo do IMC</h1>
    <form method="post" action="/exer15resp">
        <div class="mb-3">
            <label for="valor1" class="form-label">Informe o peso (em kg)</label>
            <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="valor2" class="form-label">Informe a altura (em metros)</label>
            <input type="number" step="any" id="valor2" name="valor2" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($imc)
        <p>IMC: {{ $imc }}</p>
    @endisset
@endsection
