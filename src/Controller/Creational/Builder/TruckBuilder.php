<?php

namespace App\Controller\Creational\Builder;


use App\Controller\Creational\Builder\Parts\Door;
use App\Controller\Creational\Builder\Parts\Engine;
use App\Controller\Creational\Builder\Parts\Truck;
use App\Controller\Creational\Builder\Parts\Vehicle;
use App\Controller\Creational\Builder\Parts\Wheel;

class TruckBuilder implements Builder
{
    private Truck $truck;


    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    public function addWheel()
    {

        $this->truck->setPart('wheel1', new Wheel());
        $this->truck->setPart('wheel2', new Wheel());
        $this->truck->setPart('wheel3', new Wheel());
        $this->truck->setPart('wheel4', new Wheel());
        $this->truck->setPart('wheel5', new Wheel());
        $this->truck->setPart('wheel6', new Wheel());
    }

    public function addEngine()
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addDoors()
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}