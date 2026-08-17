@extends('layout')
@section('titulo', 'Exercicio5')
@section('conteudo')
    <h1>Exercicio 6 - Conversor de Temperatura</h1>
    <form method="post" action="/exer6resp">
        <div class="mb-3">
            <label for="valor1" class="form-label">Informe a temeratura em graus Celsius</label>
            <input type="number" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($temperatura)
        <p>Temperatura em Fareheint: {{ $temperatura }}</p>
    @endisset
@endsection
