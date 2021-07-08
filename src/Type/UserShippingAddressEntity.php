<?php

namespace Heavymind\Oxatis\ApiClient\Type;

class UserShippingAddressEntity extends UserIdEntity
{

    /**
     * @var string
     */
    protected $AddressLabel;

    /**
     * @var string
     */
    protected $Title;

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
    protected $Address;

    /**
     * @var string
     */
    protected $AddressL1;

    /**
     * @var string
     */
    protected $AddressL2;

    /**
     * @var string
     */
    protected $AddressL3;

    /**
     * @var string
     */
    protected $AddressL4;

    /**
     * @var string
     */
    protected $AddressFloor;

    /**
     * @var string
     */
    protected $AddressBuilding;

    /**
     * @var string
     */
    protected $AddressStreet;

    /**
     * @var string
     */
    protected $AddressOtherInfo;

    /**
     * @var string
     */
    protected $ZipCode;

    /**
     * @var string
     */
    protected $City;

    /**
     * @var string
     */
    protected $State;

    /**
     * @var string
     */
    protected $CountryISOCode;

    /**
     * @var string
     */
    protected $CountryName;

    /**
     * @var string
     */
    protected $Phone;

    /**
     * @var bool
     */
    protected $DefaultAddress;

    /**
     * @var \DateTimeInterface
     */
    protected $LastUpdateDate;

    /**
     * @var int
     */
    protected $AddressID;

    /**
     * @var string
     */
    protected $StateName;

    /**
     * @return string
     */
    public function getAddressLabel()
    {
        return $this->AddressLabel;
    }

    /**
     * @param string $AddressLabel
     * @return UserShippingAddressEntity
     */
    public function withAddressLabel($AddressLabel)
    {
        $new = clone $this;
        $new->AddressLabel = $AddressLabel;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * @param string $Title
     * @return UserShippingAddressEntity
     */
    public function withTitle($Title)
    {
        $new = clone $this;
        $new->Title = $Title;

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
     * @return UserShippingAddressEntity
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
     * @return UserShippingAddressEntity
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
     * @return UserShippingAddressEntity
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
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     * @return UserShippingAddressEntity
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddressL1()
    {
        return $this->AddressL1;
    }

    /**
     * @param string $AddressL1
     * @return UserShippingAddressEntity
     */
    public function withAddressL1($AddressL1)
    {
        $new = clone $this;
        $new->AddressL1 = $AddressL1;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddressL2()
    {
        return $this->AddressL2;
    }

    /**
     * @param string $AddressL2
     * @return UserShippingAddressEntity
     */
    public function withAddressL2($AddressL2)
    {
        $new = clone $this;
        $new->AddressL2 = $AddressL2;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddressL3()
    {
        return $this->AddressL3;
    }

    /**
     * @param string $AddressL3
     * @return UserShippingAddressEntity
     */
    public function withAddressL3($AddressL3)
    {
        $new = clone $this;
        $new->AddressL3 = $AddressL3;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddressL4()
    {
        return $this->AddressL4;
    }

    /**
     * @param string $AddressL4
     * @return UserShippingAddressEntity
     */
    public function withAddressL4($AddressL4)
    {
        $new = clone $this;
        $new->AddressL4 = $AddressL4;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddressFloor()
    {
        return $this->AddressFloor;
    }

    /**
     * @param string $AddressFloor
     * @return UserShippingAddressEntity
     */
    public function withAddressFloor($AddressFloor)
    {
        $new = clone $this;
        $new->AddressFloor = $AddressFloor;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddressBuilding()
    {
        return $this->AddressBuilding;
    }

    /**
     * @param string $AddressBuilding
     * @return UserShippingAddressEntity
     */
    public function withAddressBuilding($AddressBuilding)
    {
        $new = clone $this;
        $new->AddressBuilding = $AddressBuilding;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddressStreet()
    {
        return $this->AddressStreet;
    }

    /**
     * @param string $AddressStreet
     * @return UserShippingAddressEntity
     */
    public function withAddressStreet($AddressStreet)
    {
        $new = clone $this;
        $new->AddressStreet = $AddressStreet;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddressOtherInfo()
    {
        return $this->AddressOtherInfo;
    }

    /**
     * @param string $AddressOtherInfo
     * @return UserShippingAddressEntity
     */
    public function withAddressOtherInfo($AddressOtherInfo)
    {
        $new = clone $this;
        $new->AddressOtherInfo = $AddressOtherInfo;

        return $new;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     * @return UserShippingAddressEntity
     */
    public function withZipCode($ZipCode)
    {
        $new = clone $this;
        $new->ZipCode = $ZipCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return UserShippingAddressEntity
     */
    public function withCity($City)
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * @param string $State
     * @return UserShippingAddressEntity
     */
    public function withState($State)
    {
        $new = clone $this;
        $new->State = $State;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountryISOCode()
    {
        return $this->CountryISOCode;
    }

    /**
     * @param string $CountryISOCode
     * @return UserShippingAddressEntity
     */
    public function withCountryISOCode($CountryISOCode)
    {
        $new = clone $this;
        $new->CountryISOCode = $CountryISOCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountryName()
    {
        return $this->CountryName;
    }

    /**
     * @param string $CountryName
     * @return UserShippingAddressEntity
     */
    public function withCountryName($CountryName)
    {
        $new = clone $this;
        $new->CountryName = $CountryName;

        return $new;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return UserShippingAddressEntity
     */
    public function withPhone($Phone)
    {
        $new = clone $this;
        $new->Phone = $Phone;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDefaultAddress()
    {
        return $this->DefaultAddress;
    }

    /**
     * @param bool $DefaultAddress
     * @return UserShippingAddressEntity
     */
    public function withDefaultAddress($DefaultAddress)
    {
        $new = clone $this;
        $new->DefaultAddress = $DefaultAddress;

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
     * @return UserShippingAddressEntity
     */
    public function withLastUpdateDate($LastUpdateDate)
    {
        $new = clone $this;
        $new->LastUpdateDate = $LastUpdateDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getAddressID()
    {
        return $this->AddressID;
    }

    /**
     * @param int $AddressID
     * @return UserShippingAddressEntity
     */
    public function withAddressID($AddressID)
    {
        $new = clone $this;
        $new->AddressID = $AddressID;

        return $new;
    }

    /**
     * @return string
     */
    public function getStateName()
    {
        return $this->StateName;
    }

    /**
     * @param string $StateName
     * @return UserShippingAddressEntity
     */
    public function withStateName($StateName)
    {
        $new = clone $this;
        $new->StateName = $StateName;

        return $new;
    }


}

