<?php

namespace App\Builder\Interfaces;

use App\Builder\VehicleAbstract;

interface VehicleBuilderInterface
{
    public function createVehicle() : void;

    public function addWheel() : void;

    public function addEngine() : void;

    public function addDoors() : void;

    public function getVehicle(): VehicleInterface;
}