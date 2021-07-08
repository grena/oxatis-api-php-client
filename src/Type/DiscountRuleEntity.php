<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class DiscountRuleEntity extends \Heavymind\Oxatis\ApiClient\Type\DiscountRuleIdEntity
{

    /**
     * @var string
     */
    protected $DiscountType;

    /**
     * @var float
     */
    protected $DiscountValue;

    /**
     * @var string
     */
    protected $DiscountCoupon;

    /**
     * @var string
     */
    protected $GridDiscountType;

    /**
     * @var float
     */
    protected $GridLowerStep1Value;

    /**
     * @var float
     */
    protected $GridLowerStep1Result;

    /**
     * @var float
     */
    protected $GridLowerStep2Value;

    /**
     * @var float
     */
    protected $GridLowerStep2Result;

    /**
     * @var float
     */
    protected $GridLowerStep3Value;

    /**
     * @var float
     */
    protected $GridLowerStep3Result;

    /**
     * @var float
     */
    protected $GridLowerStep4Value;

    /**
     * @var float
     */
    protected $GridLowerStep4Result;

    /**
     * @var float
     */
    protected $GridLowerStep5Value;

    /**
     * @var float
     */
    protected $GridLowerStep5Result;

    /**
     * @var float
     */
    protected $GridLowerStep6Value;

    /**
     * @var float
     */
    protected $GridLowerStep6Result;

    /**
     * @var float
     */
    protected $GridLowerStep7Value;

    /**
     * @var float
     */
    protected $GridLowerStep7Result;

    /**
     * @var float
     */
    protected $GridLowerStep8Value;

    /**
     * @var float
     */
    protected $GridLowerStep8Result;

    /**
     * @var float
     */
    protected $GridLowerStep9Value;

    /**
     * @var float
     */
    protected $GridLowerStep9Result;

    /**
     * @var float
     */
    protected $GridLowerStep10Value;

    /**
     * @var float
     */
    protected $GridLowerStep10Result;

    /**
     * @var \DateTimeInterface
     */
    protected $StartDate;

    /**
     * @var \DateTimeInterface
     */
    protected $EndDate;

    /**
     * @var bool
     */
    protected $ShowStrikePrice;

    /**
     * @var bool
     */
    protected $Active;

    /**
     * @var bool
     */
    protected $StopProcessingDiscount;

    /**
     * @var string
     */
    protected $OriginalDiscount;

    /**
     * @return string
     */
    public function getDiscountType()
    {
        return $this->DiscountType;
    }

    /**
     * @param string $DiscountType
     * @return DiscountRuleEntity
     */
    public function withDiscountType($DiscountType)
    {
        $new = clone $this;
        $new->DiscountType = $DiscountType;

        return $new;
    }

    /**
     * @return float
     */
    public function getDiscountValue()
    {
        return $this->DiscountValue;
    }

    /**
     * @param float $DiscountValue
     * @return DiscountRuleEntity
     */
    public function withDiscountValue($DiscountValue)
    {
        $new = clone $this;
        $new->DiscountValue = $DiscountValue;

        return $new;
    }

    /**
     * @return string
     */
    public function getDiscountCoupon()
    {
        return $this->DiscountCoupon;
    }

    /**
     * @param string $DiscountCoupon
     * @return DiscountRuleEntity
     */
    public function withDiscountCoupon($DiscountCoupon)
    {
        $new = clone $this;
        $new->DiscountCoupon = $DiscountCoupon;

        return $new;
    }

    /**
     * @return string
     */
    public function getGridDiscountType()
    {
        return $this->GridDiscountType;
    }

    /**
     * @param string $GridDiscountType
     * @return DiscountRuleEntity
     */
    public function withGridDiscountType($GridDiscountType)
    {
        $new = clone $this;
        $new->GridDiscountType = $GridDiscountType;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep1Value()
    {
        return $this->GridLowerStep1Value;
    }

    /**
     * @param float $GridLowerStep1Value
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep1Value($GridLowerStep1Value)
    {
        $new = clone $this;
        $new->GridLowerStep1Value = $GridLowerStep1Value;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep1Result()
    {
        return $this->GridLowerStep1Result;
    }

    /**
     * @param float $GridLowerStep1Result
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep1Result($GridLowerStep1Result)
    {
        $new = clone $this;
        $new->GridLowerStep1Result = $GridLowerStep1Result;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep2Value()
    {
        return $this->GridLowerStep2Value;
    }

    /**
     * @param float $GridLowerStep2Value
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep2Value($GridLowerStep2Value)
    {
        $new = clone $this;
        $new->GridLowerStep2Value = $GridLowerStep2Value;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep2Result()
    {
        return $this->GridLowerStep2Result;
    }

    /**
     * @param float $GridLowerStep2Result
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep2Result($GridLowerStep2Result)
    {
        $new = clone $this;
        $new->GridLowerStep2Result = $GridLowerStep2Result;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep3Value()
    {
        return $this->GridLowerStep3Value;
    }

    /**
     * @param float $GridLowerStep3Value
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep3Value($GridLowerStep3Value)
    {
        $new = clone $this;
        $new->GridLowerStep3Value = $GridLowerStep3Value;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep3Result()
    {
        return $this->GridLowerStep3Result;
    }

    /**
     * @param float $GridLowerStep3Result
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep3Result($GridLowerStep3Result)
    {
        $new = clone $this;
        $new->GridLowerStep3Result = $GridLowerStep3Result;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep4Value()
    {
        return $this->GridLowerStep4Value;
    }

    /**
     * @param float $GridLowerStep4Value
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep4Value($GridLowerStep4Value)
    {
        $new = clone $this;
        $new->GridLowerStep4Value = $GridLowerStep4Value;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep4Result()
    {
        return $this->GridLowerStep4Result;
    }

    /**
     * @param float $GridLowerStep4Result
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep4Result($GridLowerStep4Result)
    {
        $new = clone $this;
        $new->GridLowerStep4Result = $GridLowerStep4Result;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep5Value()
    {
        return $this->GridLowerStep5Value;
    }

    /**
     * @param float $GridLowerStep5Value
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep5Value($GridLowerStep5Value)
    {
        $new = clone $this;
        $new->GridLowerStep5Value = $GridLowerStep5Value;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep5Result()
    {
        return $this->GridLowerStep5Result;
    }

    /**
     * @param float $GridLowerStep5Result
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep5Result($GridLowerStep5Result)
    {
        $new = clone $this;
        $new->GridLowerStep5Result = $GridLowerStep5Result;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep6Value()
    {
        return $this->GridLowerStep6Value;
    }

    /**
     * @param float $GridLowerStep6Value
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep6Value($GridLowerStep6Value)
    {
        $new = clone $this;
        $new->GridLowerStep6Value = $GridLowerStep6Value;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep6Result()
    {
        return $this->GridLowerStep6Result;
    }

    /**
     * @param float $GridLowerStep6Result
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep6Result($GridLowerStep6Result)
    {
        $new = clone $this;
        $new->GridLowerStep6Result = $GridLowerStep6Result;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep7Value()
    {
        return $this->GridLowerStep7Value;
    }

    /**
     * @param float $GridLowerStep7Value
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep7Value($GridLowerStep7Value)
    {
        $new = clone $this;
        $new->GridLowerStep7Value = $GridLowerStep7Value;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep7Result()
    {
        return $this->GridLowerStep7Result;
    }

    /**
     * @param float $GridLowerStep7Result
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep7Result($GridLowerStep7Result)
    {
        $new = clone $this;
        $new->GridLowerStep7Result = $GridLowerStep7Result;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep8Value()
    {
        return $this->GridLowerStep8Value;
    }

    /**
     * @param float $GridLowerStep8Value
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep8Value($GridLowerStep8Value)
    {
        $new = clone $this;
        $new->GridLowerStep8Value = $GridLowerStep8Value;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep8Result()
    {
        return $this->GridLowerStep8Result;
    }

    /**
     * @param float $GridLowerStep8Result
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep8Result($GridLowerStep8Result)
    {
        $new = clone $this;
        $new->GridLowerStep8Result = $GridLowerStep8Result;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep9Value()
    {
        return $this->GridLowerStep9Value;
    }

    /**
     * @param float $GridLowerStep9Value
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep9Value($GridLowerStep9Value)
    {
        $new = clone $this;
        $new->GridLowerStep9Value = $GridLowerStep9Value;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep9Result()
    {
        return $this->GridLowerStep9Result;
    }

    /**
     * @param float $GridLowerStep9Result
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep9Result($GridLowerStep9Result)
    {
        $new = clone $this;
        $new->GridLowerStep9Result = $GridLowerStep9Result;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep10Value()
    {
        return $this->GridLowerStep10Value;
    }

    /**
     * @param float $GridLowerStep10Value
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep10Value($GridLowerStep10Value)
    {
        $new = clone $this;
        $new->GridLowerStep10Value = $GridLowerStep10Value;

        return $new;
    }

    /**
     * @return float
     */
    public function getGridLowerStep10Result()
    {
        return $this->GridLowerStep10Result;
    }

    /**
     * @param float $GridLowerStep10Result
     * @return DiscountRuleEntity
     */
    public function withGridLowerStep10Result($GridLowerStep10Result)
    {
        $new = clone $this;
        $new->GridLowerStep10Result = $GridLowerStep10Result;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate()
    {
        return $this->StartDate;
    }

    /**
     * @param \DateTimeInterface $StartDate
     * @return DiscountRuleEntity
     */
    public function withStartDate($StartDate)
    {
        $new = clone $this;
        $new->StartDate = $StartDate;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate()
    {
        return $this->EndDate;
    }

    /**
     * @param \DateTimeInterface $EndDate
     * @return DiscountRuleEntity
     */
    public function withEndDate($EndDate)
    {
        $new = clone $this;
        $new->EndDate = $EndDate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShowStrikePrice()
    {
        return $this->ShowStrikePrice;
    }

    /**
     * @param bool $ShowStrikePrice
     * @return DiscountRuleEntity
     */
    public function withShowStrikePrice($ShowStrikePrice)
    {
        $new = clone $this;
        $new->ShowStrikePrice = $ShowStrikePrice;

        return $new;
    }

    /**
     * @return bool
     */
    public function getActive()
    {
        return $this->Active;
    }

    /**
     * @param bool $Active
     * @return DiscountRuleEntity
     */
    public function withActive($Active)
    {
        $new = clone $this;
        $new->Active = $Active;

        return $new;
    }

    /**
     * @return bool
     */
    public function getStopProcessingDiscount()
    {
        return $this->StopProcessingDiscount;
    }

    /**
     * @param bool $StopProcessingDiscount
     * @return DiscountRuleEntity
     */
    public function withStopProcessingDiscount($StopProcessingDiscount)
    {
        $new = clone $this;
        $new->StopProcessingDiscount = $StopProcessingDiscount;

        return $new;
    }

    /**
     * @return string
     */
    public function getOriginalDiscount()
    {
        return $this->OriginalDiscount;
    }

    /**
     * @param string $OriginalDiscount
     * @return DiscountRuleEntity
     */
    public function withOriginalDiscount($OriginalDiscount)
    {
        $new = clone $this;
        $new->OriginalDiscount = $OriginalDiscount;

        return $new;
    }


}

