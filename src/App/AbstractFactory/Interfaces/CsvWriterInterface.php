<?php

namespace App\AbstractFactory\Interfaces;

interface CsvWriterInterface
{
    public function write(array $line) : string;
}