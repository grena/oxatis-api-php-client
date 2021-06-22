<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing OrderBaseEntityType
 *
 *
 * XSD Type: OrderBaseEntity
 */
class OrderBaseEntityType extends OrderSummaryEntityType
{

    /**
     * @var \DateTime $dispatchDate
     */
    private $dispatchDate = null;

    /**
     * @var string $userEmail
     */
    private $userEmail = null;

    /**
     * @var int $userOxID
     */
    private $userOxID = null;

    /**
     * @var string $billingTitle
     */
    private $billingTitle = null;

    /**
     * @var string $billingCompany
     */
    private $billingCompany = null;

    /**
     * @var string $billingAddress
     */
    private $billingAddress = null;

    /**
     * @var string $billingAddressL1
     */
    private $billingAddressL1 = null;

    /**
     * @var string $billingAddressL2
     */
    private $billingAddressL2 = null;

    /**
     * @var string $billingAddressL3
     */
    private $billingAddressL3 = null;

    /**
     * @var string $billingAddressL4
     */
    private $billingAddressL4 = null;

    /**
     * @var string $billingAddressFloor
     */
    private $billingAddressFloor = null;

    /**
     * @var string $billingAddressBuilding
     */
    private $billingAddressBuilding = null;

    /**
     * @var string $billingAddressStreet
     */
    private $billingAddressStreet = null;

    /**
     * @var string $billingAddressOtherInfo
     */
    private $billingAddressOtherInfo = null;

    /**
     * @var string $billingZipCode
     */
    private $billingZipCode = null;

    /**
     * @var string $billingCity
     */
    private $billingCity = null;

    /**
     * @var string $billingState
     */
    private $billingState = null;

    /**
     * @var string $billingStateName
     */
    private $billingStateName = null;

    /**
     * @var string $billingCountryISOCode
     */
    private $billingCountryISOCode = null;

    /**
     * @var string $billingCountryName
     */
    private $billingCountryName = null;

    /**
     * @var string $billingPhone
     */
    private $billingPhone = null;

    /**
     * @var string $billingCellPhone
     */
    private $billingCellPhone = null;

    /**
     * @var string $billingFax
     */
    private $billingFax = null;

    /**
     * @var string $companyVATNumber
     */
    private $companyVATNumber = null;

    /**
     * @var string $shippingCompany
     */
    private $shippingCompany = null;

    /**
     * @var string $shippingTitle
     */
    private $shippingTitle = null;

    /**
     * @var string $shippingFirstName
     */
    private $shippingFirstName = null;

    /**
     * @var string $shippingLastName
     */
    private $shippingLastName = null;

    /**
     * @var string $shippingAddress
     */
    private $shippingAddress = null;

    /**
     * @var string $shippingAddressL1
     */
    private $shippingAddressL1 = null;

    /**
     * @var string $shippingAddressL2
     */
    private $shippingAddressL2 = null;

    /**
     * @var string $shippingAddressL3
     */
    private $shippingAddressL3 = null;

    /**
     * @var string $shippingAddressL4
     */
    private $shippingAddressL4 = null;

    /**
     * @var string $shippingAddressFloor
     */
    private $shippingAddressFloor = null;

    /**
     * @var string $shippingAddressBuilding
     */
    private $shippingAddressBuilding = null;

    /**
     * @var string $shippingAddressStreet
     */
    private $shippingAddressStreet = null;

    /**
     * @var string $shippingAddressOtherInfo
     */
    private $shippingAddressOtherInfo = null;

    /**
     * @var string $shippingZipCode
     */
    private $shippingZipCode = null;

    /**
     * @var string $shippingCity
     */
    private $shippingCity = null;

    /**
     * @var string $shippingState
     */
    private $shippingState = null;

    /**
     * @var string $shippingStateName
     */
    private $shippingStateName = null;

    /**
     * @var string $shippingCountryISOCode
     */
    private $shippingCountryISOCode = null;

    /**
     * @var string $shippingCountryName
     */
    private $shippingCountryName = null;

    /**
     * @var string $shippingPhone
     */
    private $shippingPhone = null;

    /**
     * @var string $shippingInfo
     */
    private $shippingInfo = null;

    /**
     * @var bool $vATIncluded
     */
    private $vATIncluded = null;

    /**
     * @var bool $ecoTaxIncluded
     */
    private $ecoTaxIncluded = null;

    /**
     * @var float $subTotalNet
     */
    private $subTotalNet = null;

    /**
     * @var float $subTotalNetDiscounted
     */
    private $subTotalNetDiscounted = null;

    /**
     * @var float $globalDiscountRate
     */
    private $globalDiscountRate = null;

    /**
     * @var float $globalDiscountAmount
     */
    private $globalDiscountAmount = null;

    /**
     * @var int $shippingID
     */
    private $shippingID = null;

    /**
     * @var string $shippingMethodName
     */
    private $shippingMethodName = null;

    /**
     * @var int $shippingProcessorCode
     */
    private $shippingProcessorCode = null;

    /**
     * @var string $shippingParam1
     */
    private $shippingParam1 = null;

    /**
     * @var string $shippingParam2
     */
    private $shippingParam2 = null;

    /**
     * @var float $shippingTaxRate
     */
    private $shippingTaxRate = null;

    /**
     * @var float $shippingPriceTaxIncl
     */
    private $shippingPriceTaxIncl = null;

    /**
     * @var float $ecoTaxAmountTaxIncl
     */
    private $ecoTaxAmountTaxIncl = null;

    /**
     * @var string $cartCoupon
     */
    private $cartCoupon = null;

    /**
     * @var \DateTime $logisticsServiceProviderAccess
     */
    private $logisticsServiceProviderAccess = null;

    /**
     * @var string $logisticsServiceProviderInstructions
     */
    private $logisticsServiceProviderInstructions = null;

    /**
     * @var string $language
     */
    private $language = null;

    /**
     * @var string $paymentMethodName
     */
    private $paymentMethodName = null;

    /**
     * @var int $pMProcessorCode
     */
    private $pMProcessorCode = null;

    /**
     * @var \DateTime $paymentStatusLastModifiedDate
     */
    private $paymentStatusLastModifiedDate = null;

    /**
     * @var string $remoteIPAddr
     */
    private $remoteIPAddr = null;

    /**
     * @var string $salesRepCode
     */
    private $salesRepCode = null;

    /**
     * @var string $salesRepFirstName
     */
    private $salesRepFirstName = null;

    /**
     * @var string $salesRepLastName
     */
    private $salesRepLastName = null;

    /**
     * @var string $specialInstructions
     */
    private $specialInstructions = null;

    /**
     * @var string $currencyCode
     */
    private $currencyCode = null;

    /**
     * @var \DateTime $invoiceDate
     */
    private $invoiceDate = null;

    /**
     * @var string $invoiceID
     */
    private $invoiceID = null;

    /**
     * @var string $invoiceFileName
     */
    private $invoiceFileName = null;

    /**
     * @var string $invoiceURL
     */
    private $invoiceURL = null;

    /**
     * @var string $internalNote
     */
    private $internalNote = null;

    /**
     * @var string $fiscalCode
     */
    private $fiscalCode = null;

    /**
     * @var string $trackingNumber
     */
    private $trackingNumber = null;

    /**
     * @var string $sourceOrderID
     */
    private $sourceOrderID = null;

    /**
     * @var string $pointOfSales
     */
    private $pointOfSales = null;

    /**
     * @var \DateTime $dateOfDelivery
     */
    private $dateOfDelivery = null;

    /**
     * @var \DateTime $dateOfPicking
     */
    private $dateOfPicking = null;

    /**
     * @var int $invoiceStep
     */
    private $invoiceStep = null;

    /**
     * @var string $customData
     */
    private $customData = null;

    /**
     * @var string $transportName
     */
    private $transportName = null;

    /**
     * @var string $trackingUrl
     */
    private $trackingUrl = null;

    /**
     * @var string $customFieldText1
     */
    private $customFieldText1 = null;

    /**
     * @var string $customFieldText2
     */
    private $customFieldText2 = null;

    /**
     * @var string $customFieldText3
     */
    private $customFieldText3 = null;

    /**
     * @var string $customFieldText4
     */
    private $customFieldText4 = null;

    /**
     * @var float $customFieldNumeric1
     */
    private $customFieldNumeric1 = null;

    /**
     * @var float $customFieldNumeric2
     */
    private $customFieldNumeric2 = null;

    /**
     * @var \DateTime $customFieldDate
     */
    private $customFieldDate = null;

    /**
     * @var int $shippingUserAddressID
     */
    private $shippingUserAddressID = null;

    /**
     * @var string $shippingUserAddressLabel
     */
    private $shippingUserAddressLabel = null;

    /**
     * @var float $paymentFeesTaxInc
     */
    private $paymentFeesTaxInc = null;

    /**
     * @var float $paymentFeesTaxRate
     */
    private $paymentFeesTaxRate = null;

    /**
     * @var bool $cashOnDelivery
     */
    private $cashOnDelivery = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\OrderTaxDetailEntityType[] $orderTaxDetails
     */
    private $orderTaxDetails = null;

    /**
     * Gets as dispatchDate
     *
     * @return \DateTime
     */
    public function getDispatchDate()
    {
        return $this->dispatchDate;
    }

    /**
     * Sets a new dispatchDate
     *
     * @param \DateTime $dispatchDate
     * @return self
     */
    public function setDispatchDate(\DateTime $dispatchDate = null)
    {
        $this->dispatchDate = $dispatchDate;
        return $this;
    }

    /**
     * Gets as userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }

    /**
     * Sets a new userEmail
     *
     * @param string $userEmail
     * @return self
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    /**
     * Gets as userOxID
     *
     * @return int
     */
    public function getUserOxID()
    {
        return $this->userOxID;
    }

    /**
     * Sets a new userOxID
     *
     * @param int $userOxID
     * @return self
     */
    public function setUserOxID($userOxID)
    {
        $this->userOxID = $userOxID;
        return $this;
    }

    /**
     * Gets as billingTitle
     *
     * @return string
     */
    public function getBillingTitle()
    {
        return $this->billingTitle;
    }

    /**
     * Sets a new billingTitle
     *
     * @param string $billingTitle
     * @return self
     */
    public function setBillingTitle($billingTitle)
    {
        $this->billingTitle = $billingTitle;
        return $this;
    }

    /**
     * Gets as billingCompany
     *
     * @return string
     */
    public function getBillingCompany()
    {
        return $this->billingCompany;
    }

    /**
     * Sets a new billingCompany
     *
     * @param string $billingCompany
     * @return self
     */
    public function setBillingCompany($billingCompany)
    {
        $this->billingCompany = $billingCompany;
        return $this;
    }

    /**
     * Gets as billingAddress
     *
     * @return string
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Sets a new billingAddress
     *
     * @param string $billingAddress
     * @return self
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    /**
     * Gets as billingAddressL1
     *
     * @return string
     */
    public function getBillingAddressL1()
    {
        return $this->billingAddressL1;
    }

    /**
     * Sets a new billingAddressL1
     *
     * @param string $billingAddressL1
     * @return self
     */
    public function setBillingAddressL1($billingAddressL1)
    {
        $this->billingAddressL1 = $billingAddressL1;
        return $this;
    }

    /**
     * Gets as billingAddressL2
     *
     * @return string
     */
    public function getBillingAddressL2()
    {
        return $this->billingAddressL2;
    }

    /**
     * Sets a new billingAddressL2
     *
     * @param string $billingAddressL2
     * @return self
     */
    public function setBillingAddressL2($billingAddressL2)
    {
        $this->billingAddressL2 = $billingAddressL2;
        return $this;
    }

    /**
     * Gets as billingAddressL3
     *
     * @return string
     */
    public function getBillingAddressL3()
    {
        return $this->billingAddressL3;
    }

    /**
     * Sets a new billingAddressL3
     *
     * @param string $billingAddressL3
     * @return self
     */
    public function setBillingAddressL3($billingAddressL3)
    {
        $this->billingAddressL3 = $billingAddressL3;
        return $this;
    }

    /**
     * Gets as billingAddressL4
     *
     * @return string
     */
    public function getBillingAddressL4()
    {
        return $this->billingAddressL4;
    }

    /**
     * Sets a new billingAddressL4
     *
     * @param string $billingAddressL4
     * @return self
     */
    public function setBillingAddressL4($billingAddressL4)
    {
        $this->billingAddressL4 = $billingAddressL4;
        return $this;
    }

    /**
     * Gets as billingAddressFloor
     *
     * @return string
     */
    public function getBillingAddressFloor()
    {
        return $this->billingAddressFloor;
    }

    /**
     * Sets a new billingAddressFloor
     *
     * @param string $billingAddressFloor
     * @return self
     */
    public function setBillingAddressFloor($billingAddressFloor)
    {
        $this->billingAddressFloor = $billingAddressFloor;
        return $this;
    }

    /**
     * Gets as billingAddressBuilding
     *
     * @return string
     */
    public function getBillingAddressBuilding()
    {
        return $this->billingAddressBuilding;
    }

    /**
     * Sets a new billingAddressBuilding
     *
     * @param string $billingAddressBuilding
     * @return self
     */
    public function setBillingAddressBuilding($billingAddressBuilding)
    {
        $this->billingAddressBuilding = $billingAddressBuilding;
        return $this;
    }

    /**
     * Gets as billingAddressStreet
     *
     * @return string
     */
    public function getBillingAddressStreet()
    {
        return $this->billingAddressStreet;
    }

    /**
     * Sets a new billingAddressStreet
     *
     * @param string $billingAddressStreet
     * @return self
     */
    public function setBillingAddressStreet($billingAddressStreet)
    {
        $this->billingAddressStreet = $billingAddressStreet;
        return $this;
    }

    /**
     * Gets as billingAddressOtherInfo
     *
     * @return string
     */
    public function getBillingAddressOtherInfo()
    {
        return $this->billingAddressOtherInfo;
    }

    /**
     * Sets a new billingAddressOtherInfo
     *
     * @param string $billingAddressOtherInfo
     * @return self
     */
    public function setBillingAddressOtherInfo($billingAddressOtherInfo)
    {
        $this->billingAddressOtherInfo = $billingAddressOtherInfo;
        return $this;
    }

    /**
     * Gets as billingZipCode
     *
     * @return string
     */
    public function getBillingZipCode()
    {
        return $this->billingZipCode;
    }

    /**
     * Sets a new billingZipCode
     *
     * @param string $billingZipCode
     * @return self
     */
    public function setBillingZipCode($billingZipCode)
    {
        $this->billingZipCode = $billingZipCode;
        return $this;
    }

    /**
     * Gets as billingCity
     *
     * @return string
     */
    public function getBillingCity()
    {
        return $this->billingCity;
    }

    /**
     * Sets a new billingCity
     *
     * @param string $billingCity
     * @return self
     */
    public function setBillingCity($billingCity)
    {
        $this->billingCity = $billingCity;
        return $this;
    }

    /**
     * Gets as billingState
     *
     * @return string
     */
    public function getBillingState()
    {
        return $this->billingState;
    }

    /**
     * Sets a new billingState
     *
     * @param string $billingState
     * @return self
     */
    public function setBillingState($billingState)
    {
        $this->billingState = $billingState;
        return $this;
    }

    /**
     * Gets as billingStateName
     *
     * @return string
     */
    public function getBillingStateName()
    {
        return $this->billingStateName;
    }

    /**
     * Sets a new billingStateName
     *
     * @param string $billingStateName
     * @return self
     */
    public function setBillingStateName($billingStateName)
    {
        $this->billingStateName = $billingStateName;
        return $this;
    }

    /**
     * Gets as billingCountryISOCode
     *
     * @return string
     */
    public function getBillingCountryISOCode()
    {
        return $this->billingCountryISOCode;
    }

    /**
     * Sets a new billingCountryISOCode
     *
     * @param string $billingCountryISOCode
     * @return self
     */
    public function setBillingCountryISOCode($billingCountryISOCode)
    {
        $this->billingCountryISOCode = $billingCountryISOCode;
        return $this;
    }

    /**
     * Gets as billingCountryName
     *
     * @return string
     */
    public function getBillingCountryName()
    {
        return $this->billingCountryName;
    }

    /**
     * Sets a new billingCountryName
     *
     * @param string $billingCountryName
     * @return self
     */
    public function setBillingCountryName($billingCountryName)
    {
        $this->billingCountryName = $billingCountryName;
        return $this;
    }

    /**
     * Gets as billingPhone
     *
     * @return string
     */
    public function getBillingPhone()
    {
        return $this->billingPhone;
    }

    /**
     * Sets a new billingPhone
     *
     * @param string $billingPhone
     * @return self
     */
    public function setBillingPhone($billingPhone)
    {
        $this->billingPhone = $billingPhone;
        return $this;
    }

    /**
     * Gets as billingCellPhone
     *
     * @return string
     */
    public function getBillingCellPhone()
    {
        return $this->billingCellPhone;
    }

    /**
     * Sets a new billingCellPhone
     *
     * @param string $billingCellPhone
     * @return self
     */
    public function setBillingCellPhone($billingCellPhone)
    {
        $this->billingCellPhone = $billingCellPhone;
        return $this;
    }

    /**
     * Gets as billingFax
     *
     * @return string
     */
    public function getBillingFax()
    {
        return $this->billingFax;
    }

    /**
     * Sets a new billingFax
     *
     * @param string $billingFax
     * @return self
     */
    public function setBillingFax($billingFax)
    {
        $this->billingFax = $billingFax;
        return $this;
    }

    /**
     * Gets as companyVATNumber
     *
     * @return string
     */
    public function getCompanyVATNumber()
    {
        return $this->companyVATNumber;
    }

    /**
     * Sets a new companyVATNumber
     *
     * @param string $companyVATNumber
     * @return self
     */
    public function setCompanyVATNumber($companyVATNumber)
    {
        $this->companyVATNumber = $companyVATNumber;
        return $this;
    }

    /**
     * Gets as shippingCompany
     *
     * @return string
     */
    public function getShippingCompany()
    {
        return $this->shippingCompany;
    }

    /**
     * Sets a new shippingCompany
     *
     * @param string $shippingCompany
     * @return self
     */
    public function setShippingCompany($shippingCompany)
    {
        $this->shippingCompany = $shippingCompany;
        return $this;
    }

    /**
     * Gets as shippingTitle
     *
     * @return string
     */
    public function getShippingTitle()
    {
        return $this->shippingTitle;
    }

    /**
     * Sets a new shippingTitle
     *
     * @param string $shippingTitle
     * @return self
     */
    public function setShippingTitle($shippingTitle)
    {
        $this->shippingTitle = $shippingTitle;
        return $this;
    }

    /**
     * Gets as shippingFirstName
     *
     * @return string
     */
    public function getShippingFirstName()
    {
        return $this->shippingFirstName;
    }

    /**
     * Sets a new shippingFirstName
     *
     * @param string $shippingFirstName
     * @return self
     */
    public function setShippingFirstName($shippingFirstName)
    {
        $this->shippingFirstName = $shippingFirstName;
        return $this;
    }

    /**
     * Gets as shippingLastName
     *
     * @return string
     */
    public function getShippingLastName()
    {
        return $this->shippingLastName;
    }

    /**
     * Sets a new shippingLastName
     *
     * @param string $shippingLastName
     * @return self
     */
    public function setShippingLastName($shippingLastName)
    {
        $this->shippingLastName = $shippingLastName;
        return $this;
    }

    /**
     * Gets as shippingAddress
     *
     * @return string
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Sets a new shippingAddress
     *
     * @param string $shippingAddress
     * @return self
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
        return $this;
    }

    /**
     * Gets as shippingAddressL1
     *
     * @return string
     */
    public function getShippingAddressL1()
    {
        return $this->shippingAddressL1;
    }

    /**
     * Sets a new shippingAddressL1
     *
     * @param string $shippingAddressL1
     * @return self
     */
    public function setShippingAddressL1($shippingAddressL1)
    {
        $this->shippingAddressL1 = $shippingAddressL1;
        return $this;
    }

    /**
     * Gets as shippingAddressL2
     *
     * @return string
     */
    public function getShippingAddressL2()
    {
        return $this->shippingAddressL2;
    }

    /**
     * Sets a new shippingAddressL2
     *
     * @param string $shippingAddressL2
     * @return self
     */
    public function setShippingAddressL2($shippingAddressL2)
    {
        $this->shippingAddressL2 = $shippingAddressL2;
        return $this;
    }

    /**
     * Gets as shippingAddressL3
     *
     * @return string
     */
    public function getShippingAddressL3()
    {
        return $this->shippingAddressL3;
    }

    /**
     * Sets a new shippingAddressL3
     *
     * @param string $shippingAddressL3
     * @return self
     */
    public function setShippingAddressL3($shippingAddressL3)
    {
        $this->shippingAddressL3 = $shippingAddressL3;
        return $this;
    }

    /**
     * Gets as shippingAddressL4
     *
     * @return string
     */
    public function getShippingAddressL4()
    {
        return $this->shippingAddressL4;
    }

    /**
     * Sets a new shippingAddressL4
     *
     * @param string $shippingAddressL4
     * @return self
     */
    public function setShippingAddressL4($shippingAddressL4)
    {
        $this->shippingAddressL4 = $shippingAddressL4;
        return $this;
    }

    /**
     * Gets as shippingAddressFloor
     *
     * @return string
     */
    public function getShippingAddressFloor()
    {
        return $this->shippingAddressFloor;
    }

    /**
     * Sets a new shippingAddressFloor
     *
     * @param string $shippingAddressFloor
     * @return self
     */
    public function setShippingAddressFloor($shippingAddressFloor)
    {
        $this->shippingAddressFloor = $shippingAddressFloor;
        return $this;
    }

    /**
     * Gets as shippingAddressBuilding
     *
     * @return string
     */
    public function getShippingAddressBuilding()
    {
        return $this->shippingAddressBuilding;
    }

    /**
     * Sets a new shippingAddressBuilding
     *
     * @param string $shippingAddressBuilding
     * @return self
     */
    public function setShippingAddressBuilding($shippingAddressBuilding)
    {
        $this->shippingAddressBuilding = $shippingAddressBuilding;
        return $this;
    }

    /**
     * Gets as shippingAddressStreet
     *
     * @return string
     */
    public function getShippingAddressStreet()
    {
        return $this->shippingAddressStreet;
    }

    /**
     * Sets a new shippingAddressStreet
     *
     * @param string $shippingAddressStreet
     * @return self
     */
    public function setShippingAddressStreet($shippingAddressStreet)
    {
        $this->shippingAddressStreet = $shippingAddressStreet;
        return $this;
    }

    /**
     * Gets as shippingAddressOtherInfo
     *
     * @return string
     */
    public function getShippingAddressOtherInfo()
    {
        return $this->shippingAddressOtherInfo;
    }

    /**
     * Sets a new shippingAddressOtherInfo
     *
     * @param string $shippingAddressOtherInfo
     * @return self
     */
    public function setShippingAddressOtherInfo($shippingAddressOtherInfo)
    {
        $this->shippingAddressOtherInfo = $shippingAddressOtherInfo;
        return $this;
    }

    /**
     * Gets as shippingZipCode
     *
     * @return string
     */
    public function getShippingZipCode()
    {
        return $this->shippingZipCode;
    }

    /**
     * Sets a new shippingZipCode
     *
     * @param string $shippingZipCode
     * @return self
     */
    public function setShippingZipCode($shippingZipCode)
    {
        $this->shippingZipCode = $shippingZipCode;
        return $this;
    }

    /**
     * Gets as shippingCity
     *
     * @return string
     */
    public function getShippingCity()
    {
        return $this->shippingCity;
    }

    /**
     * Sets a new shippingCity
     *
     * @param string $shippingCity
     * @return self
     */
    public function setShippingCity($shippingCity)
    {
        $this->shippingCity = $shippingCity;
        return $this;
    }

    /**
     * Gets as shippingState
     *
     * @return string
     */
    public function getShippingState()
    {
        return $this->shippingState;
    }

    /**
     * Sets a new shippingState
     *
     * @param string $shippingState
     * @return self
     */
    public function setShippingState($shippingState)
    {
        $this->shippingState = $shippingState;
        return $this;
    }

    /**
     * Gets as shippingStateName
     *
     * @return string
     */
    public function getShippingStateName()
    {
        return $this->shippingStateName;
    }

    /**
     * Sets a new shippingStateName
     *
     * @param string $shippingStateName
     * @return self
     */
    public function setShippingStateName($shippingStateName)
    {
        $this->shippingStateName = $shippingStateName;
        return $this;
    }

    /**
     * Gets as shippingCountryISOCode
     *
     * @return string
     */
    public function getShippingCountryISOCode()
    {
        return $this->shippingCountryISOCode;
    }

    /**
     * Sets a new shippingCountryISOCode
     *
     * @param string $shippingCountryISOCode
     * @return self
     */
    public function setShippingCountryISOCode($shippingCountryISOCode)
    {
        $this->shippingCountryISOCode = $shippingCountryISOCode;
        return $this;
    }

    /**
     * Gets as shippingCountryName
     *
     * @return string
     */
    public function getShippingCountryName()
    {
        return $this->shippingCountryName;
    }

    /**
     * Sets a new shippingCountryName
     *
     * @param string $shippingCountryName
     * @return self
     */
    public function setShippingCountryName($shippingCountryName)
    {
        $this->shippingCountryName = $shippingCountryName;
        return $this;
    }

    /**
     * Gets as shippingPhone
     *
     * @return string
     */
    public function getShippingPhone()
    {
        return $this->shippingPhone;
    }

    /**
     * Sets a new shippingPhone
     *
     * @param string $shippingPhone
     * @return self
     */
    public function setShippingPhone($shippingPhone)
    {
        $this->shippingPhone = $shippingPhone;
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
     * Gets as vATIncluded
     *
     * @return bool
     */
    public function getVATIncluded()
    {
        return $this->vATIncluded;
    }

    /**
     * Sets a new vATIncluded
     *
     * @param bool $vATIncluded
     * @return self
     */
    public function setVATIncluded($vATIncluded)
    {
        $this->vATIncluded = $vATIncluded;
        return $this;
    }

    /**
     * Gets as ecoTaxIncluded
     *
     * @return bool
     */
    public function getEcoTaxIncluded()
    {
        return $this->ecoTaxIncluded;
    }

    /**
     * Sets a new ecoTaxIncluded
     *
     * @param bool $ecoTaxIncluded
     * @return self
     */
    public function setEcoTaxIncluded($ecoTaxIncluded)
    {
        $this->ecoTaxIncluded = $ecoTaxIncluded;
        return $this;
    }

    /**
     * Gets as subTotalNet
     *
     * @return float
     */
    public function getSubTotalNet()
    {
        return $this->subTotalNet;
    }

    /**
     * Sets a new subTotalNet
     *
     * @param float $subTotalNet
     * @return self
     */
    public function setSubTotalNet($subTotalNet)
    {
        $this->subTotalNet = $subTotalNet;
        return $this;
    }

    /**
     * Gets as subTotalNetDiscounted
     *
     * @return float
     */
    public function getSubTotalNetDiscounted()
    {
        return $this->subTotalNetDiscounted;
    }

    /**
     * Sets a new subTotalNetDiscounted
     *
     * @param float $subTotalNetDiscounted
     * @return self
     */
    public function setSubTotalNetDiscounted($subTotalNetDiscounted)
    {
        $this->subTotalNetDiscounted = $subTotalNetDiscounted;
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
     * Gets as globalDiscountAmount
     *
     * @return float
     */
    public function getGlobalDiscountAmount()
    {
        return $this->globalDiscountAmount;
    }

    /**
     * Sets a new globalDiscountAmount
     *
     * @param float $globalDiscountAmount
     * @return self
     */
    public function setGlobalDiscountAmount($globalDiscountAmount)
    {
        $this->globalDiscountAmount = $globalDiscountAmount;
        return $this;
    }

    /**
     * Gets as shippingID
     *
     * @return int
     */
    public function getShippingID()
    {
        return $this->shippingID;
    }

    /**
     * Sets a new shippingID
     *
     * @param int $shippingID
     * @return self
     */
    public function setShippingID($shippingID)
    {
        $this->shippingID = $shippingID;
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
     * Gets as shippingProcessorCode
     *
     * @return int
     */
    public function getShippingProcessorCode()
    {
        return $this->shippingProcessorCode;
    }

    /**
     * Sets a new shippingProcessorCode
     *
     * @param int $shippingProcessorCode
     * @return self
     */
    public function setShippingProcessorCode($shippingProcessorCode)
    {
        $this->shippingProcessorCode = $shippingProcessorCode;
        return $this;
    }

    /**
     * Gets as shippingParam1
     *
     * @return string
     */
    public function getShippingParam1()
    {
        return $this->shippingParam1;
    }

    /**
     * Sets a new shippingParam1
     *
     * @param string $shippingParam1
     * @return self
     */
    public function setShippingParam1($shippingParam1)
    {
        $this->shippingParam1 = $shippingParam1;
        return $this;
    }

    /**
     * Gets as shippingParam2
     *
     * @return string
     */
    public function getShippingParam2()
    {
        return $this->shippingParam2;
    }

    /**
     * Sets a new shippingParam2
     *
     * @param string $shippingParam2
     * @return self
     */
    public function setShippingParam2($shippingParam2)
    {
        $this->shippingParam2 = $shippingParam2;
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
     * Gets as shippingPriceTaxIncl
     *
     * @return float
     */
    public function getShippingPriceTaxIncl()
    {
        return $this->shippingPriceTaxIncl;
    }

    /**
     * Sets a new shippingPriceTaxIncl
     *
     * @param float $shippingPriceTaxIncl
     * @return self
     */
    public function setShippingPriceTaxIncl($shippingPriceTaxIncl)
    {
        $this->shippingPriceTaxIncl = $shippingPriceTaxIncl;
        return $this;
    }

    /**
     * Gets as ecoTaxAmountTaxIncl
     *
     * @return float
     */
    public function getEcoTaxAmountTaxIncl()
    {
        return $this->ecoTaxAmountTaxIncl;
    }

    /**
     * Sets a new ecoTaxAmountTaxIncl
     *
     * @param float $ecoTaxAmountTaxIncl
     * @return self
     */
    public function setEcoTaxAmountTaxIncl($ecoTaxAmountTaxIncl)
    {
        $this->ecoTaxAmountTaxIncl = $ecoTaxAmountTaxIncl;
        return $this;
    }

    /**
     * Gets as cartCoupon
     *
     * @return string
     */
    public function getCartCoupon()
    {
        return $this->cartCoupon;
    }

    /**
     * Sets a new cartCoupon
     *
     * @param string $cartCoupon
     * @return self
     */
    public function setCartCoupon($cartCoupon)
    {
        $this->cartCoupon = $cartCoupon;
        return $this;
    }

    /**
     * Gets as logisticsServiceProviderAccess
     *
     * @return \DateTime
     */
    public function getLogisticsServiceProviderAccess()
    {
        return $this->logisticsServiceProviderAccess;
    }

    /**
     * Sets a new logisticsServiceProviderAccess
     *
     * @param \DateTime $logisticsServiceProviderAccess
     * @return self
     */
    public function setLogisticsServiceProviderAccess(\DateTime $logisticsServiceProviderAccess = null)
    {
        $this->logisticsServiceProviderAccess = $logisticsServiceProviderAccess;
        return $this;
    }

    /**
     * Gets as logisticsServiceProviderInstructions
     *
     * @return string
     */
    public function getLogisticsServiceProviderInstructions()
    {
        return $this->logisticsServiceProviderInstructions;
    }

    /**
     * Sets a new logisticsServiceProviderInstructions
     *
     * @param string $logisticsServiceProviderInstructions
     * @return self
     */
    public function setLogisticsServiceProviderInstructions($logisticsServiceProviderInstructions)
    {
        $this->logisticsServiceProviderInstructions = $logisticsServiceProviderInstructions;
        return $this;
    }

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
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
     * Gets as pMProcessorCode
     *
     * @return int
     */
    public function getPMProcessorCode()
    {
        return $this->pMProcessorCode;
    }

    /**
     * Sets a new pMProcessorCode
     *
     * @param int $pMProcessorCode
     * @return self
     */
    public function setPMProcessorCode($pMProcessorCode)
    {
        $this->pMProcessorCode = $pMProcessorCode;
        return $this;
    }

    /**
     * Gets as paymentStatusLastModifiedDate
     *
     * @return \DateTime
     */
    public function getPaymentStatusLastModifiedDate()
    {
        return $this->paymentStatusLastModifiedDate;
    }

    /**
     * Sets a new paymentStatusLastModifiedDate
     *
     * @param \DateTime $paymentStatusLastModifiedDate
     * @return self
     */
    public function setPaymentStatusLastModifiedDate(\DateTime $paymentStatusLastModifiedDate = null)
    {
        $this->paymentStatusLastModifiedDate = $paymentStatusLastModifiedDate;
        return $this;
    }

    /**
     * Gets as remoteIPAddr
     *
     * @return string
     */
    public function getRemoteIPAddr()
    {
        return $this->remoteIPAddr;
    }

    /**
     * Sets a new remoteIPAddr
     *
     * @param string $remoteIPAddr
     * @return self
     */
    public function setRemoteIPAddr($remoteIPAddr)
    {
        $this->remoteIPAddr = $remoteIPAddr;
        return $this;
    }

    /**
     * Gets as salesRepCode
     *
     * @return string
     */
    public function getSalesRepCode()
    {
        return $this->salesRepCode;
    }

    /**
     * Sets a new salesRepCode
     *
     * @param string $salesRepCode
     * @return self
     */
    public function setSalesRepCode($salesRepCode)
    {
        $this->salesRepCode = $salesRepCode;
        return $this;
    }

    /**
     * Gets as salesRepFirstName
     *
     * @return string
     */
    public function getSalesRepFirstName()
    {
        return $this->salesRepFirstName;
    }

    /**
     * Sets a new salesRepFirstName
     *
     * @param string $salesRepFirstName
     * @return self
     */
    public function setSalesRepFirstName($salesRepFirstName)
    {
        $this->salesRepFirstName = $salesRepFirstName;
        return $this;
    }

    /**
     * Gets as salesRepLastName
     *
     * @return string
     */
    public function getSalesRepLastName()
    {
        return $this->salesRepLastName;
    }

    /**
     * Sets a new salesRepLastName
     *
     * @param string $salesRepLastName
     * @return self
     */
    public function setSalesRepLastName($salesRepLastName)
    {
        $this->salesRepLastName = $salesRepLastName;
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
     * Gets as currencyCode
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Sets a new currencyCode
     *
     * @param string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Gets as invoiceDate
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Sets a new invoiceDate
     *
     * @param \DateTime $invoiceDate
     * @return self
     */
    public function setInvoiceDate(\DateTime $invoiceDate = null)
    {
        $this->invoiceDate = $invoiceDate;
        return $this;
    }

    /**
     * Gets as invoiceID
     *
     * @return string
     */
    public function getInvoiceID()
    {
        return $this->invoiceID;
    }

    /**
     * Sets a new invoiceID
     *
     * @param string $invoiceID
     * @return self
     */
    public function setInvoiceID($invoiceID)
    {
        $this->invoiceID = $invoiceID;
        return $this;
    }

    /**
     * Gets as invoiceFileName
     *
     * @return string
     */
    public function getInvoiceFileName()
    {
        return $this->invoiceFileName;
    }

    /**
     * Sets a new invoiceFileName
     *
     * @param string $invoiceFileName
     * @return self
     */
    public function setInvoiceFileName($invoiceFileName)
    {
        $this->invoiceFileName = $invoiceFileName;
        return $this;
    }

    /**
     * Gets as invoiceURL
     *
     * @return string
     */
    public function getInvoiceURL()
    {
        return $this->invoiceURL;
    }

    /**
     * Sets a new invoiceURL
     *
     * @param string $invoiceURL
     * @return self
     */
    public function setInvoiceURL($invoiceURL)
    {
        $this->invoiceURL = $invoiceURL;
        return $this;
    }

    /**
     * Gets as internalNote
     *
     * @return string
     */
    public function getInternalNote()
    {
        return $this->internalNote;
    }

    /**
     * Sets a new internalNote
     *
     * @param string $internalNote
     * @return self
     */
    public function setInternalNote($internalNote)
    {
        $this->internalNote = $internalNote;
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
     * Gets as trackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->trackingNumber;
    }

    /**
     * Sets a new trackingNumber
     *
     * @param string $trackingNumber
     * @return self
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    /**
     * Gets as sourceOrderID
     *
     * @return string
     */
    public function getSourceOrderID()
    {
        return $this->sourceOrderID;
    }

    /**
     * Sets a new sourceOrderID
     *
     * @param string $sourceOrderID
     * @return self
     */
    public function setSourceOrderID($sourceOrderID)
    {
        $this->sourceOrderID = $sourceOrderID;
        return $this;
    }

    /**
     * Gets as pointOfSales
     *
     * @return string
     */
    public function getPointOfSales()
    {
        return $this->pointOfSales;
    }

    /**
     * Sets a new pointOfSales
     *
     * @param string $pointOfSales
     * @return self
     */
    public function setPointOfSales($pointOfSales)
    {
        $this->pointOfSales = $pointOfSales;
        return $this;
    }

    /**
     * Gets as dateOfDelivery
     *
     * @return \DateTime
     */
    public function getDateOfDelivery()
    {
        return $this->dateOfDelivery;
    }

    /**
     * Sets a new dateOfDelivery
     *
     * @param \DateTime $dateOfDelivery
     * @return self
     */
    public function setDateOfDelivery(\DateTime $dateOfDelivery = null)
    {
        $this->dateOfDelivery = $dateOfDelivery;
        return $this;
    }

    /**
     * Gets as dateOfPicking
     *
     * @return \DateTime
     */
    public function getDateOfPicking()
    {
        return $this->dateOfPicking;
    }

    /**
     * Sets a new dateOfPicking
     *
     * @param \DateTime $dateOfPicking
     * @return self
     */
    public function setDateOfPicking(\DateTime $dateOfPicking = null)
    {
        $this->dateOfPicking = $dateOfPicking;
        return $this;
    }

    /**
     * Gets as invoiceStep
     *
     * @return int
     */
    public function getInvoiceStep()
    {
        return $this->invoiceStep;
    }

    /**
     * Sets a new invoiceStep
     *
     * @param int $invoiceStep
     * @return self
     */
    public function setInvoiceStep($invoiceStep)
    {
        $this->invoiceStep = $invoiceStep;
        return $this;
    }

    /**
     * Gets as customData
     *
     * @return string
     */
    public function getCustomData()
    {
        return $this->customData;
    }

    /**
     * Sets a new customData
     *
     * @param string $customData
     * @return self
     */
    public function setCustomData($customData)
    {
        $this->customData = $customData;
        return $this;
    }

    /**
     * Gets as transportName
     *
     * @return string
     */
    public function getTransportName()
    {
        return $this->transportName;
    }

    /**
     * Sets a new transportName
     *
     * @param string $transportName
     * @return self
     */
    public function setTransportName($transportName)
    {
        $this->transportName = $transportName;
        return $this;
    }

    /**
     * Gets as trackingUrl
     *
     * @return string
     */
    public function getTrackingUrl()
    {
        return $this->trackingUrl;
    }

    /**
     * Sets a new trackingUrl
     *
     * @param string $trackingUrl
     * @return self
     */
    public function setTrackingUrl($trackingUrl)
    {
        $this->trackingUrl = $trackingUrl;
        return $this;
    }

    /**
     * Gets as customFieldText1
     *
     * @return string
     */
    public function getCustomFieldText1()
    {
        return $this->customFieldText1;
    }

    /**
     * Sets a new customFieldText1
     *
     * @param string $customFieldText1
     * @return self
     */
    public function setCustomFieldText1($customFieldText1)
    {
        $this->customFieldText1 = $customFieldText1;
        return $this;
    }

    /**
     * Gets as customFieldText2
     *
     * @return string
     */
    public function getCustomFieldText2()
    {
        return $this->customFieldText2;
    }

    /**
     * Sets a new customFieldText2
     *
     * @param string $customFieldText2
     * @return self
     */
    public function setCustomFieldText2($customFieldText2)
    {
        $this->customFieldText2 = $customFieldText2;
        return $this;
    }

    /**
     * Gets as customFieldText3
     *
     * @return string
     */
    public function getCustomFieldText3()
    {
        return $this->customFieldText3;
    }

    /**
     * Sets a new customFieldText3
     *
     * @param string $customFieldText3
     * @return self
     */
    public function setCustomFieldText3($customFieldText3)
    {
        $this->customFieldText3 = $customFieldText3;
        return $this;
    }

    /**
     * Gets as customFieldText4
     *
     * @return string
     */
    public function getCustomFieldText4()
    {
        return $this->customFieldText4;
    }

    /**
     * Sets a new customFieldText4
     *
     * @param string $customFieldText4
     * @return self
     */
    public function setCustomFieldText4($customFieldText4)
    {
        $this->customFieldText4 = $customFieldText4;
        return $this;
    }

    /**
     * Gets as customFieldNumeric1
     *
     * @return float
     */
    public function getCustomFieldNumeric1()
    {
        return $this->customFieldNumeric1;
    }

    /**
     * Sets a new customFieldNumeric1
     *
     * @param float $customFieldNumeric1
     * @return self
     */
    public function setCustomFieldNumeric1($customFieldNumeric1)
    {
        $this->customFieldNumeric1 = $customFieldNumeric1;
        return $this;
    }

    /**
     * Gets as customFieldNumeric2
     *
     * @return float
     */
    public function getCustomFieldNumeric2()
    {
        return $this->customFieldNumeric2;
    }

    /**
     * Sets a new customFieldNumeric2
     *
     * @param float $customFieldNumeric2
     * @return self
     */
    public function setCustomFieldNumeric2($customFieldNumeric2)
    {
        $this->customFieldNumeric2 = $customFieldNumeric2;
        return $this;
    }

    /**
     * Gets as customFieldDate
     *
     * @return \DateTime
     */
    public function getCustomFieldDate()
    {
        return $this->customFieldDate;
    }

    /**
     * Sets a new customFieldDate
     *
     * @param \DateTime $customFieldDate
     * @return self
     */
    public function setCustomFieldDate(\DateTime $customFieldDate = null)
    {
        $this->customFieldDate = $customFieldDate;
        return $this;
    }

    /**
     * Gets as shippingUserAddressID
     *
     * @return int
     */
    public function getShippingUserAddressID()
    {
        return $this->shippingUserAddressID;
    }

    /**
     * Sets a new shippingUserAddressID
     *
     * @param int $shippingUserAddressID
     * @return self
     */
    public function setShippingUserAddressID($shippingUserAddressID)
    {
        $this->shippingUserAddressID = $shippingUserAddressID;
        return $this;
    }

    /**
     * Gets as shippingUserAddressLabel
     *
     * @return string
     */
    public function getShippingUserAddressLabel()
    {
        return $this->shippingUserAddressLabel;
    }

    /**
     * Sets a new shippingUserAddressLabel
     *
     * @param string $shippingUserAddressLabel
     * @return self
     */
    public function setShippingUserAddressLabel($shippingUserAddressLabel)
    {
        $this->shippingUserAddressLabel = $shippingUserAddressLabel;
        return $this;
    }

    /**
     * Gets as paymentFeesTaxInc
     *
     * @return float
     */
    public function getPaymentFeesTaxInc()
    {
        return $this->paymentFeesTaxInc;
    }

    /**
     * Sets a new paymentFeesTaxInc
     *
     * @param float $paymentFeesTaxInc
     * @return self
     */
    public function setPaymentFeesTaxInc($paymentFeesTaxInc)
    {
        $this->paymentFeesTaxInc = $paymentFeesTaxInc;
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
     * Gets as cashOnDelivery
     *
     * @return bool
     */
    public function getCashOnDelivery()
    {
        return $this->cashOnDelivery;
    }

    /**
     * Sets a new cashOnDelivery
     *
     * @param bool $cashOnDelivery
     * @return self
     */
    public function setCashOnDelivery($cashOnDelivery)
    {
        $this->cashOnDelivery = $cashOnDelivery;
        return $this;
    }

    /**
     * Adds as item
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderTaxDetailEntityType $item
     */
    public function addToOrderTaxDetails(OrderTaxDetailEntityType $item)
    {
        $this->orderTaxDetails[] = $item;
        return $this;
    }

    /**
     * isset orderTaxDetails
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOrderTaxDetails($index)
    {
        return isset($this->orderTaxDetails[$index]);
    }

    /**
     * unset orderTaxDetails
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOrderTaxDetails($index)
    {
        unset($this->orderTaxDetails[$index]);
    }

    /**
     * Gets as orderTaxDetails
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\OrderTaxDetailEntityType[]
     */
    public function getOrderTaxDetails()
    {
        return $this->orderTaxDetails;
    }

    /**
     * Sets a new orderTaxDetails
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\OrderTaxDetailEntityType[] $orderTaxDetails
     * @return self
     */
    public function setOrderTaxDetails(array $orderTaxDetails)
    {
        $this->orderTaxDetails = $orderTaxDetails;
        return $this;
    }


}

