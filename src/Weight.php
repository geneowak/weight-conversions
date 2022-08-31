<?php

namespace Geneowak\WeightConversions;

class Weight
{
    protected float $kilos;

    public function __construct($kilos)
    {
        $this->kilos = $kilos;
    }

    public static function kilograms(float $kilos): self
    {
        return new static($kilos);
    }

    public function toPounds(): float
    {
        return $this->kilos * 2.20462;
    }

    public function toStones(): float
    {
        return $this->kilos * 0.15747;
    }
}
