<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Cliente;

interface ClienteRepositoryInterface
{
    public function create(Cliente $cliente);
    public function findById(int $clientId);

}
