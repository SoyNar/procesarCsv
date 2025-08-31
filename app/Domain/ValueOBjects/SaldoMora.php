<?php

namespace App\Domain\ValueOBjects;

use Mockery\Exception\InvalidArgumentException;

class SaldoMora
{

    private int $value;
    public function __construct(string | float $value){
        $this->value = (float) $value;

        if($this->value < 0){
            throw new InvalidArgumentException("saldo mora no puede ser negativo");
        }

    }
    public function getValue(): float{
        return $this->value;
    }

}
