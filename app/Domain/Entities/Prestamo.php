<?php

namespace App\Domain\Entities;

class Prestamo
{

    public int $clienteId;
    public float $desembolso;
    public float $saldoMoraOne;
    public float $saldoMoraTwo;
    public float $saldoMoraThree;
    public string $actividadEconomica;

    public function __construct($clienteId,
                                $desembolso,
                                $saldoMoraOne,
                                $saldoMoraTwo,
                                $saldoMoraThree,
                                $actividadEconomica)
    {
        $this->clienteId = $clienteId;
        $this->desembolso = $desembolso;
        $this->saldoMoraOne = $saldoMoraOne;
        $this->saldoMoraTwo = $saldoMoraTwo;
        $this->saldoMoraThree = $saldoMoraThree;
        $this->actividadEconomica = $actividadEconomica;



    }

    public function getClienteId(): int
    {
        return $this->clienteId;
    }

    public function getDesembolso(): float
    {
        return $this->desembolso;
    }

    public function getSaldoMoraOne(): float
    {
        return $this->saldoMoraOne;
    }

    public function getSaldoMoraTwo(): float
    {
        return $this->saldoMoraTwo;
    }

    public function getSaldoMoraThree(): float
    {
        return $this->saldoMoraThree;
    }

    public function getActividadEconomica(): string
    {
        return $this->actividadEconomica;
    }

}
