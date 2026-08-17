@extends('layout')
@section('titulo', 'Exercicio5')
@section('conteudo')
    <h1>Exercicio 5 - Cálculo de média</h1>
    <form method="post" action="/exer5resp">
        <div class="mb-3">
            <label for="valor1" class="form-label">Informe a primeira nota</label>
            <input type="number" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="valor2" class="form-label">Informe a segunda nota</label>
            <input type="number" id="valor2" name="valor2" class="form-control" required="">
        </div>
        <div class="mb-3">
            <label for="valor3" class="form-label">Informe a terceira nota</label>
            <input type="number" id="valor3" name="valor3" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($media)
        <p>Média das notas: {{ $media }}</p>
    @endisset
@endsection
