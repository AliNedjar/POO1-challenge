<?php

class Car
{

    private $nbWheels;
    private $currentSpeed = 25;
    private $color;
    private $nbChairs;
    private $energyType;
    private $nbEnergy;

    public function __construct(string $color, int $nbChairs, string $energyType)
    {
        $this->color = $color;
        $this->nbChairs = $nbChairs;
        $this->energyType = $energyType;
    }

    public function forward(): string
    {
        if ($this->currentSpeed > 0) {
            return "I'm driving";
        }
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    public function start(): string
    {
        if ($this->currentSpeed > 0) {
            return "Start the car";
        }
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setNbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        $this->currentSpeed = $currentSpeed;
    }

    public function getColor(): int
    {
        return $this->color;
    }

    public function setColor(int $color): void
    {
        $this->color = $color;
    }

    public function getNbChairs(): int
    {
        return $this->nbChairs;
    }

    public function setNbChairs(int $nbChairs): void
    {
        $this->nbChairs = $nbChairs;
    }

    public function getEnergyType(): int
    {
        return $this->energyType;
    }

    public function setEnergyType(int $energyType): void
    {
        $this->energyType = $energyType;
    }

    public function getEnergyLevel(): int
    {
        return $this->nbEnergy;
    }

    public function setEnergyLevel(int $nbEnergy): void
    {
        $this->nbEnergy = $nbEnergy;
    }

}
