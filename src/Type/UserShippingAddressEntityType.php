<?php

namespace Heavymind\Oxatis\ApiClient\Type;

/**
 * Class representing UserShippingAddressEntityType
 *
 *
 * XSD Type: UserShippingAddressEntity
 */
class UserShippingAddressEntityType extends UserIdEntityType
{

    /**
     * @var string $addressLabel
     */
    private $addressLabel = null;

    /**
     * @var string $title
     */
    private $title = null;

    /**
     * @var string $firstName
     */
    private $firstName = null;

    /**
     * @var string $lastName
     */
    private $lastName = null;

    /**
     * @var string $company
     */
    private $company = null;

    /**
     * @var string $address
     */
    private $address = null;

    /**
     * @var string $addressL1
     */
    private $addressL1 = null;

    /**
     * @var string $addressL2
     */
    private $addressL2 = null;

    /**
     * @var string $addressL3
     */
    private $addressL3 = null;

    /**
     * @var string $addressL4
     */
    private $addressL4 = null;

    /**
     * @var string $addressFloor
     */
    private $addressFloor = null;

    /**
     * @var string $addressBuilding
     */
    private $addressBuilding = null;

    /**
     * @var string $addressStreet
     */
    private $addressStreet = null;

    /**
     * @var string $addressOtherInfo
     */
    private $addressOtherInfo = null;

    /**
     * @var string $zipCode
     */
    private $zipCode = null;

    /**
     * @var string $city
     */
    private $city = null;

    /**
     * @var string $state
     */
    private $state = null;

    /**
     * @var string $countryISOCode
     */
    private $countryISOCode = null;

    /**
     * @var string $countryName
     */
    private $countryName = null;

    /**
     * @var string $phone
     */
    private $phone = null;

    /**
     * @var bool $defaultAddress
     */
    private $defaultAddress = null;

    /**
     * @var \DateTime $lastUpdateDate
     */
    private $lastUpdateDate = null;

    /**
     * @var int $addressID
     */
    private $addressID = null;

    /**
     * @var string $stateName
     */
    private $stateName = null;

    /**
     * Gets as addressLabel
     *
     * @return string
     */
    public function getAddressLabel()
    {
        return $this->addressLabel;
    }

    /**
     * Sets a new addressLabel
     *
     * @param string $addressLabel
     * @return self
     */
    public function setAddressLabel($addressLabel)
    {
        $this->addressLabel = $addressLabel;
        return $this;
    }

    /**
     * Gets as title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * @param string $title
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * Gets as address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param string $address
     * @return self
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    /**
     * Gets as addressL1
     *
     * @return string
     */
    public function getAddressL1()
    {
        return $this->addressL1;
    }

    /**
     * Sets a new addressL1
     *
     * @param string $addressL1
     * @return self
     */
    public function setAddressL1($addressL1)
    {
        $this->addressL1 = $addressL1;
        return $this;
    }

    /**
     * Gets as addressL2
     *
     * @return string
     */
    public function getAddressL2()
    {
        return $this->addressL2;
    }

    /**
     * Sets a new addressL2
     *
     * @param string $addressL2
     * @return self
     */
    public function setAddressL2($addressL2)
    {
        $this->addressL2 = $addressL2;
        return $this;
    }

    /**
     * Gets as addressL3
     *
     * @return string
     */
    public function getAddressL3()
    {
        return $this->addressL3;
    }

    /**
     * Sets a new addressL3
     *
     * @param string $addressL3
     * @return self
     */
    public function setAddressL3($addressL3)
    {
        $this->addressL3 = $addressL3;
        return $this;
    }

    /**
     * Gets as addressL4
     *
     * @return string
     */
    public function getAddressL4()
    {
        return $this->addressL4;
    }

    /**
     * Sets a new addressL4
     *
     * @param string $addressL4
     * @return self
     */
    public function setAddressL4($addressL4)
    {
        $this->addressL4 = $addressL4;
        return $this;
    }

    /**
     * Gets as addressFloor
     *
     * @return string
     */
    public function getAddressFloor()
    {
        return $this->addressFloor;
    }

    /**
     * Sets a new addressFloor
     *
     * @param string $addressFloor
     * @return self
     */
    public function setAddressFloor($addressFloor)
    {
        $this->addressFloor = $addressFloor;
        return $this;
    }

    /**
     * Gets as addressBuilding
     *
     * @return string
     */
    public function getAddressBuilding()
    {
        return $this->addressBuilding;
    }

    /**
     * Sets a new addressBuilding
     *
     * @param string $addressBuilding
     * @return self
     */
    public function setAddressBuilding($addressBuilding)
    {
        $this->addressBuilding = $addressBuilding;
        return $this;
    }

    /**
     * Gets as addressStreet
     *
     * @return string
     */
    public function getAddressStreet()
    {
        return $this->addressStreet;
    }

    /**
     * Sets a new addressStreet
     *
     * @param string $addressStreet
     * @return self
     */
    public function setAddressStreet($addressStreet)
    {
        $this->addressStreet = $addressStreet;
        return $this;
    }

    /**
     * Gets as addressOtherInfo
     *
     * @return string
     */
    public function getAddressOtherInfo()
    {
        return $this->addressOtherInfo;
    }

    /**
     * Sets a new addressOtherInfo
     *
     * @param string $addressOtherInfo
     * @return self
     */
    public function setAddressOtherInfo($addressOtherInfo)
    {
        $this->addressOtherInfo = $addressOtherInfo;
        return $this;
    }

    /**
     * Gets as zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Sets a new zipCode
     *
     * @param string $zipCode
     * @return self
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * Gets as city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets a new city
     *
     * @param string $city
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * Gets as state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Sets a new state
     *
     * @param string $state
     * @return self
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Gets as countryISOCode
     *
     * @return string
     */
    public function getCountryISOCode()
    {
        return $this->countryISOCode;
    }

    /**
     * Sets a new countryISOCode
     *
     * @param string $countryISOCode
     * @return self
     */
    public function setCountryISOCode($countryISOCode)
    {
        $this->countryISOCode = $countryISOCode;
        return $this;
    }

    /**
     * Gets as countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * @param string $countryName
     * @return self
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }

    /**
     * Gets as phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets a new phone
     *
     * @param string $phone
     * @return self
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * Gets as defaultAddress
     *
     * @return bool
     */
    public function getDefaultAddress()
    {
        return $this->defaultAddress;
    }

    /**
     * Sets a new defaultAddress
     *
     * @param bool $defaultAddress
     * @return self
     */
    public function setDefaultAddress($defaultAddress)
    {
        $this->defaultAddress = $defaultAddress;
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
     * Gets as addressID
     *
     * @return int
     */
    public function getAddressID()
    {
        return $this->addressID;
    }

    /**
     * Sets a new addressID
     *
     * @param int $addressID
     * @return self
     */
    public function setAddressID($addressID)
    {
        $this->addressID = $addressID;
        return $this;
    }

    /**
     * Gets as stateName
     *
     * @return string
     */
    public function getStateName()
    {
        return $this->stateName;
    }

    /**
     * Sets a new stateName
     *
     * @param string $stateName
     * @return self
     */
    public function setStateName($stateName)
    {
        $this->stateName = $stateName;
        return $this;
    }


}

