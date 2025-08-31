<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TmpCosechas extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_cliente',
        'desembolsos',
        'actividad_economica',
        'create_at',
        'update_at'
    ];
}
