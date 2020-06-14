<?php

namespace spec\App\AbstractFactory;

use App\AbstractFactory\Interfaces\CsvWriterInterface;
use App\AbstractFactory\UnixCsvWriter;
use PhpSpec\ObjectBehavior;

class UnixCsvWriterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(UnixCsvWriter::class);
        $this->shouldImplement(CsvWriterInterface::class);

    }

    function it_test_write()
    {
        $this->write(['hello', 'world'])->shouldReturn("hello,world\n");
    }
}
