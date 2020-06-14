<?php

namespace App\Builder;

use App\Builder\Interfaces\VehicleInterface;

abstract class VehicleAbstract implements VehicleInterface
{
    private array $data = [];

    public function setPart(string $key, object $value) : self
    {
        $this->data[$key] = $value;
        return $this;
    }

    public function getParts() : array
    {
        return $this->data;
    }
}