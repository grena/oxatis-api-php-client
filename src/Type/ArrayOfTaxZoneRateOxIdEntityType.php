<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing ArrayOfTaxZoneRateOxIdEntityType
 *
 *
 * XSD Type: ArrayOfTaxZoneRateOxIdEntity
 */
class ArrayOfTaxZoneRateOxIdEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateOxIdEntityType[] $taxZoneRate
     */
    private $taxZoneRate = [
        
    ];

    /**
     * Adds as taxZoneRate
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateOxIdEntityType $taxZoneRate
     */
    public function addToTaxZoneRate(TaxZoneRateOxIdEntityType $taxZoneRate)
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
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateOxIdEntityType[]
     */
    public function getTaxZoneRate()
    {
        return $this->taxZoneRate;
    }

    /**
     * Sets a new taxZoneRate
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateOxIdEntityType[] $taxZoneRate
     * @return self
     */
    public function setTaxZoneRate(array $taxZoneRate = null)
    {
        $this->taxZoneRate = $taxZoneRate;
        return $this;
    }


}

