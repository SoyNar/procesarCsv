<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrestamosModel extends Model
{
    use HasFactory;
    protected $table = 'prestamos';
    protected $fillable = [
        'id_cliente',
        'desembolsos',
        'saldo_mora1',
        'saldo_mora2',
        'saldo_mora3',
        'actividad_economica',
        'create_at',
        'update_at'
    ];
}
