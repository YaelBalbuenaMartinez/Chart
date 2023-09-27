<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerCompleta extends Controller
{
    public function index()
    {
        $completas = \DB::table('completa')
                    ->select('completa.*')
                    ->orderBy('id','DESC')
                    ->get();
        return view('ejemplo2')->with('completas', $completas);
    }
}
