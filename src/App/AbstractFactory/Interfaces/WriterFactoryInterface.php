<?php

namespace App\AbstractFactory\Interfaces;

interface WriterFactoryInterface
{
    public function createCsvWriter(): CsvWriterInterface;

    public function createJsonWriter(): JsonWriterInterface;
}