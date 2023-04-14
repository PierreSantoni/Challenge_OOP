<?php

require_once 'vehicle.php';

class Truck extends Vehicle
{
    private string $energy;
    private int $energyLevel;
    private int $stock;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric'
    ];

    public function getStock(): int 
    {
        return $this->stock;
    }

    public function setStock($stock): void
    {
        $this->stock = $stock;
    }
    
    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
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

    public function fullStock(): string
    {
        if ($this->stock===100) {
            return 'full';
        } else {
            return 'in filling';
        }
    }

    public function start(): void
    {
        $this->currentSpeed = 10;
    }

}