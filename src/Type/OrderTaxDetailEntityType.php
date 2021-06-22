<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderTaxDetailEntityType
 *
 *
 * XSD Type: OrderTaxDetailEntity
 */
class OrderTaxDetailEntityType extends OxatisEntityType
{

    /**
     * @var float $totalNetTaxExcl
     */
    private $totalNetTaxExcl = null;

    /**
     * @var float $taxRate
     */
    private $taxRate = null;

    /**
     * @var float $totalNetVATAmount
     */
    private $totalNetVATAmount = null;

    /**
     * @var int $taxZoneRateID
     */
    private $taxZoneRateID = null;

    /**
     * @var string $taxZoneRateName
     */
    private $taxZoneRateName = null;

    /**
     * Gets as totalNetTaxExcl
     *
     * @return float
     */
    public function getTotalNetTaxExcl()
    {
        return $this->totalNetTaxExcl;
    }

    /**
     * Sets a new totalNetTaxExcl
     *
     * @param float $totalNetTaxExcl
     * @return self
     */
    public function setTotalNetTaxExcl($totalNetTaxExcl)
    {
        $this->totalNetTaxExcl = $totalNetTaxExcl;
        return $this;
    }

    /**
     * Gets as taxRate
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * Sets a new taxRate
     *
     * @param float $taxRate
     * @return self
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;
        return $this;
    }

    /**
     * Gets as totalNetVATAmount
     *
     * @return float
     */
    public function getTotalNetVATAmount()
    {
        return $this->totalNetVATAmount;
    }

    /**
     * Sets a new totalNetVATAmount
     *
     * @param float $totalNetVATAmount
     * @return self
     */
    public function setTotalNetVATAmount($totalNetVATAmount)
    {
        $this->totalNetVATAmount = $totalNetVATAmount;
        return $this;
    }

    /**
     * Gets as taxZoneRateID
     *
     * @return int
     */
    public function getTaxZoneRateID()
    {
        return $this->taxZoneRateID;
    }

    /**
     * Sets a new taxZoneRateID
     *
     * @param int $taxZoneRateID
     * @return self
     */
    public function setTaxZoneRateID($taxZoneRateID)
    {
        $this->taxZoneRateID = $taxZoneRateID;
        return $this;
    }

    /**
     * Gets as taxZoneRateName
     *
     * @return string
     */
    public function getTaxZoneRateName()
    {
        return $this->taxZoneRateName;
    }

    /**
     * Sets a new taxZoneRateName
     *
     * @param string $taxZoneRateName
     * @return self
     */
    public function setTaxZoneRateName($taxZoneRateName)
    {
        $this->taxZoneRateName = $taxZoneRateName;
        return $this;
    }


}

