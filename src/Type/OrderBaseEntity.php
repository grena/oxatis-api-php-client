<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class OrderBaseEntity extends \Heavymind\Oxatis\ApiClient\Type\OrderSummaryEntity
{

    /**
     * @var int
     */
    protected $LoyaltyPointsEarned;

    /**
     * @var int
     */
    protected $LoyaltyPointsUsed;

    /**
     * @var int
     */
    protected $OrderFlags;

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
     * @var string
     */
    protected $TrackingNumberReturn;

    /**
     * @var string
     */
    protected $CustomerCode;

    /**
     * @var bool
     */
    protected $Gift;

    /**
     * @var string
     */
    protected $GiftMessage;

    /**
     * @var \DateTimeInterface
     */
    protected $DispatchDate;

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
     * @var string
     */
    protected $ShippingParam3;

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
     * @var \DateTimeInterface
     */
    protected $LogisticsServiceProviderAccess;

    /**
     * @var string
     */
    protected $LogisticsServiceProviderInstructions;

    /**
     * @var string
     */
    protected $Language;

    /**
     * @var int
     */
    protected $PaymentMethodID;

    /**
     * @var string
     */
    protected $PaymentMethodName;

    /**
     * @var int
     */
    protected $PMProcessorCode;

    /**
     * @var \DateTimeInterface
     */
    protected $PaymentStatusLastModifiedDate;

    /**
     * @var string
     */
    protected $PMPTransactionID;

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
     * @var \DateTimeInterface
     */
    protected $InvoiceDate;

    /**
     * @var string
     */
    protected $InvoiceID;

    /**
     * @var string
     */
    protected $InvoiceFileName;

    /**
     * @var string
     */
    protected $InvoiceURL;

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
    protected $TrackingNumber;

    /**
     * @var string
     */
    protected $SourceOrderID;

    /**
     * @var string
     */
    protected $PointOfSales;

    /**
     * @var \DateTimeInterface
     */
    protected $DateOfDelivery;

    /**
     * @var \DateTimeInterface
     */
    protected $DateOfPicking;

    /**
     * @var int
     */
    protected $InvoiceStep;

    /**
     * @var string
     */
    protected $CustomData;

    /**
     * @var string
     */
    protected $TransportName;

    /**
     * @var string
     */
    protected $TrackingUrl;

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
    protected $ShippingTaxFormula;

    /**
     * @var string
     */
    protected $ShippingAmountTaxList;

    /**
     * @var string
     */
    protected $PMTFeesTaxFormula;

    /**
     * @var string
     */
    protected $PMTFeesAmountTaxList;

    /**
     * @var string
     */
    protected $Comment;

    /**
     * @var int
     */
    protected $ShippingUserAddressID;

    /**
     * @var string
     */
    protected $ShippingUserAddressLabel;

    /**
     * @var float
     */
    protected $PaymentFeesTaxInc;

    /**
     * @var float
     */
    protected $PaymentFeesTaxRate;

    /**
     * @var bool
     */
    protected $CashOnDelivery;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderTaxDetailEntity
     */
    protected $OrderTaxDetails;

    /**
     * @return int
     */
    public function getLoyaltyPointsEarned()
    {
        return $this->LoyaltyPointsEarned;
    }

    /**
     * @param int $LoyaltyPointsEarned
     * @return OrderBaseEntity
     */
    public function withLoyaltyPointsEarned($LoyaltyPointsEarned)
    {
        $new = clone $this;
        $new->LoyaltyPointsEarned = $LoyaltyPointsEarned;

        return $new;
    }

    /**
     * @return int
     */
    public function getLoyaltyPointsUsed()
    {
        return $this->LoyaltyPointsUsed;
    }

    /**
     * @param int $LoyaltyPointsUsed
     * @return OrderBaseEntity
     */
    public function withLoyaltyPointsUsed($LoyaltyPointsUsed)
    {
        $new = clone $this;
        $new->LoyaltyPointsUsed = $LoyaltyPointsUsed;

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
     * @return OrderBaseEntity
     */
    public function withOrderFlags($OrderFlags)
    {
        $new = clone $this;
        $new->OrderFlags = $OrderFlags;

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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
     */
    public function withNAFCode($NAFCode)
    {
        $new = clone $this;
        $new->NAFCode = $NAFCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getTrackingNumberReturn()
    {
        return $this->TrackingNumberReturn;
    }

    /**
     * @param string $TrackingNumberReturn
     * @return OrderBaseEntity
     */
    public function withTrackingNumberReturn($TrackingNumberReturn)
    {
        $new = clone $this;
        $new->TrackingNumberReturn = $TrackingNumberReturn;

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
     * @return OrderBaseEntity
     */
    public function withCustomerCode($CustomerCode)
    {
        $new = clone $this;
        $new->CustomerCode = $CustomerCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getGift()
    {
        return $this->Gift;
    }

    /**
     * @param bool $Gift
     * @return OrderBaseEntity
     */
    public function withGift($Gift)
    {
        $new = clone $this;
        $new->Gift = $Gift;

        return $new;
    }

    /**
     * @return string
     */
    public function getGiftMessage()
    {
        return $this->GiftMessage;
    }

    /**
     * @param string $GiftMessage
     * @return OrderBaseEntity
     */
    public function withGiftMessage($GiftMessage)
    {
        $new = clone $this;
        $new->GiftMessage = $GiftMessage;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDispatchDate()
    {
        return $this->DispatchDate;
    }

    /**
     * @param \DateTimeInterface $DispatchDate
     * @return OrderBaseEntity
     */
    public function withDispatchDate($DispatchDate)
    {
        $new = clone $this;
        $new->DispatchDate = $DispatchDate;

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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
     */
    public function withShippingParam2($ShippingParam2)
    {
        $new = clone $this;
        $new->ShippingParam2 = $ShippingParam2;

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
     * @return OrderBaseEntity
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
    public function getShippingTaxRate()
    {
        return $this->ShippingTaxRate;
    }

    /**
     * @param float $ShippingTaxRate
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
     */
    public function withCartCoupon($CartCoupon)
    {
        $new = clone $this;
        $new->CartCoupon = $CartCoupon;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLogisticsServiceProviderAccess()
    {
        return $this->LogisticsServiceProviderAccess;
    }

    /**
     * @param \DateTimeInterface $LogisticsServiceProviderAccess
     * @return OrderBaseEntity
     */
    public function withLogisticsServiceProviderAccess($LogisticsServiceProviderAccess)
    {
        $new = clone $this;
        $new->LogisticsServiceProviderAccess = $LogisticsServiceProviderAccess;

        return $new;
    }

    /**
     * @return string
     */
    public function getLogisticsServiceProviderInstructions()
    {
        return $this->LogisticsServiceProviderInstructions;
    }

    /**
     * @param string $LogisticsServiceProviderInstructions
     * @return OrderBaseEntity
     */
    public function withLogisticsServiceProviderInstructions($LogisticsServiceProviderInstructions)
    {
        $new = clone $this;
        $new->LogisticsServiceProviderInstructions = $LogisticsServiceProviderInstructions;

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
     * @return OrderBaseEntity
     */
    public function withLanguage($Language)
    {
        $new = clone $this;
        $new->Language = $Language;

        return $new;
    }

    /**
     * @return int
     */
    public function getPaymentMethodID()
    {
        return $this->PaymentMethodID;
    }

    /**
     * @param int $PaymentMethodID
     * @return OrderBaseEntity
     */
    public function withPaymentMethodID($PaymentMethodID)
    {
        $new = clone $this;
        $new->PaymentMethodID = $PaymentMethodID;

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
     * @return OrderBaseEntity
     */
    public function withPaymentMethodName($PaymentMethodName)
    {
        $new = clone $this;
        $new->PaymentMethodName = $PaymentMethodName;

        return $new;
    }

    /**
     * @return int
     */
    public function getPMProcessorCode()
    {
        return $this->PMProcessorCode;
    }

    /**
     * @param int $PMProcessorCode
     * @return OrderBaseEntity
     */
    public function withPMProcessorCode($PMProcessorCode)
    {
        $new = clone $this;
        $new->PMProcessorCode = $PMProcessorCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPaymentStatusLastModifiedDate()
    {
        return $this->PaymentStatusLastModifiedDate;
    }

    /**
     * @param \DateTimeInterface $PaymentStatusLastModifiedDate
     * @return OrderBaseEntity
     */
    public function withPaymentStatusLastModifiedDate($PaymentStatusLastModifiedDate)
    {
        $new = clone $this;
        $new->PaymentStatusLastModifiedDate = $PaymentStatusLastModifiedDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getPMPTransactionID()
    {
        return $this->PMPTransactionID;
    }

    /**
     * @param string $PMPTransactionID
     * @return OrderBaseEntity
     */
    public function withPMPTransactionID($PMPTransactionID)
    {
        $new = clone $this;
        $new->PMPTransactionID = $PMPTransactionID;

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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
     */
    public function withCurrencyCode($CurrencyCode)
    {
        $new = clone $this;
        $new->CurrencyCode = $CurrencyCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getInvoiceDate()
    {
        return $this->InvoiceDate;
    }

    /**
     * @param \DateTimeInterface $InvoiceDate
     * @return OrderBaseEntity
     */
    public function withInvoiceDate($InvoiceDate)
    {
        $new = clone $this;
        $new->InvoiceDate = $InvoiceDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoiceID()
    {
        return $this->InvoiceID;
    }

    /**
     * @param string $InvoiceID
     * @return OrderBaseEntity
     */
    public function withInvoiceID($InvoiceID)
    {
        $new = clone $this;
        $new->InvoiceID = $InvoiceID;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoiceFileName()
    {
        return $this->InvoiceFileName;
    }

    /**
     * @param string $InvoiceFileName
     * @return OrderBaseEntity
     */
    public function withInvoiceFileName($InvoiceFileName)
    {
        $new = clone $this;
        $new->InvoiceFileName = $InvoiceFileName;

        return $new;
    }

    /**
     * @return string
     */
    public function getInvoiceURL()
    {
        return $this->InvoiceURL;
    }

    /**
     * @param string $InvoiceURL
     * @return OrderBaseEntity
     */
    public function withInvoiceURL($InvoiceURL)
    {
        $new = clone $this;
        $new->InvoiceURL = $InvoiceURL;

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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }

    /**
     * @param string $TrackingNumber
     * @return OrderBaseEntity
     */
    public function withTrackingNumber($TrackingNumber)
    {
        $new = clone $this;
        $new->TrackingNumber = $TrackingNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getSourceOrderID()
    {
        return $this->SourceOrderID;
    }

    /**
     * @param string $SourceOrderID
     * @return OrderBaseEntity
     */
    public function withSourceOrderID($SourceOrderID)
    {
        $new = clone $this;
        $new->SourceOrderID = $SourceOrderID;

        return $new;
    }

    /**
     * @return string
     */
    public function getPointOfSales()
    {
        return $this->PointOfSales;
    }

    /**
     * @param string $PointOfSales
     * @return OrderBaseEntity
     */
    public function withPointOfSales($PointOfSales)
    {
        $new = clone $this;
        $new->PointOfSales = $PointOfSales;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateOfDelivery()
    {
        return $this->DateOfDelivery;
    }

    /**
     * @param \DateTimeInterface $DateOfDelivery
     * @return OrderBaseEntity
     */
    public function withDateOfDelivery($DateOfDelivery)
    {
        $new = clone $this;
        $new->DateOfDelivery = $DateOfDelivery;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateOfPicking()
    {
        return $this->DateOfPicking;
    }

    /**
     * @param \DateTimeInterface $DateOfPicking
     * @return OrderBaseEntity
     */
    public function withDateOfPicking($DateOfPicking)
    {
        $new = clone $this;
        $new->DateOfPicking = $DateOfPicking;

        return $new;
    }

    /**
     * @return int
     */
    public function getInvoiceStep()
    {
        return $this->InvoiceStep;
    }

    /**
     * @param int $InvoiceStep
     * @return OrderBaseEntity
     */
    public function withInvoiceStep($InvoiceStep)
    {
        $new = clone $this;
        $new->InvoiceStep = $InvoiceStep;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomData()
    {
        return $this->CustomData;
    }

    /**
     * @param string $CustomData
     * @return OrderBaseEntity
     */
    public function withCustomData($CustomData)
    {
        $new = clone $this;
        $new->CustomData = $CustomData;

        return $new;
    }

    /**
     * @return string
     */
    public function getTransportName()
    {
        return $this->TransportName;
    }

    /**
     * @param string $TransportName
     * @return OrderBaseEntity
     */
    public function withTransportName($TransportName)
    {
        $new = clone $this;
        $new->TransportName = $TransportName;

        return $new;
    }

    /**
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->TrackingUrl;
    }

    /**
     * @param string $TrackingUrl
     * @return OrderBaseEntity
     */
    public function withTrackingUrl($TrackingUrl)
    {
        $new = clone $this;
        $new->TrackingUrl = $TrackingUrl;

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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
     */
    public function withCustomFieldDate($CustomFieldDate)
    {
        $new = clone $this;
        $new->CustomFieldDate = $CustomFieldDate;

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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
     * @return OrderBaseEntity
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
    public function getShippingTaxFormula()
    {
        return $this->ShippingTaxFormula;
    }

    /**
     * @param string $ShippingTaxFormula
     * @return OrderBaseEntity
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
    public function getShippingAmountTaxList()
    {
        return $this->ShippingAmountTaxList;
    }

    /**
     * @param string $ShippingAmountTaxList
     * @return OrderBaseEntity
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
    public function getPMTFeesTaxFormula()
    {
        return $this->PMTFeesTaxFormula;
    }

    /**
     * @param string $PMTFeesTaxFormula
     * @return OrderBaseEntity
     */
    public function withPMTFeesTaxFormula($PMTFeesTaxFormula)
    {
        $new = clone $this;
        $new->PMTFeesTaxFormula = $PMTFeesTaxFormula;

        return $new;
    }

    /**
     * @return string
     */
    public function getPMTFeesAmountTaxList()
    {
        return $this->PMTFeesAmountTaxList;
    }

    /**
     * @param string $PMTFeesAmountTaxList
     * @return OrderBaseEntity
     */
    public function withPMTFeesAmountTaxList($PMTFeesAmountTaxList)
    {
        $new = clone $this;
        $new->PMTFeesAmountTaxList = $PMTFeesAmountTaxList;

        return $new;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     * @return OrderBaseEntity
     */
    public function withComment($Comment)
    {
        $new = clone $this;
        $new->Comment = $Comment;

        return $new;
    }

    /**
     * @return int
     */
    public function getShippingUserAddressID()
    {
        return $this->ShippingUserAddressID;
    }

    /**
     * @param int $ShippingUserAddressID
     * @return OrderBaseEntity
     */
    public function withShippingUserAddressID($ShippingUserAddressID)
    {
        $new = clone $this;
        $new->ShippingUserAddressID = $ShippingUserAddressID;

        return $new;
    }

    /**
     * @return string
     */
    public function getShippingUserAddressLabel()
    {
        return $this->ShippingUserAddressLabel;
    }

    /**
     * @param string $ShippingUserAddressLabel
     * @return OrderBaseEntity
     */
    public function withShippingUserAddressLabel($ShippingUserAddressLabel)
    {
        $new = clone $this;
        $new->ShippingUserAddressLabel = $ShippingUserAddressLabel;

        return $new;
    }

    /**
     * @return float
     */
    public function getPaymentFeesTaxInc()
    {
        return $this->PaymentFeesTaxInc;
    }

    /**
     * @param float $PaymentFeesTaxInc
     * @return OrderBaseEntity
     */
    public function withPaymentFeesTaxInc($PaymentFeesTaxInc)
    {
        $new = clone $this;
        $new->PaymentFeesTaxInc = $PaymentFeesTaxInc;

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
     * @return OrderBaseEntity
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
    public function getCashOnDelivery()
    {
        return $this->CashOnDelivery;
    }

    /**
     * @param bool $CashOnDelivery
     * @return OrderBaseEntity
     */
    public function withCashOnDelivery($CashOnDelivery)
    {
        $new = clone $this;
        $new->CashOnDelivery = $CashOnDelivery;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderTaxDetailEntity
     */
    public function getOrderTaxDetails()
    {
        return $this->OrderTaxDetails;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfOrderTaxDetailEntity $OrderTaxDetails
     * @return OrderBaseEntity
     */
    public function withOrderTaxDetails($OrderTaxDetails)
    {
        $new = clone $this;
        $new->OrderTaxDetails = $OrderTaxDetails;

        return $new;
    }


}

