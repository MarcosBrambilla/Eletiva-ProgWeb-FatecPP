@extends('layout')
@section('titulo', 'Exercicio18')
@section('conteudo')
    <h1>Exercicio 18 - Cálculo de Juros Compostos</h1>
    <form method="post" action="/exer18resp">
        <div class="mb-3">
            <label for="valor1" class="form-label">Informe o capital</label>
            <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="valor2" class="form-label">Informe a taxa de juros (%)</label>
            <input type="number" step="any" id="valor2" name="valor2" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="valor3" class="form-label">Informe o período</label>
            <input type="number" step="any" id="valor3" name="valor3" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($montante)
        <p>Montante com Juros Compostos: {{ $montante }}</p>
    @endisset
@endsection
