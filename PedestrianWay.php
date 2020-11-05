<?php
require_once 'HighWay.php';

final class PedestrianWay extends HighWay
{
    private $nbLane = 1;
    private $maxSpeed = 10;

    public function addVehicule(vehicle $vehicule)
    {
        if ($this instanceof Bicycle){
            $currentVehicles[]= 'bicycle';
        }
    }
}