<?php

namespace App\Builder;

use App\Builder\Interfaces\WheelInterface;

class CarWheel implements WheelInterface
{
    public function getModificationName() : string
    {
        return 'Car Wheel';
    }
}