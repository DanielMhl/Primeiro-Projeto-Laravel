@extends('layouts.default')

@section('title', 'Cadastrar Cargos')

@section('conteudo')
<div class="container-fluid shadow bg-white p-3">

    <h1>Cadastrar Cargos</h1>
    <label for="nome" class="form-label fw-semibold fs-4 mb-2">Descrição</label>
    <input type="text" name="nome" class="form-control form-control-lg bg-dark bg-opacity-10 mb-2" value="">
        <input class="btn btn-primary" type="submit" value="Cadastrar">
        <input class="btn btn-danger" type="reset" value="Cancelar">
</div>
@endsection