<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaldoMoraModel extends Model
{
    use HasFactory;

    protected $table = 'saldos_mora';
    protected $fillable = [
        'cliente_id',
         'periodo',
        'saldo'
    ];
}
