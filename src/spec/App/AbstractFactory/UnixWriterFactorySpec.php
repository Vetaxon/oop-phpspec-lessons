<?php

namespace spec\App\AbstractFactory;

use App\AbstractFactory\Interfaces\CsvWriterInterface;
use App\AbstractFactory\Interfaces\JsonWriterInterface;
use App\AbstractFactory\Interfaces\WriterFactoryInterface;
use App\AbstractFactory\UnixCsvWriter;
use App\AbstractFactory\UnixJsonWriter;
use App\AbstractFactory\UnixWriterFactory;
use PhpSpec\ObjectBehavior;

class UnixWriterFactorySpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(UnixWriterFactory::class);
        $this->shouldImplement(WriterFactoryInterface::class);
    }

    function it_test_createCsvWriter()
    {
        $this->createCsvWriter()->shouldReturnAnInstanceOf(CsvWriterInterface::class);
        $this->createCsvWriter()->shouldReturnAnInstanceOf(UnixCsvWriter::class);
    }

    function it_test_createJsonWriter()
    {
        $this->createJsonWriter()->shouldReturnAnInstanceOf(JsonWriterInterface::class);
        $this->createJsonWriter()->shouldReturnAnInstanceOf(UnixJsonWriter::class);
    }
}
