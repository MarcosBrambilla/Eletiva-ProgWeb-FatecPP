@extends('layout')
@section('titulo', 'Exercicio13')
@section('conteudo')
    <h1>Exercicio 13 - Conversor de Metros para Centímetros</h1>
    <form method="post" action="/exer13resp">
        <div class="mb-3">
            <label for="valor1" class="form-label">Informe o valor em metros</label>
            <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($centimetros)
        <p>Valor em centímetros: {{ $centimetros }} cm</p>
    @endisset
@endsection
