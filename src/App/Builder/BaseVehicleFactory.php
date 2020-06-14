<?php

namespace App\Builder;

use App\Builder\Car\Car;
use App\Builder\Interfaces\VehicleFactoryInterface;

class BaseVehicleFactory implements VehicleFactoryInterface
{
    public function getCar() : Car
    {
        return new Car();
    }
}