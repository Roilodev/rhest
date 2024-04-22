<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Estadistica;
Use Illuminate\Support\Facades\DB;

class EstadisticaController extends Controller
{
    public function index()
    {
        $estadisticas = DB::select('exec pa_estadistica');
        return view('index', compact('estadisticas'));
    }
}
