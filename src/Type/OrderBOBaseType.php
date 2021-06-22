<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderBOBaseType
 *
 *
 * XSD Type: OrderBOBase
 */
class OrderBOBaseType
{

    /**
     * @var string $currencyISOCode
     */
    private $currencyISOCode = null;

    /**
     * @var string $email
     */
    private $email = null;

    /**
     * @var \DateTime $date
     */
    private $date = null;

    /**
     * @var string $sourceOrderId
     */
    private $sourceOrderId = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ContactBOType $billingContact
     */
    private $billingContact = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ContactBOType $shippingContact
     */
    private $shippingContact = null;

    /**
     * @var string $cellPhone
     */
    private $cellPhone = null;

    /**
     * @var string $fax
     */
    private $fax = null;

    /**
     * @var string $vATNumber
     */
    private $vATNumber = null;

    /**
     * @var string $fiscalCode
     */
    private $fiscalCode = null;

    /**
     * @var float $globalDiscountRate
     */
    private $globalDiscountRate = null;

    /**
     * @var string $shippingInfo
     */
    private $shippingInfo = null;

    /**
     * @var string $shippingMethodName
     */
    private $shippingMethodName = null;

    /**
     * @var float $shippingPriceVATIncluded
     */
    private $shippingPriceVATIncluded = null;

    /**
     * @var float $shippingPriceVATExcluded
     */
    private $shippingPriceVATExcluded = null;

    /**
     * @var float $shippingTaxRate
     */
    private $shippingTaxRate = null;

    /**
     * @var float $paymentFeesVATIncluded
     */
    private $paymentFeesVATIncluded = null;

    /**
     * @var float $paymentFeesVATExcluded
     */
    private $paymentFeesVATExcluded = null;

    /**
     * @var float $paymentFeesTaxRate
     */
    private $paymentFeesTaxRate = null;

    /**
     * @var float $grandTotalVATIncluded
     */
    private $grandTotalVATIncluded = null;

    /**
     * @var string $specialInstructions
     */
    private $specialInstructions = null;

    /**
     * @var string $paymentMethodName
     */
    private $paymentMethodName = null;

    /**
     * @var string $languageISOCode
     */
    private $languageISOCode = null;

    /**
     * @var bool $computeOrderInVATExcludedMode
     */
    private $computeOrderInVATExcludedMode = null;

    /**
     * @var bool $addEcoTaxToPrice
     */
    private $addEcoTaxToPrice = null;

    /**
     * @var bool $applyLoyaltyProgram
     */
    private $applyLoyaltyProgram = null;

    /**
     * @var int $orderStatusCode
     */
    private $orderStatusCode = null;

    /**
     * @var int $sourceTypeId
     */
    private $sourceTypeId = null;

    /**
     * @var int $paymentTypeID
     */
    private $paymentTypeID = null;

    /**
     * Gets as currencyISOCode
     *
     * @return string
     */
    public function getCurrencyISOCode()
    {
        return $this->currencyISOCode;
    }

    /**
     * Sets a new currencyISOCode
     *
     * @param string $currencyISOCode
     * @return self
     */
    public function setCurrencyISOCode($currencyISOCode)
    {
        $this->currencyISOCode = $currencyISOCode;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

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
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Gets as sourceOrderId
     *
     * @return string
     */
    public function getSourceOrderId()
    {
        return $this->sourceOrderId;
    }

    /**
     * Sets a new sourceOrderId
     *
     * @param string $sourceOrderId
     * @return self
     */
    public function setSourceOrderId($sourceOrderId)
    {
        $this->sourceOrderId = $sourceOrderId;
        return $this;
    }

    /**
     * Gets as billingContact
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ContactBOType
     */
    public function getBillingContact()
    {
        return $this->billingContact;
    }

    /**
     * Sets a new billingContact
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ContactBOType $billingContact
     * @return self
     */
    public function setBillingContact(ContactBOType $billingContact)
    {
        $this->billingContact = $billingContact;
        return $this;
    }

    /**
     * Gets as shippingContact
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\ContactBOType
     */
    public function getShippingContact()
    {
        return $this->shippingContact;
    }

    /**
     * Sets a new shippingContact
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\ContactBOType $shippingContact
     * @return self
     */
    public function setShippingContact(ContactBOType $shippingContact = null)
    {
        $this->shippingContact = $shippingContact;
        return $this;
    }

    /**
     * Gets as cellPhone
     *
     * @return string
     */
    public function getCellPhone()
    {
        return $this->cellPhone;
    }

    /**
     * Sets a new cellPhone
     *
     * @param string $cellPhone
     * @return self
     */
    public function setCellPhone($cellPhone)
    {
        $this->cellPhone = $cellPhone;
        return $this;
    }

    /**
     * Gets as fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * @param string $fax
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Gets as vATNumber
     *
     * @return string
     */
    public function getVATNumber()
    {
        return $this->vATNumber;
    }

    /**
     * Sets a new vATNumber
     *
     * @param string $vATNumber
     * @return self
     */
    public function setVATNumber($vATNumber)
    {
        $this->vATNumber = $vATNumber;
        return $this;
    }

    /**
     * Gets as fiscalCode
     *
     * @return string
     */
    public function getFiscalCode()
    {
        return $this->fiscalCode;
    }

    /**
     * Sets a new fiscalCode
     *
     * @param string $fiscalCode
     * @return self
     */
    public function setFiscalCode($fiscalCode)
    {
        $this->fiscalCode = $fiscalCode;
        return $this;
    }

    /**
     * Gets as globalDiscountRate
     *
     * @return float
     */
    public function getGlobalDiscountRate()
    {
        return $this->globalDiscountRate;
    }

    /**
     * Sets a new globalDiscountRate
     *
     * @param float $globalDiscountRate
     * @return self
     */
    public function setGlobalDiscountRate($globalDiscountRate)
    {
        $this->globalDiscountRate = $globalDiscountRate;
        return $this;
    }

    /**
     * Gets as shippingInfo
     *
     * @return string
     */
    public function getShippingInfo()
    {
        return $this->shippingInfo;
    }

    /**
     * Sets a new shippingInfo
     *
     * @param string $shippingInfo
     * @return self
     */
    public function setShippingInfo($shippingInfo)
    {
        $this->shippingInfo = $shippingInfo;
        return $this;
    }

    /**
     * Gets as shippingMethodName
     *
     * @return string
     */
    public function getShippingMethodName()
    {
        return $this->shippingMethodName;
    }

    /**
     * Sets a new shippingMethodName
     *
     * @param string $shippingMethodName
     * @return self
     */
    public function setShippingMethodName($shippingMethodName)
    {
        $this->shippingMethodName = $shippingMethodName;
        return $this;
    }

    /**
     * Gets as shippingPriceVATIncluded
     *
     * @return float
     */
    public function getShippingPriceVATIncluded()
    {
        return $this->shippingPriceVATIncluded;
    }

    /**
     * Sets a new shippingPriceVATIncluded
     *
     * @param float $shippingPriceVATIncluded
     * @return self
     */
    public function setShippingPriceVATIncluded($shippingPriceVATIncluded)
    {
        $this->shippingPriceVATIncluded = $shippingPriceVATIncluded;
        return $this;
    }

    /**
     * Gets as shippingPriceVATExcluded
     *
     * @return float
     */
    public function getShippingPriceVATExcluded()
    {
        return $this->shippingPriceVATExcluded;
    }

    /**
     * Sets a new shippingPriceVATExcluded
     *
     * @param float $shippingPriceVATExcluded
     * @return self
     */
    public function setShippingPriceVATExcluded($shippingPriceVATExcluded)
    {
        $this->shippingPriceVATExcluded = $shippingPriceVATExcluded;
        return $this;
    }

    /**
     * Gets as shippingTaxRate
     *
     * @return float
     */
    public function getShippingTaxRate()
    {
        return $this->shippingTaxRate;
    }

    /**
     * Sets a new shippingTaxRate
     *
     * @param float $shippingTaxRate
     * @return self
     */
    public function setShippingTaxRate($shippingTaxRate)
    {
        $this->shippingTaxRate = $shippingTaxRate;
        return $this;
    }

    /**
     * Gets as paymentFeesVATIncluded
     *
     * @return float
     */
    public function getPaymentFeesVATIncluded()
    {
        return $this->paymentFeesVATIncluded;
    }

    /**
     * Sets a new paymentFeesVATIncluded
     *
     * @param float $paymentFeesVATIncluded
     * @return self
     */
    public function setPaymentFeesVATIncluded($paymentFeesVATIncluded)
    {
        $this->paymentFeesVATIncluded = $paymentFeesVATIncluded;
        return $this;
    }

    /**
     * Gets as paymentFeesVATExcluded
     *
     * @return float
     */
    public function getPaymentFeesVATExcluded()
    {
        return $this->paymentFeesVATExcluded;
    }

    /**
     * Sets a new paymentFeesVATExcluded
     *
     * @param float $paymentFeesVATExcluded
     * @return self
     */
    public function setPaymentFeesVATExcluded($paymentFeesVATExcluded)
    {
        $this->paymentFeesVATExcluded = $paymentFeesVATExcluded;
        return $this;
    }

    /**
     * Gets as paymentFeesTaxRate
     *
     * @return float
     */
    public function getPaymentFeesTaxRate()
    {
        return $this->paymentFeesTaxRate;
    }

    /**
     * Sets a new paymentFeesTaxRate
     *
     * @param float $paymentFeesTaxRate
     * @return self
     */
    public function setPaymentFeesTaxRate($paymentFeesTaxRate)
    {
        $this->paymentFeesTaxRate = $paymentFeesTaxRate;
        return $this;
    }

    /**
     * Gets as grandTotalVATIncluded
     *
     * @return float
     */
    public function getGrandTotalVATIncluded()
    {
        return $this->grandTotalVATIncluded;
    }

    /**
     * Sets a new grandTotalVATIncluded
     *
     * @param float $grandTotalVATIncluded
     * @return self
     */
    public function setGrandTotalVATIncluded($grandTotalVATIncluded)
    {
        $this->grandTotalVATIncluded = $grandTotalVATIncluded;
        return $this;
    }

    /**
     * Gets as specialInstructions
     *
     * @return string
     */
    public function getSpecialInstructions()
    {
        return $this->specialInstructions;
    }

    /**
     * Sets a new specialInstructions
     *
     * @param string $specialInstructions
     * @return self
     */
    public function setSpecialInstructions($specialInstructions)
    {
        $this->specialInstructions = $specialInstructions;
        return $this;
    }

    /**
     * Gets as paymentMethodName
     *
     * @return string
     */
    public function getPaymentMethodName()
    {
        return $this->paymentMethodName;
    }

    /**
     * Sets a new paymentMethodName
     *
     * @param string $paymentMethodName
     * @return self
     */
    public function setPaymentMethodName($paymentMethodName)
    {
        $this->paymentMethodName = $paymentMethodName;
        return $this;
    }

    /**
     * Gets as languageISOCode
     *
     * @return string
     */
    public function getLanguageISOCode()
    {
        return $this->languageISOCode;
    }

    /**
     * Sets a new languageISOCode
     *
     * @param string $languageISOCode
     * @return self
     */
    public function setLanguageISOCode($languageISOCode)
    {
        $this->languageISOCode = $languageISOCode;
        return $this;
    }

    /**
     * Gets as computeOrderInVATExcludedMode
     *
     * @return bool
     */
    public function getComputeOrderInVATExcludedMode()
    {
        return $this->computeOrderInVATExcludedMode;
    }

    /**
     * Sets a new computeOrderInVATExcludedMode
     *
     * @param bool $computeOrderInVATExcludedMode
     * @return self
     */
    public function setComputeOrderInVATExcludedMode($computeOrderInVATExcludedMode)
    {
        $this->computeOrderInVATExcludedMode = $computeOrderInVATExcludedMode;
        return $this;
    }

    /**
     * Gets as addEcoTaxToPrice
     *
     * @return bool
     */
    public function getAddEcoTaxToPrice()
    {
        return $this->addEcoTaxToPrice;
    }

    /**
     * Sets a new addEcoTaxToPrice
     *
     * @param bool $addEcoTaxToPrice
     * @return self
     */
    public function setAddEcoTaxToPrice($addEcoTaxToPrice)
    {
        $this->addEcoTaxToPrice = $addEcoTaxToPrice;
        return $this;
    }

    /**
     * Gets as applyLoyaltyProgram
     *
     * @return bool
     */
    public function getApplyLoyaltyProgram()
    {
        return $this->applyLoyaltyProgram;
    }

    /**
     * Sets a new applyLoyaltyProgram
     *
     * @param bool $applyLoyaltyProgram
     * @return self
     */
    public function setApplyLoyaltyProgram($applyLoyaltyProgram)
    {
        $this->applyLoyaltyProgram = $applyLoyaltyProgram;
        return $this;
    }

    /**
     * Gets as orderStatusCode
     *
     * @return int
     */
    public function getOrderStatusCode()
    {
        return $this->orderStatusCode;
    }

    /**
     * Sets a new orderStatusCode
     *
     * @param int $orderStatusCode
     * @return self
     */
    public function setOrderStatusCode($orderStatusCode)
    {
        $this->orderStatusCode = $orderStatusCode;
        return $this;
    }

    /**
     * Gets as sourceTypeId
     *
     * @return int
     */
    public function getSourceTypeId()
    {
        return $this->sourceTypeId;
    }

    /**
     * Sets a new sourceTypeId
     *
     * @param int $sourceTypeId
     * @return self
     */
    public function setSourceTypeId($sourceTypeId)
    {
        $this->sourceTypeId = $sourceTypeId;
        return $this;
    }

    /**
     * Gets as paymentTypeID
     *
     * @return int
     */
    public function getPaymentTypeID()
    {
        return $this->paymentTypeID;
    }

    /**
     * Sets a new paymentTypeID
     *
     * @param int $paymentTypeID
     * @return self
     */
    public function setPaymentTypeID($paymentTypeID)
    {
        $this->paymentTypeID = $paymentTypeID;
        return $this;
    }


}

