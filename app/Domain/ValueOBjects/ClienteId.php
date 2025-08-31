<?php

namespace App\Domain\ValueOBjects;

class ClienteId
{
    private  int $value;
    public function __construct(string |int $value) {
       $this->value = (int) $value;

       if($this->value < 0){
           throw new \InvalidArgumentException("Cliente Id debe ser un numero positivo");
       }
    }

    public function getValue(): int{
      return   $this->value;
    }

}
