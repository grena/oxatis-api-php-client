<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class UserEntity extends \Heavymind\Oxatis\ApiClient\Type\UserIdEntity
{

    /**
     * @var string
     */
    protected $BillingTitle;

    /**
     * @var string
     */
    protected $FirstName;

    /**
     * @var string
     */
    protected $LastName;

    /**
     * @var string
     */
    protected $Company;

    /**
     * @var string
     */
    protected $VATNumber;

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
    protected $ShippingCompany;

    /**
     * @var string
     */
    protected $ShippingPhone;

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
    protected $SalesRepCode;

    /**
     * @var bool
     */
    protected $SubscribeToNewletters;

    /**
     * @var bool
     */
    protected $CustomerAccount;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category1;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category2;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category3;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    protected $Category4;

    /**
     * @var string
     */
    protected $UserLanguage;

    /**
     * @var int
     */
    protected $PriceIndex;

    /**
     * @var float
     */
    protected $Discount;

    /**
     * @var string
     */
    protected $DiscountGridCode;

    /**
     * @var \DateTimeInterface
     */
    protected $LastUpdateDate;

    /**
     * @var string
     */
    protected $FiscalCode;

    /**
     * @var \DateTimeInterface
     */
    protected $BirthDate;

    /**
     * @var string
     */
    protected $Comments;

    /**
     * @var int
     */
    protected $RewardPoints;

    /**
     * @var bool
     */
    protected $SubscribeToSMSCampaign;

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
     * @var string
     */
    protected $CustomFieldTextInternal;

    /**
     * @var float
     */
    protected $DiscountCartItems;

    /**
     * @var string
     */
    protected $CustomerFamily;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxClassEntity
     */
    protected $TaxClass;

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
    protected $Source;

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
    protected $CustomerCode;

    /**
     * @var string
     */
    protected $CustomField1;

    /**
     * @var string
     */
    protected $CustomField2;

    /**
     * @var string
     */
    protected $CustomField3;

    /**
     * @var string
     */
    protected $CustomField4;

    /**
     * @var string
     */
    protected $CustomField5;

    /**
     * @var string
     */
    protected $CustomField6;

    /**
     * @var string
     */
    protected $CustomField7;

    /**
     * @var string
     */
    protected $CustomField8;

    /**
     * @var string
     */
    protected $CustomField9;

    /**
     * @var string
     */
    protected $CustomField10;

    /**
     * @var string
     */
    protected $Password;

    /**
     * @var \DateTimeInterface
     */
    protected $CreationDate;

    /**
     * @var string
     */
    protected $BillingAddressBuilding;

    /**
     * @var string
     */
    protected $BillingAddressFloor;

    /**
     * @var string
     */
    protected $ShippingAddressBuilding;

    /**
     * @var string
     */
    protected $ShippingAddressFloor;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\ArrayOfCatalogAccessValueEntity
     */
    protected $CatalogAccessValues;

    /**
     * @return string
     */
    public function getBillingTitle()
    {
        return $this->BillingTitle;
    }

    /**
     * @param string $BillingTitle
     * @return UserEntity
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
    public function getFirstName()
    {
        return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return UserEntity
     */
    public function withFirstName($FirstName)
    {
        $new = clone $this;
        $new->FirstName = $FirstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return UserEntity
     */
    public function withLastName($LastName)
    {
        $new = clone $this;
        $new->LastName = $LastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param string $Company
     * @return UserEntity
     */
    public function withCompany($Company)
    {
        $new = clone $this;
        $new->Company = $Company;

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
     * @return UserEntity
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
    public function getBillingAddressStreet()
    {
        return $this->BillingAddressStreet;
    }

    /**
     * @param string $BillingAddressStreet
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
    public function getShippingTitle()
    {
        return $this->ShippingTitle;
    }

    /**
     * @param string $ShippingTitle
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
    public function getShippingCompany()
    {
        return $this->ShippingCompany;
    }

    /**
     * @param string $ShippingCompany
     * @return UserEntity
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
    public function getShippingPhone()
    {
        return $this->ShippingPhone;
    }

    /**
     * @param string $ShippingPhone
     * @return UserEntity
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
    public function getShippingAddressStreet()
    {
        return $this->ShippingAddressStreet;
    }

    /**
     * @param string $ShippingAddressStreet
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
    public function getSalesRepCode()
    {
        return $this->SalesRepCode;
    }

    /**
     * @param string $SalesRepCode
     * @return UserEntity
     */
    public function withSalesRepCode($SalesRepCode)
    {
        $new = clone $this;
        $new->SalesRepCode = $SalesRepCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSubscribeToNewletters()
    {
        return $this->SubscribeToNewletters;
    }

    /**
     * @param bool $SubscribeToNewletters
     * @return UserEntity
     */
    public function withSubscribeToNewletters($SubscribeToNewletters)
    {
        $new = clone $this;
        $new->SubscribeToNewletters = $SubscribeToNewletters;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCustomerAccount()
    {
        return $this->CustomerAccount;
    }

    /**
     * @param bool $CustomerAccount
     * @return UserEntity
     */
    public function withCustomerAccount($CustomerAccount)
    {
        $new = clone $this;
        $new->CustomerAccount = $CustomerAccount;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory1()
    {
        return $this->Category1;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category1
     * @return UserEntity
     */
    public function withCategory1($Category1)
    {
        $new = clone $this;
        $new->Category1 = $Category1;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory2()
    {
        return $this->Category2;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category2
     * @return UserEntity
     */
    public function withCategory2($Category2)
    {
        $new = clone $this;
        $new->Category2 = $Category2;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory3()
    {
        return $this->Category3;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category3
     * @return UserEntity
     */
    public function withCategory3($Category3)
    {
        $new = clone $this;
        $new->Category3 = $Category3;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntity
     */
    public function getCategory4()
    {
        return $this->Category4;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntity $Category4
     * @return UserEntity
     */
    public function withCategory4($Category4)
    {
        $new = clone $this;
        $new->Category4 = $Category4;

        return $new;
    }

    /**
     * @return string
     */
    public function getUserLanguage()
    {
        return $this->UserLanguage;
    }

    /**
     * @param string $UserLanguage
     * @return UserEntity
     */
    public function withUserLanguage($UserLanguage)
    {
        $new = clone $this;
        $new->UserLanguage = $UserLanguage;

        return $new;
    }

    /**
     * @return int
     */
    public function getPriceIndex()
    {
        return $this->PriceIndex;
    }

    /**
     * @param int $PriceIndex
     * @return UserEntity
     */
    public function withPriceIndex($PriceIndex)
    {
        $new = clone $this;
        $new->PriceIndex = $PriceIndex;

        return $new;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->Discount;
    }

    /**
     * @param float $Discount
     * @return UserEntity
     */
    public function withDiscount($Discount)
    {
        $new = clone $this;
        $new->Discount = $Discount;

        return $new;
    }

    /**
     * @return string
     */
    public function getDiscountGridCode()
    {
        return $this->DiscountGridCode;
    }

    /**
     * @param string $DiscountGridCode
     * @return UserEntity
     */
    public function withDiscountGridCode($DiscountGridCode)
    {
        $new = clone $this;
        $new->DiscountGridCode = $DiscountGridCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastUpdateDate()
    {
        return $this->LastUpdateDate;
    }

    /**
     * @param \DateTimeInterface $LastUpdateDate
     * @return UserEntity
     */
    public function withLastUpdateDate($LastUpdateDate)
    {
        $new = clone $this;
        $new->LastUpdateDate = $LastUpdateDate;

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
     * @return UserEntity
     */
    public function withFiscalCode($FiscalCode)
    {
        $new = clone $this;
        $new->FiscalCode = $FiscalCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
    }

    /**
     * @param \DateTimeInterface $BirthDate
     * @return UserEntity
     */
    public function withBirthDate($BirthDate)
    {
        $new = clone $this;
        $new->BirthDate = $BirthDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param string $Comments
     * @return UserEntity
     */
    public function withComments($Comments)
    {
        $new = clone $this;
        $new->Comments = $Comments;

        return $new;
    }

    /**
     * @return int
     */
    public function getRewardPoints()
    {
        return $this->RewardPoints;
    }

    /**
     * @param int $RewardPoints
     * @return UserEntity
     */
    public function withRewardPoints($RewardPoints)
    {
        $new = clone $this;
        $new->RewardPoints = $RewardPoints;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSubscribeToSMSCampaign()
    {
        return $this->SubscribeToSMSCampaign;
    }

    /**
     * @param bool $SubscribeToSMSCampaign
     * @return UserEntity
     */
    public function withSubscribeToSMSCampaign($SubscribeToSMSCampaign)
    {
        $new = clone $this;
        $new->SubscribeToSMSCampaign = $SubscribeToSMSCampaign;

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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
     */
    public function withCustomFieldDate($CustomFieldDate)
    {
        $new = clone $this;
        $new->CustomFieldDate = $CustomFieldDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomFieldTextInternal()
    {
        return $this->CustomFieldTextInternal;
    }

    /**
     * @param string $CustomFieldTextInternal
     * @return UserEntity
     */
    public function withCustomFieldTextInternal($CustomFieldTextInternal)
    {
        $new = clone $this;
        $new->CustomFieldTextInternal = $CustomFieldTextInternal;

        return $new;
    }

    /**
     * @return float
     */
    public function getDiscountCartItems()
    {
        return $this->DiscountCartItems;
    }

    /**
     * @param float $DiscountCartItems
     * @return UserEntity
     */
    public function withDiscountCartItems($DiscountCartItems)
    {
        $new = clone $this;
        $new->DiscountCartItems = $DiscountCartItems;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomerFamily()
    {
        return $this->CustomerFamily;
    }

    /**
     * @param string $CustomerFamily
     * @return UserEntity
     */
    public function withCustomerFamily($CustomerFamily)
    {
        $new = clone $this;
        $new->CustomerFamily = $CustomerFamily;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxClassEntity
     */
    public function getTaxClass()
    {
        return $this->TaxClass;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassEntity $TaxClass
     * @return UserEntity
     */
    public function withTaxClass($TaxClass)
    {
        $new = clone $this;
        $new->TaxClass = $TaxClass;

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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
    public function getSource()
    {
        return $this->Source;
    }

    /**
     * @param string $Source
     * @return UserEntity
     */
    public function withSource($Source)
    {
        $new = clone $this;
        $new->Source = $Source;

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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
    public function getShippingAddress()
    {
        return $this->ShippingAddress;
    }

    /**
     * @param string $ShippingAddress
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
     * @return UserEntity
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
    public function getCustomerCode()
    {
        return $this->CustomerCode;
    }

    /**
     * @param string $CustomerCode
     * @return UserEntity
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
    public function getCustomField1()
    {
        return $this->CustomField1;
    }

    /**
     * @param string $CustomField1
     * @return UserEntity
     */
    public function withCustomField1($CustomField1)
    {
        $new = clone $this;
        $new->CustomField1 = $CustomField1;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomField2()
    {
        return $this->CustomField2;
    }

    /**
     * @param string $CustomField2
     * @return UserEntity
     */
    public function withCustomField2($CustomField2)
    {
        $new = clone $this;
        $new->CustomField2 = $CustomField2;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomField3()
    {
        return $this->CustomField3;
    }

    /**
     * @param string $CustomField3
     * @return UserEntity
     */
    public function withCustomField3($CustomField3)
    {
        $new = clone $this;
        $new->CustomField3 = $CustomField3;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomField4()
    {
        return $this->CustomField4;
    }

    /**
     * @param string $CustomField4
     * @return UserEntity
     */
    public function withCustomField4($CustomField4)
    {
        $new = clone $this;
        $new->CustomField4 = $CustomField4;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomField5()
    {
        return $this->CustomField5;
    }

    /**
     * @param string $CustomField5
     * @return UserEntity
     */
    public function withCustomField5($CustomField5)
    {
        $new = clone $this;
        $new->CustomField5 = $CustomField5;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomField6()
    {
        return $this->CustomField6;
    }

    /**
     * @param string $CustomField6
     * @return UserEntity
     */
    public function withCustomField6($CustomField6)
    {
        $new = clone $this;
        $new->CustomField6 = $CustomField6;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomField7()
    {
        return $this->CustomField7;
    }

    /**
     * @param string $CustomField7
     * @return UserEntity
     */
    public function withCustomField7($CustomField7)
    {
        $new = clone $this;
        $new->CustomField7 = $CustomField7;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomField8()
    {
        return $this->CustomField8;
    }

    /**
     * @param string $CustomField8
     * @return UserEntity
     */
    public function withCustomField8($CustomField8)
    {
        $new = clone $this;
        $new->CustomField8 = $CustomField8;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomField9()
    {
        return $this->CustomField9;
    }

    /**
     * @param string $CustomField9
     * @return UserEntity
     */
    public function withCustomField9($CustomField9)
    {
        $new = clone $this;
        $new->CustomField9 = $CustomField9;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomField10()
    {
        return $this->CustomField10;
    }

    /**
     * @param string $CustomField10
     * @return UserEntity
     */
    public function withCustomField10($CustomField10)
    {
        $new = clone $this;
        $new->CustomField10 = $CustomField10;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * @param string $Password
     * @return UserEntity
     */
    public function withPassword($Password)
    {
        $new = clone $this;
        $new->Password = $Password;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreationDate()
    {
        return $this->CreationDate;
    }

    /**
     * @param \DateTimeInterface $CreationDate
     * @return UserEntity
     */
    public function withCreationDate($CreationDate)
    {
        $new = clone $this;
        $new->CreationDate = $CreationDate;

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
     * @return UserEntity
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
    public function getBillingAddressFloor()
    {
        return $this->BillingAddressFloor;
    }

    /**
     * @param string $BillingAddressFloor
     * @return UserEntity
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
    public function getShippingAddressBuilding()
    {
        return $this->ShippingAddressBuilding;
    }

    /**
     * @param string $ShippingAddressBuilding
     * @return UserEntity
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
    public function getShippingAddressFloor()
    {
        return $this->ShippingAddressFloor;
    }

    /**
     * @param string $ShippingAddressFloor
     * @return UserEntity
     */
    public function withShippingAddressFloor($ShippingAddressFloor)
    {
        $new = clone $this;
        $new->ShippingAddressFloor = $ShippingAddressFloor;

        return $new;
    }

    /**
     * @return \Heavymind\Oxatis\ApiClient\Type\ArrayOfCatalogAccessValueEntity
     */
    public function getCatalogAccessValues()
    {
        return $this->CatalogAccessValues;
    }

    /**
     * @param \Heavymind\Oxatis\ApiClient\Type\ArrayOfCatalogAccessValueEntity $CatalogAccessValues
     * @return UserEntity
     */
    public function withCatalogAccessValues($CatalogAccessValues)
    {
        $new = clone $this;
        $new->CatalogAccessValues = $CatalogAccessValues;

        return $new;
    }


}

