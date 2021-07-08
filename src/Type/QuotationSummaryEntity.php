<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuotationSummaryEntity extends \Heavymind\Oxatis\ApiClient\Type\QuotationIdEntity
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
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param \DateTimeInterface $Date
     * @return QuotationSummaryEntity
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
     * @return QuotationSummaryEntity
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
     * @return QuotationSummaryEntity
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
     * @return QuotationSummaryEntity
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
     * @return QuotationSummaryEntity
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
     * @return QuotationSummaryEntity
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
     * @return QuotationSummaryEntity
     */
    public function withShippingVATAmount($ShippingVATAmount)
    {
        $new = clone $this;
        $new->ShippingVATAmount = $ShippingVATAmount;

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
     * @return QuotationSummaryEntity
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
     * @return QuotationSummaryEntity
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
     * @return QuotationSummaryEntity
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
     * @return QuotationSummaryEntity
     */
    public function withCampaignTrackingID($CampaignTrackingID)
    {
        $new = clone $this;
        $new->CampaignTrackingID = $CampaignTrackingID;

        return $new;
    }


}

