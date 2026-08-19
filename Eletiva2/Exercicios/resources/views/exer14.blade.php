@extends('layout')
@section('titulo', 'Exercicio14')
@section('conteudo')
    <h1>Exercicio 14 - Conversor de Quilômetros para Milhas</h1>
    <form method="post" action="/exer14resp">
        <div class="mb-3">
            <label for="valor1" class="form-label">Informe o valor em quilômetros</label>
            <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($milhas)
        <p>Valor em milhas: {{ $milhas }} milhas</p>
    @endisset
@endsection
