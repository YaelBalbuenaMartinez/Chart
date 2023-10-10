<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BancosController extends Controller
{
    public function index()
    {
        $categorias = DB::table('catalogo_bancos')
                    ->select('catalogo_bancos.*')
                    ->orderBy('id','DESC')
                    ->get();
        return view('Bancos')->with('catalogo_bancos', $categorias);
    }
}
