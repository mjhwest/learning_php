<?php

declare(strict_types=1);

class Transaction
{
    private float $amount;

    public function __construct(
        float $amount,
        private ?string  $description = null
    ){




         $this->amount =$amount;
    }
}

