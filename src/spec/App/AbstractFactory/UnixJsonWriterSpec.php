<?php

namespace spec\App\AbstractFactory;

use App\AbstractFactory\Interfaces\JsonWriterInterface;
use App\AbstractFactory\UnixJsonWriter;
use PhpSpec\ObjectBehavior;

class UnixJsonWriterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(UnixJsonWriter::class);
        $this->shouldImplement(JsonWriterInterface::class);
    }

    function it_test_write()
    {
        $this->write(['hello', 'world'], false)->shouldReturn('["hello","world"]');
    }
}
