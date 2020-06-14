<?php

namespace spec\App\AbstractFactory;

use App\AbstractFactory\Interfaces\CsvWriterInterface;
use App\AbstractFactory\WinCsvWriter;
use PhpSpec\ObjectBehavior;

class WinCsvWriterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(WinCsvWriter::class);
        $this->shouldImplement(CsvWriterInterface::class);
    }

    function it_test_write()
    {
        $this->write(['hello', 'world'])->shouldReturn("hello,world\r\n");
    }
}
