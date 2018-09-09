<?php 

class CarMercedes implements VehicleInterface
{
    private $color;

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function addAMGTuning()
    {
        // do something
    }
}
