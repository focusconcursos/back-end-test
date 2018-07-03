<?php

namespace App\Exceptions;

class CorreiosFreteException extends \Exception
{
    public function __construct($message)
    {
        parent::__construct("Erro ao calcular o frete: " . $message);
    }
}