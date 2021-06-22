<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfTaxZoneRateEntityType
 *
 *
 * XSD Type: ArrayOfTaxZoneRateEntity
 */
class ArrayOfTaxZoneRateEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateEntityType[] $taxZoneRate
     */
    private $taxZoneRate = [
        
    ];

    /**
     * Adds as taxZoneRate
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateEntityType $taxZoneRate
     */
    public function addToTaxZoneRate(TaxZoneRateEntityType $taxZoneRate)
    {
        $this->taxZoneRate[] = $taxZoneRate;
        return $this;
    }

    /**
     * isset taxZoneRate
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxZoneRate($index)
    {
        return isset($this->taxZoneRate[$index]);
    }

    /**
     * unset taxZoneRate
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxZoneRate($index)
    {
        unset($this->taxZoneRate[$index]);
    }

    /**
     * Gets as taxZoneRate
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateEntityType[]
     */
    public function getTaxZoneRate()
    {
        return $this->taxZoneRate;
    }

    /**
     * Sets a new taxZoneRate
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateEntityType[] $taxZoneRate
     * @return self
     */
    public function setTaxZoneRate(array $taxZoneRate = null)
    {
        $this->taxZoneRate = $taxZoneRate;
        return $this;
    }


}

