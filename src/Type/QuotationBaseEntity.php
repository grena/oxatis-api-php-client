<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class QuotationBaseEntity extends \Heavymind\Oxatis\ApiClient\Type\QuotationSummaryEntity
{

    /**
     * @var int
     */
    protected $UserTypology;

    /**
     * @var string
     */
    protected $LegalForm;

    /**
     * @var string
     */
    protected $NAFCode;

    /**
     * @var int
     */
    protected $OrderFlags;

    /**
     * @var string
     */
    protected $ShippingParam3;

    /**
     * @var float
     */
    protected $AmountTaxesVATExc;

    /**
     * @var float
     */
    protected $AmountTaxesVATInc;

    /**
     * @var float
     */
    protected $AmountTaxesVATAmount;

    /**
     * @var string
     */
    protected $ShippingAmountTaxList;

    /**
     * @var string
     */
    protected $ShippingTaxFormula;

    /**
     * @var string
     */
    protected $CustomerCode;

    /**
     * @var string
     */
    protected $UserEmail;

    /**
     * @var int
     */
    protected $UserOxID;

    /**
     * @var string
     */
    protected $BillingTitle;

    /**
     * @var string
     */
    protected $BillingCompany;

    /**
     * @var string
     */
    protected $BillingAddress;

    /**
     * @var string
     */
    protected $BillingAddressL1;

    /**
     * @var string
     */
    protected $BillingAddressL2;

    /**
     * @var string
     */
    protected $BillingAddressL3;

    /**
     * @var string
     */
    protected $BillingAddressL4;

    /**
     * @var string
     */
    protected $BillingAddressFloor;

    /**
     * @var string
     */
    protected $BillingAddressBuilding;

    /**
     * @var string
     */
    protected $BillingAddressStreet;

    /**
     * @var string
     */
    protected $BillingAddressOtherInfo;

    /**
     * @var string
     */
    protected $BillingZipCode;

    /**
     * @var string
     */
    protected $BillingCity;

    /**
     * @var string
     */
    protected $BillingState;

    /**
     * @var string
     */
    protected $BillingStateName;

    /**
     * @var string
     */
    protected $BillingCountryISOCode;

    /**
     * @var string
     */
    protected $BillingCountryName;

    /**
     * @var string
     */
    protected $BillingPhone;

    /**
     * @var string
     */
    protected $BillingCellPhone;

    /**
     * @var string
     */
    protected $BillingFax;

    /**
     * @var string
     */
    protected $CompanyVATNumber;

    /**
     * @var string
     */
    protected $ShippingCompany;

    /**
     * @var string
     */
    protected $ShippingTitle;

    /**
     * @var string
     */
    protected $ShippingFirstName;

    /**
     * @var string
     */
    protected $ShippingLastName;

    /**
     * @var string
     */
    protected $ShippingAddress;

    /**
     * @var string
     */
    protected $ShippingAddressL1;

    /**
     * @var string
     */
    protected $ShippingAddressL2;

    /**
     * @var string
     */
    protected $ShippingAddressL3;

    /**
     * @var string
     */
    protected $ShippingAddressL4;

    /**
     * @var string
     */
    protected $ShippingAddressFloor;

    /**
     * @var string
     */
    protected $ShippingAddressBuilding;

    /**
     * @var string
     */
    protected $ShippingAddressStreet;

    /**
     * @var string
     */
    protected $ShippingAddressOtherInfo;

    /**
     * @var string
     */
    protected $ShippingZipCode;

    /**
     * @var string
     */
    protected $ShippingCity;

    /**
     * @var string
     */
    protected $ShippingState;

    /**
     * @var string
     */
    protected $ShippingStateName;

    /**
     * @var string
     */
    protected $ShippingCountryISOCode;

    /**
     * @var string
     */
    protected $ShippingCountryName;

    /**
     * @var string
     */
    protected $ShippingPhone;

    /**
     * @var string
     */
    protected $ShippingInfo;

    /**
     * @var bool
     */
    protected $VATIncluded;

    /**
     * @var bool
     */
    protected $EcoTaxIncluded;

    /**
     * @var float
     */
    protected $SubTotalNet;

    /**
     * @var float
     */
    protected $SubTotalNetDiscounted;

    /**
     * @var float
     */
    protected $GlobalDiscountRate;

    /**
     * @var float
     */
    protected $GlobalDiscountAmount;

    /**
     * @var int
     */
    protected $ShippingID;

    /**
     * @var string
     */
    protected $ShippingMethodName;

    /**
     * @var int
     */
    protected $ShippingProcessorCode;

    /**
     * @var string
     */
    protected $ShippingParam1;

    /**
     * @var string
     */
    protected $ShippingParam2;

    /**
     * @var float
     */
    protected $ShippingTaxRate;

    /**
     * @var float
     */
    protected $ShippingPriceTaxIncl;

    /**
     * @var float
     */
    protected $EcoTaxAmountTaxIncl;

    /**
     * @var string
     */
    protected $CartCoupon;

    /**
     * @var string
     */
    protected $Language;

    /**
     * @var string
     */
    protected $RemoteIPAddr;

    /**
     * @var string
     */
    protected $SalesRepCode;

    /**
     * @var string
     */
    protected $SalesRepFirstName;

    /**
     * @var string
     */
    protected $SalesRepLastName;

    /**
     * @var string
     */
    protected $SpecialInstructions;

    /**
     * @var string
     */
    protected $CurrencyCode;

    /**
     * @var string
     */
    protected $InternalNote;

    /**
     * @var string
     */
    protected $FiscalCode;

    /**
     * @var string
     */
    protected $CustomFieldText1;

    /**
     * @var string
     */
    protected $CustomFieldText2;

    /**
     * @var string
     */
    protected $CustomFieldText3;

    /**
     * @var string
     */
    protected $CustomFieldText4;

    /**
     * @var float
     */
    protected $CustomFieldNumeric1;

    /**
     * @var float
     */
    protected $CustomFieldNumeric2;

    /**
     * @var \DateTimeInterface
     */
    protected $CustomFieldDate;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationTaxDetailEntity
     */
    protected $QuotationTaxDetails;

    /**
     * @return int
     */
    public function getUserTypology()
    {
        return $this->UserTypology;
    }

    /**
     * @param int $UserTypology
     * @return QuotationBaseEntity
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
    public function getLegalForm()
    {
        return $this->LegalForm;
    }

    /**
     * @param string $LegalForm
     * @return QuotationBaseEntity
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
     * @return QuotationBaseEntity
     */
    public function withNAFCode($NAFCode)
    {
        $new = clone $this;
        $new->NAFCode = $NAFCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getOrderFlags()
    {
        return $this->OrderFlags;
    }

    /**
     * @param int $OrderFlags
     * @return QuotationBaseEntity
     */
    public function withOrderFlags($OrderFlags)
    {
        $new = clone $this;
        $new->OrderFlags = $OrderFlags;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingParam3()
    {
        return $this->ShippingParam3;
    }

    /**
     * @param string $ShippingParam3
     * @return QuotationBaseEntity
     */
    public function withShippingParam3($ShippingParam3)
    {
        $new = clone $this;
        $new->ShippingParam3 = $ShippingParam3;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmountTaxesVATExc()
    {
        return $this->AmountTaxesVATExc;
    }

    /**
     * @param float $AmountTaxesVATExc
     * @return QuotationBaseEntity
     */
    public function withAmountTaxesVATExc($AmountTaxesVATExc)
    {
        $new = clone $this;
        $new->AmountTaxesVATExc = $AmountTaxesVATExc;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmountTaxesVATInc()
    {
        return $this->AmountTaxesVATInc;
    }

    /**
     * @param float $AmountTaxesVATInc
     * @return QuotationBaseEntity
     */
    public function withAmountTaxesVATInc($AmountTaxesVATInc)
    {
        $new = clone $this;
        $new->AmountTaxesVATInc = $AmountTaxesVATInc;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmountTaxesVATAmount()
    {
        return $this->AmountTaxesVATAmount;
    }

    /**
     * @param float $AmountTaxesVATAmount
     * @return QuotationBaseEntity
     */
    public function withAmountTaxesVATAmount($AmountTaxesVATAmount)
    {
        $new = clone $this;
        $new->AmountTaxesVATAmount = $AmountTaxesVATAmount;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAmountTaxList()
    {
        return $this->ShippingAmountTaxList;
    }

    /**
     * @param string $ShippingAmountTaxList
     * @return QuotationBaseEntity
     */
    public function withShippingAmountTaxList($ShippingAmountTaxList)
    {
        $new = clone $this;
        $new->ShippingAmountTaxList = $ShippingAmountTaxList;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingTaxFormula()
    {
        return $this->ShippingTaxFormula;
    }

    /**
     * @param string $ShippingTaxFormula
     * @return QuotationBaseEntity
     */
    public function withShippingTaxFormula($ShippingTaxFormula)
    {
        $new = clone $this;
        $new->ShippingTaxFormula = $ShippingTaxFormula;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomerCode()
    {
        return $this->CustomerCode;
    }

    /**
     * @param string $CustomerCode
     * @return QuotationBaseEntity
     */
    public function withCustomerCode($CustomerCode)
    {
        $new = clone $this;
        $new->CustomerCode = $CustomerCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserEmail()
    {
        return $this->UserEmail;
    }

    /**
     * @param string $UserEmail
     * @return QuotationBaseEntity
     */
    public function withUserEmail($UserEmail)
    {
        $new = clone $this;
        $new->UserEmail = $UserEmail;

        return $new;
    }

    /**
     * @return int
     */
    public function getUserOxID()
    {
        return $this->UserOxID;
    }

    /**
     * @param int $UserOxID
     * @return QuotationBaseEntity
     */
    public function withUserOxID($UserOxID)
    {
        $new = clone $this;
        $new->UserOxID = $UserOxID;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingTitle()
    {
        return $this->BillingTitle;
    }

    /**
     * @param string $BillingTitle
     * @return QuotationBaseEntity
     */
    public function withBillingTitle($BillingTitle)
    {
        $new = clone $this;
        $new->BillingTitle = $BillingTitle;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingCompany()
    {
        return $this->BillingCompany;
    }

    /**
     * @param string $BillingCompany
     * @return QuotationBaseEntity
     */
    public function withBillingCompany($BillingCompany)
    {
        $new = clone $this;
        $new->BillingCompany = $BillingCompany;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingAddress()
    {
        return $this->BillingAddress;
    }

    /**
     * @param string $BillingAddress
     * @return QuotationBaseEntity
     */
    public function withBillingAddress($BillingAddress)
    {
        $new = clone $this;
        $new->BillingAddress = $BillingAddress;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingAddressL1()
    {
        return $this->BillingAddressL1;
    }

    /**
     * @param string $BillingAddressL1
     * @return QuotationBaseEntity
     */
    public function withBillingAddressL1($BillingAddressL1)
    {
        $new = clone $this;
        $new->BillingAddressL1 = $BillingAddressL1;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingAddressL2()
    {
        return $this->BillingAddressL2;
    }

    /**
     * @param string $BillingAddressL2
     * @return QuotationBaseEntity
     */
    public function withBillingAddressL2($BillingAddressL2)
    {
        $new = clone $this;
        $new->BillingAddressL2 = $BillingAddressL2;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingAddressL3()
    {
        return $this->BillingAddressL3;
    }

    /**
     * @param string $BillingAddressL3
     * @return QuotationBaseEntity
     */
    public function withBillingAddressL3($BillingAddressL3)
    {
        $new = clone $this;
        $new->BillingAddressL3 = $BillingAddressL3;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingAddressL4()
    {
        return $this->BillingAddressL4;
    }

    /**
     * @param string $BillingAddressL4
     * @return QuotationBaseEntity
     */
    public function withBillingAddressL4($BillingAddressL4)
    {
        $new = clone $this;
        $new->BillingAddressL4 = $BillingAddressL4;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingAddressFloor()
    {
        return $this->BillingAddressFloor;
    }

    /**
     * @param string $BillingAddressFloor
     * @return QuotationBaseEntity
     */
    public function withBillingAddressFloor($BillingAddressFloor)
    {
        $new = clone $this;
        $new->BillingAddressFloor = $BillingAddressFloor;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingAddressBuilding()
    {
        return $this->BillingAddressBuilding;
    }

    /**
     * @param string $BillingAddressBuilding
     * @return QuotationBaseEntity
     */
    public function withBillingAddressBuilding($BillingAddressBuilding)
    {
        $new = clone $this;
        $new->BillingAddressBuilding = $BillingAddressBuilding;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingAddressStreet()
    {
        return $this->BillingAddressStreet;
    }

    /**
     * @param string $BillingAddressStreet
     * @return QuotationBaseEntity
     */
    public function withBillingAddressStreet($BillingAddressStreet)
    {
        $new = clone $this;
        $new->BillingAddressStreet = $BillingAddressStreet;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingAddressOtherInfo()
    {
        return $this->BillingAddressOtherInfo;
    }

    /**
     * @param string $BillingAddressOtherInfo
     * @return QuotationBaseEntity
     */
    public function withBillingAddressOtherInfo($BillingAddressOtherInfo)
    {
        $new = clone $this;
        $new->BillingAddressOtherInfo = $BillingAddressOtherInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingZipCode()
    {
        return $this->BillingZipCode;
    }

    /**
     * @param string $BillingZipCode
     * @return QuotationBaseEntity
     */
    public function withBillingZipCode($BillingZipCode)
    {
        $new = clone $this;
        $new->BillingZipCode = $BillingZipCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingCity()
    {
        return $this->BillingCity;
    }

    /**
     * @param string $BillingCity
     * @return QuotationBaseEntity
     */
    public function withBillingCity($BillingCity)
    {
        $new = clone $this;
        $new->BillingCity = $BillingCity;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingState()
    {
        return $this->BillingState;
    }

    /**
     * @param string $BillingState
     * @return QuotationBaseEntity
     */
    public function withBillingState($BillingState)
    {
        $new = clone $this;
        $new->BillingState = $BillingState;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingStateName()
    {
        return $this->BillingStateName;
    }

    /**
     * @param string $BillingStateName
     * @return QuotationBaseEntity
     */
    public function withBillingStateName($BillingStateName)
    {
        $new = clone $this;
        $new->BillingStateName = $BillingStateName;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingCountryISOCode()
    {
        return $this->BillingCountryISOCode;
    }

    /**
     * @param string $BillingCountryISOCode
     * @return QuotationBaseEntity
     */
    public function withBillingCountryISOCode($BillingCountryISOCode)
    {
        $new = clone $this;
        $new->BillingCountryISOCode = $BillingCountryISOCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingCountryName()
    {
        return $this->BillingCountryName;
    }

    /**
     * @param string $BillingCountryName
     * @return QuotationBaseEntity
     */
    public function withBillingCountryName($BillingCountryName)
    {
        $new = clone $this;
        $new->BillingCountryName = $BillingCountryName;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingPhone()
    {
        return $this->BillingPhone;
    }

    /**
     * @param string $BillingPhone
     * @return QuotationBaseEntity
     */
    public function withBillingPhone($BillingPhone)
    {
        $new = clone $this;
        $new->BillingPhone = $BillingPhone;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingCellPhone()
    {
        return $this->BillingCellPhone;
    }

    /**
     * @param string $BillingCellPhone
     * @return QuotationBaseEntity
     */
    public function withBillingCellPhone($BillingCellPhone)
    {
        $new = clone $this;
        $new->BillingCellPhone = $BillingCellPhone;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillingFax()
    {
        return $this->BillingFax;
    }

    /**
     * @param string $BillingFax
     * @return QuotationBaseEntity
     */
    public function withBillingFax($BillingFax)
    {
        $new = clone $this;
        $new->BillingFax = $BillingFax;

        return $new;
    }

    /**
     * @return string
     */
    public function getCompanyVATNumber()
    {
        return $this->CompanyVATNumber;
    }

    /**
     * @param string $CompanyVATNumber
     * @return QuotationBaseEntity
     */
    public function withCompanyVATNumber($CompanyVATNumber)
    {
        $new = clone $this;
        $new->CompanyVATNumber = $CompanyVATNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingCompany()
    {
        return $this->ShippingCompany;
    }

    /**
     * @param string $ShippingCompany
     * @return QuotationBaseEntity
     */
    public function withShippingCompany($ShippingCompany)
    {
        $new = clone $this;
        $new->ShippingCompany = $ShippingCompany;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingTitle()
    {
        return $this->ShippingTitle;
    }

    /**
     * @param string $ShippingTitle
     * @return QuotationBaseEntity
     */
    public function withShippingTitle($ShippingTitle)
    {
        $new = clone $this;
        $new->ShippingTitle = $ShippingTitle;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingFirstName()
    {
        return $this->ShippingFirstName;
    }

    /**
     * @param string $ShippingFirstName
     * @return QuotationBaseEntity
     */
    public function withShippingFirstName($ShippingFirstName)
    {
        $new = clone $this;
        $new->ShippingFirstName = $ShippingFirstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingLastName()
    {
        return $this->ShippingLastName;
    }

    /**
     * @param string $ShippingLastName
     * @return QuotationBaseEntity
     */
    public function withShippingLastName($ShippingLastName)
    {
        $new = clone $this;
        $new->ShippingLastName = $ShippingLastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }

    /**
     * @param string $ShippingAddress
     * @return QuotationBaseEntity
     */
    public function withShippingAddress($ShippingAddress)
    {
        $new = clone $this;
        $new->ShippingAddress = $ShippingAddress;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAddressL1()
    {
        return $this->ShippingAddressL1;
    }

    /**
     * @param string $ShippingAddressL1
     * @return QuotationBaseEntity
     */
    public function withShippingAddressL1($ShippingAddressL1)
    {
        $new = clone $this;
        $new->ShippingAddressL1 = $ShippingAddressL1;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAddressL2()
    {
        return $this->ShippingAddressL2;
    }

    /**
     * @param string $ShippingAddressL2
     * @return QuotationBaseEntity
     */
    public function withShippingAddressL2($ShippingAddressL2)
    {
        $new = clone $this;
        $new->ShippingAddressL2 = $ShippingAddressL2;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAddressL3()
    {
        return $this->ShippingAddressL3;
    }

    /**
     * @param string $ShippingAddressL3
     * @return QuotationBaseEntity
     */
    public function withShippingAddressL3($ShippingAddressL3)
    {
        $new = clone $this;
        $new->ShippingAddressL3 = $ShippingAddressL3;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAddressL4()
    {
        return $this->ShippingAddressL4;
    }

    /**
     * @param string $ShippingAddressL4
     * @return QuotationBaseEntity
     */
    public function withShippingAddressL4($ShippingAddressL4)
    {
        $new = clone $this;
        $new->ShippingAddressL4 = $ShippingAddressL4;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAddressFloor()
    {
        return $this->ShippingAddressFloor;
    }

    /**
     * @param string $ShippingAddressFloor
     * @return QuotationBaseEntity
     */
    public function withShippingAddressFloor($ShippingAddressFloor)
    {
        $new = clone $this;
        $new->ShippingAddressFloor = $ShippingAddressFloor;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAddressBuilding()
    {
        return $this->ShippingAddressBuilding;
    }

    /**
     * @param string $ShippingAddressBuilding
     * @return QuotationBaseEntity
     */
    public function withShippingAddressBuilding($ShippingAddressBuilding)
    {
        $new = clone $this;
        $new->ShippingAddressBuilding = $ShippingAddressBuilding;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAddressStreet()
    {
        return $this->ShippingAddressStreet;
    }

    /**
     * @param string $ShippingAddressStreet
     * @return QuotationBaseEntity
     */
    public function withShippingAddressStreet($ShippingAddressStreet)
    {
        $new = clone $this;
        $new->ShippingAddressStreet = $ShippingAddressStreet;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingAddressOtherInfo()
    {
        return $this->ShippingAddressOtherInfo;
    }

    /**
     * @param string $ShippingAddressOtherInfo
     * @return QuotationBaseEntity
     */
    public function withShippingAddressOtherInfo($ShippingAddressOtherInfo)
    {
        $new = clone $this;
        $new->ShippingAddressOtherInfo = $ShippingAddressOtherInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingZipCode()
    {
        return $this->ShippingZipCode;
    }

    /**
     * @param string $ShippingZipCode
     * @return QuotationBaseEntity
     */
    public function withShippingZipCode($ShippingZipCode)
    {
        $new = clone $this;
        $new->ShippingZipCode = $ShippingZipCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingCity()
    {
        return $this->ShippingCity;
    }

    /**
     * @param string $ShippingCity
     * @return QuotationBaseEntity
     */
    public function withShippingCity($ShippingCity)
    {
        $new = clone $this;
        $new->ShippingCity = $ShippingCity;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingState()
    {
        return $this->ShippingState;
    }

    /**
     * @param string $ShippingState
     * @return QuotationBaseEntity
     */
    public function withShippingState($ShippingState)
    {
        $new = clone $this;
        $new->ShippingState = $ShippingState;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingStateName()
    {
        return $this->ShippingStateName;
    }

    /**
     * @param string $ShippingStateName
     * @return QuotationBaseEntity
     */
    public function withShippingStateName($ShippingStateName)
    {
        $new = clone $this;
        $new->ShippingStateName = $ShippingStateName;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingCountryISOCode()
    {
        return $this->ShippingCountryISOCode;
    }

    /**
     * @param string $ShippingCountryISOCode
     * @return QuotationBaseEntity
     */
    public function withShippingCountryISOCode($ShippingCountryISOCode)
    {
        $new = clone $this;
        $new->ShippingCountryISOCode = $ShippingCountryISOCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingCountryName()
    {
        return $this->ShippingCountryName;
    }

    /**
     * @param string $ShippingCountryName
     * @return QuotationBaseEntity
     */
    public function withShippingCountryName($ShippingCountryName)
    {
        $new = clone $this;
        $new->ShippingCountryName = $ShippingCountryName;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingPhone()
    {
        return $this->ShippingPhone;
    }

    /**
     * @param string $ShippingPhone
     * @return QuotationBaseEntity
     */
    public function withShippingPhone($ShippingPhone)
    {
        $new = clone $this;
        $new->ShippingPhone = $ShippingPhone;

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
     * @return QuotationBaseEntity
     */
    public function withShippingInfo($ShippingInfo)
    {
        $new = clone $this;
        $new->ShippingInfo = $ShippingInfo;

        return $new;
    }

    /**
     * @return bool
     */
    public function getVATIncluded()
    {
        return $this->VATIncluded;
    }

    /**
     * @param bool $VATIncluded
     * @return QuotationBaseEntity
     */
    public function withVATIncluded($VATIncluded)
    {
        $new = clone $this;
        $new->VATIncluded = $VATIncluded;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEcoTaxIncluded()
    {
        return $this->EcoTaxIncluded;
    }

    /**
     * @param bool $EcoTaxIncluded
     * @return QuotationBaseEntity
     */
    public function withEcoTaxIncluded($EcoTaxIncluded)
    {
        $new = clone $this;
        $new->EcoTaxIncluded = $EcoTaxIncluded;

        return $new;
    }

    /**
     * @return float
     */
    public function getSubTotalNet()
    {
        return $this->SubTotalNet;
    }

    /**
     * @param float $SubTotalNet
     * @return QuotationBaseEntity
     */
    public function withSubTotalNet($SubTotalNet)
    {
        $new = clone $this;
        $new->SubTotalNet = $SubTotalNet;

        return $new;
    }

    /**
     * @return float
     */
    public function getSubTotalNetDiscounted()
    {
        return $this->SubTotalNetDiscounted;
    }

    /**
     * @param float $SubTotalNetDiscounted
     * @return QuotationBaseEntity
     */
    public function withSubTotalNetDiscounted($SubTotalNetDiscounted)
    {
        $new = clone $this;
        $new->SubTotalNetDiscounted = $SubTotalNetDiscounted;

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
     * @return QuotationBaseEntity
     */
    public function withGlobalDiscountRate($GlobalDiscountRate)
    {
        $new = clone $this;
        $new->GlobalDiscountRate = $GlobalDiscountRate;

        return $new;
    }

    /**
     * @return float
     */
    public function getGlobalDiscountAmount()
    {
        return $this->GlobalDiscountAmount;
    }

    /**
     * @param float $GlobalDiscountAmount
     * @return QuotationBaseEntity
     */
    public function withGlobalDiscountAmount($GlobalDiscountAmount)
    {
        $new = clone $this;
        $new->GlobalDiscountAmount = $GlobalDiscountAmount;

        return $new;
    }

    /**
     * @return int
     */
    public function getShippingID()
    {
        return $this->ShippingID;
    }

    /**
     * @param int $ShippingID
     * @return QuotationBaseEntity
     */
    public function withShippingID($ShippingID)
    {
        $new = clone $this;
        $new->ShippingID = $ShippingID;

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
     * @return QuotationBaseEntity
     */
    public function withShippingMethodName($ShippingMethodName)
    {
        $new = clone $this;
        $new->ShippingMethodName = $ShippingMethodName;

        return $new;
    }

    /**
     * @return int
     */
    public function getShippingProcessorCode()
    {
        return $this->ShippingProcessorCode;
    }

    /**
     * @param int $ShippingProcessorCode
     * @return QuotationBaseEntity
     */
    public function withShippingProcessorCode($ShippingProcessorCode)
    {
        $new = clone $this;
        $new->ShippingProcessorCode = $ShippingProcessorCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingParam1()
    {
        return $this->ShippingParam1;
    }

    /**
     * @param string $ShippingParam1
     * @return QuotationBaseEntity
     */
    public function withShippingParam1($ShippingParam1)
    {
        $new = clone $this;
        $new->ShippingParam1 = $ShippingParam1;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingParam2()
    {
        return $this->ShippingParam2;
    }

    /**
     * @param string $ShippingParam2
     * @return QuotationBaseEntity
     */
    public function withShippingParam2($ShippingParam2)
    {
        $new = clone $this;
        $new->ShippingParam2 = $ShippingParam2;

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
     * @return QuotationBaseEntity
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
    public function getShippingPriceTaxIncl()
    {
        return $this->ShippingPriceTaxIncl;
    }

    /**
     * @param float $ShippingPriceTaxIncl
     * @return QuotationBaseEntity
     */
    public function withShippingPriceTaxIncl($ShippingPriceTaxIncl)
    {
        $new = clone $this;
        $new->ShippingPriceTaxIncl = $ShippingPriceTaxIncl;

        return $new;
    }

    /**
     * @return float
     */
    public function getEcoTaxAmountTaxIncl()
    {
        return $this->EcoTaxAmountTaxIncl;
    }

    /**
     * @param float $EcoTaxAmountTaxIncl
     * @return QuotationBaseEntity
     */
    public function withEcoTaxAmountTaxIncl($EcoTaxAmountTaxIncl)
    {
        $new = clone $this;
        $new->EcoTaxAmountTaxIncl = $EcoTaxAmountTaxIncl;

        return $new;
    }

    /**
     * @return string
     */
    public function getCartCoupon()
    {
        return $this->CartCoupon;
    }

    /**
     * @param string $CartCoupon
     * @return QuotationBaseEntity
     */
    public function withCartCoupon($CartCoupon)
    {
        $new = clone $this;
        $new->CartCoupon = $CartCoupon;

        return $new;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->Language;
    }

    /**
     * @param string $Language
     * @return QuotationBaseEntity
     */
    public function withLanguage($Language)
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }

    /**
     * @return string
     */
    public function getRemoteIPAddr()
    {
        return $this->RemoteIPAddr;
    }

    /**
     * @param string $RemoteIPAddr
     * @return QuotationBaseEntity
     */
    public function withRemoteIPAddr($RemoteIPAddr)
    {
        $new = clone $this;
        $new->RemoteIPAddr = $RemoteIPAddr;

        return $new;
    }

    /**
     * @return string
     */
    public function getSalesRepCode()
    {
        return $this->SalesRepCode;
    }

    /**
     * @param string $SalesRepCode
     * @return QuotationBaseEntity
     */
    public function withSalesRepCode($SalesRepCode)
    {
        $new = clone $this;
        $new->SalesRepCode = $SalesRepCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getSalesRepFirstName()
    {
        return $this->SalesRepFirstName;
    }

    /**
     * @param string $SalesRepFirstName
     * @return QuotationBaseEntity
     */
    public function withSalesRepFirstName($SalesRepFirstName)
    {
        $new = clone $this;
        $new->SalesRepFirstName = $SalesRepFirstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getSalesRepLastName()
    {
        return $this->SalesRepLastName;
    }

    /**
     * @param string $SalesRepLastName
     * @return QuotationBaseEntity
     */
    public function withSalesRepLastName($SalesRepLastName)
    {
        $new = clone $this;
        $new->SalesRepLastName = $SalesRepLastName;

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
     * @return QuotationBaseEntity
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
    public function getCurrencyCode()
    {
        return $this->CurrencyCode;
    }

    /**
     * @param string $CurrencyCode
     * @return QuotationBaseEntity
     */
    public function withCurrencyCode($CurrencyCode)
    {
        $new = clone $this;
        $new->CurrencyCode = $CurrencyCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getInternalNote()
    {
        return $this->InternalNote;
    }

    /**
     * @param string $InternalNote
     * @return QuotationBaseEntity
     */
    public function withInternalNote($InternalNote)
    {
        $new = clone $this;
        $new->InternalNote = $InternalNote;

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
     * @return QuotationBaseEntity
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
    public function getCustomFieldText1()
    {
        return $this->CustomFieldText1;
    }

    /**
     * @param string $CustomFieldText1
     * @return QuotationBaseEntity
     */
    public function withCustomFieldText1($CustomFieldText1)
    {
        $new = clone $this;
        $new->CustomFieldText1 = $CustomFieldText1;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomFieldText2()
    {
        return $this->CustomFieldText2;
    }

    /**
     * @param string $CustomFieldText2
     * @return QuotationBaseEntity
     */
    public function withCustomFieldText2($CustomFieldText2)
    {
        $new = clone $this;
        $new->CustomFieldText2 = $CustomFieldText2;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomFieldText3()
    {
        return $this->CustomFieldText3;
    }

    /**
     * @param string $CustomFieldText3
     * @return QuotationBaseEntity
     */
    public function withCustomFieldText3($CustomFieldText3)
    {
        $new = clone $this;
        $new->CustomFieldText3 = $CustomFieldText3;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomFieldText4()
    {
        return $this->CustomFieldText4;
    }

    /**
     * @param string $CustomFieldText4
     * @return QuotationBaseEntity
     */
    public function withCustomFieldText4($CustomFieldText4)
    {
        $new = clone $this;
        $new->CustomFieldText4 = $CustomFieldText4;

        return $new;
    }

    /**
     * @return float
     */
    public function getCustomFieldNumeric1()
    {
        return $this->CustomFieldNumeric1;
    }

    /**
     * @param float $CustomFieldNumeric1
     * @return QuotationBaseEntity
     */
    public function withCustomFieldNumeric1($CustomFieldNumeric1)
    {
        $new = clone $this;
        $new->CustomFieldNumeric1 = $CustomFieldNumeric1;

        return $new;
    }

    /**
     * @return float
     */
    public function getCustomFieldNumeric2()
    {
        return $this->CustomFieldNumeric2;
    }

    /**
     * @param float $CustomFieldNumeric2
     * @return QuotationBaseEntity
     */
    public function withCustomFieldNumeric2($CustomFieldNumeric2)
    {
        $new = clone $this;
        $new->CustomFieldNumeric2 = $CustomFieldNumeric2;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCustomFieldDate()
    {
        return $this->CustomFieldDate;
    }

    /**
     * @param \DateTimeInterface $CustomFieldDate
     * @return QuotationBaseEntity
     */
    public function withCustomFieldDate($CustomFieldDate)
    {
        $new = clone $this;
        $new->CustomFieldDate = $CustomFieldDate;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationTaxDetailEntity
     */
    public function getQuotationTaxDetails()
    {
        return $this->QuotationTaxDetails;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfQuotationTaxDetailEntity $QuotationTaxDetails
     * @return QuotationBaseEntity
     */
    public function withQuotationTaxDetails($QuotationTaxDetails)
    {
        $new = clone $this;
        $new->QuotationTaxDetails = $QuotationTaxDetails;

        return $new;
    }


}

