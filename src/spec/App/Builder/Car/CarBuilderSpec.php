<?php

namespace spec\App\Builder\Car;

use App\Builder\Car\Car;
use App\Builder\Car\CarBuilder;
use App\Builder\Car\CarPartsFactory;
use App\Builder\Interfaces\DoorInterface;
use App\Builder\Interfaces\EngineInterface;
use App\Builder\Interfaces\VehicleBuilderInterface;
use App\Builder\Interfaces\VehicleFactoryInterface;
use App\Builder\Interfaces\WheelInterface;
use App\Builder\VehicleBuilderAbstract;
use PhpSpec\ObjectBehavior;

class CarBuilderSpec extends ObjectBehavior
{
    /** @var  VehicleFactoryInterface */
    private $baseVehicleFactory;

    /** @var CarPartsFactory */
    private $carParts;

    /** @var Car */
    private $car;

    function let(VehicleFactoryInterface $baseVehicleFactory, CarPartsFactory $carParts, Car $car)
    {
        $this->baseVehicleFactory = $baseVehicleFactory;
        $this->carParts = $carParts;
        $this->car = $car;
        $this->beConstructedWith($this->baseVehicleFactory, $this->carParts);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(CarBuilder::class);
        $this->shouldImplement(VehicleBuilderInterface::class);
        $this->shouldBeAnInstanceOf(VehicleBuilderAbstract::class);
    }

    function it_test_createVehicle(DoorInterface $door, WheelInterface $wheel, EngineInterface $engine)
    {
        $this->baseVehicleFactory->getCar()->willReturn($this->car)->shouldBeCalled();
        $this->carParts->getDoor()->willReturn($door)->shouldBeCalledTimes(3);
        $this->carParts->getWheel()->willReturn($wheel)->shouldBeCalledTimes(4);
        $this->carParts->getEngine()->willReturn($engine)->shouldBeCalledTimes(1);
        $this->car->setPart('rightDoor', $door)->shouldBeCalled();
        $this->car->setPart('leftDoor', $door)->shouldBeCalled();
        $this->car->setPart('trunkLid', $door)->shouldBeCalled();
        $this->car->setPart('wheelLF', $wheel);
        $this->car->setPart('wheelRF', $wheel);
        $this->car->setPart('wheelLR', $wheel);
        $this->car->setPart('wheelRR', $wheel);
        $this->car->setPart('engine', $engine);
        $this->beConstructedWith($this->baseVehicleFactory, $this->carParts);
        $this->createVehicle();
        $this->addDoors();
        $this->addWheel();
        $this->addEngine();
        $this->getVehicle()->shouldBe($this->car);
    }
}
