<?php

namespace App\Domain\ValueOBjects;

use Mockery\Exception\InvalidArgumentException;

class ActividadEconomica
{

    private string $value;

    public function __construct(string $value){
        $this->value = $value;

        if(empty($this->value)){
            throw new InvalidArgumentException("La actividad economica no puede estar vacia");
        }
    }

    public function getActividadEconomica(): string
    {
        return $this->value;
    }

}
