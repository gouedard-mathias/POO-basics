<?php

require_once 'Vehicle.php';

class Car extends Vehicle implements LightableInterface
{
    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    private bool $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
    }

    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }

    public function start()
    {
        if ($this->hasParkBrake === true){
            throw new Exception("frein à main enclenché");
        } else {
            return 'start';
        }
    }

    /**
     * @return bool
     */
    public function getParkBrake(): bool
    {
        return $this->hasParkBrake;
    }


    /**
     * @param bool $hasParkBrake
     * @return Car
     */
    public function setParkBrake(bool $hasParkBrake): Car
    {
        $this->hasParkBrake = $hasParkBrake;
        return $this;
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}