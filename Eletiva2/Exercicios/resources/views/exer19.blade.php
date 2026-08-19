@extends('layout')
@section('titulo', 'Exercicio19')
@section('conteudo')
    <h1>Exercicio 19 - Conversor de Dias para Horas, Minutos e Segundos</h1>
    <form method="post" action="/exer19resp">
        <div class="mb-3">
            <label for="valor1" class="form-label">Informe o valor em dias</label>
            <input type="number" step="any" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    @isset($horas)
        <p>{{ $dias }} dia(s) equivale a {{ $horas }} horas, {{ $minutos }} minutos e {{ $segundos }} segundos.</p>
    @endisset
@endsection
