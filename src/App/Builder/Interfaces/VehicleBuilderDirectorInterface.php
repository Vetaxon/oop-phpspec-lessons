<?php

namespace App\Builder\Interfaces;

interface VehicleBuilderDirectorInterface
{
    public function build(VehicleBuilderInterface $builder): VehicleInterface;
}