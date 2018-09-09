<?php

abstract class FactoryMethod
{
    const CHEAP = 'cheap';
    const FAST = 'fast';

    abstract protected function createVehicle($type);

    public function create($type)
    {
        $factory = $this->createVehicle($type);

        $factory->setColor('black');

        return $factory;
    }
}
