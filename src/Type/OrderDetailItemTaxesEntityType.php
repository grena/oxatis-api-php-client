<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderDetailItemTaxesEntityType
 *
 *
 * XSD Type: OrderDetailItemTaxesEntity
 */
class OrderDetailItemTaxesEntityType
{

    /**
     * @var int $taxZoneRateID
     */
    private $taxZoneRateID = null;

    /**
     * @var string $taxZoneRateName
     */
    private $taxZoneRateName = null;

    /**
     * @var float $taxRate
     */
    private $taxRate = null;

    /**
     * @var string $relatedOperation
     */
    private $relatedOperation = null;

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
     * Gets as relatedOperation
     *
     * @return string
     */
    public function getRelatedOperation()
    {
        return $this->relatedOperation;
    }

    /**
     * Sets a new relatedOperation
     *
     * @param string $relatedOperation
     * @return self
     */
    public function setRelatedOperation($relatedOperation)
    {
        $this->relatedOperation = $relatedOperation;
        return $this;
    }


}

