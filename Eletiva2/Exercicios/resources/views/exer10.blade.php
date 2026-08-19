@extends('layout')
@section('titulo', 'Exercicio5')
@section('conteudo')
    <h1>Exercicio 10 - Calculo de Perimetro</h1>
    <form method="post" action="/exer10resp">
        <div class="mb-3">
            <label for="valor1" class="form-label">Informe a base do retângulo</label>
            <input type="number" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="valor2" class="form-label">Informe a altura do retângulo</label>
            <input type="number" id="valor2" name="valor2" class="form-control" required="">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($perimetro)
        <p>Perimetro do retângulo: {{ $perimetro }}</p>
    @endisset
@endsection
