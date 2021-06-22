<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing DiscountRuleEntityType
 *
 *
 * XSD Type: DiscountRuleEntity
 */
class DiscountRuleEntityType extends DiscountRuleIdEntityType
{

    /**
     * @var string $discountType
     */
    private $discountType = null;

    /**
     * @var float $discountValue
     */
    private $discountValue = null;

    /**
     * @var string $discountCoupon
     */
    private $discountCoupon = null;

    /**
     * @var string $gridDiscountType
     */
    private $gridDiscountType = null;

    /**
     * @var float $gridLowerStep1Value
     */
    private $gridLowerStep1Value = null;

    /**
     * @var float $gridLowerStep1Result
     */
    private $gridLowerStep1Result = null;

    /**
     * @var float $gridLowerStep2Value
     */
    private $gridLowerStep2Value = null;

    /**
     * @var float $gridLowerStep2Result
     */
    private $gridLowerStep2Result = null;

    /**
     * @var float $gridLowerStep3Value
     */
    private $gridLowerStep3Value = null;

    /**
     * @var float $gridLowerStep3Result
     */
    private $gridLowerStep3Result = null;

    /**
     * @var float $gridLowerStep4Value
     */
    private $gridLowerStep4Value = null;

    /**
     * @var float $gridLowerStep4Result
     */
    private $gridLowerStep4Result = null;

    /**
     * @var float $gridLowerStep5Value
     */
    private $gridLowerStep5Value = null;

    /**
     * @var float $gridLowerStep5Result
     */
    private $gridLowerStep5Result = null;

    /**
     * @var float $gridLowerStep6Value
     */
    private $gridLowerStep6Value = null;

    /**
     * @var float $gridLowerStep6Result
     */
    private $gridLowerStep6Result = null;

    /**
     * @var float $gridLowerStep7Value
     */
    private $gridLowerStep7Value = null;

    /**
     * @var float $gridLowerStep7Result
     */
    private $gridLowerStep7Result = null;

    /**
     * @var float $gridLowerStep8Value
     */
    private $gridLowerStep8Value = null;

    /**
     * @var float $gridLowerStep8Result
     */
    private $gridLowerStep8Result = null;

    /**
     * @var float $gridLowerStep9Value
     */
    private $gridLowerStep9Value = null;

    /**
     * @var float $gridLowerStep9Result
     */
    private $gridLowerStep9Result = null;

    /**
     * @var float $gridLowerStep10Value
     */
    private $gridLowerStep10Value = null;

    /**
     * @var float $gridLowerStep10Result
     */
    private $gridLowerStep10Result = null;

    /**
     * @var \DateTime $startDate
     */
    private $startDate = null;

    /**
     * @var \DateTime $endDate
     */
    private $endDate = null;

    /**
     * @var bool $showStrikePrice
     */
    private $showStrikePrice = null;

    /**
     * @var bool $active
     */
    private $active = null;

    /**
     * @var bool $stopProcessingDiscount
     */
    private $stopProcessingDiscount = null;

    /**
     * @var string $originalDiscount
     */
    private $originalDiscount = null;

    /**
     * Gets as discountType
     *
     * @return string
     */
    public function getDiscountType()
    {
        return $this->discountType;
    }

    /**
     * Sets a new discountType
     *
     * @param string $discountType
     * @return self
     */
    public function setDiscountType($discountType)
    {
        $this->discountType = $discountType;
        return $this;
    }

    /**
     * Gets as discountValue
     *
     * @return float
     */
    public function getDiscountValue()
    {
        return $this->discountValue;
    }

    /**
     * Sets a new discountValue
     *
     * @param float $discountValue
     * @return self
     */
    public function setDiscountValue($discountValue)
    {
        $this->discountValue = $discountValue;
        return $this;
    }

    /**
     * Gets as discountCoupon
     *
     * @return string
     */
    public function getDiscountCoupon()
    {
        return $this->discountCoupon;
    }

    /**
     * Sets a new discountCoupon
     *
     * @param string $discountCoupon
     * @return self
     */
    public function setDiscountCoupon($discountCoupon)
    {
        $this->discountCoupon = $discountCoupon;
        return $this;
    }

    /**
     * Gets as gridDiscountType
     *
     * @return string
     */
    public function getGridDiscountType()
    {
        return $this->gridDiscountType;
    }

    /**
     * Sets a new gridDiscountType
     *
     * @param string $gridDiscountType
     * @return self
     */
    public function setGridDiscountType($gridDiscountType)
    {
        $this->gridDiscountType = $gridDiscountType;
        return $this;
    }

    /**
     * Gets as gridLowerStep1Value
     *
     * @return float
     */
    public function getGridLowerStep1Value()
    {
        return $this->gridLowerStep1Value;
    }

    /**
     * Sets a new gridLowerStep1Value
     *
     * @param float $gridLowerStep1Value
     * @return self
     */
    public function setGridLowerStep1Value($gridLowerStep1Value)
    {
        $this->gridLowerStep1Value = $gridLowerStep1Value;
        return $this;
    }

    /**
     * Gets as gridLowerStep1Result
     *
     * @return float
     */
    public function getGridLowerStep1Result()
    {
        return $this->gridLowerStep1Result;
    }

    /**
     * Sets a new gridLowerStep1Result
     *
     * @param float $gridLowerStep1Result
     * @return self
     */
    public function setGridLowerStep1Result($gridLowerStep1Result)
    {
        $this->gridLowerStep1Result = $gridLowerStep1Result;
        return $this;
    }

    /**
     * Gets as gridLowerStep2Value
     *
     * @return float
     */
    public function getGridLowerStep2Value()
    {
        return $this->gridLowerStep2Value;
    }

    /**
     * Sets a new gridLowerStep2Value
     *
     * @param float $gridLowerStep2Value
     * @return self
     */
    public function setGridLowerStep2Value($gridLowerStep2Value)
    {
        $this->gridLowerStep2Value = $gridLowerStep2Value;
        return $this;
    }

    /**
     * Gets as gridLowerStep2Result
     *
     * @return float
     */
    public function getGridLowerStep2Result()
    {
        return $this->gridLowerStep2Result;
    }

    /**
     * Sets a new gridLowerStep2Result
     *
     * @param float $gridLowerStep2Result
     * @return self
     */
    public function setGridLowerStep2Result($gridLowerStep2Result)
    {
        $this->gridLowerStep2Result = $gridLowerStep2Result;
        return $this;
    }

    /**
     * Gets as gridLowerStep3Value
     *
     * @return float
     */
    public function getGridLowerStep3Value()
    {
        return $this->gridLowerStep3Value;
    }

    /**
     * Sets a new gridLowerStep3Value
     *
     * @param float $gridLowerStep3Value
     * @return self
     */
    public function setGridLowerStep3Value($gridLowerStep3Value)
    {
        $this->gridLowerStep3Value = $gridLowerStep3Value;
        return $this;
    }

    /**
     * Gets as gridLowerStep3Result
     *
     * @return float
     */
    public function getGridLowerStep3Result()
    {
        return $this->gridLowerStep3Result;
    }

    /**
     * Sets a new gridLowerStep3Result
     *
     * @param float $gridLowerStep3Result
     * @return self
     */
    public function setGridLowerStep3Result($gridLowerStep3Result)
    {
        $this->gridLowerStep3Result = $gridLowerStep3Result;
        return $this;
    }

    /**
     * Gets as gridLowerStep4Value
     *
     * @return float
     */
    public function getGridLowerStep4Value()
    {
        return $this->gridLowerStep4Value;
    }

    /**
     * Sets a new gridLowerStep4Value
     *
     * @param float $gridLowerStep4Value
     * @return self
     */
    public function setGridLowerStep4Value($gridLowerStep4Value)
    {
        $this->gridLowerStep4Value = $gridLowerStep4Value;
        return $this;
    }

    /**
     * Gets as gridLowerStep4Result
     *
     * @return float
     */
    public function getGridLowerStep4Result()
    {
        return $this->gridLowerStep4Result;
    }

    /**
     * Sets a new gridLowerStep4Result
     *
     * @param float $gridLowerStep4Result
     * @return self
     */
    public function setGridLowerStep4Result($gridLowerStep4Result)
    {
        $this->gridLowerStep4Result = $gridLowerStep4Result;
        return $this;
    }

    /**
     * Gets as gridLowerStep5Value
     *
     * @return float
     */
    public function getGridLowerStep5Value()
    {
        return $this->gridLowerStep5Value;
    }

    /**
     * Sets a new gridLowerStep5Value
     *
     * @param float $gridLowerStep5Value
     * @return self
     */
    public function setGridLowerStep5Value($gridLowerStep5Value)
    {
        $this->gridLowerStep5Value = $gridLowerStep5Value;
        return $this;
    }

    /**
     * Gets as gridLowerStep5Result
     *
     * @return float
     */
    public function getGridLowerStep5Result()
    {
        return $this->gridLowerStep5Result;
    }

    /**
     * Sets a new gridLowerStep5Result
     *
     * @param float $gridLowerStep5Result
     * @return self
     */
    public function setGridLowerStep5Result($gridLowerStep5Result)
    {
        $this->gridLowerStep5Result = $gridLowerStep5Result;
        return $this;
    }

    /**
     * Gets as gridLowerStep6Value
     *
     * @return float
     */
    public function getGridLowerStep6Value()
    {
        return $this->gridLowerStep6Value;
    }

    /**
     * Sets a new gridLowerStep6Value
     *
     * @param float $gridLowerStep6Value
     * @return self
     */
    public function setGridLowerStep6Value($gridLowerStep6Value)
    {
        $this->gridLowerStep6Value = $gridLowerStep6Value;
        return $this;
    }

    /**
     * Gets as gridLowerStep6Result
     *
     * @return float
     */
    public function getGridLowerStep6Result()
    {
        return $this->gridLowerStep6Result;
    }

    /**
     * Sets a new gridLowerStep6Result
     *
     * @param float $gridLowerStep6Result
     * @return self
     */
    public function setGridLowerStep6Result($gridLowerStep6Result)
    {
        $this->gridLowerStep6Result = $gridLowerStep6Result;
        return $this;
    }

    /**
     * Gets as gridLowerStep7Value
     *
     * @return float
     */
    public function getGridLowerStep7Value()
    {
        return $this->gridLowerStep7Value;
    }

    /**
     * Sets a new gridLowerStep7Value
     *
     * @param float $gridLowerStep7Value
     * @return self
     */
    public function setGridLowerStep7Value($gridLowerStep7Value)
    {
        $this->gridLowerStep7Value = $gridLowerStep7Value;
        return $this;
    }

    /**
     * Gets as gridLowerStep7Result
     *
     * @return float
     */
    public function getGridLowerStep7Result()
    {
        return $this->gridLowerStep7Result;
    }

    /**
     * Sets a new gridLowerStep7Result
     *
     * @param float $gridLowerStep7Result
     * @return self
     */
    public function setGridLowerStep7Result($gridLowerStep7Result)
    {
        $this->gridLowerStep7Result = $gridLowerStep7Result;
        return $this;
    }

    /**
     * Gets as gridLowerStep8Value
     *
     * @return float
     */
    public function getGridLowerStep8Value()
    {
        return $this->gridLowerStep8Value;
    }

    /**
     * Sets a new gridLowerStep8Value
     *
     * @param float $gridLowerStep8Value
     * @return self
     */
    public function setGridLowerStep8Value($gridLowerStep8Value)
    {
        $this->gridLowerStep8Value = $gridLowerStep8Value;
        return $this;
    }

    /**
     * Gets as gridLowerStep8Result
     *
     * @return float
     */
    public function getGridLowerStep8Result()
    {
        return $this->gridLowerStep8Result;
    }

    /**
     * Sets a new gridLowerStep8Result
     *
     * @param float $gridLowerStep8Result
     * @return self
     */
    public function setGridLowerStep8Result($gridLowerStep8Result)
    {
        $this->gridLowerStep8Result = $gridLowerStep8Result;
        return $this;
    }

    /**
     * Gets as gridLowerStep9Value
     *
     * @return float
     */
    public function getGridLowerStep9Value()
    {
        return $this->gridLowerStep9Value;
    }

    /**
     * Sets a new gridLowerStep9Value
     *
     * @param float $gridLowerStep9Value
     * @return self
     */
    public function setGridLowerStep9Value($gridLowerStep9Value)
    {
        $this->gridLowerStep9Value = $gridLowerStep9Value;
        return $this;
    }

    /**
     * Gets as gridLowerStep9Result
     *
     * @return float
     */
    public function getGridLowerStep9Result()
    {
        return $this->gridLowerStep9Result;
    }

    /**
     * Sets a new gridLowerStep9Result
     *
     * @param float $gridLowerStep9Result
     * @return self
     */
    public function setGridLowerStep9Result($gridLowerStep9Result)
    {
        $this->gridLowerStep9Result = $gridLowerStep9Result;
        return $this;
    }

    /**
     * Gets as gridLowerStep10Value
     *
     * @return float
     */
    public function getGridLowerStep10Value()
    {
        return $this->gridLowerStep10Value;
    }

    /**
     * Sets a new gridLowerStep10Value
     *
     * @param float $gridLowerStep10Value
     * @return self
     */
    public function setGridLowerStep10Value($gridLowerStep10Value)
    {
        $this->gridLowerStep10Value = $gridLowerStep10Value;
        return $this;
    }

    /**
     * Gets as gridLowerStep10Result
     *
     * @return float
     */
    public function getGridLowerStep10Result()
    {
        return $this->gridLowerStep10Result;
    }

    /**
     * Sets a new gridLowerStep10Result
     *
     * @param float $gridLowerStep10Result
     * @return self
     */
    public function setGridLowerStep10Result($gridLowerStep10Result)
    {
        $this->gridLowerStep10Result = $gridLowerStep10Result;
        return $this;
    }

    /**
     * Gets as startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets a new startDate
     *
     * @param \DateTime $startDate
     * @return self
     */
    public function setStartDate(\DateTime $startDate = null)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Gets as endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets a new endDate
     *
     * @param \DateTime $endDate
     * @return self
     */
    public function setEndDate(\DateTime $endDate = null)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Gets as showStrikePrice
     *
     * @return bool
     */
    public function getShowStrikePrice()
    {
        return $this->showStrikePrice;
    }

    /**
     * Sets a new showStrikePrice
     *
     * @param bool $showStrikePrice
     * @return self
     */
    public function setShowStrikePrice($showStrikePrice)
    {
        $this->showStrikePrice = $showStrikePrice;
        return $this;
    }

    /**
     * Gets as active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Sets a new active
     *
     * @param bool $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Gets as stopProcessingDiscount
     *
     * @return bool
     */
    public function getStopProcessingDiscount()
    {
        return $this->stopProcessingDiscount;
    }

    /**
     * Sets a new stopProcessingDiscount
     *
     * @param bool $stopProcessingDiscount
     * @return self
     */
    public function setStopProcessingDiscount($stopProcessingDiscount)
    {
        $this->stopProcessingDiscount = $stopProcessingDiscount;
        return $this;
    }

    /**
     * Gets as originalDiscount
     *
     * @return string
     */
    public function getOriginalDiscount()
    {
        return $this->originalDiscount;
    }

    /**
     * Sets a new originalDiscount
     *
     * @param string $originalDiscount
     * @return self
     */
    public function setOriginalDiscount($originalDiscount)
    {
        $this->originalDiscount = $originalDiscount;
        return $this;
    }


}

