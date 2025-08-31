<?php

namespace App\Application\UseCases;

class ProcesarCsvResponse
{

    public int $prestamosGuardados;
    public array $errores;

    public function __construct(int $prestamosGuardados,
                                array $errores)
    {
        $this->prestamosGuardados = $prestamosGuardados;
        $this->errores = $errores;

    }
}
