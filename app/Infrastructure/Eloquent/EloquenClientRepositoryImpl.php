<?php

namespace App\Infrastructure\Eloquent;

use App\Domain\Entities\Cliente;
use App\Domain\Repositories\ClienteRepositoryInterface;
use App\Models\ClienteModel;

class EloquenClientRepositoryImpl implements ClienteRepositoryInterface
{

    public function create(Cliente $cliente)
    {
        $create = ClienteModel::create([
            'id',
            'actividad_economica',
            'desembolso',
        ]);
        return $create;
    }

    public function findById(int $clientId)
    {
        return ClienteModel::where('id', $clientId)->exists();
    }
}
