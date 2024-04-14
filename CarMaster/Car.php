<?php

declare(strict_types=1);

abstract class Car
{
    private string $nameCar;

    private string $modelCar;

    private Client $client;

    public function getNameCar(): string
    {
        return $this->nameCar;
    }

    public function setNameCar(string $nameCar): void
    {
        $this->nameCar = $nameCar;
    }

    public function getModelCar(): string
    {
        return $this->modelCar;
    }

    public function setModelCar(string $modelCar): void
    {
        $this->modelCar = $modelCar;
    }

    public function setClient(Client $client): void
    {
        $this->client = $client;
    }
    public function getClient(): Client
    {
        return $this->client;
    }
}