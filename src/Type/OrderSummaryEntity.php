<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderSummaryEntity extends \Heavymind\Oxatis\ApiClient\Type\OrderIdEntity
{

    /**
     * @var \DateTimeInterface
     */
    protected $Date;

    /**
     * @var string
     */
    protected $BillingFirstName;

    /**
     * @var string
     */
    protected $BillingLastName;

    /**
     * @var float
     */
    protected $SubTotalVAT;

    /**
     * @var float
     */
    protected $ShippingPriceTaxExcl;

    /**
     * @var float
     */
    protected $NetAmountDue;

    /**
     * @var float
     */
    protected $ShippingVATAmount;

    /**
     * @var int
     */
    protected $PaymentStatusCode;

    /**
     * @var int
     */
    protected $ProgressStateID;

    /**
     * @var bool
     */
    protected $FollowUp;

    /**
     * @var float
     */
    protected $SubTotalNetVATExcluded;

    /**
     * @var int
     */
    protected $SourceTypeID;

    /**
     * @var int
     */
    protected $CampaignTrackingID;

    /**
     * @var bool
     */
    protected $Shipped;

    /**
     * @var float
     */
    protected $PaymentFeesTaxExc;

    /**
     * @var float
     */
    protected $PaymentFeesVATAmount;

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param \DateTimeInterface $Date
     * @return OrderSummaryEntity
     */
    public function withDate($Date)
    {
        $new = clone $this;
        $new->Date = $Date;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingFirstName()
    {
        return $this->BillingFirstName;
    }

    /**
     * @param string $BillingFirstName
     * @return OrderSummaryEntity
     */
    public function withBillingFirstName($BillingFirstName)
    {
        $new = clone $this;
        $new->BillingFirstName = $BillingFirstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingLastName()
    {
        return $this->BillingLastName;
    }

    /**
     * @param string $BillingLastName
     * @return OrderSummaryEntity
     */
    public function withBillingLastName($BillingLastName)
    {
        $new = clone $this;
        $new->BillingLastName = $BillingLastName;

        return $new;
    }

    /**
     * @return float
     */
    public function getSubTotalVAT()
    {
        return $this->SubTotalVAT;
    }

    /**
     * @param float $SubTotalVAT
     * @return OrderSummaryEntity
     */
    public function withSubTotalVAT($SubTotalVAT)
    {
        $new = clone $this;
        $new->SubTotalVAT = $SubTotalVAT;

        return $new;
    }

    /**
     * @return float
     */
    public function getShippingPriceTaxExcl()
    {
        return $this->ShippingPriceTaxExcl;
    }

    /**
     * @param float $ShippingPriceTaxExcl
     * @return OrderSummaryEntity
     */
    public function withShippingPriceTaxExcl($ShippingPriceTaxExcl)
    {
        $new = clone $this;
        $new->ShippingPriceTaxExcl = $ShippingPriceTaxExcl;

        return $new;
    }

    /**
     * @return float
     */
    public function getNetAmountDue()
    {
        return $this->NetAmountDue;
    }

    /**
     * @param float $NetAmountDue
     * @return OrderSummaryEntity
     */
    public function withNetAmountDue($NetAmountDue)
    {
        $new = clone $this;
        $new->NetAmountDue = $NetAmountDue;

        return $new;
    }

    /**
     * @return float
     */
    public function getShippingVATAmount()
    {
        return $this->ShippingVATAmount;
    }

    /**
     * @param float $ShippingVATAmount
     * @return OrderSummaryEntity
     */
    public function withShippingVATAmount($ShippingVATAmount)
    {
        $new = clone $this;
        $new->ShippingVATAmount = $ShippingVATAmount;

        return $new;
    }

    /**
     * @return int
     */
    public function getPaymentStatusCode()
    {
        return $this->PaymentStatusCode;
    }

    /**
     * @param int $PaymentStatusCode
     * @return OrderSummaryEntity
     */
    public function withPaymentStatusCode($PaymentStatusCode)
    {
        $new = clone $this;
        $new->PaymentStatusCode = $PaymentStatusCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getProgressStateID()
    {
        return $this->ProgressStateID;
    }

    /**
     * @param int $ProgressStateID
     * @return OrderSummaryEntity
     */
    public function withProgressStateID($ProgressStateID)
    {
        $new = clone $this;
        $new->ProgressStateID = $ProgressStateID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFollowUp()
    {
        return $this->FollowUp;
    }

    /**
     * @param bool $FollowUp
     * @return OrderSummaryEntity
     */
    public function withFollowUp($FollowUp)
    {
        $new = clone $this;
        $new->FollowUp = $FollowUp;

        return $new;
    }

    /**
     * @return float
     */
    public function getSubTotalNetVATExcluded()
    {
        return $this->SubTotalNetVATExcluded;
    }

    /**
     * @param float $SubTotalNetVATExcluded
     * @return OrderSummaryEntity
     */
    public function withSubTotalNetVATExcluded($SubTotalNetVATExcluded)
    {
        $new = clone $this;
        $new->SubTotalNetVATExcluded = $SubTotalNetVATExcluded;

        return $new;
    }

    /**
     * @return int
     */
    public function getSourceTypeID()
    {
        return $this->SourceTypeID;
    }

    /**
     * @param int $SourceTypeID
     * @return OrderSummaryEntity
     */
    public function withSourceTypeID($SourceTypeID)
    {
        $new = clone $this;
        $new->SourceTypeID = $SourceTypeID;

        return $new;
    }

    /**
     * @return int
     */
    public function getCampaignTrackingID()
    {
        return $this->CampaignTrackingID;
    }

    /**
     * @param int $CampaignTrackingID
     * @return OrderSummaryEntity
     */
    public function withCampaignTrackingID($CampaignTrackingID)
    {
        $new = clone $this;
        $new->CampaignTrackingID = $CampaignTrackingID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShipped()
    {
        return $this->Shipped;
    }

    /**
     * @param bool $Shipped
     * @return OrderSummaryEntity
     */
    public function withShipped($Shipped)
    {
        $new = clone $this;
        $new->Shipped = $Shipped;

        return $new;
    }

    /**
     * @return float
     */
    public function getPaymentFeesTaxExc()
    {
        return $this->PaymentFeesTaxExc;
    }

    /**
     * @param float $PaymentFeesTaxExc
     * @return OrderSummaryEntity
     */
    public function withPaymentFeesTaxExc($PaymentFeesTaxExc)
    {
        $new = clone $this;
        $new->PaymentFeesTaxExc = $PaymentFeesTaxExc;

        return $new;
    }

    /**
     * @return float
     */
    public function getPaymentFeesVATAmount()
    {
        return $this->PaymentFeesVATAmount;
    }

    /**
     * @param float $PaymentFeesVATAmount
     * @return OrderSummaryEntity
     */
    public function withPaymentFeesVATAmount($PaymentFeesVATAmount)
    {
        $new = clone $this;
        $new->PaymentFeesVATAmount = $PaymentFeesVATAmount;

        return $new;
    }


}

