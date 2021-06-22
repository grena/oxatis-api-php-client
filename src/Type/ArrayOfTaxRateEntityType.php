<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfTaxRateEntityType
 *
 *
 * XSD Type: ArrayOfTaxRateEntity
 */
class ArrayOfTaxRateEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxRateEntityType[] $taxRateID
     */
    private $taxRateID = [
        
    ];

    /**
     * Adds as taxRateID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxRateEntityType $taxRateID
     */
    public function addToTaxRateID(TaxRateEntityType $taxRateID)
    {
        $this->taxRateID[] = $taxRateID;
        return $this;
    }

    /**
     * isset taxRateID
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxRateID($index)
    {
        return isset($this->taxRateID[$index]);
    }

    /**
     * unset taxRateID
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxRateID($index)
    {
        unset($this->taxRateID[$index]);
    }

    /**
     * Gets as taxRateID
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxRateEntityType[]
     */
    public function getTaxRateID()
    {
        return $this->taxRateID;
    }

    /**
     * Sets a new taxRateID
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxRateEntityType[] $taxRateID
     * @return self
     */
    public function setTaxRateID(array $taxRateID = null)
    {
        $this->taxRateID = $taxRateID;
        return $this;
    }


}

