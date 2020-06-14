<?php

namespace App\Builder\Car;

use App\Builder\CarWheel;
use App\Builder\Interfaces\DoorInterface;
use App\Builder\Interfaces\EngineInterface;
use App\Builder\Interfaces\VehiclePartsFactoryInterface;
use App\Builder\Interfaces\WheelInterface;

class CarPartsFactory implements VehiclePartsFactoryInterface
{
    public function getDoor() : DoorInterface
    {
        return new CarDoor();
    }

    public function getWheel() : WheelInterface
    {
        return new CarWheel();
    }

    public function getEngine() : EngineInterface
    {
        return new CarEngine();
    }
}