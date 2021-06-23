<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class TaxAmountEntity
{

    /**
     * @var float
     */
    private $Value;

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param float $Value
     * @return TaxAmountEntity
     */
    public function withValue($Value)
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }


}

