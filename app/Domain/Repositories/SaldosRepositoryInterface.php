<?php

namespace App\Domain\Repositories;

interface SaldosRepositoryInterface
{
    public function saveSaldo(int $clienteId, array $saldo);

}
