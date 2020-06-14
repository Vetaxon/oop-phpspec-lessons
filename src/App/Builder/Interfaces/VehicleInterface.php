<?php

namespace App\Builder\Interfaces;

interface VehicleInterface extends ModificationNameInterface
{
    public function setPart(string $key, object $value) : self;

    public function getParts() : array;
}