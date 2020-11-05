<?php
require_once 'Vehicle.php';

abstract class HighWay
{
    private $currentVehicles;
    private $nbLane;
    private $maxSpeed;

    abstract public function addVehicule(vehicle $vehicule);

    /**
     * @return mixed
     */
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * @param mixed $currentVehicles
     */
    public function setCurrentVehicles($currentVehicles): void
    {
        $this->currentVehicles = $currentVehicles;
    }

    /**
     * @return mixed
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * @param mixed $nbLane
     */
    public function setNbLane($nbLane): void
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed($maxSpeed): void
    {
        $this->maxSpeed = $maxSpeed;
    }
}