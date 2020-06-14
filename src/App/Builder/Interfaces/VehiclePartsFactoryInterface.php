<?php

namespace App\Builder\Interfaces;

interface VehiclePartsFactoryInterface
{
    public function getDoor() : DoorInterface;

    public function getWheel() : WheelInterface;

    public function getEngine() : EngineInterface;
}