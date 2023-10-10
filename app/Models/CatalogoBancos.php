<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatalogoBancos extends Model
{
    use HasFactory;

    protected $fillable = [
        'Clave',
        'Nombre_corto',
        'Nombre_o_razon_social'
    ];

    public $timestamps = false;

}
