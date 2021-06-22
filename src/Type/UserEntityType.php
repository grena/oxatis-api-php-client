<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing UserEntityType
 *
 *
 * XSD Type: UserEntity
 */
class UserEntityType extends UserIdEntityType
{

    /**
     * @var string $billingTitle
     */
    private $billingTitle = null;

    /**
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * @var string $password
     */
    private $password = null;

    /**
     * @var string $company
     */
    private $company = null;

    /**
     * @var string $vATNumber
     */
    private $vATNumber = null;

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
     * @var string $shippingCompany
     */
    private $shippingCompany = null;

    /**
     * @var string $shippingPhone
     */
    private $shippingPhone = null;

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
     * @var string $salesRepCode
     */
    private $salesRepCode = null;

    /**
     * @var bool $subscribeToNewletters
     */
    private $subscribeToNewletters = null;

    /**
     * @var bool $customerAccount
     */
    private $customerAccount = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category1
     */
    private $category1 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category2
     */
    private $category2 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category3
     */
    private $category3 = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category4
     */
    private $category4 = null;

    /**
     * @var string $userLanguage
     */
    private $userLanguage = null;

    /**
     * @var int $priceIndex
     */
    private $priceIndex = null;

    /**
     * @var float $discount
     */
    private $discount = null;

    /**
     * @var string $discountGridCode
     */
    private $discountGridCode = null;

    /**
     * @var \DateTime $lastUpdateDate
     */
    private $lastUpdateDate = null;

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
     * @var string $fiscalCode
     */
    private $fiscalCode = null;

    /**
     * @var \DateTime $birthDate
     */
    private $birthDate = null;

    /**
     * @var string $comments
     */
    private $comments = null;

    /**
     * @var int $rewardPoints
     */
    private $rewardPoints = null;

    /**
     * @var bool $subscribeToSMSCampaign
     */
    private $subscribeToSMSCampaign = null;

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
     * @var string $customFieldTextInternal
     */
    private $customFieldTextInternal = null;

    /**
     * @var float $discountCartItems
     */
    private $discountCartItems = null;

    /**
     * @var string $customerFamily
     */
    private $customerFamily = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType $taxClass
     */
    private $taxClass = null;

    /**
     * @var \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntityType[] $catalogAccessValues
     */
    private $catalogAccessValues = null;

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
     * Gets as firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Sets a new firstName
     *
     * @param string $firstName
     * @return self
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * Gets as lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Sets a new lastName
     *
     * @param string $lastName
     * @return self
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * Gets as password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets a new password
     *
     * @param string $password
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Gets as company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Sets a new company
     *
     * @param string $company
     * @return self
     */
    public function setCompany($company)
    {
        $this->company = $company;
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
     * Gets as subscribeToNewletters
     *
     * @return bool
     */
    public function getSubscribeToNewletters()
    {
        return $this->subscribeToNewletters;
    }

    /**
     * Sets a new subscribeToNewletters
     *
     * @param bool $subscribeToNewletters
     * @return self
     */
    public function setSubscribeToNewletters($subscribeToNewletters)
    {
        $this->subscribeToNewletters = $subscribeToNewletters;
        return $this;
    }

    /**
     * Gets as customerAccount
     *
     * @return bool
     */
    public function getCustomerAccount()
    {
        return $this->customerAccount;
    }

    /**
     * Sets a new customerAccount
     *
     * @param bool $customerAccount
     * @return self
     */
    public function setCustomerAccount($customerAccount)
    {
        $this->customerAccount = $customerAccount;
        return $this;
    }

    /**
     * Gets as category1
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType
     */
    public function getCategory1()
    {
        return $this->category1;
    }

    /**
     * Sets a new category1
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category1
     * @return self
     */
    public function setCategory1(CategoryEntityType $category1)
    {
        $this->category1 = $category1;
        return $this;
    }

    /**
     * Gets as category2
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType
     */
    public function getCategory2()
    {
        return $this->category2;
    }

    /**
     * Sets a new category2
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category2
     * @return self
     */
    public function setCategory2(CategoryEntityType $category2)
    {
        $this->category2 = $category2;
        return $this;
    }

    /**
     * Gets as category3
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType
     */
    public function getCategory3()
    {
        return $this->category3;
    }

    /**
     * Sets a new category3
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category3
     * @return self
     */
    public function setCategory3(CategoryEntityType $category3)
    {
        $this->category3 = $category3;
        return $this;
    }

    /**
     * Gets as category4
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType
     */
    public function getCategory4()
    {
        return $this->category4;
    }

    /**
     * Sets a new category4
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CategoryEntityType $category4
     * @return self
     */
    public function setCategory4(CategoryEntityType $category4)
    {
        $this->category4 = $category4;
        return $this;
    }

    /**
     * Gets as userLanguage
     *
     * @return string
     */
    public function getUserLanguage()
    {
        return $this->userLanguage;
    }

    /**
     * Sets a new userLanguage
     *
     * @param string $userLanguage
     * @return self
     */
    public function setUserLanguage($userLanguage)
    {
        $this->userLanguage = $userLanguage;
        return $this;
    }

    /**
     * Gets as priceIndex
     *
     * @return int
     */
    public function getPriceIndex()
    {
        return $this->priceIndex;
    }

    /**
     * Sets a new priceIndex
     *
     * @param int $priceIndex
     * @return self
     */
    public function setPriceIndex($priceIndex)
    {
        $this->priceIndex = $priceIndex;
        return $this;
    }

    /**
     * Gets as discount
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Sets a new discount
     *
     * @param float $discount
     * @return self
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
        return $this;
    }

    /**
     * Gets as discountGridCode
     *
     * @return string
     */
    public function getDiscountGridCode()
    {
        return $this->discountGridCode;
    }

    /**
     * Sets a new discountGridCode
     *
     * @param string $discountGridCode
     * @return self
     */
    public function setDiscountGridCode($discountGridCode)
    {
        $this->discountGridCode = $discountGridCode;
        return $this;
    }

    /**
     * Gets as lastUpdateDate
     *
     * @return \DateTime
     */
    public function getLastUpdateDate()
    {
        return $this->lastUpdateDate;
    }

    /**
     * Sets a new lastUpdateDate
     *
     * @param \DateTime $lastUpdateDate
     * @return self
     */
    public function setLastUpdateDate(\DateTime $lastUpdateDate = null)
    {
        $this->lastUpdateDate = $lastUpdateDate;
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
     * Gets as birthDate
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Sets a new birthDate
     *
     * @param \DateTime $birthDate
     * @return self
     */
    public function setBirthDate(\DateTime $birthDate = null)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * Gets as comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * @param string $comments
     * @return self
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Gets as rewardPoints
     *
     * @return int
     */
    public function getRewardPoints()
    {
        return $this->rewardPoints;
    }

    /**
     * Sets a new rewardPoints
     *
     * @param int $rewardPoints
     * @return self
     */
    public function setRewardPoints($rewardPoints)
    {
        $this->rewardPoints = $rewardPoints;
        return $this;
    }

    /**
     * Gets as subscribeToSMSCampaign
     *
     * @return bool
     */
    public function getSubscribeToSMSCampaign()
    {
        return $this->subscribeToSMSCampaign;
    }

    /**
     * Sets a new subscribeToSMSCampaign
     *
     * @param bool $subscribeToSMSCampaign
     * @return self
     */
    public function setSubscribeToSMSCampaign($subscribeToSMSCampaign)
    {
        $this->subscribeToSMSCampaign = $subscribeToSMSCampaign;
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
     * Gets as customFieldTextInternal
     *
     * @return string
     */
    public function getCustomFieldTextInternal()
    {
        return $this->customFieldTextInternal;
    }

    /**
     * Sets a new customFieldTextInternal
     *
     * @param string $customFieldTextInternal
     * @return self
     */
    public function setCustomFieldTextInternal($customFieldTextInternal)
    {
        $this->customFieldTextInternal = $customFieldTextInternal;
        return $this;
    }

    /**
     * Gets as discountCartItems
     *
     * @return float
     */
    public function getDiscountCartItems()
    {
        return $this->discountCartItems;
    }

    /**
     * Sets a new discountCartItems
     *
     * @param float $discountCartItems
     * @return self
     */
    public function setDiscountCartItems($discountCartItems)
    {
        $this->discountCartItems = $discountCartItems;
        return $this;
    }

    /**
     * Gets as customerFamily
     *
     * @return string
     */
    public function getCustomerFamily()
    {
        return $this->customerFamily;
    }

    /**
     * Sets a new customerFamily
     *
     * @param string $customerFamily
     * @return self
     */
    public function setCustomerFamily($customerFamily)
    {
        $this->customerFamily = $customerFamily;
        return $this;
    }

    /**
     * Gets as taxClass
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType
     */
    public function getTaxClass()
    {
        return $this->taxClass;
    }

    /**
     * Sets a new taxClass
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\TaxClassEntityType $taxClass
     * @return self
     */
    public function setTaxClass(TaxClassEntityType $taxClass)
    {
        $this->taxClass = $taxClass;
        return $this;
    }

    /**
     * Adds as catalogAccessValue
     *
     * @return self
     * @param \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntityType $catalogAccessValue
     */
    public function addToCatalogAccessValues(CatalogAccessValueEntityType $catalogAccessValue)
    {
        $this->catalogAccessValues[] = $catalogAccessValue;
        return $this;
    }

    /**
     * isset catalogAccessValues
     *
     * @param int|string $index
     * @return bool
     */
    public function issetCatalogAccessValues($index)
    {
        return isset($this->catalogAccessValues[$index]);
    }

    /**
     * unset catalogAccessValues
     *
     * @param int|string $index
     * @return void
     */
    public function unsetCatalogAccessValues($index)
    {
        unset($this->catalogAccessValues[$index]);
    }

    /**
     * Gets as catalogAccessValues
     *
     * @return \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntityType[]
     */
    public function getCatalogAccessValues()
    {
        return $this->catalogAccessValues;
    }

    /**
     * Sets a new catalogAccessValues
     *
     * @param \Heavymind\Oxatis\ApiClient\Type\CatalogAccessValueEntityType[] $catalogAccessValues
     * @return self
     */
    public function setCatalogAccessValues(array $catalogAccessValues)
    {
        $this->catalogAccessValues = $catalogAccessValues;
        return $this;
    }


}

