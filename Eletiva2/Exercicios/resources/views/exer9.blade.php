@extends('layout')
@section('titulo', 'Exercicio5')
@section('conteudo')
    <h1>Exercicio 9 - Calculo de área</h1>
    <form method="post" action="/exer9resp">
        <div class="mb-3">
            <label for="valor1" class="form-label">Informe o raio do circulo</label>
            <input type="number" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($area)
        <p>Área do circulo: {{ $area }}</p>
    @endisset
@endsection
