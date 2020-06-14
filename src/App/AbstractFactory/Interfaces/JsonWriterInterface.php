<?php

namespace App\AbstractFactory\Interfaces;

interface JsonWriterInterface
{
    public function write(array $data, bool $formatted) : string;
}