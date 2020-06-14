<?php

namespace spec\App\AbstractFactory;

use App\AbstractFactory\Interfaces\CsvWriterInterface;
use App\AbstractFactory\Interfaces\JsonWriterInterface;
use App\AbstractFactory\Interfaces\WriterFactoryInterface;
use App\AbstractFactory\WinCsvWriter;
use App\AbstractFactory\WinJsonWriter;
use App\AbstractFactory\WinWriterFactory;
use PhpSpec\ObjectBehavior;

class WinWriterFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(WinWriterFactory::class);
        $this->shouldImplement(WriterFactoryInterface::class);
    }

    function it_test_createCsvWriter()
    {
        $this->createCsvWriter()->shouldReturnAnInstanceOf(CsvWriterInterface::class);
        $this->createCsvWriter()->shouldReturnAnInstanceOf(WinCsvWriter::class);
    }

    function it_test_createJsonWriter()
    {
        $this->createJsonWriter()->shouldReturnAnInstanceOf(JsonWriterInterface::class);
        $this->createJsonWriter()->shouldReturnAnInstanceOf(WinJsonWriter::class);
    }
}
