<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing TaxZoneRateListEntityType
 *
 *
 * XSD Type: TaxZoneRateListEntity
 */
class TaxZoneRateListEntityType extends OxatisEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateEntityType[] $taxZoneRateArray
     */
    private $taxZoneRateArray = null;

    /**
     * Adds as taxZoneRate
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateEntityType $taxZoneRate
     */
    public function addToTaxZoneRateArray(TaxZoneRateEntityType $taxZoneRate)
    {
        $this->taxZoneRateArray[] = $taxZoneRate;
        return $this;
    }

    /**
     * isset taxZoneRateArray
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxZoneRateArray($index)
    {
        return isset($this->taxZoneRateArray[$index]);
    }

    /**
     * unset taxZoneRateArray
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxZoneRateArray($index)
    {
        unset($this->taxZoneRateArray[$index]);
    }

    /**
     * Gets as taxZoneRateArray
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateEntityType[]
     */
    public function getTaxZoneRateArray()
    {
        return $this->taxZoneRateArray;
    }

    /**
     * Sets a new taxZoneRateArray
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxZoneRateEntityType[] $taxZoneRateArray
     * @return self
     */
    public function setTaxZoneRateArray(array $taxZoneRateArray)
    {
        $this->taxZoneRateArray = $taxZoneRateArray;
        return $this;
    }


}

