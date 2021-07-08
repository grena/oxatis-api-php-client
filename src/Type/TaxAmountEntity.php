<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class TaxAmountEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var float
     */
    protected $Value;

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

