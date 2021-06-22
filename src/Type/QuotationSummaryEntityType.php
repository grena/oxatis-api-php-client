<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing QuotationSummaryEntityType
 *
 *
 * XSD Type: QuotationSummaryEntity
 */
class QuotationSummaryEntityType extends QuotationIdEntityType
{

    /**
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * @var string $billingFirstName
     */
    private $billingFirstName = null;

    /**
     * @var string $billingLastName
     */
    private $billingLastName = null;

    /**
     * @var float $subTotalVAT
     */
    private $subTotalVAT = null;

    /**
     * @var float $shippingPriceTaxExcl
     */
    private $shippingPriceTaxExcl = null;

    /**
     * @var float $netAmountDue
     */
    private $netAmountDue = null;

    /**
     * @var float $shippingVATAmount
     */
    private $shippingVATAmount = null;

    /**
     * @var bool $followUp
     */
    private $followUp = null;

    /**
     * @var float $subTotalNetVATExcluded
     */
    private $subTotalNetVATExcluded = null;

    /**
     * Gets as date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date = null)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as billingFirstName
     *
     * @return string
     */
    public function getBillingFirstName()
    {
        return $this->billingFirstName;
    }

    /**
     * Sets a new billingFirstName
     *
     * @param string $billingFirstName
     * @return self
     */
    public function setBillingFirstName($billingFirstName)
    {
        $this->billingFirstName = $billingFirstName;
        return $this;
    }

    /**
     * Gets as billingLastName
     *
     * @return string
     */
    public function getBillingLastName()
    {
        return $this->billingLastName;
    }

    /**
     * Sets a new billingLastName
     *
     * @param string $billingLastName
     * @return self
     */
    public function setBillingLastName($billingLastName)
    {
        $this->billingLastName = $billingLastName;
        return $this;
    }

    /**
     * Gets as subTotalVAT
     *
     * @return float
     */
    public function getSubTotalVAT()
    {
        return $this->subTotalVAT;
    }

    /**
     * Sets a new subTotalVAT
     *
     * @param float $subTotalVAT
     * @return self
     */
    public function setSubTotalVAT($subTotalVAT)
    {
        $this->subTotalVAT = $subTotalVAT;
        return $this;
    }

    /**
     * Gets as shippingPriceTaxExcl
     *
     * @return float
     */
    public function getShippingPriceTaxExcl()
    {
        return $this->shippingPriceTaxExcl;
    }

    /**
     * Sets a new shippingPriceTaxExcl
     *
     * @param float $shippingPriceTaxExcl
     * @return self
     */
    public function setShippingPriceTaxExcl($shippingPriceTaxExcl)
    {
        $this->shippingPriceTaxExcl = $shippingPriceTaxExcl;
        return $this;
    }

    /**
     * Gets as netAmountDue
     *
     * @return float
     */
    public function getNetAmountDue()
    {
        return $this->netAmountDue;
    }

    /**
     * Sets a new netAmountDue
     *
     * @param float $netAmountDue
     * @return self
     */
    public function setNetAmountDue($netAmountDue)
    {
        $this->netAmountDue = $netAmountDue;
        return $this;
    }

    /**
     * Gets as shippingVATAmount
     *
     * @return float
     */
    public function getShippingVATAmount()
    {
        return $this->shippingVATAmount;
    }

    /**
     * Sets a new shippingVATAmount
     *
     * @param float $shippingVATAmount
     * @return self
     */
    public function setShippingVATAmount($shippingVATAmount)
    {
        $this->shippingVATAmount = $shippingVATAmount;
        return $this;
    }

    /**
     * Gets as followUp
     *
     * @return bool
     */
    public function getFollowUp()
    {
        return $this->followUp;
    }

    /**
     * Sets a new followUp
     *
     * @param bool $followUp
     * @return self
     */
    public function setFollowUp($followUp)
    {
        $this->followUp = $followUp;
        return $this;
    }

    /**
     * Gets as subTotalNetVATExcluded
     *
     * @return float
     */
    public function getSubTotalNetVATExcluded()
    {
        return $this->subTotalNetVATExcluded;
    }

    /**
     * Sets a new subTotalNetVATExcluded
     *
     * @param float $subTotalNetVATExcluded
     * @return self
     */
    public function setSubTotalNetVATExcluded($subTotalNetVATExcluded)
    {
        $this->subTotalNetVATExcluded = $subTotalNetVATExcluded;
        return $this;
    }


}

