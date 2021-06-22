<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing TaxRateListEntityType
 *
 *
 * XSD Type: TaxRateListEntity
 */
class TaxRateListEntityType extends OxatisEntityType
{

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxRateEntityType[] $taxRateIDs
     */
    private $taxRateIDs = null;

    /**
     * @var string $vATCountryISOCode
     */
    private $vATCountryISOCode = null;

    /**
     * Adds as taxRateID
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxRateEntityType $taxRateID
     */
    public function addToTaxRateIDs(TaxRateEntityType $taxRateID)
    {
        $this->taxRateIDs[] = $taxRateID;
        return $this;
    }

    /**
     * isset taxRateIDs
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTaxRateIDs($index)
    {
        return isset($this->taxRateIDs[$index]);
    }

    /**
     * unset taxRateIDs
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTaxRateIDs($index)
    {
        unset($this->taxRateIDs[$index]);
    }

    /**
     * Gets as taxRateIDs
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxRateEntityType[]
     */
    public function getTaxRateIDs()
    {
        return $this->taxRateIDs;
    }

    /**
     * Sets a new taxRateIDs
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxRateEntityType[] $taxRateIDs
     * @return self
     */
    public function setTaxRateIDs(array $taxRateIDs)
    {
        $this->taxRateIDs = $taxRateIDs;
        return $this;
    }

    /**
     * Gets as vATCountryISOCode
     *
     * @return string
     */
    public function getVATCountryISOCode()
    {
        return $this->vATCountryISOCode;
    }

    /**
     * Sets a new vATCountryISOCode
     *
     * @param string $vATCountryISOCode
     * @return self
     */
    public function setVATCountryISOCode($vATCountryISOCode)
    {
        $this->vATCountryISOCode = $vATCountryISOCode;
        return $this;
    }


}

