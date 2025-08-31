<?php

namespace App\Application\DTOs;

class FileCsvDto
{
    public string $clientId;
    public  string $desembolso;
    public  string $saldoMora1;
    public  string $saldoMora2;
    public  string $saldoMora3;
    public  string $actividadEconomica;
    public  int $numeroFila;
    public function __construct(
          string $clienteId,
          string $desembolso,
          string $saldoMora1,
          string $saldoMora2,
          string $saldoMora3,
          string $actividadEconomica,
          int $numeroFila
    ) {}

}
