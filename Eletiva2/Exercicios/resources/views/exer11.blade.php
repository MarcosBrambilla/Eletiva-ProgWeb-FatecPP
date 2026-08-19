@extends('layout')
@section('titulo', 'Exercicio11')
@section('conteudo')
    <h1>Exercicio 11 - Perímetro do Círculo</h1>
    <form method="post" action="/exer11resp">
        <div class="mb-3">
            <label for="valor1" class="form-label">Informe o raio do círculo</label>
            <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($perimetro)
        <p>Perímetro do círculo: {{ $perimetro }}</p>
    @endisset
@endsection
