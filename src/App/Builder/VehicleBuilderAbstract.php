<?php

namespace App\Builder;

use App\Builder\Interfaces\VehicleBuilderInterface;
use App\Builder\Interfaces\VehicleFactoryInterface;
use App\Builder\Interfaces\VehicleInterface;
use App\Builder\Interfaces\VehiclePartsFactoryInterface;

abstract class VehicleBuilderAbstract implements VehicleBuilderInterface
{
    protected VehicleInterface $vehicle;

    protected VehicleFactoryInterface $baseVehicle;

    protected VehiclePartsFactoryInterface $vehiclePartsFactory;

    public function __construct(
        VehicleFactoryInterface $baseVehicle,
        VehiclePartsFactoryInterface $vehiclePartsFactory
    )
    {
        $this->baseVehicle = $baseVehicle;
        $this->vehiclePartsFactory = $vehiclePartsFactory;
    }

    public function addEngine() : void
    {
        $this->vehicle->setPart('engine', $this->vehiclePartsFactory->getEngine());
    }

    public function getVehicle() : VehicleInterface
    {
        return $this->vehicle;
    }
}