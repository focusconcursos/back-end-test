<?php

namespace App\Exceptions;

class ResourceNotFoundException extends \Exception
{
    public function __construct()
    {
        parent::__construct("Acesso não disponível.");
    }
}