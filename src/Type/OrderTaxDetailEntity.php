<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderTaxDetailEntity extends \Heavymind\Oxatis\ApiClient\Type\OxatisEntity
{

    /**
     * @var float
     */
    protected $TotalNetTaxExcl;

    /**
     * @var float
     */
    protected $TaxRate;

    /**
     * @var float
     */
    protected $TotalNetVATAmount;

    /**
     * @var int
     */
    protected $TaxRateID;

    /**
     * @var string
     */
    protected $TaxRateName;

    /**
     * @var int
     */
    protected $TaxType;

    /**
     * @return float
     */
    public function getTotalNetTaxExcl()
    {
        return $this->TotalNetTaxExcl;
    }

    /**
     * @param float $TotalNetTaxExcl
     * @return OrderTaxDetailEntity
     */
    public function withTotalNetTaxExcl($TotalNetTaxExcl)
    {
        $new = clone $this;
        $new->TotalNetTaxExcl = $TotalNetTaxExcl;

        return $new;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }

    /**
     * @param float $TaxRate
     * @return OrderTaxDetailEntity
     */
    public function withTaxRate($TaxRate)
    {
        $new = clone $this;
        $new->TaxRate = $TaxRate;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalNetVATAmount()
    {
        return $this->TotalNetVATAmount;
    }

    /**
     * @param float $TotalNetVATAmount
     * @return OrderTaxDetailEntity
     */
    public function withTotalNetVATAmount($TotalNetVATAmount)
    {
        $new = clone $this;
        $new->TotalNetVATAmount = $TotalNetVATAmount;

        return $new;
    }

    /**
     * @return int
     */
    public function getTaxRateID()
    {
        return $this->TaxRateID;
    }

    /**
     * @param int $TaxRateID
     * @return OrderTaxDetailEntity
     */
    public function withTaxRateID($TaxRateID)
    {
        $new = clone $this;
        $new->TaxRateID = $TaxRateID;

        return $new;
    }

    /**
     * @return string
     */
    public function getTaxRateName()
    {
        return $this->TaxRateName;
    }

    /**
     * @param string $TaxRateName
     * @return OrderTaxDetailEntity
     */
    public function withTaxRateName($TaxRateName)
    {
        $new = clone $this;
        $new->TaxRateName = $TaxRateName;

        return $new;
    }

    /**
     * @return int
     */
    public function getTaxType()
    {
        return $this->TaxType;
    }

    /**
     * @param int $TaxType
     * @return OrderTaxDetailEntity
     */
    public function withTaxType($TaxType)
    {
        $new = clone $this;
        $new->TaxType = $TaxType;

        return $new;
    }


}

