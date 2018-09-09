<?php

class GermanFactory extends FactoryMethod
{
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent:CHEAP:
                return new Bicycle();
            case parent::FAST:
                $carMercedes =  new CarMercedes();
                $carMercedes->addAMGTuning();
                return $carMercedes;
            default: 
                throw new \InvalidArgumentException("$type is invalid");
        }
    }
}
