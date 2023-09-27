<?php

namespace App\Http\Controllers;

use App\Models\prueba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ControllerPruebas extends Controller
{
    public function index()
    {
        $itpruebas = \DB::table('it_para_pruebas')
                    ->select('it_para_pruebas.*')
                    ->orderBy('id','DESC')
                    ->get();
        return view('ejemplo')->with('itpruebas', $itpruebas);


    }
}
