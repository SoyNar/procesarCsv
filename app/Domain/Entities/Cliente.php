<?php

namespace App\Domain\Entities;

class Cliente
{
    public int $id;
    public float $desembolso;
    public string $actividadEconomica;
    public function __construct(int $id,
                                float $desembolso,
                                string $actividadEconomica )
    {
        $this->id = $id;
        $this->desembolso = $desembolso;
        $this->actividadEconomica = $actividadEconomica;
    }

}
