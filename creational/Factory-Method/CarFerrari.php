<?php

class CarFerrari implements VehicleInterface
{
    private $color;

    public function setColor($color)
    {
        $this->color = $color;
    }
}
