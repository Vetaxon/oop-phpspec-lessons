<?php

namespace App\Builder\Car;

use App\Builder\Interfaces\EngineInterface;

class CarEngine implements EngineInterface
{
    public function getModificationName() : string
    {
        return 'Car Engine';
    }
}