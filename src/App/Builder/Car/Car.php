<?php

namespace App\Builder\Car;

use App\Builder\VehicleAbstract;

class Car extends VehicleAbstract
{
    public function getModificationName() : string
    {
        return 'Car';
    }
}