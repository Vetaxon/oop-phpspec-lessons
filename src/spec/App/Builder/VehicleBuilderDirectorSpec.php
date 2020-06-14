<?php

namespace spec\App\Builder;

use App\Builder\Interfaces\VehicleBuilderDirectorInterface;
use App\Builder\Interfaces\VehicleBuilderInterface;
use App\Builder\Interfaces\VehicleInterface;
use App\Builder\VehicleBuilderDirector;
use PhpSpec\ObjectBehavior;

class VehicleBuilderDirectorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(VehicleBuilderDirector::class);
        $this->shouldImplement(VehicleBuilderDirectorInterface::class);
    }

    function it_test_build(VehicleBuilderInterface $builder, VehicleInterface $vehicle)
    {
        $builder->createVehicle()->shouldBeCalled();
        $builder->addDoors()->shouldBeCalled();
        $builder->addEngine()->shouldBeCalled();
        $builder->addWheel()->shouldBeCalled();
        $builder->getVehicle()->willReturn($vehicle)->shouldBeCalled();
        $this->build($builder)->shouldBe($vehicle);
    }
}
