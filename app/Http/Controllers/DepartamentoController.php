<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index(){
        $cargos = Cargo::all();
        return view('departamento.index');
    }

    public function create(){
        return view('departamento.create');
    }
}
