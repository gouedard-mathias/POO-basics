<?php
require_once 'HighWay.php';

final class ResidentialWay extends HighWay
{
    private $nbLane = 2;
    private $maxSpeed = 50;

    public function addVehicule(vehicle $vehicule)
    {
        if ($this instanceof Car){
            $currentVehicles[]= 'car';
        }
        if ($this instanceof Bicycle){
            $currentVehicles[]= 'bicycle';
        }
    }
}