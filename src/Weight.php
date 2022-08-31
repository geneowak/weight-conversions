<?php

namespace Geneowak\WeightConversions;

class Weight
{

    public function __construct(protected float $kilos)
    {
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
