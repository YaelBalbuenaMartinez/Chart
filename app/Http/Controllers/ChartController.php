<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChartController extends Controller
{
    public function appointments(Request $request)
    {
        $edadSeleccionada = $request->input('edad'); // Obtener la edad seleccionada desde la solicitud AJAX
    
        // Modificar tu consulta SQL para filtrar por la edad seleccionada
        $query = DB::table('completa')
            ->select(DB::raw('YEAR(CURDATE()) - YEAR(fecha_nac) AS edad'), DB::raw('COUNT(*) as cantidad'))
            ->groupBy('edad', 'completa.fecha_nac')
            ->orderBy('edad', 'asc');
    
        // Aplicar filtro por edad seleccionada si se proporciona
        if ($edadSeleccionada) {
            list($minEdad, $maxEdad) = explode('-', $edadSeleccionada);
            $query->havingRaw('edad >= ? AND edad <= ?', [$minEdad, $maxEdad]);
        }
    
        $edadesFiltradas = $query->get();
    
        return view('charts.appointments', compact('edadesFiltradas'));
    }

}
