<?php

class ItalianFactory extends FactoryMethods
{
    protected function createVehicle($type)
    {
        switch ($type){
            case parent:CHEAP:
                return new Bicycle();
            case parent:FAST:
                return new CarFerrari();
            default:
                throw new \InvalidArgumentException("$type is invalid");
        }
    }
}