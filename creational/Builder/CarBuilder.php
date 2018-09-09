<?php

class CarBuilder implements BuilderInterface
{
    private $car;

    public function addDoors()
    {
        $this->car->setPart('rightDoor', new Parts\Door());
        $this->car->setPart('leftDoor', new Parts\Door());
    }

    public function addEngine()
    {
        $this->car->setPart('engine', new Parts\Engine());
    }

    public function addWheel()
    {
        $this->car->setPart('wheel1', new Parts\Wheel());
        $this->car->setPart('wheel2', new Parts\Wheel());
        $this->car->setPart('wheel3', new Parts\Wheel());
        $this->car->setPart('wheel4', new Parts\Wheel());
    }

    public function createVehicle()
    {
        $this->car = new Parts\Car();
    }

    public function getVehicle():Vehicle
    {
        return $this->car;
    }
}
