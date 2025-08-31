<?php

namespace App\Infrastructure\Eloquent;

use App\Domain\Repositories\SaldosRepositoryInterface;
use App\Models\SaldoMoraModel;

class ELoquenMoraRepositoryImpl implements SaldosRepositoryInterface
{
    public function saveSaldo(int $clienteId, array $saldos)
    {
        $data = [];
        foreach ($saldos as $periodo => $saldo){
            $data = [
                'cliente_id' => $clienteId,
                'periodo' => $periodo,
                'saldo' => $saldo,
                'created_at' => now(),
                'updated_at' => now()
            ];

            SaldoMoraModel::create($data);
        }

    }

}
