<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing PriceVATModeEntityType
 *
 *
 * XSD Type: PriceVATModeEntity
 */
class PriceVATModeEntityType
{

    /**
     * @var float $value
     */
    private $value = null;

    /**
     * @var bool $vATIncluded
     */
    private $vATIncluded = null;

    /**
     * Gets as value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets a new value
     *
     * @param float $value
     * @return self
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Gets as vATIncluded
     *
     * @return bool
     */
    public function getVATIncluded()
    {
        return $this->vATIncluded;
    }

    /**
     * Sets a new vATIncluded
     *
     * @param bool $vATIncluded
     * @return self
     */
    public function setVATIncluded($vATIncluded)
    {
        $this->vATIncluded = $vATIncluded;
        return $this;
    }


}

