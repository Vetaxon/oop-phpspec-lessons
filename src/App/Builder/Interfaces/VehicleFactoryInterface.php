<?php

namespace App\Builder\Interfaces;

use App\Builder\Car\Car;

interface VehicleFactoryInterface
{
    public function getCar() : Car;
}