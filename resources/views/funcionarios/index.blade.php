@extends('layouts.default')

@section('title', 'Funcionários')

@section('conteudo')
<div class="container-fluid shadow bg-white p-3">
    <h1>Funcionários</h1>
    <a href="{{route('funcionarios.create')}}" class="btn btn-primary float-end mb-2 rounded-circle fs-4"><i class="bi bi-person-plus-fill"></i></a>
    <table class="table table-striped">
        <thead class="table-dark">
            <tr class="text-center">
                <th>ID</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>Cargos</th>
                <th>Departamento</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($funcionarios as $funcionario)
            <tr class="text-center">
            <td class="align-middle">{{$funcionario->id}}</td>
                <td class="align-middle"><img src="/images/funcionarios/{{$funcionario->foto}}" alt="{{$funcionario->nome}}" width="100"></td>
                <td class="align-middle">{{$funcionario->nome}}</td>
                <td class="align-middle">{{$funcionario->cargo->descricao}}</td>
                <td class="align-middle">{{$funcionario->departamento->nome}}</td>
                <td class="align-middle"><button type="button" class="btn btn-primary m-2"><i class="bi bi-pen"></i></button><button type="button" class="btn btn-danger m-2"><i class="bi bi-trash3" ></i></button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection