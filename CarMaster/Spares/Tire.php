<?php

declare(strict_types=1);

namespace CarMaster\Spares;

use CarMaster\Exceptions\InvalidSizeTire;

class Tire extends SparePart
{
    private int $sizeTire;

    private string $markingTire;

    public function getMarkingTire(): string
    {
        return $this->markingTire;
    }

    public function setMarkingTire(string $markingTire): void
    {
        $this->markingTire = $markingTire;
    }

    public function getSizeTire(): int
    {
        return $this->sizeTire;
    }

    public function setSizeTire(int $sizeTire): void
    {
        $this->sizeTire = $sizeTire;

        if(($this->sizeTire) < 13){
            throw new InvalidSizeTire('Size cannot be less than 13');
        }
    }

    public function getFullInfoSpares(): array
    {
        $fullInfo = parent::getFullInfoSpares();
        $fullInfo[] = $this->markingTire;
        $fullInfo[] = $this->sizeTire;

        return $fullInfo;
    }
}