<?php

namespace spec\App\AbstractFactory;

use App\AbstractFactory\Interfaces\JsonWriterInterface;
use App\AbstractFactory\WinJsonWriter;
use PhpSpec\ObjectBehavior;

class WinJsonWriterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(WinJsonWriter::class);
        $this->shouldImplement(JsonWriterInterface::class);
    }

    function it_test_write()
    {
        $this->write(['hello', 'world'],  false)->shouldReturn('["hello","world"]');
    }
}
