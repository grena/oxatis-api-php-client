<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderSummaryEntityType
 *
 *
 * XSD Type: OrderSummaryEntity
 */
class OrderSummaryEntityType extends OrderIdEntityType
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
     * @var int $paymentStatusCode
     */
    private $paymentStatusCode = null;

    /**
     * @var int $progressStateID
     */
    private $progressStateID = null;

    /**
     * @var bool $followUp
     */
    private $followUp = null;

    /**
     * @var float $subTotalNetVATExcluded
     */
    private $subTotalNetVATExcluded = null;

    /**
     * @var int $sourceTypeID
     */
    private $sourceTypeID = null;

    /**
     * @var int $campaignTrackingID
     */
    private $campaignTrackingID = null;

    /**
     * @var bool $shipped
     */
    private $shipped = null;

    /**
     * @var float $paymentFeesTaxExc
     */
    private $paymentFeesTaxExc = null;

    /**
     * @var float $paymentFeesVATAmount
     */
    private $paymentFeesVATAmount = null;

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
     * Gets as paymentStatusCode
     *
     * @return int
     */
    public function getPaymentStatusCode()
    {
        return $this->paymentStatusCode;
    }

    /**
     * Sets a new paymentStatusCode
     *
     * @param int $paymentStatusCode
     * @return self
     */
    public function setPaymentStatusCode($paymentStatusCode)
    {
        $this->paymentStatusCode = $paymentStatusCode;
        return $this;
    }

    /**
     * Gets as progressStateID
     *
     * @return int
     */
    public function getProgressStateID()
    {
        return $this->progressStateID;
    }

    /**
     * Sets a new progressStateID
     *
     * @param int $progressStateID
     * @return self
     */
    public function setProgressStateID($progressStateID)
    {
        $this->progressStateID = $progressStateID;
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

    /**
     * Gets as sourceTypeID
     *
     * @return int
     */
    public function getSourceTypeID()
    {
        return $this->sourceTypeID;
    }

    /**
     * Sets a new sourceTypeID
     *
     * @param int $sourceTypeID
     * @return self
     */
    public function setSourceTypeID($sourceTypeID)
    {
        $this->sourceTypeID = $sourceTypeID;
        return $this;
    }

    /**
     * Gets as campaignTrackingID
     *
     * @return int
     */
    public function getCampaignTrackingID()
    {
        return $this->campaignTrackingID;
    }

    /**
     * Sets a new campaignTrackingID
     *
     * @param int $campaignTrackingID
     * @return self
     */
    public function setCampaignTrackingID($campaignTrackingID)
    {
        $this->campaignTrackingID = $campaignTrackingID;
        return $this;
    }

    /**
     * Gets as shipped
     *
     * @return bool
     */
    public function getShipped()
    {
        return $this->shipped;
    }

    /**
     * Sets a new shipped
     *
     * @param bool $shipped
     * @return self
     */
    public function setShipped($shipped)
    {
        $this->shipped = $shipped;
        return $this;
    }

    /**
     * Gets as paymentFeesTaxExc
     *
     * @return float
     */
    public function getPaymentFeesTaxExc()
    {
        return $this->paymentFeesTaxExc;
    }

    /**
     * Sets a new paymentFeesTaxExc
     *
     * @param float $paymentFeesTaxExc
     * @return self
     */
    public function setPaymentFeesTaxExc($paymentFeesTaxExc)
    {
        $this->paymentFeesTaxExc = $paymentFeesTaxExc;
        return $this;
    }

    /**
     * Gets as paymentFeesVATAmount
     *
     * @return float
     */
    public function getPaymentFeesVATAmount()
    {
        return $this->paymentFeesVATAmount;
    }

    /**
     * Sets a new paymentFeesVATAmount
     *
     * @param float $paymentFeesVATAmount
     * @return self
     */
    public function setPaymentFeesVATAmount($paymentFeesVATAmount)
    {
        $this->paymentFeesVATAmount = $paymentFeesVATAmount;
        return $this;
    }


}

