<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderBOBase
{

    /**
     * @var string
     */
    private $Email;

    /**
     * @var \DateTimeInterface
     */
    private $Date;

    /**
     * @var string
     */
    private $SourceOrderId;

    /**
     * @var string
     */
    private $CurrencyISOCode;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ContactBO
     */
    private $BillingContact;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ContactBO
     */
    private $ShippingContact;

    /**
     * @var string
     */
    private $CellPhone;

    /**
     * @var string
     */
    private $Fax;

    /**
     * @var int
     */
    private $UserTypology;

    /**
     * @var string
     */
    private $VATNumber;

    /**
     * @var string
     */
    private $FiscalCode;

    /**
     * @var string
     */
    private $LegalForm;

    /**
     * @var string
     */
    private $NAFCode;

    /**
     * @var float
     */
    private $GlobalDiscountRate;

    /**
     * @var string
     */
    private $ShippingInfo;

    /**
     * @var string
     */
    private $ShippingMethodName;

    /**
     * @var float
     */
    private $ShippingPriceVATIncluded;

    /**
     * @var float
     */
    private $ShippingPriceVATExcluded;

    /**
     * @var float
     */
    private $ShippingTaxRate;

    /**
     * @var float
     */
    private $PaymentFeesVATIncluded;

    /**
     * @var float
     */
    private $PaymentFeesVATExcluded;

    /**
     * @var float
     */
    private $PaymentFeesTaxRate;

    /**
     * @var bool
     */
    private $UpdateStock;

    /**
     * @var float
     */
    private $GrandTotalVATIncluded;

    /**
     * @var string
     */
    private $SpecialInstructions;

    /**
     * @var string
     */
    private $PaymentMethodName;

    /**
     * @var string
     */
    private $LanguageISOCode;

    /**
     * @var bool
     */
    private $ComputeOrderInVATExcludedMode;

    /**
     * @var bool
     */
    private $AddEcoTaxToPrice;

    /**
     * @var bool
     */
    private $ApplyLoyaltyProgram;

    /**
     * @var int
     */
    private $OrderStatusCode;

    /**
     * @var int
     */
    private $SourceTypeId;

    /**
     * @var int
     */
    private $PaymentTypeID;

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return OrderBOBase
     */
    public function withEmail($Email)
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param \DateTimeInterface $Date
     * @return OrderBOBase
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
    public function getSourceOrderId()
    {
        return $this->SourceOrderId;
    }

    /**
     * @param string $SourceOrderId
     * @return OrderBOBase
     */
    public function withSourceOrderId($SourceOrderId)
    {
        $new = clone $this;
        $new->SourceOrderId = $SourceOrderId;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrencyISOCode()
    {
        return $this->CurrencyISOCode;
    }

    /**
     * @param string $CurrencyISOCode
     * @return OrderBOBase
     */
    public function withCurrencyISOCode($CurrencyISOCode)
    {
        $new = clone $this;
        $new->CurrencyISOCode = $CurrencyISOCode;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ContactBO
     */
    public function getBillingContact()
    {
        return $this->BillingContact;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ContactBO $BillingContact
     * @return OrderBOBase
     */
    public function withBillingContact($BillingContact)
    {
        $new = clone $this;
        $new->BillingContact = $BillingContact;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ContactBO
     */
    public function getShippingContact()
    {
        return $this->ShippingContact;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ContactBO $ShippingContact
     * @return OrderBOBase
     */
    public function withShippingContact($ShippingContact)
    {
        $new = clone $this;
        $new->ShippingContact = $ShippingContact;

        return $new;
    }

    /**
     * @return string
     */
    public function getCellPhone()
    {
        return $this->CellPhone;
    }

    /**
     * @param string $CellPhone
     * @return OrderBOBase
     */
    public function withCellPhone($CellPhone)
    {
        $new = clone $this;
        $new->CellPhone = $CellPhone;

        return $new;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return OrderBOBase
     */
    public function withFax($Fax)
    {
        $new = clone $this;
        $new->Fax = $Fax;

        return $new;
    }

    /**
     * @return int
     */
    public function getUserTypology()
    {
        return $this->UserTypology;
    }

    /**
     * @param int $UserTypology
     * @return OrderBOBase
     */
    public function withUserTypology($UserTypology)
    {
        $new = clone $this;
        $new->UserTypology = $UserTypology;

        return $new;
    }

    /**
     * @return string
     */
    public function getVATNumber()
    {
        return $this->VATNumber;
    }

    /**
     * @param string $VATNumber
     * @return OrderBOBase
     */
    public function withVATNumber($VATNumber)
    {
        $new = clone $this;
        $new->VATNumber = $VATNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getFiscalCode()
    {
        return $this->FiscalCode;
    }

    /**
     * @param string $FiscalCode
     * @return OrderBOBase
     */
    public function withFiscalCode($FiscalCode)
    {
        $new = clone $this;
        $new->FiscalCode = $FiscalCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getLegalForm()
    {
        return $this->LegalForm;
    }

    /**
     * @param string $LegalForm
     * @return OrderBOBase
     */
    public function withLegalForm($LegalForm)
    {
        $new = clone $this;
        $new->LegalForm = $LegalForm;

        return $new;
    }

    /**
     * @return string
     */
    public function getNAFCode()
    {
        return $this->NAFCode;
    }

    /**
     * @param string $NAFCode
     * @return OrderBOBase
     */
    public function withNAFCode($NAFCode)
    {
        $new = clone $this;
        $new->NAFCode = $NAFCode;

        return $new;
    }

    /**
     * @return float
     */
    public function getGlobalDiscountRate()
    {
        return $this->GlobalDiscountRate;
    }

    /**
     * @param float $GlobalDiscountRate
     * @return OrderBOBase
     */
    public function withGlobalDiscountRate($GlobalDiscountRate)
    {
        $new = clone $this;
        $new->GlobalDiscountRate = $GlobalDiscountRate;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingInfo()
    {
        return $this->ShippingInfo;
    }

    /**
     * @param string $ShippingInfo
     * @return OrderBOBase
     */
    public function withShippingInfo($ShippingInfo)
    {
        $new = clone $this;
        $new->ShippingInfo = $ShippingInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingMethodName()
    {
        return $this->ShippingMethodName;
    }

    /**
     * @param string $ShippingMethodName
     * @return OrderBOBase
     */
    public function withShippingMethodName($ShippingMethodName)
    {
        $new = clone $this;
        $new->ShippingMethodName = $ShippingMethodName;

        return $new;
    }

    /**
     * @return float
     */
    public function getShippingPriceVATIncluded()
    {
        return $this->ShippingPriceVATIncluded;
    }

    /**
     * @param float $ShippingPriceVATIncluded
     * @return OrderBOBase
     */
    public function withShippingPriceVATIncluded($ShippingPriceVATIncluded)
    {
        $new = clone $this;
        $new->ShippingPriceVATIncluded = $ShippingPriceVATIncluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getShippingPriceVATExcluded()
    {
        return $this->ShippingPriceVATExcluded;
    }

    /**
     * @param float $ShippingPriceVATExcluded
     * @return OrderBOBase
     */
    public function withShippingPriceVATExcluded($ShippingPriceVATExcluded)
    {
        $new = clone $this;
        $new->ShippingPriceVATExcluded = $ShippingPriceVATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getShippingTaxRate()
    {
        return $this->ShippingTaxRate;
    }

    /**
     * @param float $ShippingTaxRate
     * @return OrderBOBase
     */
    public function withShippingTaxRate($ShippingTaxRate)
    {
        $new = clone $this;
        $new->ShippingTaxRate = $ShippingTaxRate;

        return $new;
    }

    /**
     * @return float
     */
    public function getPaymentFeesVATIncluded()
    {
        return $this->PaymentFeesVATIncluded;
    }

    /**
     * @param float $PaymentFeesVATIncluded
     * @return OrderBOBase
     */
    public function withPaymentFeesVATIncluded($PaymentFeesVATIncluded)
    {
        $new = clone $this;
        $new->PaymentFeesVATIncluded = $PaymentFeesVATIncluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getPaymentFeesVATExcluded()
    {
        return $this->PaymentFeesVATExcluded;
    }

    /**
     * @param float $PaymentFeesVATExcluded
     * @return OrderBOBase
     */
    public function withPaymentFeesVATExcluded($PaymentFeesVATExcluded)
    {
        $new = clone $this;
        $new->PaymentFeesVATExcluded = $PaymentFeesVATExcluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getPaymentFeesTaxRate()
    {
        return $this->PaymentFeesTaxRate;
    }

    /**
     * @param float $PaymentFeesTaxRate
     * @return OrderBOBase
     */
    public function withPaymentFeesTaxRate($PaymentFeesTaxRate)
    {
        $new = clone $this;
        $new->PaymentFeesTaxRate = $PaymentFeesTaxRate;

        return $new;
    }

    /**
     * @return bool
     */
    public function getUpdateStock()
    {
        return $this->UpdateStock;
    }

    /**
     * @param bool $UpdateStock
     * @return OrderBOBase
     */
    public function withUpdateStock($UpdateStock)
    {
        $new = clone $this;
        $new->UpdateStock = $UpdateStock;

        return $new;
    }

    /**
     * @return float
     */
    public function getGrandTotalVATIncluded()
    {
        return $this->GrandTotalVATIncluded;
    }

    /**
     * @param float $GrandTotalVATIncluded
     * @return OrderBOBase
     */
    public function withGrandTotalVATIncluded($GrandTotalVATIncluded)
    {
        $new = clone $this;
        $new->GrandTotalVATIncluded = $GrandTotalVATIncluded;

        return $new;
    }

    /**
     * @return string
     */
    public function getSpecialInstructions()
    {
        return $this->SpecialInstructions;
    }

    /**
     * @param string $SpecialInstructions
     * @return OrderBOBase
     */
    public function withSpecialInstructions($SpecialInstructions)
    {
        $new = clone $this;
        $new->SpecialInstructions = $SpecialInstructions;

        return $new;
    }

    /**
     * @return string
     */
    public function getPaymentMethodName()
    {
        return $this->PaymentMethodName;
    }

    /**
     * @param string $PaymentMethodName
     * @return OrderBOBase
     */
    public function withPaymentMethodName($PaymentMethodName)
    {
        $new = clone $this;
        $new->PaymentMethodName = $PaymentMethodName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLanguageISOCode()
    {
        return $this->LanguageISOCode;
    }

    /**
     * @param string $LanguageISOCode
     * @return OrderBOBase
     */
    public function withLanguageISOCode($LanguageISOCode)
    {
        $new = clone $this;
        $new->LanguageISOCode = $LanguageISOCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getComputeOrderInVATExcludedMode()
    {
        return $this->ComputeOrderInVATExcludedMode;
    }

    /**
     * @param bool $ComputeOrderInVATExcludedMode
     * @return OrderBOBase
     */
    public function withComputeOrderInVATExcludedMode($ComputeOrderInVATExcludedMode)
    {
        $new = clone $this;
        $new->ComputeOrderInVATExcludedMode = $ComputeOrderInVATExcludedMode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAddEcoTaxToPrice()
    {
        return $this->AddEcoTaxToPrice;
    }

    /**
     * @param bool $AddEcoTaxToPrice
     * @return OrderBOBase
     */
    public function withAddEcoTaxToPrice($AddEcoTaxToPrice)
    {
        $new = clone $this;
        $new->AddEcoTaxToPrice = $AddEcoTaxToPrice;

        return $new;
    }

    /**
     * @return bool
     */
    public function getApplyLoyaltyProgram()
    {
        return $this->ApplyLoyaltyProgram;
    }

    /**
     * @param bool $ApplyLoyaltyProgram
     * @return OrderBOBase
     */
    public function withApplyLoyaltyProgram($ApplyLoyaltyProgram)
    {
        $new = clone $this;
        $new->ApplyLoyaltyProgram = $ApplyLoyaltyProgram;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrderStatusCode()
    {
        return $this->OrderStatusCode;
    }

    /**
     * @param int $OrderStatusCode
     * @return OrderBOBase
     */
    public function withOrderStatusCode($OrderStatusCode)
    {
        $new = clone $this;
        $new->OrderStatusCode = $OrderStatusCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getSourceTypeId()
    {
        return $this->SourceTypeId;
    }

    /**
     * @param int $SourceTypeId
     * @return OrderBOBase
     */
    public function withSourceTypeId($SourceTypeId)
    {
        $new = clone $this;
        $new->SourceTypeId = $SourceTypeId;

        return $new;
    }

    /**
     * @return int
     */
    public function getPaymentTypeID()
    {
        return $this->PaymentTypeID;
    }

    /**
     * @param int $PaymentTypeID
     * @return OrderBOBase
     */
    public function withPaymentTypeID($PaymentTypeID)
    {
        $new = clone $this;
        $new->PaymentTypeID = $PaymentTypeID;

        return $new;
    }


}

