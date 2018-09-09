<?php

interface BuilderInterface
{
    public function createVehicle();

    public function addWheel();

    public function addDoors();

    public function addEngine();

    public function getVehicle():Vehicle;
}
