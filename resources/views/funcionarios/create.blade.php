@extends('layouts.default')

@section('title','Cadastrar Funcionário')


@section('conteudo')

<div class="container border border-2 rounded-2 p-4 mt-2 bg-white">
    <h1>Cadastrar Funcionário</h1>
    <form method="post" id="funcionario">
        <div class="row">
            <div class="mb-3 col">
                <label for="nome" class="form-label fw-semibold">Nome</label>
                <input type="text" name="nome" class="form-control form-control-lg bg-dark bg-opacity-10" value="" required>
            </div>
            <div class="mb-3 col">
                <label for="data" class="form-label fw-semibold">Data de Nascimento</label>
                <input type="date" name="data" class="form-control form-control-lg bg-dark bg-opacity-10" value="" required placeholder="Somente números" maxlength="11" minlength="11">
            </div>
            <div class="mb-3 col">
                <label for="sexo" class="mb-2 fw-semibold">Sexo</label>
                <select class="form-select form-select-lg bg-dark bg-opacity-10" aria-label="sexo"  value="">
                    <option selected></option>
                    <option value="1">Masculino</option>
                    <option value="2">Feminino</option>
                    <option value="3">Outro</option>
                </select>
            </div>
        </div>
        
        <div class="row">
                <div class="mb-3 col">
                    <label for="cpf" class="form-label fw-semibold">CPF </label>
                    <input type="text" name="cpf" class="form-control form-control-lg bg-dark bg-opacity-10" value="" required placeholder="Somente números" maxlength="11" minlength="11">
                </div>
                <div class="mb-3 col">
                    <label for="telefone" class="form-label fw-semibold">Telefone </label>
                    <input type="text" name="telefone" class="form-control form-control-lg bg-dark bg-opacity-10" value="" required placeholder="(00) 00000-0000" maxlength="11" minlength="11">
                </div>
                <div class="mb-3 col">
                    <label for="email" class="form-label fw-semibold">Email </label>
                    <input type="text" name="email" class="form-control form-control-lg bg-dark bg-opacity-10" value="" >
                </div>
        </div>
        <div class="row">
            <div class="col">
                <label for="departamento" class="mb-2 fw-semibold">Departamento</label>
                <select class="form-select form-select-lg bg-dark bg-opacity-10" aria-label="departamento"  value="">
                    <option selected></option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                  </select>
            </div>
            <div class="col">
                <label for="cargo" class="mb-2 fw-semibold">Cargo</label>
                <select class="form-select form-select-lg bg-dark bg-opacity-10" aria-label="Cargo"  value="">
                    <option selected></option>
                    <option value="1"></option>
                    <option value="2"></option>
                    <option value="3"></option>
                  </select>
            </div>
            <div class="col">
                <label for="salario" class="form-label fw-semibold">Salario </label>
                <input type="text" name="salario" class="form-control form-control-lg bg-dark bg-opacity-10" value="" required placeholder="Somente números" maxlength="11" minlength="11">
            </div>
        </div>
    </form>
</div>
    

    
@endsection