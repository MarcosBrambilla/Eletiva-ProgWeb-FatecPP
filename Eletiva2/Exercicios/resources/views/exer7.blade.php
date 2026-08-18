@extends('layout')
@section('titulo', 'Exercicio5')
@section('conteudo')
    <h1>Exercicio 7 - Conversor de Temperatura</h1>
    <form method="post" action="/exer7resp">
        <div class="mb-3">
            <label for="valor1" class="form-label">Informe a temeratura em graus Fareheint</label>
            <input type="number" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($temperatura)
        <p>Temperatura em Celsius: {{ $temperatura }}</p>
    @endisset
@endsection
