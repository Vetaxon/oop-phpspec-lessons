<?php
namespace App\Builder\Car;

use App\Builder\Interfaces\DoorInterface;

class CarDoor implements DoorInterface
{
    public function getModificationName() : string
    {
        return 'Car Door';
    }
}