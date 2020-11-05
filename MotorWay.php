<?php
require_once 'HighWay.php';

final class MotorWay extends HighWay
{
    private $nbLane = 4;
private $maxSpeed = 130;

    public function addVehicule(vehicle $vehicule)
    {
        if ($this instanceof Car){
            $currentVehicles[]= 'car';
        }
        if ($this instanceof Truck){
            $currentVehicles[]= 'truck';
        }
    }
}