<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class PriceVATModeEntity
{

    /**
     * @var float
     */
    private $Value;

    /**
     * @var bool
     */
    private $VATIncluded;

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * @param float $Value
     * @return PriceVATModeEntity
     */
    public function withValue($Value)
    {
        $new = clone $this;
        $new->Value = $Value;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVATIncluded()
    {
        return $this->VATIncluded;
    }

    /**
     * @param bool $VATIncluded
     * @return PriceVATModeEntity
     */
    public function withVATIncluded($VATIncluded)
    {
        $new = clone $this;
        $new->VATIncluded = $VATIncluded;

        return $new;
    }


}

