<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaisController extends Controller
{
    // método index
    public function index()
    {
        return 'index';
    }

    // Método store
    public function store()
    {
        return 'store';
    }

    // Método show
    public function show($pais)
    {
        return "El pais seleccionado es $pais";
    }

    // Método update
    public function update($pais)
    {
        return "El pais actualizado ahora es $pais";
    }
}
